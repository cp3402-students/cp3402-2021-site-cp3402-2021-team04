<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package JazzClubTownsville
 */

get_header(); ?>

<div class="content-area">
	<div class="site-content not-found-content">

		<header class="page-header">
			<h1 class="page-title">Page Not Found</h1>
		</header>

		<div class="page-wrapper">
			<div class="page-content">
				<h2>Thank you for checking out our site!</h2>
				<p>It looks you have ventured too deep, if you believe this to be an error please contact the site
					administration.</p>
				<p>Visit our <a class="back-to-home" href="http://jazz.dallas-marshall.com">Home Page</a> to keep
					browsing. We'll do better next time.</p>
			</div>
		</div>
	</div>
</div>
<div class="404">
	<?php get_footer(); ?>
</div>
