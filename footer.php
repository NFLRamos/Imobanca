<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>

<?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>

<div>

	<div <?php echo esc_attr($container); ?>>

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

						<?php //understrap_site_info(); 
						?>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

<<<<<<< HEAD
			</div>
			<!--col end -->
=======
			</div><!-- col -->
>>>>>>> 8a9f2583654aa2d0340b50056fdca6a864316f58

		</div><!-- .row -->

	</div><!-- .container(-fluid) -->

</div><!-- #wrapper-footer -->

<?php // Closing div#page from header.php. ?>
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="https://kit.fontawesome.com/e38ca9f1fe.js" crossorigin="anonymous"></script>
</body>

</html>