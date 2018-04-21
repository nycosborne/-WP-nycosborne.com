<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package one_Page
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>
	<header class="entry-header">
		<hr class="artile-line"/>


	</header><!-- .entry-header -->
	<div class="blog-post">


		<div class="blog-thumbnail">
			<a href="<?php echo esc_url(get_permalink()); ?>">
			<?php

	    the_post_thumbnail('thumbnail');
	    ?>
			</a>
		</div>
	

    <div class="entry-content">
    <?php
    if ( is_singular() ) :
      the_title( '<h1 class="entry-title">', '</h1>' );
    else :
      the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
    endif;
 ?>
 	<div class="blog-meta">


		<?php one_page_posted_on();?>
		&#124;
			<div class="blog-post-by">
				<?php
				one_page_posted_by();
				?>
			</div>
		</div> <!--end of blog-meta -->
 			<div class="blog-excerpt">
				<?php the_excerpt(); ?>
			</div>
		<?php
		// TODO: and screed reader to the_excerpt
		// the_content( sprintf(
		// 	wp_kses(
		// 		/* translators: %s: Name of current post. Only visible to screen readers */
		// 		__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'one_page' ),
		// 		array(
		// 			'span' => array(
		// 				'class' => array(),
		// 			),
		// 		)
		// 	),
		// 	get_the_title()
		// ) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'one_page' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->
</div><!-- .blog-post -->
	<!-- <footer class="entry-footer">
		<?php
			 // one_page_entry_footer();
		?>
	</footer><!-- .entry-footer -->
	 <!-- adding <hr> for line between artices -->
</article><!-- #post-<?php the_ID(); ?> -->
