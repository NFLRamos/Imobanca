<?php
/*
LOOP CTP Imoveis, based last Posts, or is_fetured field (acf).
In mobile Load slick slider and include realestate-homeMobile.php for loging the content. width hack for iPad because Run all Version at same time. 
Style are changed on src/sass/themes/_realestate.scss
*/

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<div class="container-xxl mt-5">
    <div class="row  pb-5">
        <div class="col-6">
            <h2 class="fw-bold"><?php _e('Nossa seleção de imóveis'); ?></h2>
        </div>
        <div class="col-6 text-end">
            <a class="btn btn-outline-primary" href="<?php echo get_post_type_archive_link('imoveis'); ?>"><?php _e('Ver todos') ?></a>
        </div>
    </div>

    <div class="row">

        <div class="slider_imoveis w-100">
            <?php
            $loop = new WP_Query(array('post_type' => 'imoveis'));
            while ($loop->have_posts()) : $loop->the_post();
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

                <div class="mb-2 mt-2 ps-2 pe-2 realestatecard ">
                    <div class="w-100 thumbholder">
                    <a href="<?php echo get_permalink(); ?>"><img  alt="<?php echo $alt; ?>" title="<?php echo $image_title; ?>" class="thumbrealestate" src="<?php echo $thumb_url ?>"  ></a>
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
                                <?php $preco = wp_get_post_terms($post->ID, array('taxonomy' => 'price'));
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
    </div>
</div>

<script>
    jQuery(document).ready(function($) {
        $('.slider_imoveis').slick({
            infinite: true,
            slidesPerRow: 1,
            rows: 2,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 4000,
            //centerMode: true,
            arrows: false,
            dots: false,
            responsive: [{
                    breakpoint: 700,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        rows: 1,
                        //centerMode: true,
                    }
                }, {
                    breakpoint: 1000,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        rows: 1,
                        //centerMode: true,
                    }
                },
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        rows: 1,
                        //centerMode: true,
                    }
                },
            ]
        });
    });
</script>