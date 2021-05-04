<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JazzClubTownsville
 */

?>

<footer id="colophon" class="site-footer">
	<div class="back-to-top">
		<a href="">Back to top</a>

	</div> <!-- .back-to-top -->
	<nav class="social-nav">
		<!--WP nav menu linked to social menu. Seen in Customize -> Menus -> Social Media Menu-->
		<?php wp_nav_menu(array('theme_location' => 'social')); ?>
	</nav> <!-- .social-nav -->
	<div class="site-info">
		<?php

		printf(esc_html__('Theme: %1$s %2$s.', 'jazzclubtownsville'), '&copy;', '<a href="https://github.com/cp3402-students/cp3402-2021-site-cp3402-2021-team04">Team 04</a>');
		?>
	</div><!-- .site-info -->


</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
