<?php

/*
Dagon Design Sitemap Generator v3.x
http://www.dagondesign.com/articles/sitemap-generator-plugin-for-wordpress/

Simplified Chinese Language File
*/


// Text shown on sitemap page

define('DDSG_PAGE_HEADER', '<h2>页面</h2>');
define('DDSG_POST_HEADER', '<h2>文章</h2>');
define('DDSG_CAT_HEADER', '<strong>目录：</strong>');
define('DDSG_NO_TITLE', '(无标题)');
define('DDSG_VIEW_XML', '查看 XML 格式站点地图');
define('DDSG_CREDITS', '插件作者：');

// Navigation method 1
// Example: Page 2 of 5 : Previous : Next

define('DDSG_NAV1_PAGE', '当前页：');
define('DDSG_NAV1_OF', '总页数：');
define('DDSG_NAV1_PREV', '前一页');
define('DDSG_NAV1_NEXT', '后一页');

// Navigation method 2
// Example: Pages: 1 2 3 4 5

define('DDSG_NAV2_PAGE', '页号：');


// Text shown in options page

define('DDSG_DEFAULTS_LOADED', '已重置为默认设置！');
define('DDSG_CONFIG_UPDATED', '设置更新成功！');

define('DDSG_FOR_INFO', '查看更多信息并获取本插件的最新版本，请访问：');
define('DDSG_DEFAULT_NOTICE', '<strong>升级提示：</strong> 如果您刚从旧版本升级，请点击最下方的<strong>“载入默认设置”</strong>按钮。');

define('DDSG_LANGUAGE', '插件语言：');
define('DDSG_LANGUAGE_DESC', '语言包文件保存在 <strong>/wp-content/plugins/sitemap-generator/lang/</strong> 目录中');
define('DDSG_GENERAL_OPTIONS', '常规选项');
define('DDSG_ITEMS_PER_PAGE', '每页条目数：');
define('DDSG_ITEMS_PER_PAGE_INFO', '填 0 表示不限制');
define('DDSG_SITEMAP_SLUG', '站点地图页面的缩略名：');
define('DDSG_SITEMAP_SLUG_INFO', '如果您使用了永久链接，请填上站点地图页面的缩略名');
define('DDSG_SITEMAP_GENERATION', '内容选项');
define('DDSG_SHOW', '显示内容：');
define('DDSG_SHOW_BOTH', '文章和页面');
define('DDSG_SHOW_POSTS', '只显示文章');
define('DDSG_SHOW_PAGES', '只显示页面');
define('DDSG_WHICH_FIRST', '如果都显示，哪个在前：');
define('DDSG_WHICH_FIRST_POSTS', '文章在前');
define('DDSG_WHICH_FIRST_PAGES', '页面在前');
define('DDSG_POST_SORT', '文章排序方式：');
define('DDSG_POST_SORT_T', '按标题');
define('DDSG_POST_SORT_DA', '按发布时间 (旧文章在前)');
define('DDSG_POST_SORT_DD', '按发布时间 (新文章在前)');
define('DDSG_PAGE_SORT', '页面排序方式：');
define('DDSG_PAGE_SORT_T', '按标题');
define('DDSG_PAGE_SORT_DA', '按发布时间 (旧页面在前)');
define('DDSG_PAGE_SORT_DD', '按发布时间 (新页面在前)');
define('DDSG_PAGE_SORT_MA', '按页面序号 (升序)');
define('DDSG_PAGE_SORT_MD', '按页面序号 (降序)');
define('DDSG_POST_COMMENTS', '在文章标题后显示评论数：');
define('DDSG_PAGE_COMMENTS', '在页面标题后显示评论数：');
define('DDSG_ZERO_COMMENTS', '评论数为零时依然显示"(0)"字样：');
define('DDSG_MULTI_POSTS', '同时属于多个分类的文章只显示在它的第一个分类下：');
define('DDSG_POST_DATES', '在文章标题后显示发布日期：');
define('DDSG_PAGE_DATES', '在页面标题后显示发布日期：');
define('DDSG_DATE_FORMAT', '日期格式：');
define('DDSG_DATE_FORMAT_DESC', '使用 <a href="http://us3.php.net/date" target="_blank">PHP date()函数中定义的格式</a>');
define('DDSG_EXCLUSIONS', '排除选项');
define('DDSG_EXCLUDED_CATS', '排除目录：');
define('DDSG_EXCLUDED_CATS_DESC', '- 请填入分类 ID，多个 ID 请用英文逗号分隔<br />- 被排除分类的子分类也将被排除');
define('DDSG_EXCLUDED_PAGES', '排除页面：');
define('DDSG_EXCLUDED_PAGES_DESC', '- 请填入页面 ID，多个 ID 请用英文逗号分隔<br />- 被排除页面的子页面也将被排除');
define('DDSG_HIDE_FUTURE', '隐藏未来文章：');
define('DDSG_HIDE_PASS', '隐藏密码保护文章和页面：');
define('DDSG_NAVIGATION', '分页导航条选项');
define('DDSG_NAV_METHOD', '分页导航条的样式：');
define('DDSG_NAV_WHERE', '分页导航条显示在：');
define('DDSG_NAV_WHERE_TOP', '页面的顶部');
define('DDSG_NAV_WHERE_BOT', '页面的底部');
define('DDSG_NAV_WHERE_BOTH', '页面的顶部和底部');
define('DDSG_MISC', '其他选项');
define('DDSG_XML_PATH', 'XML 格式站点地图的完整路径：');
define('DDSG_XML_PATH_DESC', '如果您同时使用了自动创建 XML 格式站点地图的插件，您可以在这里填入它的地址。本插件创建的站点地图中将会显示一个指向该文件的链接。');
define('DDSG_XML_WHERE', 'XML 格式站点地图链接显示在：');
define('DDSG_XML_WHERE_LAST', '最后一页的页尾');
define('DDSG_XML_WHERE_EVERY', '每一页的页尾');
define('DDSG_NEW_WINDOW', '在新窗口打开站点地图页面中的所有链接：');

define('DDSG_DEFAULT_BUTTON', '载入默认设置');
define('DDSG_UPDATE_BUTTON', '更新设置');

?>
