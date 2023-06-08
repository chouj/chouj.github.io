<div id="extra"><div id="extra-inner">
	<ul>
		<li class="extra one">
		    <h2 class="extratitle rpost"><?php _e('Recent Posts'); ?></h2>
			<ul class="list-recentpost"><?php get_archives('postbypost', '5', 'custom', '<li>', '</li>'); ?></ul>
		</li>
		
		<li class="extra one">
			<h2 class="extratitle rpost">最新评论</h2>
                        <ul class="list-recentpost"><?php wp_recentcomments('limit=3'); ?></ul>
		</li>

	    <li class="extra two">
			<?php include (TEMPLATEPATH . '/about_text.txt'); /* Open about_text.txt in the theme folder to edit this text */?>	
	    </li>
	</ul>
</div></div><!-- #extra -->