<?php get_header(); ?>

	<img class="img-fluid" src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">

	<div class="content-area">
		<main>
			<section class="middle-area">
				<div class="container">
					<div class="row">
						<div class="error-404 col-md-9">
							<header>
								<h1><?php _e( 'Page not found!', 'learnwp' ); ?></h1>
								<p><?php _e( 'Unfortunatelly, the page you are trying to reach does not exist.', 'learnwp ' ); ?></p>
							</header>
							<div class="error">
								<p><?php _e( 'How about doing a search?', 'learnwp' ); ?></p>
								<div class="col-3"><?php get_search_form(); ?> </div>
								
								 <?php the_widget( 'WP_Widget_Recent_Posts', array( 'title' => __('Latest Posts', 'learnwp'), 'number' => 3 ) ); ?> 
								
							</div>
						
						</div>
					</div>
				</div>
			</section>
			<section class="map">
				<div class="container">
					<div class="row">
						Map
					</div>
				</div>
			</section>
		</main>
	</div>
<?php get_footer(); ?>
	