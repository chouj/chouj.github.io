<?php

/**
 * AJAX actions.
 */
function rc_ajax(){
	if($_GET['action'] == 'rc-ajax') {
		$page = (int)$_GET['page'];
		echo rc_get_json($page);
		die();

	} else if($_GET['action'] == 'rc-content') {
		$id = (int)$_GET["id"];
		echo rc_get_content($id);
		die();
	}
}
add_action('init', 'rc_ajax');

/**
 * Retrieve JSON string.
 */
function rc_get_json($page) {
	global $comments;
	$comments = rc_get_comments($page);

	// If comments is zero, return nothing.
	if(!$comments) {
		return '{}';
	}

	return rc_build_json($comments, $page);
}

/**
 * Retrieve comments.
 */
function rc_get_comments($page=1) {
	if($page < 1) {
		$page = 1;
	}

	global $wpdb;
	$options = get_option('wp_recentcomments_options');

	// Control pingback and trackback comments.
	$sql_ping = '';
	if(!$options['ping']) {
		$sql_ping = " AND comment_type != 'pingback' AND comment_type != 'trackback'";
	}

	// Control the comments of administrators.
	$sql_admin = '';
	if(!$options['admin']) {
		global $table_prefix;
		$sql_admin = " AND comment_author_email NOT IN (SELECT A1.user_email FROM $wpdb->users A1, $wpdb->usermeta A2 WHERE A1.ID = A2.user_id AND A2.meta_key = '" . $table_prefix . "capabilities' AND A2.meta_value LIKE '%administrator%')";
	}

	// Control protected comments.
	$post_protected = $_COOKIE['wp-postpass_' . COOKIEHASH];
	$sql_protected = " AND (comment_post_ID = ID AND (post_password = '' OR post_password = '" . $post_protected . "'))";

	// Control private comments.
	global $user_ID;
	$sql_private = " AND (comment_post_ID = ID AND (post_status != 'private' OR post_author = '" . $user_ID . "'))";

	// First comment.
	$start = $options['limit'] * ($page - 1);

	// Need to pick one more so that we can know if there's more comments exist.
	$size = $options['limit'] + 1;

	// Select comments on database.
	$comments_query = "SELECT comment_author, comment_author_email, comment_author_url, comment_ID, comment_post_ID, user_id, REPLACE(comment_content, '\n', '') AS comment_content, comment_type, comment_author_IP, comment_agent, comment_date FROM $wpdb->comments, $wpdb->posts WHERE comment_post_ID = ID AND comment_approved = '1' AND post_status = 'publish'" . $sql_ping . $sql_protected . $sql_private . $sql_admin . " ORDER BY comment_date_gmt DESC LIMIT " . $start . "," . $size;
	$comments = $wpdb->get_results($comments_query);

	return $comments;
}

/**
 * Retrieve specific content of comment by comment ID.
 */
function rc_get_content($id) {
	// If comments id is null, return nothing.
	if(!$id) {
		return '';
	}

	$options = get_option('wp_recentcomments_options');

	// Select comment on database.
	global $wpdb, $comment;
	$comment = $wpdb->get_row("SELECT comment_content, comment_post_ID FROM $wpdb->comments, $wpdb->posts WHERE comment_post_ID = ID AND post_status = 'publish' AND comment_ID = " . $id);

	// Remove blockquote nodes.
	$content = rc_remove_blockquotes_but_outermost($comment->comment_content);

	// Convert characters to smilies.
	if((strlen($content) > 0) && $options['smilies']) {
		$content = convert_smilies($content);
	}

	// Replace relative links to absolute base links in HTML.
	$content = preg_replace(array('/href="#/', '/href=\'#/'), array('href="'. get_permalink($comment->comment_post_ID) . '#', 'href=\''. get_permalink($comment->comment_post_ID) . '#'), $content);

	return wpautop($content);
}

/**
 * Retrieve avatar URL through avatar HTML.
 */
function rc_get_avatar_url($code) {
	return preg_replace(array('/^.+(src=)(\"|\')/i', '/(\"|\')\sclass=(\"|\').+$/i', '/&amp;/i'), array('', '', '&'), $code);
}

/**
 * Retrieve JSON string of comment list.
 */
function rc_build_json($comments, $page) {
	$options = get_option('wp_recentcomments_options');

	$json = '{';
	$json .= rc_build_comments_json($comments);
	$json .= rc_build_navi_json(count($comments), $page);
	$json .= '}';

	return $json;
}

/**
 * Retrieve JSON string of comment.
 */
function rc_build_comments_json($comments) {
	global $comment;
	$options = get_option('wp_recentcomments_options');

	// If there's symbolic comment included, remove it.
	if(count($comments) - $options['limit'] > 0) {
		array_pop($comments);
	}

	$json .= 'items:[';

	$count = 0;
	foreach($comments as $comment) {

		// Remove meaningless characters.
		$content = rc_trim_content($comment->comment_content);

		// Crop content as excerpt.
		$length = (int)$options['length'];
		$matched_content = rc_get_matched_content($content, $length);
		if($matched_content) {
			$content = rc_get_excerpt($matched_content, $length);
		}

		// Formatting title.
		$postTitle = rc_format_title(get_the_title($comment->comment_post_ID));

		// Formatting reviewer name.
		$reviewerName = rc_format_reviewer_name($comment->comment_author);

		// Formatting content.
		$content = rc_format_content($content);

		// Formatting timestamp.
		$timestamp = '';
		if($options['timestamp']) {
			$currentTime = current_time('timestamp');
			$commentTime = get_comment_time('U');
			$timeDiff = $currentTime - $commentTime;
			if($timeDiff <= 2592000) {
				$timestamp = sprintf(__('%s ago', 'wp-recentcomments'), human_time_diff($commentTime, $currentTime));
			} else {
				$timestamp = sprintf(__('%1$s at %2$s', 'wp-recentcomments'), get_comment_date(), get_comment_time());
			}
		}

		if(++$count > 1) {
			$json .= ',{';
		} else {
			$json .= '{';
		}

		// If content has croped, ...
		if($matched_content) {
			$json .= '"ellipsis":"1",';
		}

		// If post titles are included, ...
		if($options['post']) {
			$json .= '"title":"1",';
		}

		// If avatars are included, ...
		if($options['avatar']) {
			$json .= '"avatarImage":"'	. rc_get_avatar_url(get_avatar($comment, $options['avatar_size']))	. '",';
		}

		$json .= '"postTitle":"'		. $postTitle														. '",';
		$json .= '"excerpt":"'			. $content															. '",';
		$json .= '"timestamp":"'		. $timestamp														. '",';
		$json .= '"postUrl":"'			. get_permalink($comment->comment_post_ID)							. '",';
		$json .= '"reviewerName":"'		. $reviewerName														. '",';
		$json .= '"reviewerUrl":"'		. get_comment_author_url()											. '",';
		$json .= '"id":"'				. $comment->comment_ID												. '",';
		$json .= '"type":"'				. $comment->comment_type											. '"';

		$json .= '}';
	}

	$json .= ']';

	return $json;
}

/**
 * Retrieve trimed content.
 */
function rc_trim_content($content) {
	// Remove newline characters.
	$content = preg_replace('/\r\n|\r|\n|\t/', '', $content);

	// Remove blockquote nodes.
	$content = rc_remove_blockquotes($content);

	// Remove HTML tags.
	$content = preg_replace('/\<(.+?)\>/', '', $content);

	return $content;
}

/**
 * Retrieve formatted title.
 */
function rc_format_title($title) {
	// Encode " and '.
	return preg_replace(array('/\<(.+?)\>/', '/\\\/', '/\"/', "/\'/"), array('', '\\\\\\', '\"', "\'"), $title);
}

/**
 * Retrieve formatted reviewer name.
 */
function rc_format_reviewer_name($content) {

	// Encode \, " and '.
	return preg_replace(array('/\\\/', '/\"/', "/\'/"), array('\\\\\\', '\"', "\'"), $content);
}

/**
 * Retrieve formatted content.
 */
function rc_format_content($content) {
	// Convert characters to smilies.
	$options = get_option('wp_recentcomments_options');
	if((strlen($content) > 0) && $options['smilies']) {
		$content = convert_smilies($content);
	}

	// Encode \, " and '.
	return preg_replace(array('/\\\/', '/\"/', "/\'/"), array('\\\\\\', '\"', "\'"), $content);
}

/**
 * Retrieve excerpt.
 */
function rc_get_excerpt($content, $length) {
	$content = join('', array_slice($content, 0, $length));
	return $content;
}

/**
 * Retrieve matched array of content.
 */
function rc_get_matched_content($content, $length) {
	$pa = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|\xe0[\xa0-\xbf][\x80-\xbf]|[\xe1-\xef][\x80-\xbf][\x80-\xbf]|\xf0[\x90-\xbf][\x80-\xbf][\x80-\xbf]|[\xf1-\xf7][\x80-\xbf][\x80-\xbf][\x80-\xbf]/";
	preg_match_all($pa, $content, $matchedContent);

	if(count($matchedContent[0]) <= $length) {
		return false;
	}

	return $matchedContent[0];
}

/**
 * Retrieve JSON string of navigation.
 */
function rc_build_navi_json($commentLength, $pageNumber) {
	$options = get_option('wp_recentcomments_options');

	// if navi is disabled or comment number less than default number, then navi will be hidden
	if(!$options['navi'] || ($pageNumber <= 1 && $commentLength < $options['limit'])) {
		return '';
	}

	$json .= ',navi:{';

	// if comment length is greater than limit, then more comments on 'older' page.
	if($commentLength > $options['limit']) {
		$json .= 'more:"1",';
	}

	$json .= 'page:"' . $pageNumber . '"';
	$json .= '}';

	return $json;
}

/**
 * Remove all blockquote nodes.
 */
function rc_remove_blockquotes($str) {
	$start_pattern = '<blockquote';
	$end_pattern = '</blockquote>';

	// The number of blockquote nodes.
	$quote_count = substr_count(strtolower($str), $start_pattern);

	// If there are 0 blockquote nodes, do nothing.
	if($quote_count <= 0) {
		return $str;

	// If there is 1 blockquote node, remove it.
	} else if($quote_count == 1) {
		$all_pattern = '/(\<blockquote(.*?)\>)(.*)(\<\/blockquote\>)/i';
		return preg_replace($all_pattern, '', $str);
	}

	// If there are more than 1 backquote nodes, pick the first ending tag.
	$end = strpos(strtolower($str), $end_pattern);

	// Loop all the blockquotes.
	while ($end) {
		// Get substring before first ending tag, and pick the last starting tag.
		$str_before_end = substr($str, 0, $end);
		$start = strrpos(strtolower($str_before_end), $start_pattern);

		// Replace blockquote node to separate.
		$sep = ' ';
		$str = substr_replace($str, $sep, $start, $end + strlen($end_pattern) - $start);

		// Pick next ending tag.
		$end = strpos(strtolower($str), $end_pattern);
	}

	return $str;
}

/**
 * Remove blockquote nodes, but the outermost one.
 */
function rc_remove_blockquotes_but_outermost($str) {
	$start_pattern = '<blockquote';
	$end_pattern = '</blockquote>';

	// The number of blockquote nodes.
	$quote_count = substr_count(strtolower($str), $start_pattern);

	// If there are 0 or 1 blockquote node, do nothing.
	if($quote_count <= 1) {
		return $str;
	}

	// If there are more than 1 backquote nodes, create an array to store paragraphs.
	$paragraphs = array();

	// Pick the first ending tag.
	$end = strpos(strtolower($str), $end_pattern);

	// Loop all blockquotes.
	while ($end) {
		// Get substring before first ending tag.
		$str_before_end = substr($str, 0, $end);

		// The number of blockquote nodes in substring.
		$quote_count = substr_count(strtolower($str_before_end), $start_pattern);

		// If there is 1 starting tag, this is outermost and push the substring to paragraph array.
		if($quote_count == 1) {
			$paragraph = substr($str, 0, $end + strlen($end_pattern));
			array_push($paragraphs, $paragraph);
			$sep = '';
			$str = substr_replace($str, $sep, 0, $end + strlen($end_pattern));

		// If there are more than 1 starting tags.
		} else {
			// Pick the last starting tag.
			$start = strrpos(strtolower($str_before_end), $start_pattern);

			// Replace blockquote node to separate.
			$sep = ' ';
			$str = substr_replace($str, $sep, $start, $end + strlen($end_pattern) - $start);
		}

		// Pick next ending tag.
		$end = strpos(strtolower($str), $end_pattern);
	}

	// Merger paragraphs.
	if($paragraphs) {
		$str_before = '';
		foreach($paragraphs as $paragraph) {
			$str_before .= $paragraph;
		}
		return $str_before . $str;
	}

	return $str;
}

?>