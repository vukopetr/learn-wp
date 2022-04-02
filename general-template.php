<?php
	/*
		Template Name: General Template
	*/
?>

<?php get_header(); ?>

    <img class="img-fluid" src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">

	<div class="content-area">
		<main>
		
			<section class="middle-area">
				<div class="container">

					<div class="general-template">
						<?php
							if( have_posts() ) :
								while( have_posts() ) : the_post();
						?>
							<article>
								<h2><?php the_title(); ?></h2>
								<p><?php the_content(); ?></p>
							</article>
						<?php
							endwhile;
							else:
						?>
							<p><?php _e( 'There are no posts to be displayed!', 'learnwp' ); ?></p>
						<?php endif; ?>
					</div>
					
				</div>
			</section>
			
		</main>
	</div>
<?php get_footer(); ?>
	
	