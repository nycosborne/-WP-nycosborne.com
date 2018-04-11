<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package one_Page
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'one_page' ); ?></a>

	<?php if (get_header_image() && is_front_page()) : ?>
		<figure class="header-image">
				<img src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>"
				width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" />
		</figure>
	<?php endif ?>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) :
				?>
				<!-- <?php 	the_custom_logo(); ?> -->
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$one_page_description = get_bloginfo( 'description', 'display' );
			if ( $one_page_description || is_customize_preview() ) :
				?>

			<?php endif; ?>
		</div><!-- .site-branding -->
		<div class="nav-container">
		<nav id="site-navigation" class="main-navigation">
			<label for="toggle-menu" class="menu-on"><?php echo one_page_get_svg(array( 'icon' => 'menu')); ?></label>
			<input id="toggle-menu" type="checkbox" />
			<label for="toggle-menu" class="menu-off"></label>

			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>

		</nav><!-- #site-navigation -->
	</div> <!-- END OF .nav-container -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
