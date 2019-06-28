<?php 

/* 
Dagon Design Sitemap Generator v3.x
http://www.dagondesign.com/articles/sitemap-generator-plugin-for-wordpress/

Japanese Language File
*/


// Text shown on sitemap page 

define('DDSG_PAGE_HEADER', '<h2>ページ</h2>');
define('DDSG_POST_HEADER', '<h2>投稿</h2>');
define('DDSG_CAT_HEADER', '<strong>カテゴリー:</strong>');
define('DDSG_NO_TITLE', '(タイトルなし)');
define('DDSG_VIEW_XML', 'XML Sitemapを見る');
define('DDSG_CREDITS', 'Plugin by');

// Navigation method 1
// Example: Page 2 of 5 : Previous : Next

define('DDSG_NAV1_PAGE', 'ページ');
define('DDSG_NAV1_OF', 'of');
define('DDSG_NAV1_PREV', '前のページ');
define('DDSG_NAV1_NEXT', '次のページ');

// Navigation method 2
// Example: Pages: 1 2 3 4 5

define('DDSG_NAV2_PAGE', 'ページ:');


// Text shown in options page 
 
define('DDSG_DEFAULTS_LOADED', 'デフォルトの設定を読み込みました。');
define('DDSG_CONFIG_UPDATED', '設定を更新しました。');

define('DDSG_FOR_INFO', '更新等に関する情報はこちらをご覧ください:');
define('DDSG_DEFAULT_NOTICE', '<strong>アップグレードされた方へ -</strong> 古いバージョンからアップグレードされた場合は, ページ下の<strong>「デフォルトに戻す」</strong>ボタンをクリックしてください。いくつかの設定が変更されています。');

define('DDSG_LANGUAGE', '言語');
define('DDSG_LANGUAGE_DESC', '言語ファイルは<strong>/wp-content/plugins/sitemap-generator/lang/</strong>に置かれています。');
define('DDSG_GENERAL_OPTIONS', '一般オプション');
define('DDSG_ITEMS_PER_PAGE', '1ページごとの表示数:');
define('DDSG_ITEMS_PER_PAGE_INFO', '「0」を指定した場合、無制限に表示します');
define('DDSG_SITEMAP_SLUG', 'サイトマップページのページスラッグ:');
define('DDSG_SITEMAP_SLUG_INFO', 'パーマリンクを使用する場合は、サイトマップページのページスラッグを設定してください。');
define('DDSG_SITEMAP_GENERATION', 'サイトマップ出力オプション');
define('DDSG_SHOW', '表示する項目:');
define('DDSG_SHOW_BOTH', 'ページと投稿全て');
define('DDSG_SHOW_POSTS', '投稿のみ');
define('DDSG_SHOW_PAGES', 'ページのみ');
define('DDSG_WHICH_FIRST', 'ページ／投稿の表示順:');
define('DDSG_WHICH_FIRST_POSTS', '投稿を先に表示');
define('DDSG_WHICH_FIRST_PAGES', 'ページを先に表示');
define('DDSG_POST_SORT', '投稿の表示順:');
define('DDSG_POST_SORT_T', 'タイトル順');
define('DDSG_POST_SORT_DA', '投稿日順 (古いもの順)');
define('DDSG_POST_SORT_DD', '投稿日順 (新しいもの順)');
define('DDSG_PAGE_SORT', 'ページ表示順:');
define('DDSG_PAGE_SORT_T', 'タイトル順');
define('DDSG_PAGE_SORT_DA', '投稿日順 (古いもの順)');
define('DDSG_PAGE_SORT_DD', '投稿日順 (新しいもの順)');
define('DDSG_PAGE_SORT_MA', 'メニュー表示順 (昇順)');
define('DDSG_PAGE_SORT_MD', 'メニュー表示順 (降順)');
define('DDSG_POST_COMMENTS', '投稿のコメント数を表示:');
define('DDSG_PAGE_COMMENTS', 'ページのコメント数を表示:');
define('DDSG_ZERO_COMMENTS', 'コメント数の表示で0件も表示:');
define('DDSG_MULTI_POSTS', '複数カテゴリーを指定した投稿の場合、一回だけ表示:');
define('DDSG_POST_DATES', '投稿日を表示:');
define('DDSG_PAGE_DATES', 'ページの作成日を表示:');
define('DDSG_DATE_FORMAT', '日付表示のフォーマット :');
define('DDSG_DATE_FORMAT_DESC', '<a href="http://us3.php.net/date" target="_blank">PHP の date() 関数フォーマット仕様をご覧下さい</a>');
define('DDSG_EXCLUSIONS', '表示しない項目');
define('DDSG_EXCLUDED_CATS', 'このカテゴリーを含めない:');
define('DDSG_EXCLUDED_CATS_DESC', '- カテゴリーID（カンマ区切り）<br />- サブカテゴリーも表示されません');
define('DDSG_EXCLUDED_PAGES', 'このページを含めない:');
define('DDSG_EXCLUDED_PAGES_DESC', '- ページID（カンマ区切り<br />- サブページも表示されません');
define('DDSG_HIDE_FUTURE', '未来の日付の投稿を表示しない:');
define('DDSG_HIDE_PASS', 'パスワードで保護されたページを表示しない:');
define('DDSG_NAVIGATION', 'ページ番号');
define('DDSG_NAV_METHOD', 'ページ番号の表示方法:');
define('DDSG_NAV_WHERE', 'ページ番号の表示位置:');
define('DDSG_NAV_WHERE_TOP', '一番上');
define('DDSG_NAV_WHERE_BOT', '一番下');
define('DDSG_NAV_WHERE_BOTH', '上と下の両方');
define('DDSG_MISC', 'その他');
define('DDSG_XML_PATH', 'XML Sitemapのファイルパス:');
define('DDSG_XML_PATH_DESC', 'XML Sitemap プラグインを使用している場合、XMLファイルパスを入力してください。サイトマップページからリンクされます。');
define('DDSG_XML_WHERE', 'XML Sitemapの表示位置:');
define('DDSG_XML_WHERE_LAST', '最終ページの一番下');
define('DDSG_XML_WHERE_EVERY', '全てのページの一番下');
define('DDSG_NEW_WINDOW', 'XML Sitemapを新しいウィンドウで開く:');

define('DDSG_DEFAULT_BUTTON', 'デフォルトに戻す');
define('DDSG_UPDATE_BUTTON', '更新');

?>
