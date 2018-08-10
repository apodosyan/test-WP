<?php
get_header();
?>

	<div class='container'>
		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/post/content', get_post_format() );

			



		endwhile; 

		?>

	</div>
</div>

<?php get_footer(); ?>
