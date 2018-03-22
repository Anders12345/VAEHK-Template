<?php get_header(); ?>

<main role="main">
	
		<?php 
		if ( have_posts() ) : while ( have_posts() ) : the_post();

			get_template_part( 'content', get_post_format() );

		endwhile; endif; 
		?>
		<div class="pagination"><?php echo paginate_links( ); ?></div>

	
	
</main><!-- /main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>