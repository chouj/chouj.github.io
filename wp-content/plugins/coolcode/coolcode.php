<?php
/*
Plugin Name: CoolCode
Plugin URI: http://www.coolcode.cn/?p=26
Description: Adds syntax highlighting and line number to your code, base on Text_Highlighter.
Version: 3.4
Author: andot
Author URI: http://www.coolcode.cn/
*/

//================================================================================
// Download the code
//================================================================================
if (isset($_GET['download']) && (substr($_SERVER['SCRIPT_NAME'], -12, 13) == 'coolcode.php')) {
    include_once "../../../wp-config.php";
    include_once "../../../wp-settings.php";
    $post = $_GET['p'];
    $download = $_GET['download'];
    $post = &get_post($post);
    $content = $post->post_content;
    $search = strtolower($content);
    $pos = 0;
    while (true) {
        $count = 0;
        $pos1 = strpos($search, "<coolcode", $pos);
        $pos2 = strpos($search, "[coolcode", $pos);
        if ($pos1 === false) {
            if ($pos2 === false) {
                exit();
            }
            else {
                $pos = $pos2;
                $bracket = array('[', ']');
            }
        }
        else {
            if ($pos2 === false) {
                $pos = $pos1;
                $bracket = array('<', '>');
            }
            else if ($pos1 < $pos2) {
                $pos = $pos1;
                $bracket = array('<', '>');
            }
            else {
                $pos = $pos2;
                $bracket = array('[', ']');
            }
        }
        $start = $pos++;
        $count = 1;
        while ($count > 0) {
            $pos1 = strpos($search, $bracket[0] . "coolcode", $pos);
            $pos2 = strpos($search, $bracket[0] . "/coolcode" . $bracket[1], $pos);
            if ($pos1 === false) {
                if ($pos2 === false) {
                    exit();
                }
                else {
                    $pos = $pos2;
                    $count--;
                }
            }
            else {
                if ($pos2 === false) {
                    $pos = $pos1;
                    $count++;
                }
                else if ($pos1 < $pos2) {
                    $pos = $pos1;
                    $count++;
                }
                else {
                    $pos = $pos2;
                    $count--;
                }
            }
            $pos++;
        }
        $end = $pos + 10;
        $code = substr($content, $start, $end - $start);
        if (preg_match('#^\<coolcode(.*?)download="' . $download . '"(.*?)\>(.*)\</coolcode\>$#si', $code, $match) ||
            preg_match('#^\[coolcode(.*?)download="' . $download . '"(.*?)\](.*)\[/coolcode\]$#si', $code, $match)) {
            header("Content-type: application/octet-stream");
            header("Content-Disposition: attachment; filename=\"$download\"");
            echo trim($match[3]);
            exit();
        }
    }
}

//================================================================================
// Get the PEAR path, and include the CoolCode
//================================================================================
$pear_dir = ABSPATH . 'wp-content/plugins/coolcode/PEAR';

if(is_dir($pear_dir))
    ini_set("include_path", ini_get("include_path") . PATH_SEPARATOR . $pear_dir);

require_once 'Text/Highlighter.php';

//================================================================================
// Create our custom highlighter, then add the filters
// We have sets - before and after, which are performed before and
// after all of the other filters. This is to bypass any filters
// that do crazy text replacements. It's easier this way, instead of
// trying to undo what the other filters did.
//================================================================================
$CoolCode = new CoolCode();

// Showing
add_filter('the_content', array(&$CoolCode, 'part_one'), -1000);
add_filter('the_content', array(&$CoolCode, 'part_two'),  1000);

add_filter('the_excerpt', array(&$CoolCode, 'part_one'), -1000);
add_filter('the_excerpt', array(&$CoolCode, 'part_two'),  1000);

add_filter('the_excerpt_rss', array(&$CoolCode, 'part_one'), -1000);
add_filter('the_excerpt_rss', array(&$CoolCode, 'part_two'),  1000);

add_filter('comment_text', array(&$CoolCode, 'part_one'), -1000);
add_filter('comment_text', array(&$CoolCode, 'part_two'),  1000);

add_filter('comment_excerpt', array(&$CoolCode, 'part_one'), -1000);
add_filter('comment_excerpt', array(&$CoolCode, 'part_two'),  1000);

add_action('wp_head', array(&$CoolCode, 'add_css'));
add_action('wp_head', array(&$CoolCode, 'add_js'));

unset($CoolCode);

class CoolCode
{
    // The languages the Text_Highlighter can accept
    var $acceptable_lang = array('php', 'cpp', 'css', 'diff', 'dtd', 'javascript', 'html',
                                 'mysql', 'perl', 'python', 'ruby', 'sql', 'xml', 'java', 'actionscript');

    var $hl_class = array('class="hl-default"', 'class="hl-code"', 'class="hl-brackets"',
                          'class="hl-comment"', 'class="hl-quotes"', 'class="hl-string"',
                          'class="hl-identifier"', 'class="hl-builtin"', 'class="hl-reserved"',
                          'class="hl-inlinedoc"', 'class="hl-var"', 'class="hl-url"',
                          'class="hl-special"', 'class="hl-number"', 'class="hl-inlinetags"');

    var $hl_style = array('style="color: Black;"', 'style="color: Gray;"', 'style="color: Olive;"',
                          'style="color: #ffa500;"', 'style="color: #8b0000;"', 'style="color: Red;"',
                          'style="color: Blue;"', 'style="color: Teal;"' ,'style="color: Green;"',
                          'style="color: Blue;"', 'style="color: #00008b;"', 'style="color: Blue;"',
                          'style="color: Navy;"', 'style="color: Maroon;"', 'style="color: Blue;"');

    // The blocks array that holds the block ID's and their real code blocks
    var $blocks = array();

    /****************************************************************************
     * add_css
     *    > Add the coolcode.css to the head
     ****************************************************************************/
    function add_css() {
        echo '<link rel="stylesheet" href="'
            . get_settings('home')
            . "/wp-content/plugins/coolcode/coolcode.css\" />\n";
    }
    
    /****************************************************************************
     * add_js
     *    > Add the coolcode.js to the footer
     ****************************************************************************/
    function add_js() {
        echo '<script type="text/javascript" src="'
            . get_settings('home')
            . "/wp-content/plugins/coolcode/coolcode.js\"></script>\n";
    }

    /****************************************************************************
     * part_one
     *    > Replace the code blocks with the block IDs
     ****************************************************************************/
    function part_one($content)
    {
        $search = strtolower($content);
        $pos = 0;
        while (true) {
            $count = 0;
            $pos1 = strpos($search, "<coolcode", $pos);
            $pos2 = strpos($search, "[coolcode", $pos);
            if ($pos1 === false) {
                if ($pos2 === false) {
                    return $content;
                }
                else {
                    $pos = $pos2;
                    $bracket = array('[', ']');
                }
            }
            else {
                if ($pos2 === false) {
                    $pos = $pos1;
                    $bracket = array('<', '>');
                }
                else if ($pos1 < $pos2) {
                    $pos = $pos1;
                    $bracket = array('<', '>');
                }
                else {
                    $pos = $pos2;
                    $bracket = array('[', ']');
                }
            }
            $start = $pos++;
            $count = 1;
            while ($count > 0) {
                $pos1 = strpos($search, $bracket[0] . "coolcode", $pos);
                $pos2 = strpos($search, $bracket[0] . "/coolcode" . $bracket[1], $pos);
                if ($pos1 === false) {
                    if ($pos2 === false) {
                        return $content;
                    }
                    else {
                        $pos = $pos2;
                        $count--;
                    }
                }
                else {
                    if ($pos2 === false) {
                        $pos = $pos1;
                        $count++;
                    }
                    else if ($pos1 < $pos2) {
                        $pos = $pos1;
                        $count++;
                    }
                    else {
                        $pos = $pos2;
                        $count--;
                    }
                }
                $pos++;
            }
            $end = $pos + 10;
            $code = substr($content, $start, $end - $start);
            $code = preg_replace('#^\<coolcode(.*?)\>(.*)\</coolcode\>$#sie', '$this->do_CoolCode($code, \'\\2\', \'\\1\');', $code);
            $code = preg_replace('#^\[coolcode(.*?)\](.*)\[/coolcode\]$#sie', '$this->do_CoolCode($code, \'\\2\', \'\\1\');', $code);
            $content = substr($content, 0, $start) . $code . substr($content, $end);
            $search = strtolower($content);
            $pos = $start + strlen($code);
        }
        return $content;
    }

    /****************************************************************************
     * part_two
     *    > Replace the block ID's from part one with the actual code blocks
     ****************************************************************************/
    function part_two($content)
    {
        if (count($this->blocks)) {
            $content = str_replace(array_keys($this->blocks), array_values($this->blocks), $content);
            $this->blocks = array();
        }

        return $content;
    }

    /****************************************************************************
     * do_CoolCode
     *    > Perform the code highlighting that is to be replaced with a block ID
     ****************************************************************************/
    function do_CoolCode($content, $txt, $options)
    {
        global $post;
        $options = str_replace(array("\\\"", "\\\'"), array("\"", "\'"), $options);
        if (preg_match('/lang="(\w*?)"/i', $options, $match)) {
            $lang = $match[1];
        }
        else {
            $lang = "";
        }
        if (preg_match('/linenum="(\w*?)"/i', $options, $match)) {
            $linenum = $match[1];
        }
        else {
            $linenum = "on";
        }
        if (preg_match('/download="(.*?)"/i', $options, $match)) {
            $download = $match[1];
        }
        else {
            $download = "";
        }
        $txt = str_replace("\\\"", "\"", $txt);
        $txt = trim($txt);
        $txt = str_replace("\r\n", "\n", $txt);
        $txt = str_replace("\r", "\n", $txt);
        $blockID = $this->getBlockID($content);
        if ($download == "") {
            $this->blocks[$blockID] = '';
        }
        else {
            $this->blocks[$blockID] = '<div class="hl-title">&#19979;&#36733;: <a href="'
                . get_settings('home')
                . '/wp-content/plugins/coolcode/coolcode.php?p=' . $post->ID
                . '&amp;download=' . htmlspecialchars($download)
                . '">' . htmlspecialchars($download) . '</a></div>';
        }

        $hackphp = false;

        if (strtolower($lang) == 'php') {
            if (strpos($txt, '<' . '?') === false) {
                $txt = '<' . "?php\n" . $txt . "\n?" . '>';
                $hackphp = true;
            }
        }

        if ((strtolower($linenum) == 'on') or (strtolower($linenum) == 'open')) {
            if(!in_array(strtolower($lang), $this->acceptable_lang)) {
                $this->blocks[$blockID] .= '<div class="hl-surround"><ol class="hl-main ln-show" '
                    . 'title="Double click to hide line number." '
                    . 'ondblclick = "linenumber(this)"><li class="hl-firstline">'
                    . str_replace("\n", "</li>\n<li>", htmlspecialchars($txt))
                    . '</li></ol></div>';
                $this->blocks[$blockID] = str_replace("<li></li>", "<li>&nbsp;</li>", $this->blocks[$blockID]);
                $this->blocks[$blockID] = str_replace('<li> ', '<li>&nbsp;', $this->blocks[$blockID]);
            }
            else
            {
                $options = array(
                    'numbers' => HL_NUMBERS_LI,
                );
                $hl =& Text_Highlighter::factory($lang, $options);
                $this->blocks[$blockID] .= '<div class="hl-surround">' . str_replace($this->hl_class, $this->hl_style, $hl->highlight($txt)) . '</div>';
                $this->blocks[$blockID] = preg_replace('/<span style=\"[^\"]*?\"><\/span>/', '', $this->blocks[$blockID]);
                $this->blocks[$blockID] = str_replace('<ol class="hl-main">',
                    '<ol class="hl-main ln-show" title="Double click to hide line number." ondblclick = "linenumber(this)">',
                    $this->blocks[$blockID]);
                $this->blocks[$blockID] = str_replace("\"> </span></li>", "\">&nbsp;</span></li>", $this->blocks[$blockID]);
                $this->blocks[$blockID] = preg_replace('/<li><span style=(.*?)> </si', '<li><span style=\\1>&nbsp;<', $this->blocks[$blockID]);

                if ($hackphp) {
                    $this->blocks[$blockID] = str_replace("<span style=\"color: Blue;\">&lt;?php</span></li>\n<li>", '', $this->blocks[$blockID]);
                    $this->blocks[$blockID] = str_replace('<li><span style="color: Blue;">?&gt;</span></li>', '', $this->blocks[$blockID]);
                }
            }
        }
        else {
            if(!in_array(strtolower($lang), $this->acceptable_lang)) {
                $this->blocks[$blockID] .= '<div class="hl-surround"><div class="hl-main">'
                    . str_replace("\n", "<br />", htmlspecialchars($txt))
                    . '</div></div>';
            }
            else
            {
                $hl =& Text_Highlighter::factory($lang);
                $this->blocks[$blockID] .= '<div class="hl-surround">' . str_replace("\n", "<br />", str_replace("</pre>", "", str_replace("<pre>", "", str_replace($this->hl_class, $this->hl_style, $hl->highlight($txt))))) . '</div>';
                
                if ($hackphp) {
                    $this->blocks[$blockID] = str_replace('<span style="color: Blue;">&lt;?php</span><span style="color: Gray;"><br /></span>', '', $this->blocks[$blockID]);
                    $this->blocks[$blockID] = str_replace('<br /></span><span style="color: Blue;">?&gt;</span>', '</span>', $this->blocks[$blockID]);
                }
            }
            $this->blocks[$blockID] = str_replace('<br /> ', '<br />&nbsp;', $this->blocks[$blockID]);
        }

        // correct the indent
        $this->blocks[$blockID] = str_replace("  ", '&nbsp; ', $this->blocks[$blockID]);
        $this->blocks[$blockID] = str_replace("  ", ' &nbsp;', $this->blocks[$blockID]);

        return $blockID;
    }

    /****************************************************************************
     * getBlockID
     *    > Generate a block ID that will be replaced at the end (after all that
     *      crazy WP text work!) with the right code
     ****************************************************************************/
    function getBlockID($content)
    {
        static $num = 0;

        // Just do a check to make sure the user
        // hasn't (however unlikely) input block replacements
        // as legit text
        do
        {
            ++$num;
            $blockID = "<p>++CoolCode_BLOCK_$num++</p>";
        }
        while(strpos($content, $blockID) !== false);

        return $blockID;
    }
}
?>