<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package one_Page
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="footer-by-line">
				<?php
				printf( esc_html__( 'by %s.', 'one_page' ),'<a href="http://nycosborne.com">Dan O</a>' );
				?>
		</div><!-- .footer -->
<<<<<<< HEAD
		<div class="footer-menu">
			
=======
		<!-- <div class="footer-menu">
>>>>>>> front-page
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'foor-menu',
				) );
			?>
		</div> <!--.footer-menu -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
