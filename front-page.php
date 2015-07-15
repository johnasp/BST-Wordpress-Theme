<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<!--<div class="intro">
	<p>The Blackpool Supporters Trust is the largest Blackpool fans group currently with over 1,500 members.  Our organisational goals are to get the Oystons out of Blackpool FC</p><p>Want to know more about us?  Click here to read more about the Trust or email us.</p>
</div>-->

			<!-- INTRO LOOP -->
			<!-- <div class="intro">
				<?php 
				//	$intro = new WP_Query('page_id=297');
				//	while($intro->have_posts()) : $intro->the_post();
				//		the_content();
				//	endwhile;
				//	wp_reset_postdata();
				?>
			</div> -->


<section class="slider container-fluid">
  <div class="bst-logo">
  <img src="wp-content/uploads/2015/06/bst-logo.png" alt="" /></div>
  <div class="boxes row">

        <div class="who col-md-4">
          <div class="introBlock">
            <svg viewBox="0 0 512 512" class="absCentre"><use xlink:href="#circle"></use></svg>
            <svg viewBox="0 0 512 512" class="absCentre"><use xlink:href="#users"></use></svg>
            <p>We are the <strong>Blackpool Supporters' Trust</strong> and we are the most democratic, representative and largest independent Blackpool FC supporters group.</p>
            <a href="/join/" class="button">Become a member</a>
          </div>
        </div>

        <div class="aims col-md-4">
          <div class="introBlock">
            <svg viewBox="0 0 512 512" class="absCentre"><use xlink:href="#circle"></use></svg>
            <svg viewBox="0 0 512 512" class="absCentre"><use xlink:href="#tick"></use></svg>
            <p>We have several aims, including fan representation at board level, holding whomever owns the club to account and ultimately fan majority ownership of BFC.</p>
            <a href="/about/" class="button">About BST</a>
          </div>
        </div>
     
        <div class="partners col-md-4">
          <div class="introBlock">
            <svg viewBox="0 0 512 512" class="absCentre"><use xlink:href="#circle"></use></svg>
            <svg viewBox="0 0 512 512" class="absCentre"><use xlink:href="#thumb"></use></svg>
            <p>We are delighted to have partnerships with several organisations and companies who offer our members discounts on their products and services.</p>
            <a href="/partners-sponsors/" class="button">Our Partners</a>
          </div>
        </div>
    </div> 
</section>


			<!-- QUOTES TOP LOOP -->
			<div class="quotes">
				<?php 
					$quotes = new WP_Query('post_type=quotes&orderby=rand&posts_per_page=1');
					while($quotes->have_posts()) : $quotes->the_post();
						echo "<h2>";
						the_field('quote_text');
						echo "</h2>";
						echo "<h3>";
						the_field('quote_author');
						echo "</h3>";


					endwhile;
					wp_reset_postdata();
				?>
				
				<a href="/join/" class="button solid">Become a Member</a>
			</div>

			<!-- MASONRY NEWS -->

			<div id="primary" class="content-area tertiary">
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

			<!-- QUOTES BOTTOM LOOP -->
			<div class="quotes">
				<?php 
					$quotes = new WP_Query('post_type=quotes&orderby=rand&posts_per_page=1');
					while($quotes->have_posts()) : $quotes->the_post();
						echo "<h2>";
						the_field('quote_text');
						echo "</h2>";
						echo "<h3>";
						the_field('quote_author');
						echo "</h3>";


					endwhile;
					wp_reset_postdata();
				?>
				<a href="/join/" class="button solid">Become a Member</a>
			</div>

			<?php twentythirteen_paging_nav(); ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>