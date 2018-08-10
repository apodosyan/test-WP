<?php

get_header(); ?>

<div class="wrap">

	<?php if ( have_posts() ) : ?>
		<header class="page-header">
			<?php
			the_archive_title( '<h1 class="page-title">', '</h1>' );
			the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>
		</header>
	<?php endif; ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			if ( have_posts() ) : ?>
				<?php
				
				while ( have_posts() ) : the_post();

					
					get_template_part( 'template-parts/post/content', get_post_format() );

				endwhile;



			else :

				get_template_part( 'template-parts/post/content', 'none' );

			endif; ?>

		</main>
	</div>


</div>	
</div>

</div>

<?php get_footer();
