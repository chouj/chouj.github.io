<?php 

/* 
Dagon Design Sitemap Generator v3.x
http://www.dagondesign.com/articles/sitemap-generator-plugin-for-wordpress/

BrazilianPortuguese File
Esta traducao foi feita por Mauricio Samy Silva http://www.maujor.com/
*/


// Textos constantes da pagina que contem o Mapa do Site 

define('DDSG_PAGE_HEADER', '<h2>P&#225;ginas</h2>');
define('DDSG_POST_HEADER', '<h2>Posts</h2>');
define('DDSG_CAT_HEADER', '<strong>Categoria:</strong>');
define('DDSG_NO_TITLE', '(Sem T&#237;tulo)');
define('DDSG_VIEW_XML', 'Ver o Mapa do Site em XML');
define('DDSG_CREDITS', 'Plugin por');

// Metodo de navegacao 1
// Exemplo: Page 2 de 5 : Anterior : Proxima

define('DDSG_NAV1_PAGE', 'P&#225;gina');
define('DDSG_NAV1_OF', 'de');
define('DDSG_NAV1_PREV', 'Anterior');
define('DDSG_NAV1_NEXT', 'Pr&#243;xima');

// Metodo de navegacao 2
// Exemplo: Paginas: 1 2 3 4 5

define('DDSG_NAV2_PAGE', 'P&#225;ginas:');


// Textos constantes no link Opcoes do Painel Administrativo 
 
define('DDSG_DEFAULTS_LOADED', 'Op&#231;&#245;es padr&#227;o carregadas!');
define('DDSG_CONFIG_UPDATED', 'Configura&#231;&#227;o atualizada!');

define('DDSG_FOR_INFO', 'Para informa&#231;&#245;es e atualiza&#231;&#245;es visite:');
define('DDSG_DEFAULT_NOTICE', '<strong>Fazendo upgrade?</strong> Se voc&#234; estiver fazendo upgrade a partir de vers&#245;es anteriores click o bot&#227;o <strong>Carregar op&#231;&#245;es padr&#227;o </strong> localizado no final desta p&#225;gina. Algumas configura&#231;&#245;es podem ter mudado.');

define('DDSG_LANGUAGE', 'Idioma');
define('DDSG_LANGUAGE_DESC', 'Os arquivos de idiomas est&#227;o em: <strong>/wp-content/plugins/sitemap-generator/lang/</strong>');
define('DDSG_GENERAL_OPTIONS', 'Op&#231;&#245;es Gerais');
define('DDSG_ITEMS_PER_PAGE', 'Items por p&#225;gina:');
define('DDSG_ITEMS_PER_PAGE_INFO', 'Defina 0 para um n&#250;mero ilimitado de items');
define('DDSG_SITEMAP_SLUG', 'T&#237;tulo curto para a p&#225;gina que cont&#233;m o mapa do site:');
define('DDSG_SITEMAP_SLUG_INFO', 'Se voc&#234; estiver usando permalink, entre o t&#237;tulo curto para a p&#225;gina que cont&#233;m o mapa do site');
define('DDSG_SITEMAP_GENERATION', 'Configura&#231;&#245;es para o Mapa do Site');
define('DDSG_SHOW', 'O que mostrar:');
define('DDSG_SHOW_BOTH', 'P&#225;ginas e Posts');
define('DDSG_SHOW_POSTS', 'Somente posts');
define('DDSG_SHOW_PAGES', 'Somente p&#225;ginas');
define('DDSG_WHICH_FIRST', 'Caso mostrar ambas. Qual delas em primeiro?:');
define('DDSG_WHICH_FIRST_POSTS', 'Posts primeiro');
define('DDSG_WHICH_FIRST_PAGES', 'P&#225;ginas primeiro');
define('DDSG_POST_SORT', 'Ordenar posts por:');
define('DDSG_POST_SORT_T', 'T&#237;tulo');
define('DDSG_POST_SORT_DA', 'Data (a partir dos mais antigos)');
define('DDSG_POST_SORT_DD', 'Data (a partir dos mais recentes)');
define('DDSG_PAGE_SORT', 'Ordenar p&#225;ginas por:');
define('DDSG_PAGE_SORT_T', 'T&#237;tulo');
define('DDSG_PAGE_SORT_DA', 'Data (a partir dos mais antigos)');
define('DDSG_PAGE_SORT_DD', 'Data (a partir dos mais recentes))');
define('DDSG_PAGE_SORT_MA', 'Ordenar pelo menu (ascendente)');
define('DDSG_PAGE_SORT_MD', 'Ordenar pelo menu (descendente)');
define('DDSG_POST_COMMENTS', 'Mostrar quantidade de coment&#225;rios antes de cada post:');
define('DDSG_PAGE_COMMENTS', 'Mostrar quantidade de coment&#225;rios depois de cada post:');
define('DDSG_ZERO_COMMENTS', 'Se optou por mostrar, mostrar zero quando n&#227;o houver coment&#225;rio:');
define('DDSG_MULTI_POSTS', 'Mostrar posts classificados em v&#225;ria categorias, como pertencentes a uma s&#243;	 categoria:');
define('DDSG_POST_DATES', 'Mostrar a data depois do post:');
define('DDSG_PAGE_DATES', 'Mostrar a data depois da p&#225;gina:');
define('DDSG_DATE_FORMAT', 'Formato da data (quando mostrada):');
define('DDSG_DATE_FORMAT_DESC', 'Use o formato <a href="http://us3.php.net/date" target="_blank">PHP date()</a>');
define('DDSG_EXCLUSIONS', 'Exclus&#245;es');
define('DDSG_EXCLUDED_CATS', 'Categorias a excluir:');
define('DDSG_EXCLUDED_CATS_DESC', '- Separe por v&#237;rgula as IDs das categorias<br />- Sub categorias ser&#227;o excluidas tamb&#233;m');
define('DDSG_EXCLUDED_PAGES', 'P&#225;ginas a excluir:');
define('DDSG_EXCLUDED_PAGES_DESC', '- Separe por v&#237;rgula as IDs das p&#225;ginas<br />- Sub p&#225;ginas ser&#227;o excluidas tamb&#233;m');
define('DDSG_HIDE_FUTURE', 'N&#227;o mostrar os posts pr&#233; datados para o futuro');
define('DDSG_HIDE_PASS', 'N&#227;o mostrar items protegidos por senha:');
define('DDSG_NAVIGATION', 'Navega&#231;&#227;o');
define('DDSG_NAV_METHOD', 'M&#233;todo de navega&#231;&#227;o no Mapa do Site:');
define('DDSG_NAV_WHERE', 'Mostrar a navega&#231;&#227;o do Mapa do Site:');
define('DDSG_NAV_WHERE_TOP', 'No topo');
define('DDSG_NAV_WHERE_BOT', 'No rodap&#233;');
define('DDSG_NAV_WHERE_BOTH', 'No topo e no rodap&#233;');
define('DDSG_MISC', 'Miscel&#226;nea');
define('DDSG_XML_PATH', 'Caminho para o Mapa do Site em XML:');
define('DDSG_XML_PATH_DESC', 'Se voc&#234; estiver usando um plugin para gerar Mapa do Site em XML voc&#234; poder&#225; entrar aqui, o caminho para o arquivo daquele Mapa XML e um link ser&#225; acresentado na p&#225;gina deste Mapa do Site');
define('DDSG_XML_WHERE', 'Onde mostrar o link para o Mapa do Site em XML:');
define('DDSG_XML_WHERE_LAST', 'No final da &#250;ltima p&#225;gina');
define('DDSG_XML_WHERE_EVERY', 'No final de cada uma das p&#225;ginas');
define('DDSG_NEW_WINDOW', 'Links no Mapa do Site abrem em outra janela:');

define('DDSG_DEFAULT_BUTTON', 'Carregar op&#231;&#245;es padr&#227;o');
define('DDSG_UPDATE_BUTTON', 'Atualizar op&#231;&#245;es');

?>
