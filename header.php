<?php

/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$bootstrap_version = get_theme_mod('understrap_bootstrap_version', 'bootstrap4');
$navbar_type       = get_theme_mod('understrap_navbar_type', 'collapse');
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
	<?php do_action('wp_body_open'); ?>
	<div class="site header-theme" id="page">

		<!-- ******************* The Navbar Area ******************* -->
		<header id="wrapper-navbar">

<<<<<<< HEAD
			<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e('Skip to content', 'understrap'); ?></a>
=======
		<a class="skip-link <?php echo understrap_get_screen_reader_class( true ); ?>" href="#content">
			<?php esc_html_e( 'Skip to content', 'understrap' ); ?>
		</a>
>>>>>>> 8a9f2583654aa2d0340b50056fdca6a864316f58


<<<<<<< HEAD

			<?php get_template_part('global-templates/navbar', $navbar_type . '-' . $bootstrap_version); ?>




		</header><!-- #wrapper-navbar end -->
	</div>

</body>
<script>
	function openNav() {
		var w = window.innerWidth;
		if (w >= 768) {
			document.getElementById("mySidenav").style.width = "50%";
			document.getElementById("mySidenav").style.padding = "75px";
			
		}
		if (w < 768) {
			document.getElementById("mySidenav").style.width = "100%";
			document.getElementById("mySidenav").style.padding = "30px";
			
		}


		//document.body.style.backgroundColor = "grey";

	}

	function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
		document.getElementById("mySidenav").style.padding = "0";

	}
</script>
=======
	</header><!-- #wrapper-navbar -->
>>>>>>> 8a9f2583654aa2d0340b50056fdca6a864316f58
