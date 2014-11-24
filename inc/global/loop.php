<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php if ( has_post_thumbnail()) : ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(array(120,120)); ?>
			</a>
		<?php endif; ?>

		<h1>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h1>

		<span><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
		<span><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>

		<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

	</article>

<?php endwhile; ?>

	<nav role="navigation">
		<?php html5wp_pagination(); ?>
	</nav>

<?php else: ?>

	<article>

		<h1>
			<?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?>
		</h1>

	</article>

<?php endif; ?>
