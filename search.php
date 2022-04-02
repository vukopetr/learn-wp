<?php get_header(); ?>
 
	<div id="primary">
		<div id="main">
			<div class="container">
			
			<h2><?php _e( 'Search results for: ', 'learnwp' ); ?><?php echo get_search_query(); ?></h2>
			
			<div class="search col-3"><?php get_search_form(); ?></div>
			
			<?php
				while( have_posts() ) :
					the_post();
					
						get_template_part( 'template-parts/content', 'search' );
						
						if( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
						
				endwhile;
				
				the_posts_pagination(
					array(
						'prev_text' => 	__( 'Prev', 'learnwp' ),
						'next_text'	=>	__( 'Next', 'learnwp' )						
					)
				);
				
			?>
			
			</div>
		</div>
	</div>
 
 
<?php get_footer(); ?>
