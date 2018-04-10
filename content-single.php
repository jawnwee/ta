<!-- This is where content is -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> <?php hybrid_attr( 'post' ); ?>>
	
	<div class="entry-post">
		
		<div class="entry-content" <?php hybrid_attr( 'entry-content' ); ?>>

			<?php if ( has_post_thumbnail() ) : ?>
				<span class="thumbnail-link">
					<?php the_post_thumbnail( 'large', array( 'class' => 'entry-thumbnail', 'alt' => esc_attr( get_the_title() ) ) ); ?>
				</span>
			<?php endif; ?>

			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'silvia' ),
					'after'  => '</div>',
				) );
			?>
		
		</div>

		<?php silvia_related_posts(); // Display the related posts. ?>

	</div>

	<div class="entry-meta">
	</div>
	
</article><!-- #post-## -->
