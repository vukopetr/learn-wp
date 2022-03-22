 <?php get_header(); ?>
	<div class="content-area">
		<main>
			<section class="slide">
				<div class="container">
					<?php motoPressSlider( "home-slider" ) ?>
				</div>		
			</section>
			<section class="services">
				<div class="container">
					<h1>Services</h1>
					<div class="row">
						<div class="col-sm-4">
							<div class="services-item">
								<?php
									if( is_active_sidebar( 'service-1' ) ){
										dynamic_sidebar( 'service-1' );
									}
								?>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="services-item">
								<?php
									if( is_active_sidebar( 'service-2' ) ){
										dynamic_sidebar( 'service-2' );
									}
								?>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="services-item">
								<?php
									if( is_active_sidebar( 'service-3' ) ){
										dynamic_sidebar( 'service-3' );
									}
								?>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="services-item"></div>
						</div>
					</div>
				</div>
			</section>
			<section class="middle-area">
				<div class="container">
					<div class="row">
						<aside class="sidebar col-md-3 h-100"><?php get_sidebar( 'home' ); ?></aside>
						<div class="news col-md-9">
							<div class="container">
								<div class="row">
									<?php
										$featured = new WP_Query( 'post_type=post&posts_per_page=1&cat=9,10,15' );
										if( $featured->have_posts() ):
											while( $featured->have_posts() ) : $featured->the_post();
										?>
											<div class="col-12">
												<?php get_template_part( 'template-parts/content', 'featured' ); ?>
											</div>
										<?php
											endwhile;
											wp_reset_postdata();
										endif;
										
										$args = array(
											'post_type'				=>	'post',
											'posts_per_page'		=>	2,
											'category__not_in'		=>	array( 13 ),
											'category__in'			=>	array( 9,10,15 ),
											'offset'				=>	1
											
										);										
										$sec = new WP_Query( $args );
										if( $sec->have_posts() ):
											while( $sec->have_posts() ) : $sec->the_post();
										?>
											<div class="col-sm-6">
												<?php get_template_part( 'template-parts/content', 'sec' ); ?>
											</div>
										<?php
											endwhile;
											wp_reset_postdata();
										endif;
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="map">
					<div class="row">
						<iframe
						  width="100%"
						  height="250"
						  style="border:0"
						  loading="lazy"
						  allowfullscreen
						  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBNFnsSfoqgrTJSpiKYHaYkZfizFirNRX4&q=Space+Needle,Seattle+WA&zoom=15">
						</iframe>
					</div>
			</section>
		</main>
	</div>
<?php get_footer(); ?>
	