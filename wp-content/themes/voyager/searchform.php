<div class="search_form_wrap">
	<form name="search_form" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="search_form">
		<label class="heading_font">Search</label>
		<input class="search-field" type="text" name="s" placeholder="<?php esc_html_e('Type your search', 'voyager'); ?>" value="" />
		<input class="search-submit" type="submit" value="" />
	</form>
	<i class="fa fa-search"></i>
</div>