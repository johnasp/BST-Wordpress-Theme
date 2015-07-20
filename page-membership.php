<?php
/*
Template Name: Membership
*/
?>

<?php get_header(); ?>

	<div class="internal-page" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title() ?></h1>
				<section>
					<div class="featured"><?php the_post_thumbnail('full'); ?></div>
					<?php the_content() ?>
				</section>
			<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

	</div><!-- #primary -->

<?php get_footer(); ?>