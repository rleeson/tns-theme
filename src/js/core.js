/**
 * Core JS File
 */

var console = console || { log: function( e ) { return; } };
var tns = tns || {};

tns.slider = function( $, _ ) {
	var base_element	= '.slider',
		body_width		= 1200,
		index			= 0,
		slide_width		= 200,
		slides			= 10;
	
	function slider() {
		var $slider = $( base_element );
		var $slide_body = $slider.children( '.slide-outer' );
		
		$slider.children( '.slide-left' ).click( function ( e ) {
			if ( index > 0 ) {
				var next = $slide_body.css( 'left', '+=' + slide_width );
				index = index - 1;
				$slide_body.css( 'left', next );
			}
		} );
		$slider.children( '.slide-right' ).click( function ( e ) {
			if ( index < ( slides - ( body_width / slide_width ) ) ) {
				var next = $slide_body.css( 'left', '-=' + slide_width );
				index = index + 1;
				$slide_body.css( 'left', next );
			}
		} );
	}
	return {
		init: function() {
			slider();
		}
	}
}( jQuery, _ );

tns.slider.init();