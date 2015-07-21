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
			<aside class="bst-sidebar">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</aside>
<?php endif; ?>														