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

							$query = new WP_Query(array(
								'post_type' => 'post',
								'pagename' => 'tech-blog',

							));
							// $query = new WP_Query( 'pagename=tech-blog' );
							// The Loop
							if ( $query->have_posts() ) {
								while ( $query->have_posts() ) {
									$query->the_post();
									?>	<a href="<?php esc_url(the_permalink(150)); ?>"><?php
									echo '<div class="entry-content">';
									one_page_post_thumbnail();
									echo '</div>';
									?></a><?php
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
							// $query = new WP_Query( 'pagename=lifting' );
							// The Loop
							$query = new WP_Query(array(
								'post_type' => 'page',
								'page_id' => 45,

							));
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
			</div> <!--end .landing-page -->

			<div class="bio">
				<section class="about-me">
						<h4>About Me</h4>
						<p>I’m passionate about developing
							application that add value to people’s lives.
							Love coding and find the greatest satisfaction in
							life in creative problem solving leading to a productive end.
							I was working as a service admin at the Soho Apple when
							this love affair started, then went back to school for my CS
							 degree with a focus on OOP application development.
						</p>
				</section>
				<div class="divider"></div>
				<section class="experience">
					<h4>Experience</h4>
					<p>Worked with in Agile workflow as a QA engineer for mobile
						 gaming studio.
							Additionally I’ve worked with diverse group of clientele on
							both web and mobile projects
						</p>
						<a href="wp-content/themes/one_page/assets/Daniel_A._Osborne.vcf">
						<div class="cv-icon">
								<?php echo one_page_get_svg(array( 'icon' => 'box-add')); ?>
								<div class="full-cv-titile">
										<p>Full CV</p>
								</div>
						</a>
						</div>

				</section>
				<div class="divider"></div>
				<section class="skills">
					<h4>What I Can Do for You!</h4>
					<p>Build mobile application both negatively and leveraging
						React Native framework. Additional  Java experience using
						Android Studio, Spring and JSP.</p>
					<p>Build Web sites and applications using HTML5, CSS,
						JS and PHP and MySQL. Web dev tools and frameworks include
						WordPress, React, Node.js  	</p>
						<p>Work collaboratively using git (GitHub, SourceTree and CLT)</p>
						<p>Manager staging and deployment servers for web projects and
							publish mobile application to respective app stores.</p>
				</section>
			</div>

			<section class="contact-me">
				<div id="reachout">
					<h1>Contact Me</h1>
					<p>Please feel free to reatch out and drop me a line</p>
					<p>dan@nycosborne.com</p>
				</div>
				<div id="form">
					<?php echo do_shortcode( '[contact-form-7 id="204" title="Contact form 1"]' ); ?>
				</div>


			</section>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
