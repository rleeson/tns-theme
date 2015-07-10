<?php
/**
 * Title: Main template file
 *
 * @category Wordpress Theme
 * @package  Things & Stuff
 * @since    1.0
 * @author   Ryan Leeson
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     http://www.ryanleeson.com/
 */

get_header();
?>
	<div class="content">
		<h1>Content Area</h1>
		<!-- #slider-astronomy.slider-infinite>div.slide-mask>button.slide-left+div.slider-body+button.slide-right -->
		<div id="slider-astronomy" class="slider-infinite">
			<div class="slide-mask">
				<button class="slide-left"></button>
				<div class="slider-body"><?php get_template_part( 'templates/content', 'tns-astronomy' ); ?></div>
				<button class="slide-right"></button>
			</div>
		</div>
		<!-- #slider-2.slider-infinite>button.slide-left+div.slider-body>article.slide*14>a{Item $}^^button.slide-right -->
		<div id="slider-2" class="slider-infinite">
			<div class="slide-mask">
				<button class="slide-left"></button>
				<div class="slider-body">
					<div class="slide"><a href="">Item 1</a></div>
					<div class="slide"><a href="">Item 2</a></div>
					<div class="slide"><a href="">Item 3</a></div>
					<div class="slide"><a href="">Item 4</a></div>
					<div class="slide"><a href="">Item 5</a></div>
					<div class="slide"><a href="">Item 6</a></div>
					<div class="slide"><a href="">Item 7</a></div>
					<div class="slide"><a href="">Item 8</a></div>
					<div class="slide"><a href="">Item 9</a></div>
					<div class="slide"><a href="">Item 10</a></div>
					<div class="slide"><a href="">Item 11</a></div>
					<div class="slide"><a href="">Item 12</a></div>
					<div class="slide"><a href="">Item 13</a></div>
					<div class="slide"><a href="">Item 14</a></div>
				</div>
				<button class="slide-right"></button>
			</div>
		</div>
	</div>
<?php 
get_sidebar();
get_footer();