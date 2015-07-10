/**
 * Core JS File
 */

var tns	= tns || { slider_infinite: { init: function() { return; } } };

tns.theme = function( $, _ ) {
	function register_handlers() {
		$( document ).ready( function() {
			$( '.cbox-astronomy' ).colorbox( { rel: 'cbox-astronomy', slideshow: true } );
		});
	}
	function start_sliders() {
		$( '#slider-2' ).infiniteSlider();
		$( '#slider-astronomy' ).infiniteSlider();
	}
	return {
		init: function() {
			register_handlers();
			start_sliders();
		}
	}
}( jQuery, _ );

tns.theme.init();
