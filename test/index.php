

<?php get_header(); ?>

<?php get_template_part( 'template-parts/carusel', get_post_format() );?>

<div class='content-wp'>
	<div class='col-md-4 col-sm-4 col-xs-12 col-lg-4'>
		<?php dynamic_sidebar('aboutus' ); ?> 
	</div>
	<div class='col-md-8 col-sm-8 col-xs-12 col-lg-8'>
		<h2 class="content_title">Новости</h2>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php if ( in_category( '3' ) ) : ?>
				<div class="news">
					<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>" class="clearfix">
						<div class='news_image'>
								<?php the_post_thumbnail();?>
						</div>
						<div class='news_info'>
							<?php else : ?>
							<?php endif; ?>
							<span class="news_date"><?php the_time('F jS, Y'); ?></span>
								<?php the_content(); ?>
							</div>
					</a>
				</div>
			<?php endwhile; else : ?>
				<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</div>
</div>
</div>


<?php get_footer(); ?>
