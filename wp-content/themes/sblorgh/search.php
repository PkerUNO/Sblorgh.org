<?php get_header(); ?>
	<?php if ( have_posts() ) : ?>
		<h2><?php printf( 'Search results for: %s', get_search_query() ); ?></h2>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php sblorgh_paging_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
<?php get_footer(); ?>