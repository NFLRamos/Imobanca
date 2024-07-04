<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

$container = get_theme_mod('understrap_container_type');
?>

<?php if (is_front_page() && is_home()) : ?>
	<?php get_template_part('global-templates/hero'); ?>
<?php endif; ?>

<div class="wrapper tema-blog" id="index-wrapper">

<div class="container-fluid d-flex archive-imagem-hero">
	<div class="div_hero">
		<h1>Como comprar imóveis da banca?</h1>
		<p>Por norma, a entidade a quem vai comprar o imóvel facilita também o financiamento. imobiliário, mas sim nas suas próprias plataformas. </p>
		<button onclick="location.href='#20'" type="button" class="btn btn-primary" >Ver todos os Artigos<img class="setinha" style="padding-top:0px; " src="<?php echo get_template_directory_uri(); ?>/assets/seta_baixo.png"></button>
	</div>
</div>

<<<<<<< HEAD
<h2 id="20">Artigos Recomendados</h2>
=======
			<?php
			// Do the left sidebar check and open div#primary.
			get_template_part( 'global-templates/left-sidebar-check' );
			?>
>>>>>>> 8a9f2583654aa2d0340b50056fdca6a864316f58

	<div class="<?php echo esc_attr($container); ?>" id="content" tabindex="-1">
	<div class="frame-search mb-4">
	<?php get_search_form(); ?>
	</div>
		<div class="row" >
				<?php
				if (have_posts()) {
					
					// Start the Loop.
					while (have_posts()) {
						the_post();
						
						$image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium'); ?>

<<<<<<< HEAD
						<div class="col-md-4 mb-5 tema-cards-archive">
							<div class="frame-card">
								<a href="<?php echo the_permalink() ?>"><img class="mb-3 w-100 imagem-linda" src="<?php echo $image[0] ?>"></a>
								<h3 class="mt-3"><?php the_title(); ?></h3>
								<p><?php echo get_field('frase'); ?></p>
								<div style="margin:auto; margin-bottom:15px;">
								<button onclick="location.href='<?php the_permalink() ?>'" type="button"  class="btn btn-primary butao-perma">Veja o artigo completo<img class="setinha" src="<?php echo get_template_directory_uri(); ?>/assets/seta_baixo.png"></button>
								</div>
								
							</div>
						</div>
				<?php	//get_template_part( 'loop-templates/content', get_post_format() );
				
					}
				} ?>
=======
						/*
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'loop-templates/content', 'search' );
					endwhile;
					?>

				<?php else : ?>

					<?php get_template_part( 'loop-templates/content', 'none' ); ?>

				<?php endif; ?>

			</main>
>>>>>>> 8a9f2583654aa2d0340b50056fdca6a864316f58

			<?php
			// Display the pagination component.
			understrap_pagination();

<<<<<<< HEAD
=======
			// Do the right sidebar check and close div#primary.
			get_template_part( 'global-templates/right-sidebar-check' );
			?>

>>>>>>> 8a9f2583654aa2d0340b50056fdca6a864316f58
		</div><!-- .row -->


	</div><!-- #content -->

</div><!-- #index-wrapper -->

<?php
include('theme-parts/newsletter-home.php');
get_footer();
