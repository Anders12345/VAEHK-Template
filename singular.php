<?php get_header(); ?>
<div class="content">
	<section class="main">
	<?php 
		if ( have_posts() ) : while ( have_posts() ) : the_post();
			get_template_part( 'content-single', get_post_format() );
		endwhile; endif; 
	?>
	</section><!-- /.main -->
	<?php get_sidebar(); ?>
</div> <!-- /.content -->
<?php get_footer(); ?>