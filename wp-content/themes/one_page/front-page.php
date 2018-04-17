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

				<?php

				$parent_only_query = new WP_Query(array(
					'post_type' => 'page',
					'post_parent' => 0,
					'order' => 'asc',
				));

				if ($parent_only_query->have_posts()) {
				?>
					<?php

						while ($parent_only_query->have_posts()) {
							$parent_only_query->the_post();
							if (get_the_title() != 'Home') {
							echo '<div class="pages-list">';
							?><div class="title-holder"><?php
							echo get_the_title();
							?></div><?php
							if (has_post_thumbnail()){
								?>
								<div class="thumbnail-holder">
									<?php
									one_page_post_thumbnail(); ?>
								</div>
								<?php
							}else {
								?> <div class="excerpt-holder"> <a href='<?php  echo get_permalink() ?>'
							 <?php
								the_excerpt();
								?> </div> </a> <?php
							}
								echo '</div>';
						}
						wp_reset_postdata();
					}
			}
				?>
			</div> <!--end .landing-page -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
