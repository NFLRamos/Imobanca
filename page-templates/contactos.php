<?php
/**
 * Template Name: Template: Contactos
 *
 * 
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<?php get_header(); 

$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); 
?>
<div class="d-flex" style="height:55vh; background-image: linear-gradient(#131413, #cd98330f), url(<?php echo $image ;?>); background-position: 50% 50%;  background-size: cover; ">
<!--<h1 class="titulo-paginas">Contactos</h1>-->
</div>


<?php include __DIR__ . "/../theme-parts-contact/contacto-forms.php"; ?>
<?php include __DIR__ . "/../theme-parts/google-map.php"; ?>
<?php include __DIR__ . "/../theme-parts/newsletter-home.php"; ?>
<?php get_footer(); ?>