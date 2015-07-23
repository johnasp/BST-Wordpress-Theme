<?php
/*
Template Name: My Account
*/
?>

<?php get_header(); ?>

	<div id="my-account" class="internal-page" <?php post_class(); ?>>

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title() ?></h1>
				<section  class="group">
					<div class="inner">
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
