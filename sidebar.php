<?php
/**
 * The sidebar containing the secondary widget area
 *
 * Displays on posts and pages.
 *
 * If no active widgets are in this sidebar, hide it completely.
 * 
 * Blogsonry: Modified to hide sidebar on Home and Archive pages
 *
 * @package WordPress
 * @subpackage Blogsonry
 * @since Blogsonry 1.0
 */

if ( is_active_sidebar( 'sidebar-2' ) &&
	 ! ( is_home() || is_archive() ) ) : ?>
	<div id="tertiary" class="sidebar-container" role="complementary">
		<div class="sidebar-inner">
			<div class="widget-area">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</div><!-- .widget-area -->
		</div><!-- .sidebar-inner -->
	</div><!-- #tertiary -->
<?php endif; ?>