<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package JazzClubTownsville
 */

get_header();
?>
	<main id="primary" class="site-main">
		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'jazzclubtownsville'); ?></h1>
			</header>
			<div class="page-content centered">
				<p><?php esc_html_e('It looks you have ventured too deep, if you believe this to be an error please contact the site administration.', 'jazzclubtownsville'); ?></p>
				<p><?php esc_html_e('Return to the Home Page to keep browsing or search for a particular page below', 'jazzclubtownsville'); ?></p>
				<?php
				get_search_form();
				?>
			</div>
		</section>
	</main>
<?php
get_footer();
