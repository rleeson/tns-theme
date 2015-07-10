<?php
/**
 * Class to register post types
*
* @since 1.0.0
* @version 1.0.0
* @package TNS Theme
* @author Ryan Leeson
* @license GPL v2
*/

class TNS_Post_Types {
	public static function register() {
		global $tns_astronomy;

		$tns_astronomy = new CPT_Maker( array( 'key' => 'tns-astronomy', 'singular' => 'Astronomy Photo' ), '-' );
		$tns_astronomy->add_taxonomy( array( 'key' => 'tns-photo-source', 'singular' => 'Photo Source' ), '-' );
		$tns_astronomy->register();
	}
}