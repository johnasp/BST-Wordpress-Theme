<?php get_header(); ?>


<section class="slider container-fluid">
  <div class="bst-logo">
  <img src="wp-content/uploads/2015/06/bst-logo.png" alt="" /></div>
  <div class="boxes row">

        <div class="who col-md-4">
          <div class="introBlock">
            <svg viewBox="0 0 512 512" class="absCentre"><use xlink:href="#circle"></use></svg>
            <svg viewBox="0 0 512 512" class="absCentre"><use xlink:href="#users"></use></svg>
            <p>We are the <strong>Blackpool Supporters' Trust</strong> and we are the most democratic, representative and largest independent Blackpool FC supporters group.</p>
            <a href="/join/">Become a member</a>
          </div>
        </div>

        <div class="aims col-md-4">
          <div class="introBlock">
            <svg viewBox="0 0 512 512" class="absCentre"><use xlink:href="#circle"></use></svg>
            <svg viewBox="0 0 512 512" class="absCentre"><use xlink:href="#tick"></use></svg>
            <p>We have several aims, including fan representation at board level, holding whomever owns the club to account and ultimately fan majority ownership of BFC.</p>
            <a href="/about/">About Us</a>
          </div>
        </div>
     
        <div class="partners col-md-4">
          <div class="introBlock">
            <svg viewBox="0 0 512 512" class="absCentre"><use xlink:href="#circle"></use></svg>
            <svg viewBox="0 0 512 512" class="absCentre"><use xlink:href="#thumb"></use></svg>
            <p>We are delighted to have partnerships with several organisations and companies who offer our members discounts on their products and services.</p>
            <a href="/partners-sponsors/">Our Partners</a>
          </div>
        </div>
    </div> 
</section>


<!-- MASONRY NEWS -->

<div id="primary" class="content-area home-news">
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