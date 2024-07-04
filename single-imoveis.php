<?php

/**
 * The template for displaying all single posts
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$container = get_theme_mod('understrap_container_type');
$image_post = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full');
$pid_active = get_post();
?>

<?php $images = get_field('galeria'); ?>


<?php foreach ($images as $image) : ?>
    <a href="<?php echo $image['url']; ?>" data-lightbox="gallery2" data-title="#" class="btn btn-light d-none"></a>
<?php endforeach; ?>

<!-- galeria mobile-->
<div class="display-mobile-galeria  pt-5" style="height:600px; width:100%; background-image: url(<?php echo $image_post; ?>); background-size:cover;">

    <div class="gallery alinhamento-fotos">
        <a href="<?php echo $image['url']; ?>" data-lightbox="gallery1" data-title="#" class="btn btn-light">Ver fotos</a>
    </div>

</div>

<!-- galeria mobile-->


<!-- galeria desktop -->
<div class=" display-desktop-galeria  pt-5" style="height:600px; width:100%">
    <div style="width:100%">
        <img style="width:100%; height:100%; object-fit:cover;" src="<?php echo $image_post ?>">
    </div>

    <div class="gallery alinhamento-fotos">

        <?php
        $gallery = get_field('galeria');
        $urls = [];

        foreach ($gallery as $image_id) :

            $urls[] = esc_url($image_id['sizes']['large']);

           
    
        ?>
            
            <a href="<?php echo $image_id['url']; ?>" data-lightbox="galeria" data-title="#" data-rel='iLightbox{0}' class="show-bizz btn btn-light">Ver fotos</a>
        

    <?php 
    endforeach;
   
     ?>


    </div>

</div>
<!-- galeria desktop -->

<!-- barra galeria colors 
<div class="container-fluid" style="height:10px; background: linear-gradient(90deg, rgba(249,0,0,0.8435749299719888) 24%, rgba(249,254,61,1) 34%, rgba(132,247,59,0.8603816526610644) 100%);"></div>
-->

<div class="wrapper" id="single-wrapper">
    <div class="mt-2 mt-md-5 container-xxl tema-single-imoveis">
        <div class="row">
            <div class="col-md-6 ">
                <h3><?php _e('Elementos Chave') ?></h3>
                <?php if (have_rows('bullets', $post_id)) :
                    while (have_rows('bullets', $post_id)) : the_row(); ?>
                        <div class="d-flex frame-left mt-2">
                            <div class="div-icon-left">
                                <?php $icon = get_sub_field('icon'); ?>
                                <img class="d-none d-lg-block" style="height:40px; object-fit:cover;" src="<?php echo $icon['url']; ?>">
                            </div>
                            <div>
                                <span style="width:90%;font-size: 20px; font-weight: 700;"><?php echo get_sub_field('titulo'); ?></span></br>
                                <span style="color: #999; font-weight:600;"><?php echo get_sub_field('conteudo'); ?></span>
                            </div>
                        </div>
                <?php endwhile;
                endif;
                ?>

            </div>


            <div class=" col-md-6 realestatecard order-first order-md-last mb-5 mb-md-0">
                <div id="sidebar">
                    <div class=" shadow" style="padding:20px; border:unset; border-radius:5px; background-color:#fcfcfc;">
                        <div class="w-100 infocard ">
                            <span class="state">
                                <?php
                                $state = wp_get_post_terms($post->ID, array('taxonomy' => 'state'));
                                echo $state['0']->name;
                                ?>
                            </span>
                            <h3 class="h5 mb-0 mt-3"><?php the_title(); ?></h3>
                            <span class="location">
                                <?php
                                if (wp_get_post_terms($post->ID, array('taxonomy' => 'city'))) {
                                    //var_dump($city);
                                    $city = wp_get_post_terms($post->ID, array('taxonomy' => 'city'));
                                    echo $city["0"]->name . ', ' . $city['0']->name;
                                    if ($city['0']->name) echo ', ' . $city['0']->name;
                                }
                                ?>
                            </span>
                            <div class="row mt-3">
                                <div class="col-3 border-end"><i class="fas fa-bed"></i>
                                    <?php $beds = wp_get_post_terms($post->ID, array('taxonomy' => 'beds')); ?>
                                    <span style="margin-left:10px;"> <?php echo $beds['0']->name; ?></span>
                                </div>
                                <div class="col-3  border-end"><i class="fas fa-shower"></i>
                                    <?php $wc = wp_get_post_terms($post->ID, array('taxonomy' => 'wc')); ?>
                                    <span style="margin-left:10px;"> <?php echo $wc['0']->name; ?></span>
                                </div>
                                <div class="col-6"><i class="fas fa-ruler-combined"></i>
                                    <?php $area = wp_get_post_terms($post->ID, array('taxonomy' => 'area')); ?>
                                    <span style="margin-left:10px;"> <?php echo $area['0']->name; ?>m2</span>
                                </div>
                            </div>
                            <div class=" mt-3">
                                <div class="col pt-1">
                                    <?php $preco = wp_get_post_terms(
                                        $post->ID,
                                        array(
                                            'taxonomy' => 'price'
                                        )
                                    );
                                    foreach ($preco  as $prec) {
                                        $p = $prec->name;
                                    }
                                    //var_dump($p);
                                    ?>
                                    <span style="margin-left:10px; font-weight: 600; font-size: 20px">€ <?php echo $p; ?></span>
                                </div>
                                <div class="col mt-4"><a class="btn btn-primary" style="height: 50px; width: 300px; font-size: 20px;" data-bs-toggle="modal" data-bs-target="#exampleModal"><?php _e('Interessado? Fale Connosco!'); ?></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-12 mt-4">
            <h4 class="fw-bold"><?php _e('Descrição') ?></h4>
            <span><?php echo the_content(); ?></span>
            <?php if (have_rows('texto', $post_id)) :
                while (have_rows('texto', $post_id)) : the_row(); ?>
                    <h4 class="fw-bold"><?php echo get_sub_field('titulo'); ?></h4>
                    <span class="mt-3"><?php echo get_sub_field('conteudos'); ?> </span>
            <?php endwhile;
            endif; ?>
        </div>



        <div class="col-md-12 mt-5">
            <h4 class="fw-bold"><?php _e('Localização') ?></h4>
            <?php echo get_field('google_maps'); ?>
        </div>



    </div><!-- #content -->

    <div class="container-xxl tema-single-imoveis mb-5 mt-5" style=" height:600px;">
        <div class="row  pb-5">
            <div class="col-md-6 mt-5">
                <h2 class="fw-bold"><?php _e('Outros Imóveis'); ?></h2>
            </div>
            <div class="col-md-6 mt-5 text-end">
                <a class="btn btn-outline-primary" href="<?php echo get_post_type_archive_link('imoveis'); ?>"><?php _e('Ver todos') ?></a>
            </div>
        </div>

        <div class="slider_outros">
            <?php
            $loop = new WP_Query(array('post_type' => 'imoveis'));
            while ($loop->have_posts()) {
                $loop->the_post();
                $pid = get_post();
                //Get Featured Picture based on ID
                $thumb_id = get_post_thumbnail_id();
                //get alt att. for SEO
                $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
                //get image Title
                $image_title = get_the_title($thumb_id);
                //Get image width ou compression or cuts 
                $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full');
                //Get file URL
                $thumb_url = $thumb_url_array[0];

                //Get Energy
                $en = wp_get_post_terms($post->ID, array('taxonomy' => 'energy'));
                if ($pid_active != $pid) { ?>

                    <div class="col-md-4 col-lg-3 ps-2 pe-2 realestatecard">
                        <div class="w-100 thumbholder">
                            <img alt="<?php echo $alt; ?>" title="<?php echo $image_title; ?>" class="thumbrealestate" src="<?php echo $thumb_url ?>">
                            <div class="energylabel">
                                <?php if ($en['0']->name == 'A+') { ?>
                                    <span class="labelText" style="background:#01833b;"><?php echo $en['0']->name; ?></span><span class="shapeenergy" style="border-left: 15px solid #01833b;"></span>
                                <?php }
                                if ($en['0']->name == 'A') { ?>
                                    <span class="labelText" style="background:#44a940;"><?php echo $en['0']->name; ?></span><span class="shapeenergy" style="border-left: 15px solid #44a940;"></span>
                                <?php }
                                if ($en['0']->name == 'B') { ?>
                                    <span class="labelText" style="background:#7eb437;"><?php echo $en['0']->name; ?></span><span class="shapeenergy" style="border-left: 15px solid #7eb437;"></span>
                                <?php }
                                if ($en['0']->name == 'B-') { ?>
                                    <span class="labelText" style="background:#b3cd2e;"><?php echo $en['0']->name; ?></span><span class="shapeenergy" style="border-left: 15px solid #b3cd2e;"></span>
                                <?php }
                                if ($en['0']->name == 'C') { ?>
                                    <span class="labelText" style="background:#d3d91b;"><?php echo $en['0']->name; ?></span><span class="shapeenergy" style="border-left: 15px solid #d3d91b;"></span>
                                <?php }
                                if ($en['0']->name == 'D') { ?>
                                    <span class="labelText" style="background:#ecde00;"><?php echo $en['0']->name; ?></span><span class="shapeenergy" style="border-left: 15px solid #ecde00;"></span>
                                <?php }
                                if ($en['0']->name == 'E') { ?>
                                    <span class="labelText" style="background:#f1c107;"><?php echo $en['0']->name; ?></span><span class="shapeenergy" style="border-left: 15px solid #f1c107;"></span>
                                <?php }
                                if ($en['0']->name == 'F') { ?>
                                    <span class="labelText" style="background:#df1a1e;"><?php echo $en['0']->name; ?></span><span class="shapeenergy" style="border-left: 15px solid #df1a1e;"></span>
                                <?php } ?>

                            </div>
                        </div>
                        <div class="w-100 infocard">
                            <span class="state">
                                <?php
                                $state = wp_get_post_terms($post->ID, array('taxonomy' => 'state'));
                                echo $state['0']->name;
                                ?>
                            </span>
                            <h3 class="h5 mb-0 mt-3"><?php the_title(); ?></h3>
                            <span class="location">
                                <?php
                                if (wp_get_post_terms($post->ID, array('taxonomy' => 'city'))) {
                                    //var_dump($city);
                                    $city = wp_get_post_terms($post->ID, array('taxonomy' => 'city'));
                                    echo $city["0"]->name . ', ' . $city['0']->name;
                                    if ($city['0']->name) echo ', ' . $city['0']->name;
                                }
                                ?>
                            </span>
                            <div class="row mt-3">
                                <div class="col-3 border-end"><i class="fas fa-bed"></i>
                                    <?php $beds = wp_get_post_terms($post->ID, array('taxonomy' => 'beds')); ?>
                                    <span style="margin-left:10px;"> <?php echo $beds['0']->name; ?></span>
                                </div>
                                <div class="col-3  border-end"><i class="fas fa-shower"></i>
                                    <?php $wc = wp_get_post_terms($post->ID, array('taxonomy' => 'wc')); ?>
                                    <span style="margin-left:10px;"> <?php echo $wc['0']->name; ?></span>
                                </div>
                                <div class="col-6"><i class="fas fa-ruler-combined"></i>
                                    <?php $area = wp_get_post_terms($post->ID, array('taxonomy' => 'area')); ?>
                                    <span style="margin-left:10px;"> <?php echo $area['0']->name; ?>m2</span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col pt-1">
                                    <?php $preco = wp_get_post_terms(
                                        $post->ID,
                                        array(
                                            'taxonomy' => 'price'
                                        )
                                    );
                                    foreach ($preco  as $prec) {
                                        $p = $prec->name;
                                    }

                                    ?>
                                    <span style="margin-left:10px; font-weight: 600; font-size: 20px">€ <?php echo $p; ?></span>
                                </div>
                                <div class="col"><a class="btn btn-primary d-block" href="<?php echo get_permalink(); ?>"><?php _e('Ver imóvel'); ?></a></div>
                            </div>

                        </div>
                    </div>
            <?php
                }
            }
            wp_reset_postdata();
            ?>
        </div>


    </div>


</div><!-- #single-wrapper -->

<?php

include('theme-parts/newsletter-home.php');
include('theme-parts-contact/modal-single-post.php');

?>
<?php
get_footer();
?>

<script>
    /* script para slider */
    jQuery(document).ready(function($) {
        $('.slider_outros').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 4000,
            //centerMode: true,
            arrows: false,
            dots: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    //centerMode: true,
                }
            }, {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    //centerMode: true,
                }
            }, ]
        });
    });
</script>

<script>
    $(document).ready(function() {
        var $window = $(window);
        var $sidebar = $("#sidebar");
        var $sidebarHeight = $sidebar.innerHeight() + 140;
        var $footerOffsetTop = $("#srollStop").offset().top;
        var $sidebarOffset = $sidebar.offset();

        $window.scroll(function() {
            if ($window.scrollTop() > $sidebarOffset.top) {
                $sidebar.addClass("position-fixed");
            } else {
                $sidebar.removeClass("position-fixed");
            }
            if ($window.scrollTop() + $sidebarHeight > $footerOffsetTop) {
                $sidebar.css({
                    "top": -($window.scrollTop() + $sidebarHeight - $footerOffsetTop)
                });
            } else {
                $sidebar.css({
                    "top": "90px",
                });
            }
        });



    });
</script>