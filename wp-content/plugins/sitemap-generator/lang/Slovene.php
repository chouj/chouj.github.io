<?php 

/* 
Dagon Design Sitemap Generator v3.x
http://www.dagondesign.com/articles/sitemap-generator-plugin-for-wordpress/

English Language File
*/


// Text shown on sitemap page 

define('DDSG_PAGE_HEADER', '<h2>Strani</h2>');
define('DDSG_POST_HEADER', '<h2>Zapisi</h2>');
define('DDSG_CAT_HEADER', '<strong>Kategorija:</strong>');
define('DDSG_NO_TITLE', '(Ni naslova)');
define('DDSG_VIEW_XML', 'Poglejte XML mapo strani');
define('DDSG_CREDITS', 'Plugin by');

// Navigation method 1
// Example: Page 2 of 5 : Previous : Next

define('DDSG_NAV1_PAGE', 'Stran');
define('DDSG_NAV1_OF', 'od');
define('DDSG_NAV1_PREV', 'Prej&scaron;nja');
define('DDSG_NAV1_NEXT', 'Naslednja');

// Navigation method 2
// Example: Pages: 1 2 3 4 5

define('DDSG_NAV2_PAGE', 'Strani:');


// Text shown in options page 
 
define('DDSG_DEFAULTS_LOADED', 'Default Options Loaded!');
define('DDSG_CONFIG_UPDATED', 'Configuration Updated!');

define('DDSG_FOR_INFO', 'For information and updates, please visit:');
define('DDSG_DEFAULT_NOTICE', '<strong>Upgrading?</strong> If you are upgrading from a previous version, click the <strong>Load Default Options</strong> button below. Some settings may have changed.');

define('DDSG_LANGUAGE', 'Language');
define('DDSG_LANGUAGE_DESC', 'Language files are located in <strong>/wp-content/plugins/sitemap-generator/lang/</strong>');
define('DDSG_GENERAL_OPTIONS', 'General Options');
define('DDSG_ITEMS_PER_PAGE', 'Items per page:');
define('DDSG_ITEMS_PER_PAGE_INFO', 'Set to 0 for unlimited');
define('DDSG_SITEMAP_SLUG', 'Sitemap page slug:');
define('DDSG_SITEMAP_SLUG_INFO', 'If using permalinks, enter the slug of your sitemap page');
define('DDSG_SITEMAP_GENERATION', 'Sitemap Generation');
define('DDSG_SHOW', 'What to show:');
define('DDSG_SHOW_BOTH', 'Pages and posts');
define('DDSG_SHOW_POSTS', 'Just posts');
define('DDSG_SHOW_PAGES', 'Just pages');
define('DDSG_WHICH_FIRST', 'If showing both, which first:');
define('DDSG_WHICH_FIRST_POSTS', 'Posts first');
define('DDSG_WHICH_FIRST_PAGES', 'Pages first');
define('DDSG_POST_SORT', 'Post sort order:');
define('DDSG_POST_SORT_T', 'By title');
define('DDSG_POST_SORT_DA', 'By post date (oldest first)');
define('DDSG_POST_SORT_DD', 'By post date (newest first)');
define('DDSG_PAGE_SORT', 'Page sort order:');
define('DDSG_PAGE_SORT_T', 'By title');
define('DDSG_PAGE_SORT_DA', 'By page date (oldest first)');
define('DDSG_PAGE_SORT_DD', 'By page date (newest first)');
define('DDSG_PAGE_SORT_MA', 'By menu order (ascending)');
define('DDSG_PAGE_SORT_MD', 'By menu order (descending)');
define('DDSG_POST_COMMENTS', 'Show comment count after posts:');
define('DDSG_PAGE_COMMENTS', 'Show comment count after pages:');
define('DDSG_ZERO_COMMENTS', 'If showing comment counts, display when zero:');
define('DDSG_MULTI_POSTS', 'Show multi-category posts only in one category:');
define('DDSG_POST_DATES', 'Show dates after posts:');
define('DDSG_PAGE_DATES', 'Show dates after pages:');
define('DDSG_DATE_FORMAT', 'Date format (if showing dates):');
define('DDSG_DATE_FORMAT_DESC', 'Use <a href="http://us3.php.net/date" target="_blank">PHP date() formatting</a>');
define('DDSG_EXCLUSIONS', 'Exclusions');
define('DDSG_EXCLUDED_CATS', 'Excluded categories:');
define('DDSG_EXCLUDED_CATS_DESC', '- Category IDs, separated by commas<br />- Sub-categories will also be excluded');
define('DDSG_EXCLUDED_PAGES', 'Excluded pages:');
define('DDSG_EXCLUDED_PAGES_DESC', '- Page IDs, separated by commas<br />- Sub-pages will also be excluded');
define('DDSG_HIDE_FUTURE', 'Hide future-dated posts');
define('DDSG_HIDE_PASS', 'Hide password-protected items:');
define('DDSG_NAVIGATION', 'Navigation');
define('DDSG_NAV_METHOD', 'Sitemap navigation method:');
define('DDSG_NAV_WHERE', 'Show sitemap navigation:');
define('DDSG_NAV_WHERE_TOP', 'At the top');
define('DDSG_NAV_WHERE_BOT', 'At the bottom');
define('DDSG_NAV_WHERE_BOTH', 'At both top and bottom');
define('DDSG_MISC', 'Miscellaneous');
define('DDSG_XML_PATH', 'Full path to XML sitemap:');
define('DDSG_XML_PATH_DESC', 'If you are also using an XML sitemap plugin, you can enter the path to the XML file here, and a link to it will be added to your sitemap page');
define('DDSG_XML_WHERE', 'Where to show XML sitemap link:');
define('DDSG_XML_WHERE_LAST', 'At the end of the last page');
define('DDSG_XML_WHERE_EVERY', 'At the end of every page');
define('DDSG_NEW_WINDOW', 'Sitemap links open in new window:');

define('DDSG_DEFAULT_BUTTON', 'Load Default Options');
define('DDSG_UPDATE_BUTTON', 'Update options');

?>
