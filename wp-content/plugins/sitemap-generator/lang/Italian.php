<?php 

/* 
Dagon Design Sitemap Generator v3.x
http://www.dagondesign.com/articles/sitemap-generator-plugin-for-wordpress/

Italian Language File
http://gidibao.net/index.php/2008/04/24/sitemap-generator-in-italiano/
*/


// Testo della pagina della Mappa del Sito

define('DDSG_PAGE_HEADER', '<h2>Pagine</h2>');
define('DDSG_POST_HEADER', '<h2>Articoli</h2>');
define('DDSG_CAT_HEADER', '<strong>Categoria:</strong>');
define('DDSG_NO_TITLE', '(Nessun Titolo)');
define('DDSG_VIEW_XML', 'Vedi l&prime;XML della Mappa del Sito');
define('DDSG_CREDITS', 'Plugin realizzato da');

// Metodo di navigazione 1
// Esempio: Pagina 2 di 5 : Precedente : Successiva

define('DDSG_NAV1_PAGE', 'Pagina');
define('DDSG_NAV1_OF', 'di');
define('DDSG_NAV1_PREV', 'Precedente');
define('DDSG_NAV1_NEXT', 'Successiva');

// Metodo di navigazione 2
// Esempio: Pagina: 1 2 3 4 5

define('DDSG_NAV2_PAGE', 'Pagina:');


// Testo della pagina Opzioni 
 
define('DDSG_DEFAULTS_LOADED', 'Le opzioni predefinite sono state caricate!');
define('DDSG_CONFIG_UPDATED', 'Configurazione aggiornata!');

define('DDSG_FOR_INFO', 'Per ulteriori informazioni ed aggiornamenti, visita la pagina:');
define('DDSG_DEFAULT_NOTICE', '<strong>Hai aggiornato il plugin?</strong> Avessi effettuato l&prime;aggiornamento da una versione precedente, clicca il pulsante <strong>Carica Opzioni Predefinite</strong> qui sotto. Alcune impostazioni potrebbero essere state modificate.');

define('DDSG_LANGUAGE', 'Lingua');
define('DDSG_LANGUAGE_DESC', 'I file di traduzione sono allocati in <strong>/wp-content/plugins/sitemap-generator/lang/</strong>');
define('DDSG_GENERAL_OPTIONS', 'Opzioni Generali');
define('DDSG_ITEMS_PER_PAGE', 'Numero di voci per pagina:');
define('DDSG_ITEMS_PER_PAGE_INFO', 'Imposta a 0 per un numero illimitato');
define('DDSG_SITEMAP_SLUG', 'Pagina alla Mappa del Sito:');
define('DDSG_SITEMAP_SLUG_INFO', 'Facessi uso dei permalinks, inserisci qui il percorso alla tua pagina');
define('DDSG_SITEMAP_GENERATION', 'Creazione della Mappa del Sito');
define('DDSG_SHOW', 'Cosa mostrare:');
define('DDSG_SHOW_BOTH', 'articoli e pagine');
define('DDSG_SHOW_POSTS', 'solo gli articoli');
define('DDSG_SHOW_PAGES', 'solo le pagine');
define('DDSG_WHICH_FIRST', 'Mostrare entrambi e mettere prima:');
define('DDSG_WHICH_FIRST_POSTS', 'gli articoli');
define('DDSG_WHICH_FIRST_PAGES', 'le pagine');
define('DDSG_POST_SORT', 'Articoli disposti per:');
define('DDSG_POST_SORT_T', 'titolo');
define('DDSG_POST_SORT_DA', 'pubblicazione (prima i pi&ugrave; vecchi)');
define('DDSG_POST_SORT_DD', 'pubblicazione (prima i pi&ugrave; recenti)');
define('DDSG_PAGE_SORT', 'Pagine disposte per:');
define('DDSG_PAGE_SORT_T', 'titolo');
define('DDSG_PAGE_SORT_DA', 'pubblicazione (prima le pi&ugrave; vecchie)');
define('DDSG_PAGE_SORT_DD', 'pubblicazione (prima le pi&ugrave; recenti)');
define('DDSG_PAGE_SORT_MA', 'menu (ascendente)');
define('DDSG_PAGE_SORT_MD', 'menu (discendente)');
define('DDSG_POST_COMMENTS', 'Mostra il numero dei commenti dopo l&prime;articolo:');
define('DDSG_PAGE_COMMENTS', 'Mostra il numero dei commenti dopo la pagina:');
define('DDSG_ZERO_COMMENTS', 'Se hai attivato la funzione, mostra anche quando &egrave; zero:');
define('DDSG_MULTI_POSTS', 'Mostra gli articoli appartenenti a pi&ugrave; categorie in una sola categoria:');
define('DDSG_POST_DATES', 'Mostra la data dopo gli articoli:');
define('DDSG_PAGE_DATES', 'Mostra la data dopo le pagine:');
define('DDSG_DATE_FORMAT', 'Formato della data (se la funzione &egrave; stata attivata):');
define('DDSG_DATE_FORMAT_DESC', 'Vedi come <a href="http://us3.php.net/date" target="_blank">PHP date() formatting</a>');
define('DDSG_EXCLUSIONS', 'Esclusioni');
define('DDSG_EXCLUDED_CATS', 'Escludi le categorie:');
define('DDSG_EXCLUDED_CATS_DESC', '- Separare le ID delle categorie con una virgola<br />- Verranno escluse anche le sotto-categorie');
define('DDSG_EXCLUDED_PAGES', 'Escludi le pagine:');
define('DDSG_EXCLUDED_PAGES_DESC', '- Separare le ID delle pagine con una virgola<br />- Verranno escluse anche le sotto-pagine');
define('DDSG_HIDE_FUTURE', 'Nascondi gli articoli non ancora pubblicati');
define('DDSG_HIDE_PASS', 'Nascondi gli elementi protetti dalla password:');
define('DDSG_NAVIGATION', 'Navigazione');
define('DDSG_NAV_METHOD', 'Metodo di navigazione della Mappa del Sito:');
define('DDSG_NAV_WHERE', 'Mostra la navigazione della Mappa del Sito:');
define('DDSG_NAV_WHERE_TOP', 'in alto');
define('DDSG_NAV_WHERE_BOT', 'a pi&egrave; di pagina');
define('DDSG_NAV_WHERE_BOTH', 'entrambe le posizioni');
define('DDSG_MISC', 'Varie');
define('DDSG_XML_PATH', 'Indirizzo completo XML della Mappa del Sito:');
define('DDSG_XML_PATH_DESC', 'se stai facendo uso di un plugin che genera un XML per la mappa del sito, puoi inserire qui l&prime;indirizzo del file XML ed il link sar&agrave; aggiunto alla tua pagina della Mappa del Sito');
define('DDSG_XML_WHERE', 'Mostrare il collegamento al file XML della Mappa del Sito:');
define('DDSG_XML_WHERE_LAST', 'al fondo dell&prime;ultima pagina');
define('DDSG_XML_WHERE_EVERY', 'in coda ad ogni pagina');
define('DDSG_NEW_WINDOW', 'Apri il link alla Mappa del Sito su di una nuova pagina:');

define('DDSG_DEFAULT_BUTTON', 'Carica Opzioni Predefinite');
define('DDSG_UPDATE_BUTTON', 'Aggiorna le Opzioni');

?>
