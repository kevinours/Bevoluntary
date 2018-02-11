<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="text" class="field col-xs-10 col-md-10" name="s" id="s" placeholder="<?php esc_attr_e( 'Search', 'twentyeleven' ); ?>" />
	<input type="submit" class="submit col-xs-2 col-md-2" name="submit" id="searchsubmit" value=" "/>
</form>