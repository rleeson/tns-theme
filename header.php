<?php
/**
 * Title: Template header
 *
 * @category Wordpress Theme
 * @package  Things & Stuff
 * @since    1.0
 * @author   Ryan Leeson
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     http://www.ryanleeson.com/
 */
 
?>
<html>
<head>
	<?php wp_head(); ?>
</head>
<body class="<?php body_class();?>">
	<div id="side-menu" class="collapse">
		<?php wp_list_categories(); ?>
	</div>
	<div id="viewport">
		<header class="site-header">
			<h1><?php bloginfo( 'title' ); ?></h1>
			<h2><?php bloginfo( 'description' ); ?></h2>
			<nav><?php wp_nav_menu( array( 'slug' => 'tns-main' ) ); ?></nav> 
		</header>
		<div id="main-content">