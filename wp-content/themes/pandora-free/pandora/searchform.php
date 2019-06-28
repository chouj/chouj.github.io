<h2 class="widgettitle">Search</h2>
<div class="widget-bg">
<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
<div><input type="text" value="<?php the_search_query(); ?>" name="s" id="s" /></div>
<div><input type="submit" id="searchsubmit" value="<?php _e('Search'); ?>" /></div>
</form>