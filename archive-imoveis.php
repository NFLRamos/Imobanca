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
            <h2>Imóveis</h2>
            <!--<button style="float:right" class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Ordenar por</button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
            <p>Bens encontrados:</p>-->
        </div>
        
        <div class="row mt-5">
            <div class="col-lg-3">
                <div class="tema-search-imoveis" style="width:auto; border:1px solid #dee2e6; border-radius:5px;">
                    <?php echo do_shortcode('[searchandfilter id="255"]') ?>
                </div>

                <!--<div class="mb-4 shadow fw-bold chamada-casas">
                    <p style="font-size:20px;">À procura de um empreendimento?</p>
                    <a href="<?php bloginfo('url') ?>/empreendimentos/" role="button" class="btn btn-primary">Ver Empreendimentos</a>
                </div>-->

            </div>
            <div class="col-lg-9">
                <div class="row">
                <?php
                        /*$args = array(
                        //'post_type' => 'imoveis',
                        'posts_per_page' => 3,
                        //'orderby' => 'name',
                        'order'   => 'ASC',
                        'paged' => $correntPage,
                    );
                    $correntPage = get_query_var('paged');*/
                    ?>


                   <?php while (have_posts()) : the_post();
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

                    ?>
                        <div class="col-md-4 col-lg-4 realestatecard">
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
                                        //var_dump($p);
                                        ?>
                                        <span style="margin-left:10px; font-weight: 600; font-size: 20px">€ <?php echo $p; ?></span>
                                    </div>
                                    <div class="col"><a class="btn btn-primary d-block" href="<?php echo get_permalink(); ?>"><?php _e('Ver imóvel'); ?></a></div>
                                </div>

                            </div>
                        </div>
                        
                    <?php endwhile; ?>

                        
                                    
                </div> 

                <div class="text-center paginacao">
                    <?php 
                    //echo paginate_links(array('total' => $correntPage->max_num_pages)); 
                    //echo paginate_links( array('total' => $correntPage->max_num_pages));
                    the_posts_pagination();
                    //echo get_the_posts_pagination();
                    ?>    
                </div>

                
                    
            </div>
        </div>

    </div>
</div>

<div class="mt-5">
    <?php include('theme-parts/newsletter-home.php'); ?>
</div>
<?php
get_footer();
?>