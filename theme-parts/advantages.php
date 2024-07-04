<div class="container mt-5" style="background-color:#EDEDED; min-height:70vh; border-radius:20px;">
    <div class="row pb-5">
        <div class="add_advan mt-5">
            <h2>Vantagens</h2>
            <p style="color:#51565D">Principais vantagens ao comprar casas do banco</p>
        </div>
        <!--<div class="col-8">
            <span class="text-amarelo-g"><?php _e('Invista no seu futuro'); ?></span>
            <h2 class="fw-bold"><?php _e('Vantagens que pode ter ao usar os nossos serviços'); ?></h2>
        </div>
        <div class="col-4 mt-3 text-end">
            <a href="<?php bloginfo('url') ?>/contactos" class="btn btn-outline-primary"><?php _e('Sobre nós'); ?></a>
        </div>-->
    </div>
    <div class="row add_slick">
    <div class="slider_advantages mb-3">
        <?php
        if (have_rows('vantagens', 'options')) :
            while (have_rows('vantagens', 'options')) : the_row();
                $icon = get_sub_field('icon'); 
                $icon2 = get_sub_field('icon2'); 
                ?>

                <div class="p-4 ms-1 me-1 col-lg-4  card-col-format">
                <figure class="img-icon"></figure>
                    <h3 class="fw-bold mt-3">                      
                        <?php echo get_sub_field('titulo') ?>
                    </h3>
                    <p><?php echo get_sub_field('texto') ?> </p>                   
                </div>

        <?php endwhile;
        endif;
        ?>
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

