
<?php get_header(); ?>

	<div class="internal-page" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title() ?></h1>
				<section  class="group">
					<div class="inner-content">
						<div class="featured">
							<?php the_post_thumbnail('full'); ?>
						</div>
						<?php the_content(); ?>
						<nav class="pagination group">
							<span class="prev">
								<?php previous_post_link('<strong>%link</strong>');; ?>
							</span>
							<span class="next">
								<?php next_post_link('<strong>%link</strong>');; ?>
							</span>
						</nav> 
					     
					</div>
				<div class="sidebar">	
					<?php get_sidebar(); ?>
				</div>

				</section>

				
			<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>


	</div>	

<?php get_footer(); ?>