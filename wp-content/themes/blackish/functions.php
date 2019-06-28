<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
		'name' => 'Sidebar',    
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="sidebartitle">',
        'after_title' => '</h2>',
    ));

// Search 	
	function widget_zone_out_search() {
?>

	<li class="list-search">
	  <?php include (TEMPLATEPATH . '/searchform.php'); ?>
	</li>
	
<?php
}
if ( function_exists('register_sidebar_widget') )
    register_sidebar_widget(__('Search'), 'widget_zone_out_search');
?>