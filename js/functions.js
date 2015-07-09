jQuery( document ).ready( function( $ ) {

	// move footer nav for layout purposes
	$nav = $('#infitine-handle,.paging-navigation');
	$('#content').after($nav);

	var body    = $( 'body' );

	// let's masonry up those blog pages
	if( body.hasClass( 'masonry' ) ) {
		$blogContainer = $( '#content' );
		$blogContainer.imagesLoaded( function() {
			$blogContainer.masonry({
				itemSelector: 'article',
				stamp: '.archive-header,.paging-navigation',
				isOriginLeft: !body.is( '.rtl' ),
			});
		});
	}

	// refresh on Jetpack infinite scroll load event
	// Triggers re-layout on infinite scroll
	// adapted from http://wptheming.com/2013/04/jetpack-infinite-scroll-masonry/
	infinite_count = 0;
	post_count = $('article', $blogContainer).length;
	$( document.body ).on( 'post-load', function () {
		old_count = post_count;
		infinite_count++;
		// get the infinite posts wrapper
		$postsWrapper = $( '#infinite-view-' + infinite_count );
		// append posts and retrigger layout
		$blogContainer.append( $postsWrapper );
		$elements = $( 'article', $postsWrapper );
		post_count = $('article', $blogContainer).length;

		// only worry if we have new articles
		if( post_count > old_count ) {
			$blogContainer.imagesLoaded( function() {
				$blogContainer.append( $elements ).masonry( 'reloadItems' ).masonry( 'layout' );
				// stick infinite scroll posts wrapper element into articles
				// preserves correct paging URLs
				$elements.prepend( $postsWrapper );
			});
		} else {
			// no new articles, roll back infinite_count
			infinite_count--;
		}
	});

	// we dequeued the old shiv, so call masonry on footer items again with fixed stuff
	var columnWidth = body.hasClass( '.sidebar' ) ? 228 : 245;
	$footerContainer = $( '#secondary .widget-area' );
	$footerContainer.masonry({
		itemSelector: '.widget',
		columnWidth: columnWidth,
		gutter: 20,
		isOriginLeft: !body.is( '.rtl' )
	});

});