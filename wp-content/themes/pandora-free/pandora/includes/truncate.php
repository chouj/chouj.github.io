<?php
function truncate($length, $ellipsis) {
$text = get_the_content();
$text = strip_tags($text);
$chars = strlen($text);
$text = substr($text, 0, $length);
if($chars > $length){
$text = substr($text, 0, strripos($text, " "));
} else {}
$text = $text.$ellipsis;
return $text;
}
?>