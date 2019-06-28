<?php 

/* 
Dagon Design Sitemap Generator v3.x
http://www.dagondesign.com/articles/sitemap-generator-plugin-for-wordpress/

Arabic Language File by http://neeart.com
*/


// Text shown on sitemap page 

define('DDSG_PAGE_HEADER', '<h2>صفحات</h2>');
define('DDSG_POST_HEADER', '<h2>تدوينات</h2>');
define('DDSG_CAT_HEADER', '<strong>تصنيفات</strong>');
define('DDSG_NO_TITLE', '(بلا عنوان)');
define('DDSG_VIEW_XML', 'شاهد خريطة الموقع XML');
define('DDSG_CREDITS', 'الإضافة من');

// Navigation method 1
// Example: Page 2 of 5 : Previous : Next

define('DDSG_NAV1_PAGE', 'صفحة');
define('DDSG_NAV1_OF', 'من');
define('DDSG_NAV1_PREV', 'السابق');
define('DDSG_NAV1_NEXT', 'الآتي');

// Navigation method 2
// Example: Pages: 1 2 3 4 5

define('DDSG_NAV2_PAGE', 'صفحات');


// Text shown in options page 
 
define('DDSG_DEFAULTS_LOADED', 'الخيارات الإفتراضية تم تحميلها!');
define('DDSG_CONFIG_UPDATED', 'تم تحديث الإعدادات!');

define('DDSG_FOR_INFO', 'لمزيد من المعلومات والتحديثات رجاءاً قم بزيارة:');
define('DDSG_DEFAULT_NOTICE', '<strong>ترقية؟</strong> إذا كنت تقوم بالترقية من نسخة سابقة قم بالنقر على <strong>تحميل الخيارات الإفتراضية</strong> على الزر أدناه. بعض الإعدادات قد تتغير.');

define('DDSG_LANGUAGE', 'اللغة');
define('DDSG_LANGUAGE_DESC', 'ملفات اللغة موجود في <strong>/wp-content/plugins/sitemap-generator/lang/</strong>');
define('DDSG_GENERAL_OPTIONS', 'إعدادات عامة');
define('DDSG_ITEMS_PER_PAGE', 'عنصر في الصفحة:');
define('DDSG_ITEMS_PER_PAGE_INFO', 'قيمة 0 لمجموعة غير محدودة');
define('DDSG_SITEMAP_SLUG', 'صفحة خريطة الموقع:');
define('DDSG_SITEMAP_SLUG_INFO', 'إذا كنت تستخدم الروابط الدائمة, ادخل عنوان صفحة خريطة الموقع وقم بتحديث الروابط الدائمة لحفظ التغييرات!');
define('DDSG_SITEMAP_GENERATION', 'مولد خريطة الموقع');
define('DDSG_SHOW', 'مالذي يظهر:');
define('DDSG_SHOW_BOTH', 'صفحات وتدوينات');
define('DDSG_SHOW_POSTS', 'تدوينات فقط');
define('DDSG_SHOW_PAGES', 'صفحات فقط');
define('DDSG_WHICH_FIRST', 'إذا كانت جميعها, أيهم أولاً:');
define('DDSG_WHICH_FIRST_POSTS', 'التدوينات أولاً');
define('DDSG_WHICH_FIRST_PAGES', 'الصفحات أولاً');
define('DDSG_POST_SORT', 'ترتيب التدوينات:');
define('DDSG_POST_SORT_T', 'بالموضوع');
define('DDSG_POST_SORT_DA', 'بالتاريخ (الأقدم أولاً)');
define('DDSG_POST_SORT_DD', 'بالتاريخ (الجديد أولاً)');
define('DDSG_PAGE_SORT', 'ترتيب الصفحات:');
define('DDSG_PAGE_SORT_T', 'بالموضوع');
define('DDSG_PAGE_SORT_DA', 'بالتاريخ (الأقدم أولاً)');
define('DDSG_PAGE_SORT_DD', 'بالتاريخ (الجديد أولاً)');
define('DDSG_PAGE_SORT_MA', 'بالقائمة (تصاعدي)');
define('DDSG_PAGE_SORT_MD', 'بالقائمة (تنازلي)');
define('DDSG_POST_COMMENTS', 'أظهر عدد التعليفات بعد التدوينات:');
define('DDSG_PAGE_COMMENTS', 'أظهر عدد التعليقات بعد الصفحات:');
define('DDSG_ZERO_COMMENTS', 'إذا ظهرت عدد التعليقات أظهر العداد إذا كان العدد صفر');
define('DDSG_MULTI_POSTS', 'أظهر التصنيفات الثنائية في تصنيف واحد:');
define('DDSG_POST_DATES', 'أظهر التواريخ في نهاية التدوينات:');
define('DDSG_PAGE_DATES', 'أظهر التواريخ في نهاية الصفحات:');
define('DDSG_DATE_FORMAT', 'شكل التاريخ (إذا كان التاريخ ظاهر):');
define('DDSG_DATE_FORMAT_DESC', 'استخدم <a href="http://us3.php.net/date" target="_blank">PHP تاريخ() نمط</a>');
define('DDSG_EXCLUSIONS', 'إستثنائات');
define('DDSG_EXCLUDED_CATS', 'اسثنائات التصنيفات:');
define('DDSG_EXCLUDED_CATS_DESC', '- تعاريف التصنيفات, الفصل بينهم بالفواصل ,<br />- الفئات الفرعية سيتم إستثنائها');
define('DDSG_EXCLUDED_PAGES', 'صفحات مستثناة:');
define('DDSG_EXCLUDED_PAGES_DESC', '- تعاريف الصفحات, الفصل بينهم بالفواصل ,<br />- الصفحات الفرعية سيتم إستثنائها');
define('DDSG_HIDE_FUTURE', 'أخفي تواريخ التدوينات المستقبلية');
define('DDSG_HIDE_PASS', 'أخفي كل مايتطلبه رقم سري:');
define('DDSG_NAVIGATION', 'قائمة');
define('DDSG_NAV_METHOD', 'طريقة قائمة خريطة الموقع:');
define('DDSG_NAV_WHERE', 'أظهر قائمة خريطة الموقع:');
define('DDSG_NAV_WHERE_TOP', 'في الأعلى');
define('DDSG_NAV_WHERE_BOT', 'في الأسفل');
define('DDSG_NAV_WHERE_BOTH', 'في كلا الأعلى والأسفل');
define('DDSG_MISC', 'متنوعة');
define('DDSG_XML_PATH', 'الإمتداد الكامل لخريطة الموقع XML:');
define('DDSG_XML_PATH_DESC', 'إذا كنت تستخدم إضافة خريطة الموقع XML, يمكنك إدخال إمتداد الـXML هنا وستضاف في صفحة خريطة موقعك');
define('DDSG_XML_WHERE', 'أين يظهر رابط خريطة الموقع بإمتداد XML');
define('DDSG_XML_WHERE_LAST', 'في نهاية الصفحة الأخيرة');
define('DDSG_XML_WHERE_EVERY', 'في نهاية كل صفحة');
define('DDSG_NEW_WINDOW', 'روابط خريطة الموقع تفتح في صفحة جديدة:');

define('DDSG_DEFAULT_BUTTON', 'تحميل الخيارات الإفتراضية');
define('DDSG_UPDATE_BUTTON', 'تحديث الإعدادات');

?>
