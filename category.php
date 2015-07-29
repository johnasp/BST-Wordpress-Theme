<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area home-news">
  <h2> News Archives : <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></h2>
	<div id="content" class="site-content">
		<div class="news">

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>

				<?php endwhile; ?>

		
			<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>
			<?php endif; ?>
		</div>

	</div><!-- #content -->
</div><!-- #primary -->

<?php twentythirteen_paging_nav(); ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>