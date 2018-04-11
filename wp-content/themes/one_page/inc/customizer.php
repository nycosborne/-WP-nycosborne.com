<?php
/**
 * one_Page Theme Customizer
 *
 * @package one_Page
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function one_page_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

		/**
		* Adding custome color controls
		*/

		//add header coloer setting
		$wp_customize->add_setting( 'theme_header_color', array(
		'default' => '#b26a2e',
		'transport' => 'postMessage',
		'type' => 'theme_mod',
		'sanitize_callback' => 'sanitize_hex_color',
	));
		//add header color controls
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'theme_header_color', array(
					'label' => __( 'Header Background Color', 'one_page'),
					'section' => 'colors',
					'settings' => 'theme_header_color'
				)
			)
		);

		//adding section for color palette control
		$wp_customize->add_section( 'color_palette_option',
		array(
			'title'			=> __( 'Theme color options', 'one_page' ),
			'priority'		=> 95,
			'capability'	=> 'edit_color_palette_option',
			'description'	=> __( 'Theme color palette options.', 'one_page' )
		)
	);

	$wp_customize->add_setting( 'theme_header_color', array(
	'default' => '#c3814b',
	'transport' => 'postMessage',
	'type' => 'theme_mod',
	'sanitize_callback' => 'sanitize_hex_color',
));


$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'theme_header_color', array(
			'label' => __( 'Header Background Color', 'one_page'),
			'section' => 'colors',
			'settings' => 'theme_header_color'
		)
	)
);




	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'one_page_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'one_page_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'one_page_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function one_page_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function one_page_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function one_page_customize_preview_js() {
	wp_enqueue_script( 'one_page-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'one_page_customize_preview_js' );

if ( ! function_exists( 'one_page_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see one_page_custom_header_setup().
	 */
	function one_page_header_style() {
		$header_text_color = get_header_textcolor();
		$header_bg_color = get_theme_mod( 'theme_header_color' );

		if ( get_theme_support( 'custom-header', 'default-text-color' ) != $header_text_color ) {
			// If we get this far, we have custom styles. Let's do this.
			?>
			<style type="text/css">
			<?php
			// Has the text been hidden?
			if ( ! display_header_text() ) :
				?>
				.site-title,
				.site-description {
					position: absolute;
					clip: rect(1px, 1px, 1px, 1px);
				}
			<?php
			// If the user has set a custom color for the text use that.
			else :
				?>
				.site-title a,
				.site-description {
					color: #<?php echo esc_attr( $header_text_color ); ?>;
				}
			<?php endif; ?>
			</style>
			<?php
		}
		if('#b26a2e' != $header_bg_color){
		?>	<style type="text/css">
			.site-header{
				background-color: <?php echo esc_attr($header_bg_color);?>;
			}
			</style>
		<?php
		}
	}
endif;
