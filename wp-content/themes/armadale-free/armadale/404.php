<?php get_header(); ?>

<h1><?php _e('Error 404 - Not Found', 'blank'); ?></h1>
		
<h2><?php _e('The page you were looking for has either been deleted or moved.', 'blank'); ?></h2>

<?php _e('Do you want to search for it', 'blank'); ?>?
<br />
<?php include (TEMPLATEPATH . "/searchform.php"); ?>


<?php get_sidebar(); ?>

<?php get_footer(); ?>