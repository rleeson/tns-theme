<?php
/**
 * Content repeater to show all astronomy photos in a slider with colorbox popups
 *
 * @package  Things & Stuff
 * @since    1.0
 * @version  1.0
 * @author   Ryan Leeson
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     http://www.ryanleeson.com/
 */

$astronomy_query = new WP_Query( array(
	'post_type'			=> array( 'tns-astronomy' ),
	'posts_per_page'	=> '16'
));

if ( $astronomy_query->have_posts() ) :
	while ( $astronomy_query->have_posts() ) :
		$astronomy_query->the_post();
		$photo = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );
		
		if ( isset( $photo[ '0' ] ) ) :
?>
	<article class="slide">
		<a href="<?php esc_url( $photo[ '0' ] ); ?>" class="cbox-astronomy" title="<?php the_title_attribute(); ?>">
			<?php the_post_thumbnail( 'thumb' ); ?>
		</a>
	</article>
<?php
		endif;
	endwhile;
endif;