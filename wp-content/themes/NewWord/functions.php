<?php
/* 
Theme: NewRealm8
Name: 设计笔记 NewRealm 系列主题
Site: http://www.idevs.cn
*/
require get_template_directory() . '/ajax-comment/do.php';//ajax评论

function dopt($e){return stripslashes(get_option($e));}

// ---- 初始化 -

if (function_exists('register_nav_menus')){ // 注册菜单
register_nav_menus( array(
'header_nav' => __('站点导航'),
'footer_nav' => __('底部菜单')
) );
}
// 激活小工具
 if (function_exists('register_sidebar'))
{
    register_sidebar(array(
    'name' => '我的工具',
    'before_widget' => '<li>',
    'after_widget' => '</li>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    )); 

    register_sidebar(array(
    'name' => '我的订阅',
    'before_widget' => '<li>',
    'after_widget' => '</li>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    )); 
}

add_action('wp_ajax_nopriv_load_postlist', 'load_postlist_callback'); // 引入AJAX
add_action('wp_ajax_load_postlist', 'load_postlist_callback');
function load_postlist_callback(){
$postlist = '';
$paged = $_POST["paged"];
$total = $_POST["total"];
$category = $_POST["category"];
$author = $_POST["author"];
$tag = $_POST["tag"];
$search = $_POST["search"];
$year = $_POST["year"];
$month = $_POST["month"];
$day = $_POST["day"];
$query_args = array(
"posts_per_page" => get_option('posts_per_page'),
"cat" => $category,
"tag" => $tag,
"author" => $author,
"post_status" => "publish",
"post_type" => "post",
"paged" => $paged,
"s" => $search,
"year" => $year,
"monthnum" => $month,
"day" => $day
);
$the_query = new WP_Query( $query_args );
while ( $the_query->have_posts() ){
$the_query->the_post();
$postlist .= make_post_section();
}
$code = $postlist ? 200 : 500;
wp_reset_postdata();
$next = ( $total > $paged )? ( $paged + 1 ) : '' ;
echo json_encode(array('code'=>$code,'postlist'=>$postlist,'next'=> $next));
die;
}

// - 初始化结束 ----
// -------------------------------------------------------------------------
// ---- 优化代码 -

remove_action( 'wp_head', 'feed_links_extra', 3 ); // 额外的feed,例如category, tag页
remove_action( 'wp_head', 'wp_generator' ); //隐藏wordpress版本
remove_filter('the_content', 'wptexturize'); //取消标点符号转义
remove_action( 'admin_print_scripts',	'print_emoji_detection_script'); // 禁用Emoji表情
remove_action( 'admin_print_styles',	'print_emoji_styles');
remove_action( 'wp_head',		'print_emoji_detection_script',	7);
remove_action( 'wp_print_styles',	'print_emoji_styles');
remove_filter( 'the_content_feed',	'wp_staticize_emoji');
remove_filter( 'comment_text_rss',	'wp_staticize_emoji');
remove_filter( 'wp_mail',		'wp_staticize_emoji_for_email');
add_filter('login_errors', create_function('$a', "return null;")); //取消登录错误提示
add_filter( 'show_admin_bar', '__return_false' ); // 删除AdminBar
if ( function_exists('add_theme_support') )add_theme_support('post-thumbnails'); //添加特色缩略图支持
add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); //移除菜单冗余代码
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);
function my_css_attributes_filter($var) {
return is_array($var) ? array_intersect($var, array('current-menu-item','current-post-ancestor','current-menu-ancestor','current-menu-parent')) : '';
}
function gravatar_cn( $url ){ // Gravatar头像使用中国服务器
$gravatar_url = array('0.gravatar.com','1.gravatar.com','2.gravatar.com');
return str_replace( $gravatar_url, 'cn.gravatar.com', $url );
}
add_filter( 'get_avatar_url', 'gravatar_cn', 4 );
function theme_noself_ping( &$links ) { // 阻止站内文章互相Pingback 
$home = get_option( 'home' );
foreach ( $links as $l => $link )
if ( 0 === strpos( $link, $home ) )
unset($links[$l]); 
}
add_action('pre_ping','theme_noself_ping');

function theme_disable_autosave() { // 禁止自动保存修订版
wp_deregister_script('autosave');
}
add_action('wp_print_scripts','theme_disable_autosave' );
remove_action('pre_post_update','wp_save_post_revision' );


function Bing_add_theme_support_title(){ // 网页标题
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'Bing_add_theme_support_title' );

 function enable_more_buttons($buttons) { // 编辑器增强
 $buttons[] = 'hr'; 
 $buttons[] = 'del'; 
 $buttons[] = 'sub'; 
 $buttons[] = 'sup';
 $buttons[] = 'fontselect';
 $buttons[] = 'fontsizeselect';
 $buttons[] = 'cleanup';
 $buttons[] = 'styleselect';
 $buttons[] = 'wp_page';
 $buttons[] = 'anchor'; 
 $buttons[] = 'backcolor'; 
 return $buttons;
 } 
add_filter("mce_buttons_3", "enable_more_buttons");

// - 优化结束 ----
// -------------------------------------------------------------------------
// ---- 个性化代码 -

function embed_images($content) { // 评论贴图
$content = preg_replace('/\[img=?\]*(.*?)(\[\/img)?\]/e', '"<img src=\"$1\" alt=\"" . basename("$1") . "\" />"', $content);
return $content;
}
add_filter('comment_text', 'embed_images');

function idevs_login_style() { echo '<meta name="robots" content="none"/><link rel="stylesheet" id="wp-admin-css" href="'.get_bloginfo('template_directory').'/style.css" type="text/css" />';}
add_action('login_head', 'idevs_login_style');
add_filter('login_headerurl', create_function(false,"return get_bloginfo('url');"));
add_filter('login_headertitle', create_function(false,"return get_bloginfo('name');"));
// - 个性化结束 ----
// -------------------------------------------------------------------------
// ---- 垃圾评论拦截代码 -

class anti_spam { // 拦截机器评论
function anti_spam() {
if ( !current_user_can('level_0') ) {
add_action('template_redirect', array($this, 'w_tb'), 1);
add_action('init', array($this, 'gate'), 1);
add_action('preprocess_comment', array($this, 'sink'), 1);
}
}
function w_tb() {
if ( is_singular() ) {
ob_start(create_function('$input','return preg_replace("#textarea(.*?)name=([\"\'])comment([\"\'])(.+)/textarea>#",
"textarea$1name=$2w$3$4/textarea><textarea name=\"comment\" cols=\"100%\" rows=\"4\" style=\"display:none\"></textarea>",$input);') );
}
}
function gate() {
if ( !empty($_POST['w']) && empty($_POST['comment']) ) {
$_POST['comment'] = $_POST['w'];
} else {
$request = $_SERVER['REQUEST_URI'];
$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '隐瞒';
$IP= isset($_SERVER["HTTP_X_FORWARDED_FOR"]) ? $_SERVER["HTTP_X_FORWARDED_FOR"] . ' (透过代理)' : $_SERVER["REMOTE_ADDR"];
$way = isset($_POST['w'])? '手动操作' : '未经评论表格';
$spamcom = isset($_POST['comment'])? $_POST['comment']: null;
$_POST['spam_confirmed'] = "请求: ". $request. "\n来路: ". $referer. "\nIP: ". $IP. "\n方式: ". $way. "\n內容: ". $spamcom. "\n -- 已备案 --";
}
}
function sink( $comment ) {
if ( !empty($_POST['spam_confirmed']) ) {
if ( in_array( $comment['comment_type'], array('pingback', 'trackback') ) ) return $comment;
// 方法一: 直接挡掉, 將 die(); 前面两斜线刪除即可.
die();
// 方法二: 标记为 spam, 留在资料库检查是否误判.
// add_filter('pre_comment_approved', create_function('', 'return "spam";'));
// $comment['comment_content'] = "[ 防火墙提示：此条评论疑似Spam! ]\n". $_POST['spam_confirmed'];
}
return $comment;
	}
	}
	$anti_spam = new anti_spam();

function scp_comment_post( $incoming_comment ) { // 纯英文评论拦截
$pattern = '/[一-龥]/u';
if(!preg_match($pattern, $incoming_comment['comment_content'])) {
		exit('<head><meta charset="UTF-8" /></head><p><br><span style="color:#C00;">提交失败：</span>抱歉，程序检测到您可能为Spam，本次提交失败！<br><span style="color:#2AE">解决方案：</span>请输入中文（Chinese）再次尝试！</p><br>');
		//die(); // 直接挡掉，无提示
}
return( $incoming_comment );
}
add_filter('preprocess_comment', 'scp_comment_post');

// 评论@回复
function idevs_comment_add_at( $comment_text, $comment = '') {
  if( $comment->comment_parent > 0) {
    $comment_text = '@<a href="#comment-' . $comment->comment_parent . '">'.get_comment_author( $comment->comment_parent ) . '</a> ' . $comment_text;
  }

  return $comment_text;
}
add_filter( 'comment_text' , 'idevs_comment_add_at', 20, 2);

// - 垃圾评论拦截结束 ----
// -------------------------------------------------------------------------
// ---- 高级功能 -

add_action('comment_post', 'comment_mail_schedule');
function comment_mail_schedule($comment_id){
    //延迟 60s 发送邮件
    wp_schedule_single_event( time()+60, 'comment_mail_event',array($comment_id));
}
add_action('comment_mail_event','comment_mail_notify');

function comment_mail_notify($comment_id) { //评论邮件通知
$comment = get_comment($comment_id);
$parent_id = $comment->comment_parent ? $comment->comment_parent : '';
$spam_confirmed = $comment->comment_approved;
if (($parent_id != '') && ($spam_confirmed != 'spam') && (!get_comment_meta($parent_id,'_deny_email',true)) && (get_option('admin_email') != get_comment($parent_id)->comment_author_email)) {
$wp_email = 'no-reply@' . preg_replace('#^www\.#', '', strtolower($_SERVER['SERVER_NAME']));
$to = trim(get_comment($parent_id)->comment_author_email);
$subject = '你在 [' . get_option("blogname") . '] 的留言有了新回复';
$message = '<table class="email" style=" width:720px;margin:auto;font-size: 16px; line-height: 1.4;font-family:黑体">
<tbody>
<tr>
<td style="padding-top:40px;padding-right:5%;padding-bottom:10px;padding-left:5%;color:#333332">
<div class="email-header" style="margin-bottom: 20px;">
<div class="email-logo-wrapper" style="font-size:40px;color: #3eae5f;border-bottom: 2px solid #3eae5f;padding: 0 0 5px 0;">
' . get_option("blogname") . '
</div>
</div>
<div>
<p style="border-left: 22px solid #3eae5f;padding: 0 10px;">' . trim(get_comment($parent_id)->comment_author) . '，您在文章<strong style="font-weight:bold">《' . get_the_title($comment->comment_post_ID) . '》</strong>中的评论：</p>
<p style="line-height: 36px;margin: 30px 60px;text-align: center;">"' . trim(get_comment($parent_id)->comment_content) . '"</p>
<p style="text-align: right;border-right: 22px solid #3eae5f;padding: 0 10px;">—— 有了新回复</p>
<div style="margin-top:30px;padding-top:26px;border-top:1px solid #e5e5e5;font-size:16px;color:#333332;overflow:hidden">
<div style="width: 50px;float: left;margin: 0 10px 0 0;border-right: 1px solid #ddd;padding: 0 10px 0 0;">
<a target="_blank" style="text-decoration:none;display:block;width:50px;float:left;" href="' . htmlspecialchars(get_comment_link($parent_id)) . '">'. get_avatar($comment->comment_author_email,50). '</a>
<a target="_blank" style="color:#ffffff;text-decoration:none;display:inline-block;min-height: 24px;line-height: 24px;width: 50px;outline:0;background:#3eae5f;font-size: 14px;text-align:center;font-style:normal;font-weight:400;border:0;vertical-align:bottom;white-space:nowrap;" href="' . htmlspecialchars(get_comment_link($parent_id)) . '">查看</a>
</div>
' . trim($comment->comment_content) . '
</div>
<div style="color:#b3b3b1;font-size:14px;text-align: right;">本邮件由系统自动生成，<span style="color:#3eae5f">请勿回复</span>！</div>
</div>
</td>
</tr>
<tr>
<td style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:12px;text-align:center;color:#b3b3b1">
<div style="padding-top:16px;border-top:1px solid #e5e5e5">Sent by <a target="_blank" style="color:#b3b3b1" href="' . home_url() . '">' . get_option("blogname") . '</a> · Since 2012 </div>
</td>
</tr>
</tbody>
</table>';
$from = "From: \"" . get_option('blogname') . "\" <$wp_email>";
$headers = "$from\nContent-Type: text/html; charset=" . get_option('blog_charset') . "\n";
wp_mail( $to, $subject, $message, $headers );
}
};

// AJAX文章列表翻页
function make_post_section(){
global $post;
	// * 文章列表样式 ****
$post_section = '<article class="post" itemscope itemtype="http://schema.org/BlogPosting">
<h2 itemprop="name headline"><a href="'. get_permalink() . '">' . get_the_title() . '</a></h2>

<img src="'.esc_url( Bing_crop_thumbnail( get_content_first_image(get_the_content()), 180, 120 ) ).'"/>

<p>' . mb_strimwidth(strip_shortcodes(strip_tags(apply_filters('the_content', $post->post_content))), 0, 200,"...") . '</p>
<div class="info">
<div class="time">'.get_the_date('Y-m-d').'</div>
<div class="tags">'.get_comments_number().' Comments</div>
</div>
<div class="clearfix"></div>
</article>';
return $post_section;
}
function load_postlist_button(){
global $wp_query;
if (2 > $GLOBALS["wp_query"]->max_num_pages) {
return;
} else {
$button = '<button id="loadmore" class="button button--primary"';
if (is_category()) $button .= ' data-category="' . get_query_var('cat') . '"';
if (is_author()) $button .=' data-author="' . get_query_var('author') . '"';
if (is_tag()) $button .=' data-tag="' . get_query_var('tag') . '"';
if (is_search()) $button .=' data-search="' . get_query_var('s') . '"';
if (is_date() ) $button .=' data-year="' . get_query_var('year') . '" data-month="' . get_query_var('monthnum') . '" data-day="' . get_query_var('day') . '"';
$button .= ' data-paged="2" data-action="load_postlist" data-total="' . $GLOBALS["wp_query"]->max_num_pages . '">Load more</button>';
return $button;
}
}
// 缩略图技术 by：http://www.bgbk.org
if( !defined( 'THEME_THUMBNAIL_PATH' ) ) define( 'THEME_THUMBNAIL_PATH', '/cache/theme-thumbnail' ); //存储目录
function Bing_build_empty_index( $path ){ //生成空白首页
	$index = $path . '/index.php';
	if( is_file( $index ) ) return;
	wp_mkdir_p( $path );
	file_put_contents( $index, "<?php\n// Silence is golden.\n" );
}
function Bing_crop_thumbnail( $url, $width, $height = null ){ //裁剪图片
	$width = (int) $width;
	$height = empty( $height ) ? $width : (int) $height;
	$hash = md5( $url );
	$file_path = WP_CONTENT_DIR . THEME_THUMBNAIL_PATH . "/$hash-$width-$height.png";
	$file_url = content_url( THEME_THUMBNAIL_PATH . "/$hash-$width-$height.png" );
	if( is_file( $file_path ) ) return $file_url;
	$editor = wp_get_image_editor( $url );
	if( is_wp_error( $editor ) ) return $url;
	$size = $editor->get_size();
	if( !$dims = image_resize_dimensions( $size['width'], $size['height'], $width, $height, true ) ) return $url;
	$cmp_x = $size['width'] / $width;
	$cmp_y = $size['height'] / $height;
	$cmp = min( $cmp_x, $cmp_y );
	$min_width = round( $width * $cmp );
	$min_height = round( $height * $cmp );
	$crop = $editor->crop( $dims[2], $dims[3], $min_width, $min_height, $width, $height );
	if( is_wp_error( $crop ) ) return $url;
	Bing_build_empty_index( WP_CONTENT_DIR . THEME_THUMBNAIL_PATH );
	$save = $editor->save( $file_path, 'image/png' );
	return is_wp_error( $save ) ? $url : $file_url;
}
function Bing_add_support_post_thumbnails(){ //特色缩略图支持
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'Bing_add_support_post_thumbnails' );
//获取文章第一张图片
function get_content_first_image($content){
	if ( $content === false ) $content = get_the_content(); 
	preg_match_all('|<img.*?src=[\'"](.*?)[\'"].*?>|i', $content, $images);
	if($images){
		return $images[1][0];
	}else{
		return false;
	}
}
// 读者墙
if(!function_exists("deep_in_array")) {
    function deep_in_array($value, $array) { // 返还数组序号
        $i = -1;
        foreach($array as $item => $v) {
            $i++;
            if($v["email"] == $value){
                return $i;
            }
        }
        return -1;
    }
}

function get_active_friends($num = null,$size = null,$days = null) {
    $num = $num ? $num : 15;
    $size = $size ? $size : 34;
    $days = $days ? $days : 30;
    $array = array();
    $comments = get_comments( array('status' => 'approve','author__not_in'=>1,'date_query'=>array('after' => $days . ' days ago')) );
    if(!empty($comments))    {
        foreach($comments as $comment){
            $email = $comment->comment_author_email;
            $author = $comment->comment_author;
            $url = $comment->comment_author_url;
            $data = human_time_diff(strtotime($comment->comment_date));
            if($email!=""){
                $index = deep_in_array($email, $array);
                if( $index > -1){
                    $array[$index]["number"] +=1;
                }else{
                    array_push($array, array(
                        "email" => $email,
                        "author" => $author,
                        "url" => $url,
                        "date" => $data,
                        "number" => 1
                    ));
                }
            }
        }
        foreach ($array as $k => $v) {
            $edition[] = $v['number'];
        }
        array_multisort($edition, SORT_DESC, $array); // 数组倒序排列
    }
    $output = '<ul class="active-items">';
    if(empty($array)) {
        $output = '<li>none data.</li>';
    } else {
        $max = ( count($array) > $num ) ? $num : count($array);
        
        for($o=0;$o < $max;$o++) {
            $v = $array[$o];
            $active_avatar = get_avatar($v["email"],$size);
            $active_url = $v["url"] ? $v["url"] : "javascript:;";
            $active_alt = $v["author"] . ' - 共'. $v["number"]. ' 条评论，最后评论于'. $v["date"].'前。';
            $output .= '<li class="active-item" data-info="'.$active_alt.'"><a target="_blank" rel="external nofollow" href="'.$active_url.'" title="'.$active_alt.'">'.$active_avatar.'</a></li>';
        }
        
    }
    $output .= '</ul>';
    return  $output;
}

function active_shortcode( $atts, $content = null ) {

    extract( shortcode_atts( array(
            'num' => '',
            'size' => '',
            'days' => '',
        ),
        $atts ) );

    return get_active_friends($num,$size,$days);

}
add_shortcode('active', 'active_shortcode');

// 链接重定向跳转
add_filter('get_comment_author_link', 'add_redirect_comment_link', 5);
add_filter('comment_text', 'add_redirect_comment_link', 99);
function add_redirect_comment_link($text = ''){
$text=str_replace("href='", "target='_blank' href='" . get_option('home') . "/link?url=", $text);
return $text;
}

// 全部配置完毕
?>