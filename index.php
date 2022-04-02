<?php get_header(); ?>

	<img class="img-fluid" src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">

	<div class="content-area">
		<main>
			<section class="middle-area">
				<div class="container">
					<div class="row">
						<div class="news col-md-9">
							<?php
								if( have_posts() ) :
									while( have_posts() ) : the_post();
							
									get_template_part( 'template-parts/content', get_post_format() );
							
									endwhile;
							?>		
							
								<div class="row">
									<div class="pages col-md-6 text-start">
										<?php next_posts_link( __( '<< Older posts', 'learnwp' ) ); ?>
									</div>
									<div class="pages col-md-6 text-end">
										<?php previous_posts_link( __( 'Newer posts >>', 'learnwp' ) ); ?>
									</div>
								</div>
							
							<?php
								else:
							?>
								<p><?php _e( 'There are no posts to be displayed!', 'learnwp' ); ?></p>
							<?php endif; ?>
						</div>
						<aside class="sidebar col-md-3 h-100"><?php get_sidebar( 'blog' ); ?></aside>
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
	