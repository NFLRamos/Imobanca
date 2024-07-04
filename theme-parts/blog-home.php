<div class="container-xxl mt-5">
    <div class="row  pb-5">
        <div class="col-8">
            <h2 class="fw-bold mt-2"><?php _e('Artigos recentes'); ?></h2>
        </div>
        <div class="col-4 mt-2 text-end">
            <a href="<?php bloginfo('url') ?>/artigos" class="btn btn-outline-primary"><?php _e('Ver artigos'); ?></a>
        </div>
    </div>
    <div class="row mt-4">
        <div class="slider_advantages">
            <?php
            $args = array(
                'post_type' => 'post',
                'orderby'    => 'ID',
                'post_status' => 'publish',
                'order'    => 'DESC',
                'posts_per_page' => -1 // this will retrive all the post that is published 
            );
            $result = new WP_Query($args);
            if ($result->have_posts()) {
                // Start the Loop.
                while ($result->have_posts()) {
                    $result->the_post();
                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium'); ?>

                    <div class="col-md-4 mb-5 tema-cards-archive">
                        <div class="frame-card-home p-2">
                            <a href="<?php echo the_permalink() ?>"><img class="mb-3 w-100 imagem-linda" src="<?php echo $image[0] ?>"></a>
                            <a href="<?php echo the_permalink() ?>"><p class="mt-3"><?php the_title(); ?></p></a>
                            <!--<div style="margin:auto; margin-bottom:15px;">
                                <button onclick="location.href='<?php the_permalink() ?>'" type="button" class="btn btn-primary butao-perma">Veja o artigo completo<img class="setinha" src="<?php echo get_template_directory_uri(); ?>/assets/seta_baixo.png"></button>
                            </div>-->
                        </div>
                    </div>
            <?php    //get_template_part( 'loop-templates/content', get_post_format() );
                }
            } ?>
        </div>

    </div>
</div>

<script>
    jQuery(document).ready(function($) {
        $('.slider_advantages').slick({
            infinite: true,
            slidesToShow: 3,
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
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    //centerMode: true,
                }
            }, ]
        });
    });
</script>