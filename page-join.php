<?php
/*
Template Name: Join
*/
?>

<?php get_header(); ?>

	<div class="internal-page join" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title() ?></h1>
				<section  class="group">
					<div id="pricing-table" class="inner-content">
						<div class="featured"><?php the_post_thumbnail('full'); ?></div>
						<?php the_content() ?>
					</div>
					
				</section>
				
			<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>


	</div>	

<?php get_footer(); ?>