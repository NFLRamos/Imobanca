<?php
defined( 'ABSPATH' ) || exit;
?>
<div class="container-xxl mt-5" style=" margin-bottom: 10rem;">
    <div class="row  pb-5">
        <div class="col-8">
            <h2 class="fw-bold"><?php _e('Nossa seleção de Empreendimentos'); ?></h2>
        </div>
        <div class="col-4 text-end" >
            <a class="btn btn-outline-primary" href="<?php echo get_post_type_archive_link('empreendimentos'); ?>"><?php _e('Ver todos')?></a>
        </div>
    </div>


    <div class="row">

    <div class="slider_emp w-100">
        <?php 
        $loop = new WP_Query( array( 'post_type' => 'empreendimentos', 'posts_per_page' => 8  ) );
        while ( $loop->have_posts() ) : $loop->the_post();
            //Get Featured Picture based on ID
            $thumb_id = get_post_thumbnail_id();
            //get alt att. for SEO
            $alt = get_post_meta ( $thumb_id, '_wp_attachment_image_alt', true );
            //get image Title
            $image_title = get_the_title( $thumb_id );
            //Get image width ou compression or cuts 
            $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full');
            //Get file URL
            $thumb_url = $thumb_url_array[0];

            /*Get Energy
            $energyCat = get_terms( array('taxonomy' => 'energy') );
            $en = '';
            foreach( $energyCat  as $ecat ) {
                $en = $ecat->name;
                }*/
            ?>
            <div class="mb-2 mt-2 ps-2 pe-2 realestatecard">
                <div class="w-100 thumbholder">
                    <img alt="<?php echo $alt; ?>" title="<?php echo $image_title; ?>" class="thumbrealestate" src="<?php echo $thumb_url ?>">
                    
                </div>
                <div class="w-100 infocard">
                    <span class="state">
                        <?php 
                            $state = wp_get_post_terms($post->ID, array('taxonomy' => 'estado') ); 
                            echo $state['0']->name;
                        ?>
                    </span>
                    <h3 class="h5 mb-0 mt-3"><?php the_title(); ?></h3>
                    <span class="location">
                        <?php 
                            if(wp_get_post_terms($post->ID, array('taxonomy' => 'local'))) {
                             //var_dump($city);   
                            $city = wp_get_post_terms($post->ID, array('taxonomy' => 'local') ); 
                            echo $city["0"]->name .', '. $city['0']->name ;
                            if($city['0']->name) echo ', '. $city['0']->name;
                            }
                        ?>
                    </span>
                    <div class="row mt-3">
                        <div class="col border-end"><i style="font-size:35px;" class="las la-door-closed"></i>
                        <?php $fracao = wp_get_post_terms($post->ID, array('taxonomy' => 'Fracao') ); ?>
                        <span class="fraction"><?php echo $fracao['0']->name; ?> Fracções</span>   
                    </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col pt-1">
                        <?php $preco = wp_get_post_terms($post->ID, array('taxonomy' => 'priceemp') ); ?>
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

<script>
    jQuery(document).ready(function($) {
        $('.slider_emp').slick({
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