<div class="container-xxl bg-depoimentos mt-5 mb-5" >
    <div class="row  pb-5">
        <div class="col">
            <div class="pt-5 pb-3 mt-4">
                <h2 style="color: #041f39" class="text-center fw-bold"><?php _e('Depoimentos dos nossos clientes') ?></h2>
            </div>
        </div>
    </div>
 
        <div class="row">
            <div class="col-12 slick-tema">
                <div class="slider_depoi">
                    <?php
                    $args = array(
                        'post_type' => 'depoimento',
                        'orderby' => 'rand',
                        'posts_per_page' => -1
                    );
                    $depoi = new WP_Query($args);
                    while ($depoi->have_posts()) {
                        $depoi->the_post();  ?>
                            <div class="card shadow mb-4" style="margin-right:10px; margin-left:10px;">
                                <div class="card-body">
                                    <h3 class="fw-bold pb-2"><?php the_title(); ?><img style="float:right; padding-top:6px;" src="<?php echo get_template_directory_uri(); ?>/assets/logo-small.jpg"></h3>
                                    <p><?php echo wp_trim_words(get_the_content(), 80)  ?></p>
                                    <span class="texto-verde"><?php echo get_field('local_aquisicao'); ?></span>
                                </div>
                            </div>                       
                    <?php
                    }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    

</div>


<script>
    jQuery(document).ready(function($) {
        $('.slider_depoi').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 4000,
            //centerMode: true,
            arrows: false,
            dots: true,
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