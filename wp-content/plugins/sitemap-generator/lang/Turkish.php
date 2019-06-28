<?php 

/* 
Dagon Design Sitemap Generator v3.x
http://www.dagondesign.com/articles/sitemap-generator-plugin-for-wordpress/

Turkish Language File
Translator: SoulSmasher
http://www.soulsmasher.net
Admin of phpfusion-tr.com - Official PHP Fusion Turkish Support Site
*/


// Text shown on sitemap page 

define('DDSG_PAGE_HEADER', '<h2>Sayfalar</h2>');
define('DDSG_POST_HEADER', '<h2>Mesajlar</h2>');
define('DDSG_CAT_HEADER', '<strong>Kategori:</strong>');
define('DDSG_NO_TITLE', '(Ba&#351;l&#305;k Yok)');
define('DDSG_VIEW_XML', 'XML Site Haritas&#305;n&#305; G&#246;ster');
define('DDSG_CREDITS', 'Plugin yazar&#305;:');

// Navigation method 1
// Example: Page 2 of 5 : Previous : Next

define('DDSG_NAV1_PAGE', 'Sayfa');
define('DDSG_NAV1_OF', ', &#350;u kadar&#305; i&#231;inden - ');
define('DDSG_NAV1_PREV', '&#246;nceki');
define('DDSG_NAV1_NEXT', 'Sonraki');

// Navigation method 2
// Example: Pages: 1 2 3 4 5

define('DDSG_NAV2_PAGE', 'Sayfalar:');


// Text shown in options page 
 
define('DDSG_DEFAULTS_LOADED', 'Standart Ayarlar Y&#252;klendi!');
define('DDSG_CONFIG_UPDATED', 'Ayarlar G&#252;ncellendi!');

define('DDSG_FOR_INFO', 'Bilgi ve g&#252;ncellemeler i&#231;in web sitesi:');
define('DDSG_DEFAULT_NOTICE', '<strong>G&#252;ncelliyor Musunuz?</strong> eðer daha &#246;nceki bir s&#252;r&#252;mden g&#252;ncelleme yap&#305;yorsan&#305;z, l&#252;tfen a&#351;að&#305;daki <strong>Standart Ayarlar&#305; Y&#252;kle</strong> butonuna bas&#305;n&#305;z. Baz&#305; ayarlar &#351;ekilleri deði&#351;mi&#351; olabilir &#231;&#252;nk&#252;.');

define('DDSG_LANGUAGE', 'Dil');
define('DDSG_LANGUAGE_DESC', 'Dil dosyalar <strong>/wp-content/plugins/sitemap-generator/lang/</strong> klas&#246;r&#252;nde bulunmaktad&#305;r');
define('DDSG_GENERAL_OPTIONS', 'Genel Ayarlar');
define('DDSG_ITEMS_PER_PAGE', 'Sayfa Ba&#351;&#305;na g&#246;sterilecek miktar:');
define('DDSG_ITEMS_PER_PAGE_INFO', 'S&#305;n&#305;rs&#305;z olms&#305; i&#231;in 0 yaz&#305;n');
define('DDSG_SITEMAP_SLUG', 'Sitemap sayfa a&#231;&#305;klamas&#305;:');
define('DDSG_SITEMAP_SLUG_INFO', 'Eðer permalink kullan&#305;yorsan&#305;z site haritan&#305;z&#305;n a&#231;&#305;klamas&#305;n&#305; da girin');
define('DDSG_SITEMAP_GENERATION', 'Site haritas&#305; olu&#351;turma');
define('DDSG_SHOW', 'G&#246;sterilecekler:');
define('DDSG_SHOW_BOTH', 'Sayfalar ve mesajlar');
define('DDSG_SHOW_POSTS', 'Sadece mesajlar');
define('DDSG_SHOW_PAGES', 'Sadece sayfalar');
define('DDSG_WHICH_FIRST', 'Eðer ikisini de g&#246;sterecekseniz, &#246;ncelikli olan:');
define('DDSG_WHICH_FIRST_POSTS', 'Mesajlar &#246;ncelikli');
define('DDSG_WHICH_FIRST_PAGES', 'Sayfalar &#246;ncelikli');
define('DDSG_POST_SORT', 'Mesaj dizme s&#305;ralamas&#305;:');
define('DDSG_POST_SORT_T', 'Ba&#351;l&#305;k ismine g&#246;re');
define('DDSG_POST_SORT_DA', 'Eklenme tarihine g&#246;re (eskiden yeniye)');
define('DDSG_POST_SORT_DD', 'Eklenme tarihine g&#246;re (yeniden eskiye)');
define('DDSG_PAGE_SORT', 'Sayfa dizme s&#305;ralamas&#305;:');
define('DDSG_PAGE_SORT_T', 'Ba&#351;l&#305;k a&#305;dna g&#246;re');
define('DDSG_PAGE_SORT_DA', 'Eklenme tarihine g&#246;re (en &#246;nce eskiler)');
define('DDSG_PAGE_SORT_DD', 'Eklenme tarihine g&#246;re (en &#246;nce yeniler)');
define('DDSG_PAGE_SORT_MA', 'Men&#252; dizili&#351;ine g&#246;re (artan)');
define('DDSG_PAGE_SORT_MD', 'Men&#252; dizili&#351;ine g&#246;re (azalan)');
define('DDSG_POST_COMMENTS', 'Yorum say&#305;s&#305;n&#305; mesajdan sonra g&#246;ster:');
define('DDSG_PAGE_COMMENTS', 'Yorum say&#305;s&#305;n&#305; sayfadan sonra g&#246;ster:');
define('DDSG_ZERO_COMMENTS', 'Eðer yorum say&#305;s&#305; 0 ise g&#246;sterilecek:');
define('DDSG_MULTI_POSTS', 'Birden fazla kategoriye sahip mesajlar&#305; tek kategori alt&#305;nda g&#246;ster:');
define('DDSG_POST_DATES', 'Mesajlardan sonra tarih g&#246;ster:');
define('DDSG_PAGE_DATES', 'Sayfalardan sonra tarih g&#246;ster:');
define('DDSG_DATE_FORMAT', 'Tarih Format&#305; (eðer tarih g&#246;steriliyorsa):');
define('DDSG_DATE_FORMAT_DESC', '<a href="http://us3.php.net/date" target="_blank">PHP date() formatting</a> u kullan');
define('DDSG_EXCLUSIONS', 'D&#305;&#351;arda kalanlar (istsnalar - diðer)');
define('DDSG_EXCLUDED_CATS', 'Diðer kategoriler:');
define('DDSG_EXCLUDED_CATS_DESC', '- Kategory IDleri, &#231;izgilerle ayr&#305;lm&#305;&#351;<br />- Alt kategoriler de d&#305;&#351;arda kalanlar grubuna girecektir');
define('DDSG_EXCLUDED_PAGES', 'Diðer sayfalar:');
define('DDSG_EXCLUDED_PAGES_DESC', '- Sayfa IDleri, &#231;izgilerle ayr&#305;lm&#305;&#351;<br />- Alt sayfalar da d&#305;&#351;arda kalanlar grubuna girecektir');
define('DDSG_HIDE_FUTURE', 'Gelecek zaman ait mesajlar&#305; gizle');
define('DDSG_HIDE_PASS', '&#351;ifre korumal&#305; itemlar&#305; gizle:');
define('DDSG_NAVIGATION', 'Navigasyon');
define('DDSG_NAV_METHOD', 'Site haritas&#305; navigasyon metodu:');
define('DDSG_NAV_WHERE', 'Site haritas&#305; navigasyonunu g&#246;ster:');
define('DDSG_NAV_WHERE_TOP', '&#220;stte');
define('DDSG_NAV_WHERE_BOT', 'Altta');
define('DDSG_NAV_WHERE_BOTH', 'Hem &#252;stte hem altta');
define('DDSG_MISC', 'Diðer');
define('DDSG_XML_PATH', 'XML Site Haritas&#305;n&#305;n tam adresi:');
define('DDSG_XML_PATH_DESC', 'Eðer XML site haritas&#305; kullan&#305;yorsan&#305;z, buraya ve site haritas&#305; sayfan&#305;za tam linkini ekleyebilirsiniz onun tam linkini girebilir');
define('DDSG_XML_WHERE', 'XML Site haritas&#305; linkini g&#246;sterilecek yer:');
define('DDSG_XML_WHERE_LAST', 'Son Sayfan&#305;n en alt&#305;nda');
define('DDSG_XML_WHERE_EVERY', 'Her sayfan&#305;n en alt&#305;nda');
define('DDSG_NEW_WINDOW', 'Site haritas&#305; linkleri yeni pencerede a&#231;&#305;ls&#305;n:');

define('DDSG_DEFAULT_BUTTON', 'Standart ayarlar&#305; y&#252;kle');
define('DDSG_UPDATE_BUTTON', 'Ayarlar&#305; g&#252;ncelle');

?>
