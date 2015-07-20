<?php
/*
Template Name: Membership
*/
?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>

		<div>
			<?php the_content(); ?>
		</div>

	</article>

<?php endwhile; ?>

<?php get_footer(); ?>