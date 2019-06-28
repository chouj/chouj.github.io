<?php

/*
Plugin Name: Dagon Design Sitemap Generator
Plugin URI: http://www.dagondesign.com/articles/sitemap-generator-plugin-for-wordpress/
Description: Generates a fully customizable sitemap
Author: Dagon Design
Version: 3.16
Author URI: http://www.dagondesign.com
*/

$ddsg_ver = '3.16';

/* 
 * Set up options if they do not exist
 */
add_option('ddsg_language', 'English');
add_option('ddsg_items_per_page', 50);
add_option('ddsg_sm_name', '');
add_option('ddsg_what_to_show', 'both');
add_option('ddsg_which_first', 'posts');
add_option('ddsg_post_sort_order', 'title'); 
add_option('ddsg_page_sort_order', 'title');
add_option('ddsg_comments_on_posts', FALSE);
add_option('ddsg_comments_on_pages', FALSE);
add_option('ddsg_show_zero_comments', FALSE);
add_option('ddsg_hide_future', FALSE); 
add_option('ddsg_new_window', FALSE); 
add_option('ddsg_show_post_date', FALSE); 
add_option('ddsg_show_page_date', FALSE); 
add_option('ddsg_date_format', 'F jS, Y'); 
add_option('ddsg_hide_protected', TRUE); 
add_option('ddsg_excluded_cats', ''); 
add_option('ddsg_excluded_pages', ''); 
add_option('ddsg_page_nav', '1'); 
add_option('ddsg_page_nav_where', 'top');
add_option('ddsg_xml_path', '');
add_option('ddsg_xml_where', 'last');


/*
 * Load language file
 */
$ddsg_lang_file = trim(get_option(ddsg_language));
if ($ddsg_lang_file == '') {
	$ddsg_lang_file = 'english';
}
include ABSPATH . 'wp-content/plugins/sitemap-generator/lang/' . $ddsg_lang_file . '.php';


/* 
 * Add options page
 */
function ddsg_add_option_pages() {
	if (function_exists('add_options_page')) {
		add_options_page('Dagon Design Sitemap Generator', 'DDSitemapGen', 8, __FILE__, 'ddsg_options_page');
	}
}


/* 
 * Generate options page
 */
function ddsg_options_page() {

	global $ddsg_ver;

	if (isset($_POST['set_defaults'])) {
		echo '<div id="message" class="updated fade"><p><strong>';

		update_option('ddsg_language', 'English');		
		update_option('ddsg_items_per_page', 50);
		update_option('ddsg_sm_name', '');
		update_option('ddsg_what_to_show', 'both');
		update_option('ddsg_which_first', 'posts');	
		update_option('ddsg_post_sort_order', 'title'); 
		update_option('ddsg_page_sort_order', 'title'); 
		update_option('ddsg_comments_on_posts', FALSE); 
		update_option('ddsg_comments_on_pages', FALSE); 
		update_option('ddsg_show_zero_comments', FALSE); 
		update_option('ddsg_hide_future', FALSE); 
		update_option('ddsg_new_window', FALSE); 
		update_option('ddsg_show_post_date', FALSE); 
		update_option('ddsg_show_page_date', FALSE); 
		update_option('ddsg_date_format', 'F jS, Y'); 
		update_option('ddsg_hide_protected', TRUE); 
		update_option('ddsg_excluded_cats', ''); 
		update_option('ddsg_excluded_pages', '');
		update_option('ddsg_page_nav', '1'); 
		update_option('ddsg_page_nav_where', 'top');
		update_option('ddsg_xml_path', '');
		update_option('ddsg_xml_where', 'last');

		echo DDSG_DEFAULTS_LOADED;
		echo '</strong></p></div>';	

	} else if (isset($_POST['info_update'])) {

		echo '<div id="message" class="updated fade"><p><strong>';

		update_option('ddsg_language', (string) $_POST["ddsg_language"]);
		update_option('ddsg_items_per_page', (int) $_POST["ddsg_items_per_page"]);
		update_option('ddsg_sm_name', (string) $_POST["ddsg_sm_name"]);
		update_option('ddsg_what_to_show', (string) $_POST["ddsg_what_to_show"]);
		update_option('ddsg_which_first', (string) $_POST["ddsg_which_first"]);				
		update_option('ddsg_post_sort_order', (string) $_POST["ddsg_post_sort_order"]);	
		update_option('ddsg_page_sort_order', (string) $_POST["ddsg_page_sort_order"]);	
		update_option('ddsg_comments_on_posts', (bool) $_POST["ddsg_comments_on_posts"]);	
		update_option('ddsg_comments_on_pages', (bool) $_POST["ddsg_comments_on_pages"]);	
		update_option('ddsg_show_zero_comments', (bool) $_POST["ddsg_show_zero_comments"]);	
		update_option('ddsg_hide_future', (bool) $_POST["ddsg_hide_future"]);	
		update_option('ddsg_new_window', (bool) $_POST["ddsg_new_window"]);	
		update_option('ddsg_show_post_date', (bool) $_POST["ddsg_show_post_date"]);	
		update_option('ddsg_show_page_date', (bool) $_POST["ddsg_show_page_date"]);	
		update_option('ddsg_date_format', (string) $_POST["ddsg_date_format"]);	
		update_option('ddsg_hide_protected', (bool) $_POST["ddsg_hide_protected"]);	
		update_option('ddsg_excluded_cats', (string) $_POST["ddsg_excluded_cats"]);	
		update_option('ddsg_excluded_pages', (string) $_POST["ddsg_excluded_pages"]);	
		update_option('ddsg_page_nav', (string) $_POST["ddsg_page_nav"]);	
		update_option('ddsg_page_nav_where', (string) $_POST["ddsg_page_nav_where"]);	
		update_option('ddsg_xml_path', (string) $_POST["ddsg_xml_path"]);	
		update_option('ddsg_xml_where', (string) $_POST["ddsg_xml_where"]);	

		echo DDSG_CONFIG_UPDATED;
	    echo '</strong></p></div>';

	} ?>

	<div class="wrap">

	<h2>Dagon Design Sitemap Generator v<?php echo $ddsg_ver; ?></h2>

	<form method="post" action="<?php echo $_SERVER["REQUEST_URI"]; ?>">
	<input type="hidden" name="info_update" id="info_update" value="true" />

	<p><?php echo DDSG_FOR_INFO; ?><br />
	<a href="http://www.dagondesign.com/articles/sitemap-generator-plugin-for-wordpress/">http://www.dagondesign.com/articles/sitemap-generator-plugin-for-wordpress/</a></p>

	<p><?php echo DDSG_DEFAULT_NOTICE; ?></p>


	<h3><?php echo DDSG_GENERAL_OPTIONS; ?></h3>
	<table width="100%" border="0" cellspacing="0" cellpadding="6">

   	<tr valign="top"><td width="25%" align="right">
	<b><?php echo DDSG_LANGUAGE; ?></b>
	</td><td align="left">
	<select name="ddsg_language">
	<?php 

	// Get list of available languages
	$language_list = array();
    $handle = opendir(ABSPATH . 'wp-content/plugins/sitemap-generator/lang');
    while ($file = readdir($handle)) {
        if ($file != '.' && $file != '..')
   	        $language_list[] = $file;
    }
    closedir($handle);

	$slang = trim(get_option('ddsg_language'));
	foreach ($language_list as $lang) {
		echo '<option';
		if ($lang == ($slang . '.php')) {
			echo ' selected="selected"';
		}
		echo '>' . substr($lang, 0, strlen($lang)-4) . '</option>';
	}
	?>
	</select>
	<br /><?php echo DDSG_LANGUAGE_DESC; ?>
	</td></tr>


	<tr><th width="45%" valign="top" align="right" scope="row"><?php echo DDSG_ITEMS_PER_PAGE; ?></th><td valign="top">
	<input name="ddsg_items_per_page" type="text" size="5" value="<?php echo get_option('ddsg_items_per_page') ?>"/><br />
	<?php echo DDSG_ITEMS_PER_PAGE_INFO; ?>
	</td></tr>

	<tr><th width="45%" valign="top" align="right" scope="row"><?php echo DDSG_SITEMAP_SLUG; ?></th><td valign="top">
	<input name="ddsg_sm_name" type="text" size="25" value="<?php echo get_option('ddsg_sm_name') ?>"/><br />
	<?php echo DDSG_SITEMAP_SLUG_INFO; ?>
	</td></tr>

	</table>



	<h3><?php echo DDSG_SITEMAP_GENERATION; ?></h3>
	<table width="100%" border="0" cellspacing="0" cellpadding="6">

	<tr><th width="45%" valign="top" align="right" scope="row"><?php echo DDSG_SHOW; ?></th><td valign="top">
	<input name="ddsg_what_to_show" type="radio" value="both" <?php if (get_option('ddsg_what_to_show') == "both") echo "checked='checked'"; ?> />&nbsp;&nbsp; <?php echo DDSG_SHOW_BOTH; ?><br />
	<input name="ddsg_what_to_show" type="radio" value="posts" <?php if (get_option('ddsg_what_to_show') == "posts") echo "checked='checked'"; ?> />&nbsp;&nbsp; <?php echo DDSG_SHOW_POSTS; ?><br />
	<input name="ddsg_what_to_show" type="radio" value="pages" <?php if (get_option('ddsg_what_to_show') == "pages") echo "checked='checked'"; ?>/>&nbsp;&nbsp;	<?php echo DDSG_SHOW_PAGES; ?>
	</td></tr>

	<tr><th width="45%" valign="top" align="right" scope="row"><?php echo DDSG_WHICH_FIRST; ?></th><td valign="top">
	<input name="ddsg_which_first" type="radio" value="posts" <?php if (get_option('ddsg_which_first') == "posts") echo "checked='checked'"; ?> />&nbsp;&nbsp; <?php echo DDSG_WHICH_FIRST_POSTS; ?><br />
	<input name="ddsg_which_first" type="radio" value="pages" <?php if (get_option('ddsg_which_first') == "pages") echo "checked='checked'"; ?>/>&nbsp;&nbsp; <?php echo DDSG_WHICH_FIRST_PAGES; ?>
	</td></tr>

	<tr><th width="45%" valign="top" align="right" scope="row"><?php echo DDSG_POST_SORT; ?></th><td valign="top">
	<label><input name="ddsg_post_sort_order" type="radio" value="title" <?php if (get_option('ddsg_post_sort_order') == "title") echo "checked='checked'"; ?> />&nbsp;&nbsp; <?php echo DDSG_POST_SORT_T; ?><br /></label>
	<label><input name="ddsg_post_sort_order" type="radio" value="datea" <?php if (get_option('ddsg_post_sort_order') == "datea") echo "checked='checked'"; ?> />&nbsp;&nbsp; <?php echo DDSG_POST_SORT_DA; ?><br /></label>
	<label><input name="ddsg_post_sort_order" type="radio" value="dated" <?php if (get_option('ddsg_post_sort_order') == "dated") echo "checked='checked'"; ?> />&nbsp;&nbsp; <?php echo DDSG_POST_SORT_DD; ?><br /></label>
	</td></tr>

	<tr><th width="45%" valign="top" align="right" scope="row"><?php echo DDSG_PAGE_SORT; ?></th><td valign="top">
	<label><input name="ddsg_page_sort_order" type="radio" value="title" <?php if (get_option('ddsg_page_sort_order') == "title") echo "checked='checked'"; ?> />&nbsp;&nbsp; <?php echo DDSG_PAGE_SORT_T; ?><br /></label>
	<label><input name="ddsg_page_sort_order" type="radio" value="datea" <?php if (get_option('ddsg_page_sort_order') == "datea") echo "checked='checked'"; ?> />&nbsp;&nbsp; <?php echo DDSG_PAGE_SORT_DA; ?><br /></label>
	<label><input name="ddsg_page_sort_order" type="radio" value="dated" <?php if (get_option('ddsg_page_sort_order') == "dated") echo "checked='checked'"; ?> />&nbsp;&nbsp; <?php echo DDSG_PAGE_SORT_DD; ?><br /></label>
	<label><input name="ddsg_page_sort_order" type="radio" value="menua" <?php if (get_option('ddsg_page_sort_order') == "menua") echo "checked='checked'"; ?> />&nbsp;&nbsp; <?php echo DDSG_PAGE_SORT_MA; ?><br /></label>
	<label><input name="ddsg_page_sort_order" type="radio" value="menud" <?php if (get_option('ddsg_page_sort_order') == "menud") echo "checked='checked'"; ?> />&nbsp;&nbsp; <?php echo DDSG_PAGE_SORT_MD; ?><br /></label>
	</td></tr>

	<tr><th width="45%" valign="top" align="right" scope="row"><?php echo DDSG_POST_COMMENTS; ?></th><td valign="top">
	<input type="checkbox" name="ddsg_comments_on_posts" value="checkbox" <?php if (get_option('ddsg_comments_on_posts')) echo "checked='checked'"; ?>/>
	</td></tr>

	<tr><th width="45%" valign="top" align="right" scope="row"><?php echo DDSG_PAGE_COMMENTS; ?></th><td valign="top">
	<input type="checkbox" name="ddsg_comments_on_pages" value="checkbox" <?php if (get_option('ddsg_comments_on_pages')) echo "checked='checked'"; ?>/>
	</td></tr>

	<tr><th width="45%" valign="top" align="right" scope="row"><?php echo DDSG_ZERO_COMMENTS; ?></th><td valign="top">
	<input type="checkbox" name="ddsg_show_zero_comments" value="checkbox" <?php if (get_option('ddsg_show_zero_comments')) echo "checked='checked'"; ?>/>
	</td></tr>	

	<tr><th width="45%" valign="top" align="right" scope="row"><?php echo DDSG_POST_DATES; ?></th><td valign="top">
	<input type="checkbox" name="ddsg_show_post_date" value="checkbox" <?php if (get_option('ddsg_show_post_date')) echo "checked='checked'"; ?>/>
	</td></tr>

	<tr><th width="45%" valign="top" align="right" scope="row"><?php echo DDSG_PAGE_DATES; ?></th><td valign="top">
	<input type="checkbox" name="ddsg_show_page_date" value="checkbox" <?php if (get_option('ddsg_show_page_date')) echo "checked='checked'"; ?>/>
	</td></tr>

	<tr><th width="45%" valign="top" align="right" scope="row"><?php echo DDSG_DATE_FORMAT; ?></th><td valign="top">
	<input name="ddsg_date_format" type="text" size="15" value="<?php echo get_option('ddsg_date_format') ?>"/> 
	<?php echo DDSG_DATE_FORMAT_DESC; ?>
	</td></tr>

	</table>



	<h3><?php echo DDSG_EXCLUSIONS; ?></h3>
	<table width="100%" border="0" cellspacing="0" cellpadding="6">

	<tr><th width="45%" valign="top" align="right" scope="row"><?php echo DDSG_EXCLUDED_CATS; ?></th><td valign="top">
	<input name="ddsg_excluded_cats" type="text" size="55" value="<?php echo get_option('ddsg_excluded_cats') ?>"/><br />
	<?php echo DDSG_EXCLUDED_CATS_DESC; ?>
	</td></tr>

	<tr><th width="45%" valign="top" align="right" scope="row"><?php echo DDSG_EXCLUDED_PAGES; ?></th><td valign="top">
	<input name="ddsg_excluded_pages" type="text" size="55" value="<?php echo get_option('ddsg_excluded_pages') ?>"/><br />
	<?php echo DDSG_EXCLUDED_PAGES_DESC; ?>
	</td></tr>

	<tr><th width="45%" valign="top" align="right" scope="row"><?php echo DDSG_HIDE_FUTURE; ?></th><td valign="top">
	<input type="checkbox" name="ddsg_hide_future" value="checkbox" <?php if (get_option('ddsg_hide_future')) echo "checked='checked'"; ?>/>
	</td></tr>

	<tr><th width="45%" valign="top" align="right" scope="row"><?php echo DDSG_HIDE_PASS; ?></th><td valign="top">
	<input type="checkbox" name="ddsg_hide_protected" value="checkbox" <?php if (get_option('ddsg_hide_protected')) echo "checked='checked'"; ?>/>
	</td></tr>

	</table>


	<h3><?php echo DDSG_NAVIGATION; ?></h3>
	<table width="100%" border="0" cellspacing="0" cellpadding="6">

	<tr><th width="45%" valign="top" align="right" scope="row"><?php echo DDSG_NAV_METHOD; ?></th><td valign="top">
	<label><input name="ddsg_page_nav" type="radio" value="1" <?php if (get_option('ddsg_page_nav') == 1) echo "checked='checked'"; ?> />&nbsp;&nbsp; <?php echo DDSG_NAV1_PAGE . ' 2 of 5 : <a href="#">' . DDSG_NAV1_PREV . '</a> : <a href="#">' . DDSG_NAV1_NEXT . '</a>'; ?><br /></label>
    <label><input name="ddsg_page_nav" type="radio" value="2" <?php if (get_option('ddsg_page_nav') == 2) echo "checked='checked'"; ?>/>&nbsp;&nbsp; <?php echo DDSG_NAV2_PAGE . ' <a href="#">1</a> 2 <a href="#">3</a> <a href="#">4</a> <a href="#">5</a>'; ?></label>
	</td></tr>	


	<tr><th width="45%" valign="top" align="right" scope="row"><?php echo DDSG_NAV_WHERE; ?></th><td valign="top">
	<label><input name="ddsg_page_nav_where" type="radio" value="top" <?php if (get_option('ddsg_page_nav_where') == "top") echo "checked='checked'"; ?> />&nbsp;&nbsp; <?php echo DDSG_NAV_WHERE_TOP; ?><br /></label>
	<label><input name="ddsg_page_nav_where" type="radio" value="bottom" <?php if (get_option('ddsg_page_nav_where') == "bottom") echo "checked='checked'"; ?> />&nbsp;&nbsp; <?php echo DDSG_NAV_WHERE_BOT; ?><br /></label>
    <label><input name="ddsg_page_nav_where" type="radio" value="both" <?php if (get_option('ddsg_page_nav_where') == "both") echo "checked='checked'"; ?>/>&nbsp;&nbsp; <?php echo DDSG_NAV_WHERE_BOTH; ?></label>
	</td></tr>

	</table>


	<h3><?php echo DDSG_MISC; ?></h3>
	<table width="100%" border="0" cellspacing="0" cellpadding="6">	

	<tr><th width="45%" valign="top" align="right" scope="row"><?php echo DDSG_XML_PATH; ?></th><td valign="top">
	<input name="ddsg_xml_path" type="text" size="55" value="<?php echo get_option('ddsg_xml_path') ?>"/>
	<br /><?php echo DDSG_XML_PATH_DESC; ?>
	</td></tr>

	<tr><th width="45%" valign="top" align="right" scope="row"><?php echo DDSG_XML_WHERE; ?></th><td valign="top">
	<label><input name="ddsg_xml_where" type="radio" value="last" <?php if (get_option('ddsg_xml_where') == 'last') echo "checked='checked'"; ?> />&nbsp;&nbsp; <?php echo DDSG_XML_WHERE_LAST; ?><br /></label>
	<label><input name="ddsg_xml_where" type="radio" value="every" <?php if (get_option('ddsg_xml_where') == 'every') echo "checked='checked'"; ?>/>&nbsp;&nbsp; <?php echo DDSG_XML_WHERE_EVERY; ?></label>
	</td></tr>

	<tr><th width="45%" valign="top" align="right" scope="row"><?php echo DDSG_NEW_WINDOW; ?></th><td valign="top">
	<input type="checkbox" name="ddsg_new_window" value="checkbox" <?php if (get_option('ddsg_new_window')) echo "checked='checked'"; ?>/>
	</td></tr>


	</table>


	<div class="submit">
		<input type="submit" name="set_defaults" value="<?php echo DDSG_DEFAULT_BUTTON; ?> &raquo;" />
		<input type="submit" name="info_update" value="<?php echo DDSG_UPDATE_BUTTON; ?> &raquo;" />
	</div>

	</form>

	</div><?php

}






/* 
 * Build list of categories
 */
function ddsg_get_cats($cat_data, $cats, $num_cats, $cats_with_children, $excluded_cats, $parent = 0, $level = 0) {


//	echo nl2br(htmlspecialchars(print_r($cats, TRUE)));
//	exit();

	$k = 0;

	while (isset($cats[$k]) && ($cats[$k]->category_parent != $parent) && ($k < $num_cats)) {
		$k++;
	}

	while (isset($cats[$k]) && ($cats[$k]->category_parent == $parent) && ($k < $num_cats)) {

		if (in_array($cats[$k]->category_ID, $excluded_cats, FALSE) === FALSE) {
			$cat_data[] = array( 
				'cat_id' => $cats[$k]->category_ID, 
				'cat_name' => $cats[$k]->cat_name,
				'level' => $level
			);
		}

		if (count($cats_with_children) > 0) {
			if (in_array($cats[$k]->category_ID, $cats_with_children, FALSE)) {
				if (in_array($cats[$k]->category_ID, $excluded_cats, FALSE) === FALSE) {
					$cat_data = ddsg_get_cats($cat_data, $cats, $num_cats, $cats_with_children, $excluded_cats, $cats[$k]->category_ID, $level + 1);
				}
			}
		}

		$k++;

	}

	return $cat_data;

}



/* 
 * Build list of pages
 */
function ddsg_get_pages($page_data, $pages, $num_pages, $pages_with_children, $excluded_pages, $comments_on_pages, $show_page_date, $parent = 0, $level = 0) {

	$k = 0;
	while (isset($pages[$k]) && ($pages[$k]->post_parent != $parent) && ($k < $num_pages)) {
		$k++;
	}
	while (isset($pages[$k]) && ($pages[$k]->post_parent == $parent) && ($k < $num_pages)) {

		if (in_array($pages[$k]->ID, $excluded_pages, FALSE) === FALSE) {

			$tmp_array = array();
			$tmp_array['id'] = $pages[$k]->ID;
			$tmp_array['title'] = $pages[$k]->post_title;
			$tmp_array['level'] = $level;
			if ($comments_on_pages) $tmp_array['comments'] = $pages[$k]->comment_count;
			if ($show_page_date) $tmp_array['date'] = $pages[$k]->post_date;
			$page_data[] = $tmp_array;
		}
	
		if (in_array($pages[$k]->ID, $pages_with_children, FALSE)) {
			if (in_array($pages[$k]->ID, $excluded_pages, FALSE) === FALSE) {
				$page_data = ddsg_get_pages($page_data, $pages, $num_pages, $pages_with_children, $excluded_pages, $comments_on_pages, $show_page_date, $pages[$k]->ID, $level + 1);
			}
		}

		$k++;

	}

	return $page_data;

}



/* 
 * Find parent of page
 */
function ddsg_find_parent_page($page_data, $p, $k) {

	$level = $page_data[$p]['level'];

	while (($page_data[$p]['level'] > $k) and ($p >= 0)) {
		$p--;
	}

	return '<a href="' . get_permalink($page_data[$p]['id']) . '" title="' . strip_tags($page_data[$p]['title']) . '">' . $page_data[$p]['title'] . '</a>' . "\n";

}


/* 
 * Generate page output
 */
function ddsg_display_pages($page_data, $num_pages, $page_start, $page_end, $comments_on_pages, $new_window, $show_page_date, $date_format) {

	$show_zero_comments = get_option('ddsg_show_zero_comments');

	if ($num_pages == 0) return "";

	if (($page_start == 0) && ($page_end == 0)) return "";

	$t_out = "";

	$t_out .= DDSG_PAGE_HEADER;

	$llevel = -1;


	for ($p = $page_start; $p <= $page_end; $p++) {

		$level = $page_data[$p]['level'];

		if ($level > $llevel) {
			$t_out .= '<ul>';
			for ($k = $llevel + 1; $k < $level; $k++) {
				$t_out .= '<li>' . ddsg_find_parent_page($page_data, $p, $k) . ' (continued)<ul>';
			}
		} 

		if ($level == $llevel) {
			$t_out .= '</li>';
		}

		if ($level < $llevel) {
			$t_out .= '</li>';

			for ($k = $llevel; $k > $level; $k--) {
				$t_out .= '</ul></li>';
			}
		}

		$the_title = htmlspecialchars(trim($page_data[$p]['title']));
		if ($the_title == '') {
			$the_title = DDSG_NO_TITLE;
		}
		
		$t_out .= '<li><a href="' . get_permalink($page_data[$p]['id']) . '"';
		$t_out .= ' title="' . strip_tags($the_title) . '"';
		if ($new_window) {
			$t_out .= ' target="_blank"';
		}
		$t_out .= '>' . $the_title . '</a>';

		if ($show_page_date) {
			// $t_out .= ' ' . date($date_format, strtotime($page_data[$p]['date']));
			$t_out .= ' ' . date_i18n($date_format, strtotime($page_data[$p]['date']));
		}

		if ($comments_on_pages) {
			if ($show_zero_comments || ($page_data[$p]['comments'] > 0)) {
				$t_out .= ' (' . $page_data[$p]['comments'] . ')';
			}
		}

		$llevel = $level;
	}

	$t_out .= '</li>' . "\n";
	for ($k = $llevel; $k > 0; $k--) {
		$t_out .= '</ul></li>';
	}

	$t_out .= '</ul>';

	return $t_out;

}


/* 
 * Build post parent
 */
function ddsg_find_parent_post($post_data, $p, $k) {

	$level = $post_data[$p]['level'];

	while (($post_data[$p]['level'] > $k) and ($p >= 0)) {
		$p--;
	}

	return DDSG_CAT_HEADER . ' <a href="' . get_category_link($post_data[$p]['id']) . '" title="' . strip_tags($post_data[$p]['title']) . '">' . $post_data[$p]['title'] . '</a>';

}


/* 
 * Generate post output
 */
function ddsg_display_posts($post_data, $num_posts, $post_start, $post_end, $comments_on_posts, $new_window, $show_post_date, $date_format) {

	$show_zero_comments = get_option('ddsg_show_zero_comments');

	if ($num_posts == 0) return "";

	if (($post_start == 0) && ($post_end == 0)) return "";

	$t_out = "";

	$t_out .= DDSG_POST_HEADER;

	$llevel = -1;

	for ($p = $post_start; $p <= $post_end; $p++) {

		$level = $post_data[$p]['level'];

		if ($level > $llevel) {
			$t_out .= '<ul>';
			for ($k = $llevel + 1; $k < $level; $k++) {
				$t_out .= '<li>' . strip_tags(ddsg_find_parent_post($post_data, $p, $k)) . ' (continued)<ul>';
			}
		} 
		if ($level == $llevel) {
			$t_out .= '</li>';
		}

		if ($level < $llevel) {
			$t_out .= '</li>';
			for ($k = $llevel; $k > $level; $k--) {
				$t_out .= '</ul></li>';
			}
		}

		if ($post_data[$p]['type'] == 'c') {

			$t_out .= '<li>' . DDSG_CAT_HEADER . ' ';
			$t_out .= '<a href="' . get_category_link($post_data[$p]['id']) . '"';
			$t_out .= ' title="' . strip_tags($post_data[$p]['title']) . '"';
			if ($new_window) {
				$t_out .= ' target="_blank"';
			}
			$t_out .= '>' . $post_data[$p]['title'] . '</a>';

		} else { 

			$the_title = htmlspecialchars(trim($post_data[$p]['title']));
			if ($the_title == '') {
				$the_title = DDSG_NO_TITLE;
			}	

			$t_out .= '<li><a href="' . get_permalink($post_data[$p]['id']) . '"';
			$t_out .= ' title="' . $the_title . '"';
			if ($new_window) {
				$t_out .= ' target="_blank"';
			}
			$t_out .= '>' . $the_title . '</a>';

			if ($show_post_date) {
//				$t_out .= ' ' . date($date_format, strtotime($post_data[$p]['date']));
				$t_out .= ' ' . date_i18n($date_format, strtotime($post_data[$p]['date']));

			}

			if ($comments_on_posts) {
				if ($show_zero_comments || ($post_data[$p]['comments'] > 0)) {
					$t_out .= ' (' . $post_data[$p]['comments'] . ')';
				}
			}

		}

		$llevel = $level;
	}

	$t_out .= '</li>';
	for ($k = $llevel; $k > 0; $k--) {
		$t_out .= '</ul></li>';
	}

	$t_out .= '</ul>';

	return $t_out;

}


/* 
 * Merge categories with posts
 */
function ddsg_merge_cats_posts($post_data, $posts, $cat_data, $num_posts, $num_cats, $comments_on_posts, $show_post_date) {

	for ($c = 0; $c < $num_cats; $c++) {

		$level = $cat_data[$c]['level'];

		$tmp_array = array();
		$tmp_array['type'] = 'c';
		$tmp_array['id'] = $cat_data[$c]['cat_id'];
		$tmp_array['title'] = $cat_data[$c]['cat_name'];
		$tmp_array['level'] = $level;
		$post_data[] = $tmp_array;

		$k = 0;
		while (isset($posts[$k]) && ($posts[$k]->category_id != $cat_data[$c]['cat_id']) && ($k < $num_posts)) {
			$k++;
		}

		$any_posts = 0;

		while (isset($posts[$k]) && ($posts[$k]->category_id == $cat_data[$c]['cat_id']) && ($k < $num_posts)) {

			$tmp_array = array();
			$tmp_array['type'] = 'p';
			$tmp_array['id'] = $posts[$k]->ID;
			$tmp_array['title'] = $posts[$k]->post_title;
			$tmp_array['level'] = $level + 1;
			if ($comments_on_posts) $tmp_array['comments'] = $posts[$k]->comment_count;
			if ($show_post_date) $tmp_array['date'] = $posts[$k]->post_date;
			$post_data[] = $tmp_array;

			$k++;
		}
	
	}

	return $post_data;

}


/*
 * Remove categories with no posts
 */
function ddsg_remove_empty_cats($post_data) {

	$llp = -1;
	$last_type = 'x';
	$last_level = 'x';
	$last_del = FALSE;

	$pdc = count($post_data);

	for ($i = $pdc - 1; $i >= 0; $i--) {

		$type = $post_data[$i]['type'];
		$title = $post_data[$i]['title'];
		$level = $post_data[$i]['level'];

		if (($type == 'c') && ($last_type == 'c') && (($last_level <= $level) || ($last_del == TRUE))) {
			$post_data[$i]['type'] = 'r';
			$last_del = TRUE;
		} else {
			$last_del = FALSE;
		}

		$last_type = $type;
		$last_level = $level;
		if ($post_data[$i]['type'] == 'p') {
			$llp = $post_data[$i]['level'];

		}

	}


	$new_post_data = array();
	foreach ($post_data as $pd) {
		if ($pd['type'] != 'r') {
			$new_post_data[] = $pd;
		}
	}


	return $new_post_data;

}



/*
 * Generate sitemap navigation
 */
function ddsg_generate_nav($total_pages, $current_page, $page_nav, $sm_name) {

	global $wp_query;

	$output1 = NULL;
	
	if (strlen($sm_name) > 0) { // permalinks enabled

		$the_url = get_bloginfo('url');

		if ($the_url{strlen($the_url)-1} != "/") {
			$the_url = $the_url . "/" . $sm_name . "/";
		}

		if ($total_pages > 1) {

			if ($page_nav == 1) {

				$output1 .= "<div class='ddsg-pagenav'><p>Page " . $current_page . " of " . $total_pages;

				if ($current_page > 1) {
					$output1 .= ' : <a href="' . $the_url . ($current_page - 1) . '/">' . DDSG_NAV1_PREV . '</a>';
				}

				if ($current_page < $total_pages) {
					$output1 .= ' : <a href="' . $the_url . ($current_page + 1) . '/">' . DDSG_NAV1_NEXT . '</a>';
				}

				$output1 .= "</p></div>";

			} else if ($page_nav == 2) {

				$output1 .= '<div class="ddsg-pagenav"><p>Pages: ';

				for ($i = 1; $i <= $total_pages; $i++) {
					if ($i == $current_page) {
						$output1 .= $i . " ";
					} else {
						$output1 .= '<a href="' . $the_url . $i . '/">' . $i . '</a> ';
					}
				}

				$output1 .= "</p></div>";

			}

		}


	} else { // permalinks not enabled

		$the_url = get_bloginfo('url');

		if ($the_url{strlen($the_url)-1} != "/") {
			$the_url = $the_url . "/index.php";
		}

		if ($total_pages > 1) {

			if ($page_nav == 1) {
	
				$output1 .= '<div class="ddsg-pagenav"><p>Page ' . $current_page . ' of ' . $total_pages;

				if ($current_page > 1) {
					$output1 .= ' : <a href="' . $the_url . '?page_id=' . $wp_query->post->ID . '&amp;pg=' . ($current_page - 1) . '">' . DDSG_NAV1_PREV . '</a>';
				}

				if ($current_page < $total_pages) {
					$output1 .= ' : <a href="' . $the_url . '?page_id=' . $wp_query->post->ID . '&amp;pg=' . ($current_page + 1) . '">' . DDSG_NAV1_NEXT . '</a>';
				}

				$output1 .= "</p></div>";

			} else if ($page_nav == 2) {

				$output1 .= '<div class="ddsg-pagenav"><p>Pages: ';

				for ($i = 1; $i <= $total_pages; $i++) {
					if ($i == $current_page) {
						$output1 .= $i . " ";
					} else {
						$output1 .= '<a href="' . $the_url . '?page_id=' . $wp_query->post->ID . '&amp;pg=' . $i . '">' . $i . '</a> ';
					}
				}

				$output1 .= "</p></div>";
			}

		}

	}

	if (strlen($sm_name) > 0) {
		$output1 = str_replace($the_url . '1/', $the_url, $output1);
	} else {
		$output1 = str_replace('&amp;pg=1"', '"', $output1);
	}

	return $output1;

}




/* 
 * Create the sitemap
 */
function ddsg_create_sitemap() {

	global $wpdb;

	$tp = $wpdb->prefix;

	// Currently using a work-around for the version system
	// determines if pre or post 2.3 from wp_term_taxonomy 

	$ver = 2.2;
	$wpv = $wpdb->get_results("show tables like '{$tp}term_taxonomy'");
	if (count($wpv) > 0) {
		$ver = 2.3;
	}



	$items_per_page = (int)get_option('ddsg_items_per_page');
	$sm_name = (string)get_option('ddsg_sm_name');
	$what_to_show = trim(get_option('ddsg_what_to_show'));
	$which_first = trim(get_option('ddsg_which_first'));
	$post_sort_order = trim(get_option('ddsg_post_sort_order'));
	$page_sort_order = trim(get_option('ddsg_page_sort_order'));
	$comments_on_posts = get_option('ddsg_comments_on_posts');
	$comments_on_pages = get_option('ddsg_comments_on_pages');
	$hide_future = get_option('ddsg_hide_future');
	$new_window = get_option('ddsg_new_window');
	$show_post_date = get_option('ddsg_show_post_date');
	$show_page_date = get_option('ddsg_show_page_date');
	$date_format = get_option('ddsg_date_format');
	$hide_protected = get_option('ddsg_hide_protected');
	$excluded_cats = trim(get_option('ddsg_excluded_cats'));
	$excluded_pages = trim(get_option('ddsg_excluded_pages'));
	$page_nav = trim(get_option('ddsg_page_nav'));
	$page_nav_where = trim(get_option('ddsg_page_nav_where'));
	$xml_path = trim(get_option('ddsg_xml_path'));
	$xml_where = get_option('ddsg_xml_where');



	// prepare exclusion lists
	$excluded_cats = str_replace(' ', '', $excluded_cats);
	$excluded_cats = (array)explode(',', $excluded_cats);
	$excluded_pages = str_replace(' ', '', $excluded_pages);
	$excluded_pages = (array)explode(',', $excluded_pages);



	if ($what_to_show != 'pages') {

		// gets cats

		if ($ver < 2.3) {

			$cats = (array)$wpdb->get_results("
				SELECT cat_ID as category_ID, cat_name, category_parent
				FROM {$tp}categories
				GROUP BY cat_ID 
				ORDER BY category_parent, cat_name
			"); 
	
			$cats_with_children = (array)$wpdb->get_col("
				SELECT category_parent
				FROM {$tp}categories
				WHERE category_parent != '0' 
				GROUP BY category_parent
				ORDER BY category_parent
			", 0);

		} else { // >= 2.3

			$cats = (array)$wpdb->get_results("
				SELECT {$tp}terms.term_id as category_ID, 
					{$tp}terms.name as cat_name, 
					{$tp}term_taxonomy.parent as category_parent
				FROM {$tp}terms, {$tp}term_taxonomy 
				WHERE {$tp}term_taxonomy.taxonomy = 'category'
				AND {$tp}terms.term_id = {$tp}term_taxonomy.term_id
				GROUP BY category_ID 
				ORDER BY category_parent, cat_name
			"); 

			$cats_with_children = (array)$wpdb->get_col("
				SELECT parent as category_parent
				FROM {$tp}term_taxonomy
				WHERE parent != '0' 
				AND {$tp}term_taxonomy.taxonomy = 'category'
				GROUP BY category_parent
				ORDER BY category_parent
			", 0);

		}

		$sort_string = '';
		switch ($post_sort_order) { 
			case 'datea':
				$sort_string = 'post_date ASC';
				break;
			case 'dated':
				$sort_string = 'post_date DESC';
				break;
			default: // title
				$sort_string = 'post_title';
				break;
		}

		$extra_data = '';
		if ($comments_on_posts) {
			$extra_data .= ', comment_count ';
		}
		if ($show_post_date) {
			$extra_data .= ', post_date ';
		}

		$dup_check = '';

		$pass_check = '';
		if ($hide_protected) {
			$pass_check = " AND post_password = '' ";
		}

		$future_check = '';
		if ($hide_future) {
			$future_check = " AND post_status != 'future' ";
		}


		if ($ver < 2.3) {

			$posts = (array)$wpdb->get_results("
				SELECT ID, category_id, post_title $extra_data 
				FROM {$tp}posts, {$tp}post2cat
				WHERE {$tp}posts.ID = {$tp}post2cat.post_id 
				AND post_status = 'publish' 
				AND post_type = 'post' 
				$dup_check 
				$pass_check 
				$future_check
				ORDER BY category_id, $sort_string
			");
		
		} else { // >= 2.3

			$posts = (array)$wpdb->get_results("
				SELECT ID, {$tp}term_taxonomy.term_id as category_id, post_title $extra_data 
				FROM {$tp}posts, {$tp}term_relationships, {$tp}term_taxonomy
				WHERE {$tp}posts.ID = {$tp}term_relationships.object_id  
				AND {$tp}term_relationships.term_taxonomy_id = {$tp}term_taxonomy.term_taxonomy_id 
				AND {$tp}term_taxonomy.taxonomy = 'category' 
				AND post_status = 'publish' 
				AND post_type = 'post' 
				$dup_check 
				$pass_check 
				$future_check
				ORDER BY category_id, $sort_string
			");

		}



		$num_cats = count($cats);
		$num_posts = count($posts);

		$cat_data = array();
		$post_data = array();	


		$cat_data = ddsg_get_cats($cat_data, $cats, $num_cats, $cats_with_children, $excluded_cats);

		$num_cats = count($cat_data);

		$post_data = ddsg_merge_cats_posts($post_data, $posts, $cat_data, $num_posts, $num_cats, $comments_on_posts, $show_post_date);

		$post_data = ddsg_remove_empty_cats($post_data);

		$num_posts = count($post_data);

	}



	if ($what_to_show != 'posts') {

		$sort_string = '';
		switch ($page_sort_order) { 
			case 'datea':
				$sort_string = 'post_date ASC';
				break;
			case 'dated':
				$sort_string = 'post_date DESC';
				break;
			case 'menua':
				$sort_string = 'menu_order ASC';
				break;
			case 'menud':
				$sort_string = 'menu_order DESC';
				break;
			default: // title
				$sort_string = 'post_title';
				break;
		}

		$extra_data = '';
		if ($comments_on_pages) {
			$extra_data .= ', comment_count ';
		}
		if ($show_page_date) {
			$extra_data .= ', post_date ';
		}

		$pass_check = '';
		if ($hide_protected) {
			$pass_check = " AND post_password = '' ";
		}

		$pages = (array)$wpdb->get_results("
			SELECT post_title, ID, post_parent $extra_data 
			FROM {$tp}posts
			WHERE post_type = 'page' 
			AND post_status = 'publish' 
			$pass_check 
			ORDER BY post_parent, $sort_string 
		");

		$pages_with_children = (array)$wpdb->get_col("
			SELECT post_parent
			FROM {$tp}posts
			WHERE post_type = 'page'
			AND post_status = 'publish' 
			AND post_parent != '0' 
			GROUP BY post_parent
			ORDER BY post_parent
		", 0);

		$num_pages = count($pages);

		$page_data = array();

		$page_data = ddsg_get_pages($page_data, $pages, $num_pages, $pages_with_children, $excluded_pages, $comments_on_pages, $show_page_date);

		$num_pages = count($page_data);

	}


	$wpdb->flush();


	switch ($what_to_show) {
		case 'posts':
			$total_items = $num_posts;
			break;
		case 'pages':
			$total_items = $num_pages;
			break;
		default:
			$total_items = $num_posts + $num_pages;
			break;
	}


	$current_page = 1;
	if (get_query_var("pg")) {
		$current_page = get_query_var("pg");		
	}



	if ($items_per_page <= 0) {
		$total_pages = 1;
		$items_per_page = $total_items;
	} else {
		$total_pages = (int)ceil($total_items / $items_per_page);
	}

	$t_start = ($current_page - 1) * $items_per_page;
	$t_end = $t_start + $items_per_page - 1;
	if ($t_end > $total_items) {
		$t_end = $total_items - 1;
	}

	if ($current_page < 1) {
		$current_page = 1;
	} else if ($current_page > $total_pages) {
		$current_page = $total_pages;
		$t_start = ($current_page - 1) * $items_per_page;
		$t_end = $t_start + $items_per_page - 1;
		if ($t_end > $total_items) {
			$t_end = $total_items - 1;
		}
	}


	$t_out = '';

	$t_out .= "\n\n<!-- START of Dagon Design Sitemap Generator output -->\n\n";

	$t_out .= '<div class="ddsg-wrapper">';


	if ($page_nav_where != 'bottom') {
		$t_out .= ddsg_generate_nav($total_pages, $current_page, $page_nav, $sm_name);
	}


	if ($what_to_show == 'posts') { // show just posts

		$post_start = $t_start;
		$post_end = $t_end;
		if ($t_end > $num_posts) {
			$post_end = $num_posts - 1;
		}

		$t_out .= ddsg_display_posts($post_data, $num_posts, $post_start, $post_end, $comments_on_posts, $new_window, $show_post_date, $date_format);


	} else if ($what_to_show == 'pages') { // show just pages

		$page_start = $t_start;
		$page_end = $t_end;
		if ($t_end > $num_pages - 1) {
			$page_end = $num_pages - 1;
		}

		$t_out .= ddsg_display_pages($page_data, $num_pages, $page_start, $page_end, $comments_on_pages, $new_window, $show_page_date, $date_format);


	} else { // show both


		if ($which_first == 'pages') {
			$num1 = $num_pages;
			$num2 = $num_posts;
		} else {
			$num1 = $num_posts;
			$num2 = $num_pages;
		}


		if ($t_start > ($num1 - 1)) {
			$start1 = $end1 = 0;
			$start2 = $t_start - $num1;
			$end2 = $t_end - $num1;
			if ($end2 >= $num2) {
				$end2 = $num2 - 1;
			}
		} else if ($t_end < $num1) {
			$start2 = $end2 = 0;
			$start1 = $t_start;
			$end1 = $t_end;
			if ($end1 >= $num1) {
				$end1 = $num1 - 1;
			}
		} else { 
			$start1 = $t_start;
			$end1 = $num1 - 1;
			$start2 = 0;
			$end2 = $items_per_page - ($end1 - $start1) - 2;
		}

		if ($end2 >= $num2) {
			$end2 = $num2 - 1;
		}
		if ($end1 >= $num1) {
			$end1 = $num1 - 1;
		}


		if ($which_first == 'pages') {
			$t_out .= ddsg_display_pages($page_data, $num1, $start1, $end1, $comments_on_pages, $new_window, $show_page_date, $date_format);
			$t_out .= ddsg_display_posts($post_data, $num2, $start2, $end2, $comments_on_posts, $new_window, $show_post_date, $date_format);
		} else {
			$t_out .= ddsg_display_posts($post_data, $num1, $start1, $end1, $comments_on_posts, $new_window, $show_post_date, $date_format);
			$t_out .= ddsg_display_pages($page_data, $num2, $start2, $end2, $comments_on_pages, $new_window, $show_page_date, $date_format);
		}



	}


	if ($page_nav_where != 'top') {
		$t_out .= ddsg_generate_nav($total_pages, $current_page, $page_nav, $sm_name);
	}




	if ($xml_path != '') {
		if (($xml_where == 'every') OR ($current_page == $total_pages)) {
			$t_out .= '<div class="ddsg-xml-link"><p><a href="' . $xml_path . '">' . DDSG_VIEW_XML . '</a></p></div>';
		}
	}


	$t_out .= '<div style="text-align: right;"><p style="font-size:90%;">' . DDSG_CREDITS . ' <a href="http://www.dagondesign.com" title="Dagon Design">dagondesign.com</a></p></div>';

	$t_out .= '</div>';

	$t_out .= "\n\n<!-- END of Dagon Design Sitemap Generator output -->\n\n";


	// Ampersand fix

	$t_out = str_replace("&amp;amp;", "&amp;", $t_out);

	return $t_out;

}





/* 
 * Create rewrite rules for sitemap pages
 */
function ddsg_permalinks($rules) { 
	global $wp_rewrite;
	$ddsg_sm_name = trim(get_option('ddsg_sm_name')); 
	if ($wp_rewrite->use_verbose_rules || !isset($wp_rewrite->use_verbose_rules)) {
		$match_form = '$1';
	} else {
		$match_form = '$matches[1]';
	}

	if ($ddsg_sm_name != '') {	
		$newrules[$ddsg_sm_name . '/([0-9]{1,})/?$'] = 'index.php?&pagename=' . $ddsg_sm_name . '&pg=' . $match_form;
		$newrules = array_merge($newrules,$rules);
		return $newrules;
	} else {
		return $rules;
	}
} 


/* 
 * Initialize query var for sitemap permalinks
 */
function ddsg_query_vars ( $vars ) {
	$vars[] = "pg";
	return $vars;
}

/* 
 * Display sitemap if trigger is found
 */
function ddsg_generate_sitemap($content) {
	if (strpos($content, "<!-- ddsitemapgen -->") !== FALSE) {
		$content = preg_replace('/<p>\s*<!--(.*)-->\s*<\/p>/i', "<!--$1-->", $content);
		$content = str_replace('<!-- ddsitemapgen -->', ddsg_create_sitemap(), $content);
	}
	return $content;
}



add_filter('query_vars', 'ddsg_query_vars');
add_filter('rewrite_rules_array', 'ddsg_permalinks'); 

add_filter('the_content', 'ddsg_generate_sitemap');
add_action('admin_menu', 'ddsg_add_option_pages');

?>