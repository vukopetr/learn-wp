<article <?php post_class(); ?>>
	<a href="<?php the_permalink(); ?>">
		<h2><?php the_title(); ?></h2>
	</a>
	<div class="meta-info">
		<p>Author: <?php the_author_posts_link(); ?></p>
		<?php if( has_category() ) : ?>
			<p>Categories: <?php the_category( ' ' ); ?></p>
		<?php endif; ?>
		<p><?php the_tags( 'Tags: ', ', ' ); ?></p>
		
	</div>
	<p><?php the_excerpt(); ?></p>
</article>