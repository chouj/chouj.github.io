<?php

/*
Dagon Design Sitemap Generator v3.x
http://www.dagondesign.com/articles/sitemap-generator-plugin-for-wordpress/

Deutsche Sprach Datei von Michael Cvachovec
http://www.cvachovec.de
*/


// Text shown on sitemap page

define('DDSG_PAGE_HEADER', '<h2>Seiten</h2>');
define('DDSG_POST_HEADER', '<h2>Beitr&auml;ge</h2>');
define('DDSG_CAT_HEADER', '<strong>Kategorie:</strong>');
define('DDSG_NO_TITLE', '(Kein Titel)');
define('DDSG_VIEW_XML', 'XML Sitemap anschauen');
define('DDSG_CREDITS', 'Plugin von');

// Navigation method 1
// Example: Page 2 of 5 : Previous : Next

define('DDSG_NAV1_PAGE', 'Seite');
define('DDSG_NAV1_OF', 'von');
define('DDSG_NAV1_PREV', 'vorherige');
define('DDSG_NAV1_NEXT', 'n&auml;chste');

// Navigation method 2
// Example: Pages: 1 2 3 4 5

define('DDSG_NAV2_PAGE', 'Seiten:');


// Text shown in options page

define('DDSG_DEFAULTS_LOADED', 'Standard Einstellungen geladen!');
define('DDSG_CONFIG_UPDATED', 'Konfiguration gespeichert!');

define('DDSG_FOR_INFO', 'F&uuml;r weitere Informationen und Updates, besuchen Sie:');
define('DDSG_DEFAULT_NOTICE', '<strong>Neue Version?</strong> Wenn Sie eine &auml;ltere Version updaten, klicken Sie den <strong>Standard Einstellungen laden</strong> Knopf, unten. Einige Einstellungen k&ouml;nnten sich ge&auml;ndert haben.');

define('DDSG_LANGUAGE', 'Sprache');
define('DDSG_LANGUAGE_DESC', 'Sprachdateien finden Sie in <strong>/wp-content/plugins/sitemap-generator/lang/</strong>');
define('DDSG_GENERAL_OPTIONS', 'Allgemeine Optionen');
define('DDSG_ITEMS_PER_PAGE', 'Eintr&auml;ge pro Seite:');
define('DDSG_ITEMS_PER_PAGE_INFO', 'Auf 0 setzen f&uuml;r alle Eintr&auml;ge auf einer Seite');
define('DDSG_SITEMAP_SLUG', 'Sitemap Seiten Pfad:');
define('DDSG_SITEMAP_SLUG_INFO', 'Wenn Sie Permalinks benutzen, geben Sie den Pfad zu ihrer Sitemap-Seite ein');
define('DDSG_SITEMAP_GENERATION', 'Sitemap Generation');
define('DDSG_SHOW', 'Was soll gezeigt werden:');
define('DDSG_SHOW_BOTH', 'Seiten und Beitr&auml;ge');
define('DDSG_SHOW_POSTS', 'nur Beitr&auml;ge');
define('DDSG_SHOW_PAGES', 'nur Seiten');
define('DDSG_WHICH_FIRST', 'Wenn beides, was zuerst:');
define('DDSG_WHICH_FIRST_POSTS', 'Beitr&auml;ge zuerst');
define('DDSG_WHICH_FIRST_PAGES', 'Seiten zuerst');
define('DDSG_POST_SORT', 'Beitr&auml;ge sortieren nach:');
define('DDSG_POST_SORT_T', 'Titel');
define('DDSG_POST_SORT_DA', 'Beitragsdatum (&auml;ltester zuerst)');
define('DDSG_POST_SORT_DD', 'Beitragsdatum (neuester zuerst)');
define('DDSG_PAGE_SORT', 'Seiten sortieren nach:');
define('DDSG_PAGE_SORT_T', 'Titel');
define('DDSG_PAGE_SORT_DA', 'Datum der Seiten (&auml;lteste zuerst)');
define('DDSG_PAGE_SORT_DD', 'Datum der Seiten (neueste zuerst)');
define('DDSG_PAGE_SORT_MA', 'Men&uuml; aufsteigend');
define('DDSG_PAGE_SORT_MD', 'Men&uuml; absteigend');
define('DDSG_POST_COMMENTS', 'Zeige Anzahl der Kommentare nach dem Beitrag:');
define('DDSG_PAGE_COMMENTS', 'Zeige Anzahl der Kommentare nach der Seite:');
define('DDSG_ZERO_COMMENTS', 'Null (0) anzeigen wenn kein Kommentar vorhanden:');
define('DDSG_MULTI_POSTS', 'Zeige Multi-Kategorie Beitr&auml;ge nur in einer Kategorie:');
define('DDSG_POST_DATES', 'Zeige Datum nach dem Beitrag:');
define('DDSG_PAGE_DATES', 'Zeige Datum nach der Seite:');
define('DDSG_DATE_FORMAT', 'Datums Format (wenn Datum angezeigt wird):');
define('DDSG_DATE_FORMAT_DESC', 'Benutze <a href="http://de.php.net/date" target="_blank">PHP date() Formatierung</a>');
define('DDSG_EXCLUSIONS', 'Ausschl&uuml;sse');
define('DDSG_EXCLUDED_CATS', 'Ausgeschlossene Kategorien:');
define('DDSG_EXCLUDED_CATS_DESC', '- Kategorie IDs, mit Komma trennen<br />- Unterkategorien werden damit auch ausgeschlossen');
define('DDSG_EXCLUDED_PAGES', 'Ausgeschlossene Seiten:');
define('DDSG_EXCLUDED_PAGES_DESC', '- Seiten IDs, mit Komma trennen<br />- Unterseiten werden damit auch ausgeschlossen');
define('DDSG_HIDE_FUTURE', 'Beitr&auml;ge, die erst in der Zukunft ver&ouml;ffentlicht werden, nicht zeigen');
define('DDSG_HIDE_PASS', 'Passwort Gesch&uuml;tztes nicht zeigen :');
define('DDSG_NAVIGATION', 'Navigation');
define('DDSG_NAV_METHOD', 'Methode der Sitemap Navigation:');
define('DDSG_NAV_WHERE', 'Zeige Sitemap Navigation:');
define('DDSG_NAV_WHERE_TOP', 'oben');
define('DDSG_NAV_WHERE_BOT', 'unten');
define('DDSG_NAV_WHERE_BOTH', 'Oben und Unten');
define('DDSG_MISC', 'Verschiedenes');
define('DDSG_XML_PATH', 'Vollst&auml;ndige Pfadangabe zur XML Sitemap:');
define('DDSG_XML_PATH_DESC', 'Wenn Sie ein XML sitemap Plugin benutzen, k&ouml;nnen Sie hier den Pfad zur XML Datei eingeben, und der Link wird auf ihrer Sitemap-Seite angezeigt');
define('DDSG_XML_WHERE', 'Wo soll der XML-Sitemap Link gezeigt werden:');
define('DDSG_XML_WHERE_LAST', 'Am Ende der letzten Seite');
define('DDSG_XML_WHERE_EVERY', 'Am Ende jeder Seite');
define('DDSG_NEW_WINDOW', 'Sitemap Links werden in einem neuen Fenster ge&ouml;ffnet:');

define('DDSG_DEFAULT_BUTTON', 'Standard Einstellungen laden');
define('DDSG_UPDATE_BUTTON', '&Auml;nderungen speichern');

?>
