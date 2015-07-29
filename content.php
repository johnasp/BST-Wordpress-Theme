<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 * 
 * Blogsonry: Modified to show excerpt on Blog and Archive pages
 *
 * @package WordPress
 * @subpackage Blogsonry
 * @since Blogsonry 1.0
 */
?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) : ?>
		<div class="entry-thumbnail">
			<?php the_post_thumbnail( 'full' ); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_single() ) : ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<div class="entry-meta">
			<?php twentythirteen_entry_meta(); ?>
			<?php edit_post_link( __( 'Edit', 'blogsonry' ), '<span class="edit-link">', '</span>' ); ?>
		</div><!-- .entry-meta -->
		<?php else : ?>
		<h1 class="entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h1>

		<?php endif; // is_single() ?>

	
	</header><!-- .entry-header -->

	<?php if ( is_search() || is_home() || is_archive() ) : // Display Excerpts for Search, Blog, and Archive ?>
	<div class="entry-summary">
		<div class="category-home">
			<?php the_category(' '); ?>
		</div>
		<div class="the-date">
			<?php the_date(); ?>
		</div>
		<?php the_excerpt(); ?>

	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
					__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'blogsonry' ),
					the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'blogsonry' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>


</article><!-- #post -->
