<?php 

/* 
Dagon Design Sitemap Generator v3.x
http://www.dagondesign.com/articles/sitemap-generator-plugin-for-wordpress/

Polish Language File
by Michal Ochman, http://michoch.ovh.org
*/


// Text shown on sitemap page 

define('DDSG_PAGE_HEADER', '<h2>Strony</h2>');
define('DDSG_POST_HEADER', '<h2>Posty</h2>');
define('DDSG_CAT_HEADER', '<strong>Kategoria:</strong>');
define('DDSG_NO_TITLE', '(Bez tytułu)');
define('DDSG_VIEW_XML', 'Zobacz mapę strony w XML');
define('DDSG_CREDITS', 'Wtyczka stworzona przez');

// Navigation method 1
// Example: Page 2 of 5 : Previous : Next

define('DDSG_NAV1_PAGE', 'Strona');
define('DDSG_NAV1_OF', 'z');
define('DDSG_NAV1_PREV', 'Poprzednia');
define('DDSG_NAV1_NEXT', 'Następna');

// Navigation method 2
// Example: Pages: 1 2 3 4 5

define('DDSG_NAV2_PAGE', 'Strony:');


// Text shown in options page 
 
define('DDSG_DEFAULTS_LOADED', 'Domyślne opcje wczytane!');
define('DDSG_CONFIG_UPDATED', 'Ustawienia zapisane!');

define('DDSG_FOR_INFO', 'Informacje i aktualności:');
define('DDSG_DEFAULT_NOTICE', '<strong>Aktualizujesz?</strong> Jeśli aktualizujesz wtyczkę do nowej wersji, kliknij przycisk <strong>Wczytaj ustawienia domyślne</strong>, który znajdziesz poniżej. Niektóre opcje mogły się zmienić.');

define('DDSG_LANGUAGE', 'Język');
define('DDSG_LANGUAGE_DESC', 'Pliki językowe zlokalizowane są w <strong>/wp-content/plugins/sitemap-generator/lang/</strong>');
define('DDSG_GENERAL_OPTIONS', 'Ustawienia główne');
define('DDSG_ITEMS_PER_PAGE', 'Pozycji na stronę:');
define('DDSG_ITEMS_PER_PAGE_INFO', 'Ustaw 0 by nie ograniczać');
define('DDSG_SITEMAP_SLUG', 'Znacznik mapy strony:');
define('DDSG_SITEMAP_SLUG_INFO', 'Jeśli korzystasz z permalinks, wpisz znacznik mapy strony');
define('DDSG_SITEMAP_GENERATION', 'Generowanie mapy strony');
define('DDSG_SHOW', 'Pokaż:');
define('DDSG_SHOW_BOTH', 'Strony i posty');
define('DDSG_SHOW_POSTS', 'Tylko posty');
define('DDSG_SHOW_PAGES', 'Tylko strony');
define('DDSG_WHICH_FIRST', 'Jeśli strony i posty, które pierwsze:');
define('DDSG_WHICH_FIRST_POSTS', 'Najpierw posty');
define('DDSG_WHICH_FIRST_PAGES', 'Najpierw strony');
define('DDSG_POST_SORT', 'Kolejność sortowania postów:');
define('DDSG_POST_SORT_T', 'Po tytule');
define('DDSG_POST_SORT_DA', 'Po dacie (najpierw starsze)');
define('DDSG_POST_SORT_DD', 'Po dacie (najpierw nowsze)');
define('DDSG_PAGE_SORT', 'Kolejność sortowania stron:');
define('DDSG_PAGE_SORT_T', 'Po tytule');
define('DDSG_PAGE_SORT_DA', 'Po dacie (najpierw starsze)');
define('DDSG_PAGE_SORT_DD', 'Po dacie (najpierw nowsze)');
define('DDSG_PAGE_SORT_MA', 'Jak w menu (rosnąco)');
define('DDSG_PAGE_SORT_MD', 'Jak w menu (malejąco)');
define('DDSG_POST_COMMENTS', 'Pokaż ilość komentarzy obok postów:');
define('DDSG_PAGE_COMMENTS', 'Pokaż ilość komentarzy obok stron:');
define('DDSG_ZERO_COMMENTS', 'Pokazuj również, gdy 0 komentarzy:');
define('DDSG_MULTI_POSTS', 'Pokaż posty w wielu kategoriach tylko w jednej kategorii:');
define('DDSG_POST_DATES', 'Pokaż daty obok postów:');
define('DDSG_PAGE_DATES', 'Pokaż daty obok stron:');
define('DDSG_DATE_FORMAT', 'Format daty (gdy pokazywana):');
define('DDSG_DATE_FORMAT_DESC', 'Użyj formatowania <a href="http://us3.php.net/date" target="_blank">PHP date()</a>');
define('DDSG_EXCLUSIONS', 'Wykluczenia');
define('DDSG_EXCLUDED_CATS', 'Wyklucz kategorie:');
define('DDSG_EXCLUDED_CATS_DESC', '- ID Kategorii, oddzielone przecinkami<br />- Podkategorie również będą wykluczone');
define('DDSG_EXCLUDED_PAGES', 'Wyklucz strony:');
define('DDSG_EXCLUDED_PAGES_DESC', '- ID Stron, oddzielone przecinkami<br />- Podstrony również będą wykluczone');
define('DDSG_HIDE_FUTURE', 'Ukryj posty z przyszłą datą');
define('DDSG_HIDE_PASS', 'Ukryj pozycje chronione hasłem:');
define('DDSG_NAVIGATION', 'Nawigacja');
define('DDSG_NAV_METHOD', 'Metoda nawigacji mapy strony:');
define('DDSG_NAV_WHERE', 'Pokaż nawigację mapy strony:');
define('DDSG_NAV_WHERE_TOP', 'Na górze');
define('DDSG_NAV_WHERE_BOT', 'Na dole');
define('DDSG_NAV_WHERE_BOTH', 'Na górze i na dole');
define('DDSG_MISC', 'Inne');
define('DDSG_XML_PATH', 'Pełna ścieżka do mapy strony w XML:');
define('DDSG_XML_PATH_DESC', 'Jeśli dodatkowo używasz wtyczki mapy strony w XML, możesz tutaj podać ścieżkę do pliku XML by link do tego pliku został dodany do mapy strony');
define('DDSG_XML_WHERE', 'Pokaż link do pliku XML:');
define('DDSG_XML_WHERE_LAST', 'Na końcu ostatniej strony');
define('DDSG_XML_WHERE_EVERY', 'Na końcu każdej strony');
define('DDSG_NEW_WINDOW', 'Linki mapy strony otwieraj w nowym oknie:');

define('DDSG_DEFAULT_BUTTON', 'Wczytaj ustawienia domyślne');
define('DDSG_UPDATE_BUTTON', 'Zapisz ustawienia');

?>
