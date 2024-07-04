<?php

/**
 * Header Navbar (bootstrap5)
 *
 * @package Understrap
 * @since 1.1.0
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>

<nav style="width:100%; z-index:9999;" id="main-nav" class="posicao-fixa-unset navbar navbar-expand navbar-light bg-white shadow" aria-labelledby="main-nav-label">

	<h2 id="main-nav-label" class="screen-reader-text">
		<?php esc_html_e('Main Navigation', 'understrap'); ?>
	</h2>


	<div class="<?php echo esc_attr($container); ?>">

<<<<<<< HEAD
		<!-- Your site title as branding in the menu -->
		<?php if (!has_custom_logo()) { ?>

			<?php if (is_front_page() && is_home()) : ?>

				<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url(home_url('/')); ?>" itemprop="url"><?php bloginfo('name'); ?></a></h1>

			<?php else : ?>

				<a class="navbar-brand" rel="home" href="<?php echo esc_url(home_url('/')); ?>" itemprop="url"><?php bloginfo('name'); ?></a>

			<?php endif; ?>

		<?php
		} else {
			the_custom_logo();
		}
		?>
		<!-- end custom logo -->

=======
		<!-- Your site branding in the menu -->
		<?php get_template_part( 'global-templates/navbar-branding' ); ?>

		<button
			class="navbar-toggler"
			type="button"
			data-bs-toggle="offcanvas"
			data-bs-target="#navbarNavOffcanvas"
			aria-controls="navbarNavOffcanvas"
			aria-expanded="false"
			aria-label="<?php esc_attr_e( 'Open menu', 'understrap' ); ?>"
		>
			<span class="navbar-toggler-icon"></span>
		</button>
>>>>>>> 8a9f2583654aa2d0340b50056fdca6a864316f58


<<<<<<< HEAD
=======
			<div class="offcanvas-header justify-content-end">
				<button
					class="btn-close btn-close-white text-reset"
					type="button"
					data-bs-dismiss="offcanvas"
					aria-label="<?php esc_attr_e( 'Close menu', 'understrap' ); ?>"
				></button>
			</div><!-- .offcancas-header -->
>>>>>>> 8a9f2583654aa2d0340b50056fdca6a864316f58


		<div style="align-items:flex-end; " class=" bg-primary" tabindex="-1" id="navbarNavOffcanvas">


			<ul id="main-menu" class="navbar-nav offcanvas ml-auto menu-top">
				<li itemscope="itemscope" id="menu-item-1121" class="d-block d-md-none  order-last menu-item menu-item-type-custom menu-item-object-custom menu-item-1121 nav-item menu-logo-mobile"><span style="cursor:pointer" onclick="openNav()">
						<!--&#9776;--><img src="<?php echo get_template_directory_uri() ?>/assets/burguer.png">
					</span></li>

				<div class="offcanvas-header justify-content-end">
					<button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>

				</div><!-- .offcancas-header -->

				<!-- The WordPress Menu goes here -->
				<?php
				wp_nav_menu(
					array(
						//'menu'  => 'footer_links_uteis [PT]',
						'theme_location'  => 'primary',
						'container_class' => 'offcanvas-body show-not-menu  icons-nav',
						'container_id'    => '',
						'menu_class'      => 'navbar-nav justify-content-end flex-grow-1 pe-3',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>


				<!-- MENU OFF CANVAS AZUL -->
				<div id="mySidenav" class="sidenav menu-slide" style="z-index: 99;">
					<a href="javascript:void(0)" style="margin-top:40px" class="closebtn" onclick="closeNav()">&times;</a>
					<!--<a style="color: #eee12c; font-size:14px;"><?php _e('MENU') ?></a>-->
					<a style="font-weight: 600; font-size: 30px;" class=" mt-4" href="<?php bloginfo('url') ?>"><?php _e('Home') ?></a>
					<a style="font-weight: 600; font-size: 30px;" href="<?php bloginfo('url') ?>/imoveis"><?php _e('Imóveis') ?></a>
					<!--<a style="font-weight: 600; font-size: 30px;" href="<?php bloginfo('url') ?>/empreendimentos"><?php _e('Empreendimentos') ?></a>-->
					<a style="font-weight: 600; font-size: 30px;" href="<?php bloginfo('url') ?>/home-to-you"><?php _e('Sobre nós') ?></a>
					<a style="font-weight: 600; font-size: 30px;" href="<?php bloginfo('url') ?>/artigos"><?php _e('Artigos') ?></a>
					<!--<a style="font-weight: 600; font-size: 30px;" href="<?php bloginfo('url') ?>/contactos"><?php _e('Quero Vender') ?></a>-->
					<a style="font-weight: 600; font-size: 30px;" href="<?php bloginfo('url') ?>/contactos"><?php _e('Fale Connosco') ?></a>
					<div style="height: 1px; background-color: rgba(255,255,255,.096); width: 90%; margin-left: 25px; margin-top: 20px; margin-bottom:20px; " class="ml-5 mr-5"></div>
					<div class="d-flex ">
						<?php
						$fb = get_field('icon1', 'options');
						$linkdin = get_field('icon2', 'options');
						$insta = get_field('icon3', 'options');
						?>
						<a href="<?php echo get_field('facebook', 'options') ?>" target="_blank" ><img class="icons-header" src="<?php echo $fb['url'] ?>"></a>
						<a href="<?php echo get_field('linkedin', 'options') ?>" target="_blank" ><img class="icons-header" src="<?php echo $linkdin['url'] ?>"></a>
						<a href="<?php echo get_field('insta', 'options') ?>" target="_blank" ><img class="icons-header" src="<?php echo $insta['url'] ?>"></a>
					</div>

					
					<!--<div style="margin-top:10px;">
						<div class="row">
							<div style="margin-left:25px; display: flex; align-items: start;" class="col">
								<i class="text-white las la-map-marker" style="font-size:20px;"><span style="font-weight:400 !important;">Rua Julio Dinis, 821 <br>4050-327<br>Porto, Portugal</span></i>
							</div>
							<div class="col icons-t">
								<i class="text-white las la-phone"> <span style="margin-left:5px; font-weight:400 !important;">+351 222 408 045</span></i></br>
								<i class="text-white lab la-whatsapp"> <span style="margin-left:5px; font-weight:400 !important;">+351 936 931 014</span></i></br>
			
							</div>
						</div>
					</div>-->
				</div><!-- MENU OFF CANVAS AZUL -->
			</ul>


		</div>  <!-- .offcanvas -->



	</div><!-- .container(-fluid) -->

<<<<<<< HEAD
</nav><!-- .site-navigation -->
=======
</nav><!-- #main-nav -->
>>>>>>> 8a9f2583654aa2d0340b50056fdca6a864316f58
