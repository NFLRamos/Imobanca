<?php
/**
 * The template for displaying all single posts
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="single-wrapper" >

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1" style="margin-top:20vh">

<<<<<<< HEAD
	
		<?php the_content(); ?>
	
=======
		<div class="row">

			<?php
			// Do the left sidebar check and open div#primary.
			get_template_part( 'global-templates/left-sidebar-check' );
			?>

			<main class="site-main" id="main">

				<?php
				while ( have_posts() ) {
					the_post();
					get_template_part( 'loop-templates/content', 'single' );
					understrap_post_nav();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				}
				?>

			</main>

			<?php
			// Do the right sidebar check and close div#primary.
			get_template_part( 'global-templates/right-sidebar-check' );
			?>

		</div><!-- .row -->
>>>>>>> 8a9f2583654aa2d0340b50056fdca6a864316f58

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php
include('theme-parts/blog-home.php');
include('theme-parts/newsletter-home.php');
get_footer();
