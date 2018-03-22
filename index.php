<?php get_header(); ?>
<div class="content">
	<section class="main">
		<?php 
		if ( have_posts() ) : while ( have_posts() ) : the_post();

			get_template_part( 'content', get_post_format() );

		endwhile; endif; 
		?>
		<div class="pagination"><?php echo paginate_links( $args ); ?></div>

	</section> <!-- .main -->
	<?php get_sidebar(); ?>
</div><!-- .content -->

<?php get_footer(); ?>