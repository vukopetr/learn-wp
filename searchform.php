<div class="container p-2">

	<form role="search" method="get" class="form search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<div class="input-group">
		  <input name="s" type="text" class="form-control" placeholder="<?php echo esc_attr_x( 'Search ...', 'placeholder', 'learnwp' ); ?>>
		  <span class="input-group-btn">
			<button type="submit" value="Search" class="btn btn-secondary" type="button">
				<?php echo _x( 'OK','submit button', 'learnwp' ); ?>
			</button>
		  </span>
		</div>
	</form>
   
</div> 