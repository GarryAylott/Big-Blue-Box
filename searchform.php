<?php
/**
 * Custom search field for sidebar
 */
?>

<form role="search" class="search-form" action="<?php echo home_url(); ?>" id="searchform" method="get">
	<label for="s">
		<span class="screen-reader-text">Search for:</span>
		<input type="search" class="search-field" placeholder="Search..." value name="s" title="Search...">		
	</label>
	<input type="submit" class="search-submit fa-input" value="&#xf002;">
</form>