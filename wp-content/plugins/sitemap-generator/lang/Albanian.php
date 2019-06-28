<?php 

/* 
Dagon Design Sitemap Generator v3.x
http://www.dagondesign.com/articles/sitemap-generator-plugin-for-wordpress/

Albanian Language File
*/


// Text shown on sitemap page 

define('DDSG_PAGE_HEADER', '<h2>Faqe</h2>');
define('DDSG_POST_HEADER', '<h2>Postime</h2>');
define('DDSG_CAT_HEADER', '<strong>Kategori:</strong>');
define('DDSG_NO_TITLE', '(Pa Titull)');
define('DDSG_VIEW_XML', 'Trego Harten XML');
define('DDSG_CREDITS', 'Shtojce nga');

// Navigation method 1
// Example: Page 2 of 5 : Previous : Next

define('DDSG_NAV1_PAGE', 'Faqe');
define('DDSG_NAV1_OF', 'e');
define('DDSG_NAV1_PREV', 'Para');
define('DDSG_NAV1_NEXT', 'Tjeter');

// Navigation method 2
// Example: Pages: 1 2 3 4 5

define('DDSG_NAV2_PAGE', 'Faqe:');


// Text shown in options page 
 
define('DDSG_DEFAULTS_LOADED', 'U Aplikua Konfigurimi Fillestar!');
define('DDSG_CONFIG_UPDATED', 'Konfigurimi u Axhornua!');

define('DDSG_FOR_INFO', 'Per me shume informacione dhe axhornime, jeni te lutur te vizitoni:');
define('DDSG_DEFAULT_NOTICE', '<strong>Axhornim?</strong> Nese jeni duke axhornuar nga nje version i meparshem, klikoni tek butoni <strong>Apliko Konfigurimin Fillestar</strong> . Mund te kete ndryshuar ngonje konfigurim.');

define('DDSG_LANGUAGE', 'Gjuha');
define('DDSG_LANGUAGE_DESC', 'Filet e gjuhes ndodhen ne <strong>/wp-content/plugins/sitemap-generator/lang/</strong>');
define('DDSG_GENERAL_OPTIONS', 'Opsione Gjenerale');
define('DDSG_ITEMS_PER_PAGE', 'Artikuj per faqe:');
define('DDSG_ITEMS_PER_PAGE_INFO', 'Shkruaj 0 per te mos caktuar nje limit');
define('DDSG_SITEMAP_SLUG', 'Slug i perdorur ne harte:');
define('DDSG_SITEMAP_SLUG_INFO', 'Nese po perdorni permalinket, shkruani slugun qe do perdorni per harten');
define('DDSG_SITEMAP_GENERATION', 'Gjenerim Harte');
define('DDSG_SHOW', 'Cfare te publikohet:');
define('DDSG_SHOW_BOTH', 'Faqe dhe postime');
define('DDSG_SHOW_POSTS', 'Vetem postime');
define('DDSG_SHOW_PAGES', 'Vetem faqe');
define('DDSG_WHICH_FIRST', 'Nese po publikohen te dyja, cila me pare:');
define('DDSG_WHICH_FIRST_POSTS', 'Postimet me para');
define('DDSG_WHICH_FIRST_PAGES', 'Faqet me para');
define('DDSG_POST_SORT', 'Renditja e postimeve:');
define('DDSG_POST_SORT_T', 'Sipas titullit');
define('DDSG_POST_SORT_DA', 'Sipas dates (te vjetrat ne fillim)');
define('DDSG_POST_SORT_DD', 'Sipas dates (te rejat ne fillim)');
define('DDSG_PAGE_SORT', 'Renditja e faqeve:');
define('DDSG_PAGE_SORT_T', 'Sipas titullit');
define('DDSG_PAGE_SORT_DA', 'Sipas dates (te vjetrat ne fillim)');
define('DDSG_PAGE_SORT_DD', 'Sipas dates (te rejat ne fillim)');
define('DDSG_PAGE_SORT_MA', 'Sipas renditjes ne menu (ngjites)');
define('DDSG_PAGE_SORT_MD', 'By menu order (zbrites)');
define('DDSG_POST_COMMENTS', 'Publiko sasine e komenteve mbas poseve:');
define('DDSG_PAGE_COMMENTS', 'Publiko sasine e komenteve mbas faqeve:');
define('DDSG_ZERO_COMMENTS', 'Nese po publikohet sasia e komenteve, te tregohet kur ajo eshte zero:');
define('DDSG_MULTI_POSTS', 'Publiko postet qe ndodhen ne shume kategori ne nje kategori te vetme:');
define('DDSG_POST_DATES', 'Trego daten mbas postimit:');
define('DDSG_PAGE_DATES', 'Trego daten mbas faqes:');
define('DDSG_DATE_FORMAT', 'Formatimi i dates (nese po publikohet):');
define('DDSG_DATE_FORMAT_DESC', 'Perdor formatimin <a href="http://us3.php.net/date" target="_blank">PHP date()</a>');
define('DDSG_EXCLUSIONS', 'Perjashtimet');
define('DDSG_EXCLUDED_CATS', 'Perjashto kategorite:');
define('DDSG_EXCLUDED_CATS_DESC', '- ID te Kategorive, te ndara me presje<br />- do te perjashtohen gjithshtu dhe Nen-Kategorite');
define('DDSG_EXCLUDED_PAGES', 'Faqet e perjashtuara:');
define('DDSG_EXCLUDED_PAGES_DESC', '- ID te Faqeve, te ndara me presje<br />- Do te perjashtohen gjithashtu dhe Nen-Faqet');
define('DDSG_HIDE_FUTURE', 'Mos trego postimet e bera ne te ardhmen');
define('DDSG_HIDE_PASS', 'Mos trego artikujt e mbrojtura me fjalekalim:');
define('DDSG_NAVIGATION', 'Lundrimi');
define('DDSG_NAV_METHOD', 'Metoda e Lundrimit ne Harte:');
define('DDSG_NAV_WHERE', 'Trego lundrimin ne harte:');
define('DDSG_NAV_WHERE_TOP', 'Shko siper');
define('DDSG_NAV_WHERE_BOT', 'Shko ne fund');
define('DDSG_NAV_WHERE_BOTH', 'Shko siper dhe ne fund');
define('DDSG_MISC', 'Te Ndryshme');
define('DDSG_XML_PATH', 'Path i plote per tek Harta XML:');
define('DDSG_XML_PATH_DESC', 'Nese jeni duke perdorur nje shtojce per harte XML, mund te shkruani ketu pathin per tek file XML, nje link per ne kete file do te shtohet ne faqen e hartes suaj');
define('DDSG_XML_WHERE', 'Ku te publikohet linku i Hartes XML:');
define('DDSG_XML_WHERE_LAST', 'Ne fund te faqes se fundit');
define('DDSG_XML_WHERE_EVERY', 'Ne fund te cdo faqe');
define('DDSG_NEW_WINDOW', 'Linket ne harte hapen ne nje dritare te re:');

define('DDSG_DEFAULT_BUTTON', 'Apliko Konfigurimin Fillestar');
define('DDSG_UPDATE_BUTTON', 'Axhorno Konfigurimin');

?>
