<?php
/**
 * Template Name: Template: Home to You
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

<div class="d-flex" style="height:55vh; background-image: linear-gradient(#131413, #cd98330f), url(<?php echo $image ;?>); background-position: 50% 70%;  background-size: cover;">
<!--<h1 class="titulo-paginas">Imobanca</h1>-->
</div>

<div class="container">
<?php the_content(); ?>
</div>

<div class="container-fluid pt-3 pb-3" >
<?php //include __DIR__ . "/../theme-parts-hty/consultores.php"; ?>
</div>
<?php include __DIR__ . "/../theme-parts-hty/parceiros-hty.php"; ?>
<?php include __DIR__ . "/../theme-parts/google-map.php"; ?>
<?php include __DIR__ . "/../theme-parts/newsletter-home.php"; ?>
<?php include __DIR__ . "/../theme-parts-hty/modal-perceiro.php"; ?>
<?php get_footer(); ?>