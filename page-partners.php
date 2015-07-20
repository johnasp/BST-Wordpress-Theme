<?php
/*
Template Name: Partners
*/
?>
<?php get_header(); ?>

	<div class="internal-page partners" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

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


<?php
if ( get_query_var('paged') ) $paged = get_query_var('paged');  
if ( get_query_var('page') ) $paged = get_query_var('page');
 
$query = new WP_Query( array( 'post_type' => 'partners', 'paged' => $paged ) );
 
if ( $query->have_posts() ) : ?>
	<?php while ( $query->have_posts() ) : $query->the_post(); ?>	
		<section class="bst-partners container-fluid">
			<article class="row">
				<div class="col-md-3">
					<div><?php the_post_thumbnail('full');  ?></div>
				</div>
				<div class="col-md-5">
					<div>
						<h3 class="partners-head"><?php the_title(); ?></h3>
						<?php echo get_field("partner_contact_details"); ?>
					</div>
				</div>
				<div class="col-md-4">
					<div>
						<h3 class="member-benefits">Member benefits</h3>
						<?php echo get_field("partner_description"); ?>
					</div>
				</div>
			</article>
		</section>
	<?php endwhile; wp_reset_postdata(); ?>
	<!-- show pagination here -->
<?php else : ?>
	<!-- show 404 error here -->
<?php endif; ?>

	</div>



<?php get_footer(); ?>