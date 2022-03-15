<?php get_header(); ?>

	<img class="img-fluid" src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">

	<div class="content-area">
		<main>
			<section class="middle-area">
				<div class="container">
					<div class="row">
						<div class="error-404 col-md-9">
							<header>
								<h1>Page not found!</h1>
								<p>Unfortunatelly, the page you are trying to reach doesn't exist.</p>
							</header>
							<div class="error">
								<p>How about doing a search?</p>
								<div class="col-3"><?php get_search_form(); ?> </div>
								
								 <?php the_widget( 'WP_Widget_Recent_Posts', array( 'title' => 'Latest Posts', 'number' => 3 ) ); ?> 
								
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
	