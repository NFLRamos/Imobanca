<?php

/**
 * 
 *
 * 
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$container = get_theme_mod('understrap_container_type');
?>

<div class="wrapper" id="archive-wrapper">
    <div class="container-xxl tema-imoveis">
        <div>
            <h2>Corporate</h2>
            <button style="float:right" class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Ordenar por</button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
            <p>Bens encontrados:</p>
        </div>

        <div class="row mt-5">
            <div class="col-md-3">
                <div style="height:1000px; width:auto; border:1px solid grey; border-radius:5px;">
                    <p>
                        <a class="btn btn-link" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Link with href
                        </a>
                    </p>
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                            Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                        </div>
                    </div>
                </div>
                <div class="shadow fw-bold chamada-casas">
                    <p style="font-size:20px;">À procura de um</br> Imóvel?</p>
                    <a href="<?php bloginfo('url') ?>/imoveis/" role="button" class="btn btn-primary">Ver Imóveis</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <?php
                    //$loop = new WP_Query( array( 'post_type' => 'corporate', 'posts_per_page' => 8  ) );
                    while (have_posts()) : the_post();
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


                    ?>
                        <div class="col-md-4 col-lg-4 realestatecard">
                            <div class="w-100 thumbholder">
                                <img alt="<?php echo $alt; ?>" title="<?php echo $image_title; ?>" class="thumbrealestate" src="<?php echo $thumb_url ?>">

                            </div>
                            <div class="w-100 infocard">
                                <span class="state">
                                    <?php
                                    $state = wp_get_post_terms($post->ID, array('taxonomy' => 'estadocorp'));
                                    echo $state['0']->name;
                                    ?>
                                </span>
                                <h3 class="h5 mb-0 mt-3"><?php the_title(); ?></h3>
                                <span class="location">
                                    <?php
                                    if (wp_get_post_terms($post->ID, array('taxonomy' => 'local'))) {
                                        //var_dump($city);   
                                        $city = wp_get_post_terms($post->ID, array('taxonomy' => 'local'));
                                        echo $city["0"]->name . ', ' . $city['0']->name;
                                        if ($city['0']->name) echo ', ' . $city['0']->name;
                                    }
                                    ?>
                                </span>
                                <div class="row mt-3">
                                <div class="col"><i class="fas fa-ruler-combined"></i>
                                        <?php $area = wp_get_post_terms($post->ID, array('taxonomy' => 'areacorp')); ?>
                                        <span style="margin-left:10px;"> <?php echo $area['0']->name; ?> m2</span>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col pt-1">
                                        <?php $preco = wp_get_post_terms($post->ID, array('taxonomy' => 'pricecorp')); ?>
                                        <span style="font-weight: 600; font-size: 20px">€ <?php echo $preco['0']->name; ?></span>
                                    </div>
                                    <div class="col"><a class="btn btn-primary d-block" href="<?php echo get_permalink(); ?>"><?php _e('Ver imóvel'); ?></a></div>
                                </div>

                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>

            </div>
        </div>

    </div>
    
</div>


<?php
 get_footer(); ?>