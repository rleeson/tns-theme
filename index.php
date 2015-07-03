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
		<div id="slider-1" class="slider">
			<button class="slide-left">Left</button>
			<ul class="slide-outer">
				<li class="slide"><a href="">Item 1</a></li>
				<li class="slide"><a href="">Item 2</a></li>
				<li class="slide"><a href="">Item 3</a></li>
				<li class="slide"><a href="">Item 4</a></li>
				<li class="slide"><a href="">Item 5</a></li>
				<li class="slide"><a href="">Item 6</a></li>
				<li class="slide"><a href="">Item 7</a></li>
				<li class="slide"><a href="">Item 8</a></li>
				<li class="slide"><a href="">Item 9</a></li>
				<li class="slide"><a href="">Item 10</a></li>
			</ul>
			<button class="slide-right">Right</button>
		</div>
	</div>
<?php 
get_sidebar();
get_footer();