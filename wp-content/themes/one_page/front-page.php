<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package one_Page
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="landing-page">
				<h3>Projects :</h3>
				<section id="blog" class="page-section">
							<?php
							$query = new WP_Query( 'pagename=tech-blog' );
							// The Loop
							if ( $query->have_posts() ) {
								while ( $query->have_posts() ) {
									$query->the_post();
									echo '<div class="entry-content">';
									one_page_post_thumbnail();
									echo '</div>';
									break;
								}
							}

						/* Restore original Post Data */
						wp_reset_postdata();
						?>
				</section>
				<section id="photo-site" class="page-section">
							<?php
							$query = new WP_Query( 'pagename=tech-blog' );
							// The Loop
							if ( $query->have_posts() ) {
								while ( $query->have_posts() ) {
									$query->the_post();
									echo '<div class="entry-content">';
									one_page_post_thumbnail();
									echo '</div>';
									break;
								}
							}

						/* Restore original Post Data */
						wp_reset_postdata();
						?>
				</section>
				<section id="mobile" class="page-section">
							<?php
							$query = new WP_Query( 'pagename=tech-blog' );
							// The Loop
							if ( $query->have_posts() ) {
								while ( $query->have_posts() ) {
									$query->the_post();
									echo '<div class="entry-content">';
									one_page_post_thumbnail();
									echo '</div>';
									break;
								}
							}

						/* Restore original Post Data */
						wp_reset_postdata();
						?>
				</section>
				<section id="bot" class="page-section">
							<?php
							$query = new WP_Query( 'pagename=tech-blog' );
							// The Loop
							if ( $query->have_posts() ) {
								while ( $query->have_posts() ) {
									$query->the_post();
									echo '<div class="entry-content">';
									one_page_post_thumbnail();
									echo '</div>';
									break;
								}
							}

						/* Restore original Post Data */
						wp_reset_postdata();
						?>
				</section>


				<div class="bio">
					<section class="about-me">
							<h4>About Me</h4>
							<p>ecwjcnr;ibeiu;bqriub;qiriqbrhqiweri	er;ribbub</p>
					</section>
					<div class="divider"></div>
					<section class="experience">
						<h4>Experience</h4>
						<p>ecwjcnr;ibeiu;bqriub;qiriqbrhqiweri	er;ribbub</p>
					</section>
					<div class="divider"></div>
					<section class="skills">
						<h4>Skills</h4>
						<p>ecwjcnr;ibeiu;bqriub;qiriqbrhqiweri	er;ribbub</p>
						<p>ecwjcnr;ibeiu;bqriub;qiriqbrhqiweri	er;ribbub</p>
					</section>
				</div>




			</div> <!--end .landing-page -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
