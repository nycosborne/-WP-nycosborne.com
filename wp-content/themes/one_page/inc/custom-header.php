<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package one_Page
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses one_page_header_style()
 */
function one_page_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'one_page_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => 'ffffff',
		'width'                  => 2000,
		'height'                 => 850,
		'flex-height'            => true,
		'wp-head-callback'       => 'one_page_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'one_page_custom_header_setup' );
