<?php

function the_post_image($size='thumbnail', $img_class='', $boolean=false) {
	global $post, $wpdb;
	if (empty($post) || empty($post->ID)) return;
	$sql = "SELECT wposts.*, wpostmeta.meta_value as post_image
					FROM $wpdb->posts wposts
					JOIN $wpdb->postmeta wpostmeta ON wpostmeta.post_id = wposts.ID
						AND wpostmeta.meta_key = 'post_img'
						AND wpostmeta.meta_value != ''
					WHERE wposts.ID = '{$post->ID}'";
	$post_result = $wpdb->get_results($sql, OBJECT);
	if ($boolean) return !empty($post_result);
	if (empty($post_result)) return;
	$post_result = $post_result[0];
	$post_img = $post_result->post_image;
	$post_img_small = preg_replace("/^(.*?)\.(.{3,4})$/", '$1-150x150.$2', $post_result->post_image);
	
	
	if ($size == 'featured') { echo '<span style="display: block;" class="img"><img width="377px" height=" 161px" src="'.$post_img.'" alt="'; the_title(); echo'" /></span>'; }
	else if ($size == 'full_size') { echo '<span style="display: block;" class="full_size_img"><img width="540px" height=" 260px" src="'.$post_img.'" alt="'; the_title(); echo'" /></span>'; }
	else if ($size == 'thumbnail') {echo '<a style="display: block;" href="'; the_permalink(); echo '" title="'; the_title(); echo '" class="thumbnailimg"><img width="145px" height="145px" src="'.$post_img_small.'" alt="'; the_title(); echo'" class="thumbnail" /></a>'; }
	else if ($size == 'src') { echo $post_img; return; }
	else if ($size == 'src_small') { echo $post_img_small; return; }
    else {
	echo '<span style="display: block;" class="img"><span style="display: block;" class="img_wrap"><span style="display: block;"><a href="' . get_permalink($post_result->ID) . '" title="' . $post_result->post_title . '"><img src="' . $size . '" alt="' . $post_result->post_title . '" class="' . $img_class . '" /></a></span></span></span>';
	}
}

?>