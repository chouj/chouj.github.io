</div><!-- end.posts-wrap -->
<div class="sidebar-wrap">
	  <?php /* Widgetized sidebar */ if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : ?>
			<div class="widget">
				<?php get_search_form(); ?>
			</div><div class="widget-bottom"></div></div>
			
			<div class="widget">
			<div class="widget-bg">
			<h3 class="widgettitle">Archives</h3>
				<ul>
				     <?php wp_get_archives('type=monthly'); ?>
				</ul>
			</div>
			<div class="widget-bottom"></div>
			</div>
			
			<?php /* If frontpage */ if ( is_home() || is_page() ) { ?>
			

				<div class="widget">
			<div class="widget-bg">
			<h3 class="widgettitle">Meta</h3>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
					<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
					<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
					<?php wp_meta(); ?>
				</ul>
				</div>
			<div class="widget-bottom"></div>
			</div>
			<?php } ?>

			<?php endif; /* End of widgetized sidebar */ ?>
</div><!-- sidebar wrap end -->