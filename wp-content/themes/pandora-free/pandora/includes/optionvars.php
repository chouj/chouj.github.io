<?php
$themename = "WhiteLite";
$shortname = "theme";
$options = array (
 
array( "name" => "Design",
	"type" => "title"),
 
array( "type" => "open"), 

array( "name" => "Color Scheme",
	"desc" => "Select from the list of color schemes.",
	"id" => $shortname."_color_scheme",
	"type" => "select",
    "std" => "Default",
	"options" => array("Default", "Green", "Red", "Yellow", "Teal", "Orange", "Purple", "Pink", )),

array( "type" => "close"),

array( "name" => "Header",
	"type" => "title"),
 
array( "type" => "open"),

array( "name" => "Blurb/Advertisement",
	"desc" => "would you like to display a blurb or advertisement in the header.",
	"id" => $shortname."_blurb_ad",
	"type" => "select",
    "std" => "Advertisement",
	"options" => array("Blurb", "Advertisement", "Nothing")),		
array( "name" => "Blurb Text",
	"desc" => "text you would like display in the blurb(about us) section.",
	"id" => $shortname."_blurb_content",
	"type" => "textarea",
	"std" => "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque At vero eos"),
array( "name" => "Blurb Title",
	"desc" => "If selected, what would you like as the header for your blurb.",
	"id" => $shortname."_blurb_title",
	"type" => "text",
	"std" => "About us"),
array( "name" => "Advertisement url",
	"desc" => "If selected, type the url of the banner advertisement url here.",
	"id" => $shortname."_advert_url",
	"type" => "text",
	"std" => "http://www.desiredthemes.com"),
array( "name" => "Advertisement image",
	"desc" => "If selected, type the url of the banner advertisement image here.",
	"id" => $shortname."_advert_img",
	"type" => "text",
	"std" => "http://templateup.com/wp7/wp-content/themes/desiredthemes/images/advertisement.gif"),

array( "type" => "close"),

array( "name" => "Twitter",
	"type" => "title"),
	
array( "type" => "open"),
	
array( "name" => "Twitter",
	"desc" => "would you like twitter to display your last tweet.",
	"id" => $shortname."_twitter_active",
	"type" => "select",
    "std" => "Enable",
	"options" => array("Enable", "Disable")),	
array( "name" => "Twitter Username",
	"desc" => "username to display your last tweet.",
	"id" => $shortname."_twitter_name",
	"type" => "text",
	"std" => "desiredthemes"),
array( "name" => "Twitter Title",
	"desc" => "Header for your last tweet, Blank for no title.",
	"id" => $shortname."_twitter_title",
	"type" => "text",
	"std" => "My Latest Tweet"),

array( "type" => "close"),

array( "name" => "Post Length",
	"type" => "title"),
 
array( "type" => "open"),	

array( "name" => "Truncate Posts",
	"desc" => "Would you like your posts automatically shortened to the ammount of characters you would like.",
	"id" => $shortname."_truncate_option",
	"type" => "select",
    "std" => "Enabled",
	"options" => array("Enabled", "Disabled")),

array( "name" => "Post length",
	"desc" => "how many characters to display for each post on the main page, search page, archives and tags.",
	"id" => $shortname."_post_excerpt",
	"type" => "text",
	"std" => "600"),
	
array( "type" => "close"),
	
array( "name" => "Footer",
	"type" => "title"),
 
array( "type" => "open"),
	
array( "name" => "Footer links",
	"desc" => "Select which links you would like to display in the footer(pages/categories)",
	"id" => $shortname."_footer_links",
	"type" => "select",
    "std" => "Categories",
	"options" => array("Pages", "Categories")),

array( "type" => "close") 
);
?>