<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package one_Page
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			$sticky = get_option( 'sticky_posts' );
			rsort( $sticky );
			$sticky = array_slice( $sticky, 0, 5 );
			$the_query = new WP_Query( array( 'post__in' => $sticky, 'ignore_sticky_posts' => 1 ) );
				if ( $the_query->have_posts() ) :
					while ( $the_query->have_posts() ) :
						 $the_query->the_post();
						 ?>

						<!-- <a href="	 http://192.168.1.8:8890/one_page/2018/04/17/looking-forward-to-the-react-x-node-april-meetup/   "> -->
						<a href="<?php echo get_permalink(); ?>">
						 	<div class="sticky-title">
						<?php
						 echo get_the_post_thumbnail();
						 ?>
						 		<div class="sticky-title-img">
									<?php
									echo get_the_title();
									?>
								</div>
					 		</div>
							</a>
						<?php
					endwhile;
				endif;
				wp_reset_postdata();



				if ( have_posts() ) :
					if ( is_home() && ! is_front_page() ) :
						?>

						<div class="blog-body">
						<header>
							<h1 class="page-title screen-reader-text">
								<?php single_post_title(); ?>
							</h1>
						</header>
						<?php
					endif;

					/* Start the Loop */
					?>
						<div class="blog-post-area">
					<?php
					while ( have_posts() ) :
						the_post();

						/*
						 * Include the Post-Type-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_type() );

					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
			</div> <!-- end for blog-post-area -->
				<?php
					get_sidebar();
				 ?>
			 </div> <!-- #blog-body end -->
				</main><!-- #main -->
			</div><!-- #primary -->


<?php
// get_footer();
// replaced get_footer() on index to removed footer but keep scripts and admin header
wp_footer();
