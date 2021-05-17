<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package JazzClubTownsville
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array('next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'jazzclubtownsville' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Next post:', 'jazzclubtownsville' ) . '</span> ' .
					'<span class="post-title">%title</span>',
					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'jazzclubtownsville' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Previous post:', 'jazzclubtownsville' ) . '</span> ' .
						'<span class="post-title">%title</span>',
				)   );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
