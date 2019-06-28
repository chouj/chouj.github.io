<?php if (!is_search()) {
		$search_text = "search blog archives";
	} else {
		$search_text = "$s";
	}
?>
		
<form method="get" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<input type="text" value="<?php echo wp_specialchars($search_text, 1); ?>" name="s" id="s" onfocus="if (this.value == 'search blog archives') {this.value = '';}" onblur="if (this.value == '') {this.value = 'search blog archives';}" />
	<input type="submit" id="searchsubmit" value="GO" />
</form>
