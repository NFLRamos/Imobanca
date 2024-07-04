<?php

/**
 * Sidebar setup for footer full
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

<<<<<<< HEAD
$container = get_theme_mod('understrap_container_type');
=======
if ( ! is_active_sidebar( 'footerfull' ) ) {
	return;
}
>>>>>>> 8a9f2583654aa2d0340b50056fdca6a864316f58

$container = get_theme_mod( 'understrap_container_type' );
?>

<<<<<<< HEAD

<!-- ******************* The Footer Full-width Widget Area ******************* -->
<div class="w-100 mt-5" style="background-color:#041f39">
	<div class=" tema-footer mt-5" id="wrapper-footer-full" role="footer">
		<?php /* 
		<div class="row" style="background-color:#041f39">
			<div class=" col-lg-4 col-sm-6 col-12" style="line-height: 40px; display:flex; flex-direction:column">
				<h4>Contacto</h4>
				<div style="margin:auto;">
				<div class="format-contactos">
					<div class="d-flex">
					<figure class="icon-phone"></figure>
					<p><?php echo get_field('telefone', 'options'); ?></p>				
					</div>
					
				</div>
				<div class="format-contactos">
				<div class="d-flex">
					<figure class="icon-mail"></figure>
					<p><?php echo get_field('mail', 'options'); ?></p>
				</div>
				</div>
				<div class="format-contactos-pin">
				<div class="d-flex">
					<figure class="icon-pin"></figure>
					<p><?php echo get_field('morada', 'options'); ?></p>
				</div>
				</div>
			</div>
			</div>
=======
<!-- ******************* The Footer Full-width Widget Area ******************* -->

<div class="wrapper" id="wrapper-footer-full" role="complementary">

	<div class="<?php echo esc_attr( $container ); ?>" id="footer-full-content" tabindex="-1">

		<div class="row">

			<?php dynamic_sidebar( 'footerfull' ); ?>
>>>>>>> 8a9f2583654aa2d0340b50056fdca6a864316f58

			<div class=" col-lg-4 col-sm-6 col-12" style="line-height: 40px; display:flex; flex-direction:column">
				<h4>Navegação</h4>
				<div style="margin: 0 auto">
				<div class="format-navegacao">
						<?php wp_nav_menu(
							array(
								'menu'  => 'nav_footer_menu [PT]'
							)
						) ?>
				</div>
				</div>
			</div>
			<div class=" col-lg-4 col-sm-6 col-12" style="line-height: 40px; display:flex; flex-direction:column">
				<h4>Links Úteis</h4>
				<div style="margin: 0 auto">
				<div class="format-navegacao">
				<?php wp_nav_menu(
							array(
								'menu'  => 'footer_links_uteis [PT]'
							)
						) ?>
				</div>
				</div>
			</div>
			<div class="col-12 icons-redes-sociais">
				<?php
				$fb = get_field('icon1', 'options');
				$linkdin = get_field('icon2', 'options');
				$insta = get_field('icon3', 'options');
				?>
				<a href="<?php echo get_field('facebook', 'options') ?>" target="_blank"><img class="icon" src="<?php echo $fb['url'] ?>"></a>
				<a href="<?php echo get_field('linkedin', 'options') ?>" target="_blank"><img class="icon" src="<?php echo $insta['url'] ?>"></a>
				<a href="<?php echo get_field('insta', 'options') ?>" target="_blank"><img class="icon" src="<?php echo $linkdin['url'] ?>"></a>

			</div>
		</div>
		*/ ?>

<<<<<<< HEAD
		<div class="footer-new container">
			<a href="<?php echo get_bloginfo('url') ?>"><img class="img-logo" src="<?php echo get_template_directory_uri() ?>/assets/logo_branco.png"></a>
			<div>
				<?php wp_nav_menu(
					array(
						'menu'  => 'footer_new'
					)
				) ?>

			</div>
			<div style="margin-bottom: 12px;">
				<?php
				$fb = get_field('icon1', 'options');
				$linkdin = get_field('icon2', 'options');
				$insta = get_field('icon3', 'options');
				?>
				<a href="<?php echo get_field('facebook', 'options') ?>" target="_blank"><img class="img-icon" src="<?php echo $fb['url'] ?>"></a>
				<a href="<?php echo get_field('linkedin', 'options') ?>" target="_blank"><img class="img-icon" src="<?php echo $insta['url'] ?>"></a>
				<a href="<?php echo get_field('insta', 'options') ?>" target="_blank"><img class="img-icon" src="<?php echo $linkdin['url'] ?>"></a>

			</div>
		</div>
		<div class="container w-100 pb-3 text-center text-lg-end"> <span style="font-size:14px; margin-right:1.5rem">Criado por <a class="link-contagio" href="https://contagio.pt/" target="_blank"><span class="sep">Contágio</span></a></span></div>
	</div><!-- #wrapper-footer-full -->
</div>
=======
	</div>

</div><!-- #wrapper-footer-full -->
>>>>>>> 8a9f2583654aa2d0340b50056fdca6a864316f58
