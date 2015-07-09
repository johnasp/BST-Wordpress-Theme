<?php get_header(); ?>



	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<!-- INTRO LOOP -->
			<div class="intro">
				<?php 
					$intro = new WP_Query('page_id=297');
					while($intro->have_posts()) : $intro->the_post();
						the_content();
					endwhile;
					wp_reset_postdata();
				?>
			</div>

			<!-- QUOTE LOOP -->
			<div class="quotes">
				<?php 
					$quotes = new WP_Query('post_type=quotes&orderby=random&posts_per_page=1');
					while($quotes->have_posts()) : $quotes->the_post();
						the_field('quote_text');
					endwhile;
					wp_reset_postdata();
				?>
				<p>Any of the above quotes resonated with you?  Not already a member?</p>
				<button>Join now</button>
			</div>

			<!-- NEWS LOOP -->
			<div class="news">
				Latest News
				<article>
				<?php 
					$news = new WP_Query('posts_per_page=10');
					while($news->have_posts()) : $news->the_post();
						get_template_part( 'content', get_post_format() );

					endwhile;
					wp_reset_postdata();
				?>
				<article>
			</div>			

			

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>