<div class="container">

    <div class="row mb-5 tema-quem-somos">
        <h2 class="fw-bold margem-titulo mt-3"><?php _e('Seja de Portugal ou do mundo,</br>a Home to You é feita por si') ?></h2>
        <div class="texto-ali">

            <a href="https://api.whatsapp.com/send?phone=<?php echo get_field('whatsaap', 'options') ?>" target="_blank" class="mb-2 me-5 btn btn-light"><i style="font-size:20px;" class="me-1 lab la-whatsapp"></i><?php echo get_field('whatsaap', 'options') ?></a><br>
            <a href="#" class="btn btn-primary"><?php _e('Junte-se a nós') ?></a>
        </div>
    </div>

<div class="row tema-quem-somos">
    <div class="slider_consultores">
        

            <?php
            $args = array(
                'post_type' => 'consultores',
                'orderby' => 'rand',
                //'posts_per_page' => -1
            );

            $depoi = new WP_Query($args);
            while ($depoi->have_posts()) {
                $depoi->the_post();

                $imagem = get_field('foto');

                $cargo = get_field('cargo');

            ?>
                <?php // if ($contador % 2 == 0) { ?>

                    <div class="col-md-3 alinhamento">
                        <img class="shadow" style="border-radius:5px; height:400px;" src="<?php echo $imagem['url']; ?>">
                        <p class="mt-2 fw-bold"><?php the_title(); ?></p>
                        <p style="color: #6c757d; font-weight: 500;"><?php echo $cargo; ?></p>
                    </div>

                <?php // } ?>
                <?php // if ($contador == 1) { ?>

                 <!--   <div style="margin-top:25px;" class="col">
                        <img class="shadow" style="border-radius:5px; height:400px;" src="<?php echo $imagem['url']; ?>">
                        <p class="mt-2 fw-bold"><?php the_title(); ?></p>
                        <p style="color: #6c757d; font-weight: 500;"><?php echo $cargo; ?></p>
                    </div>-->

                <?php //} ?>

                <?php //if ($contador == 2) { ?>

                <!--    <div style="margin-top:50px;" class="col">
                        <img class="shadow" style="border-radius:5px; height:400px;" src="<?php echo $imagem['url']; ?>">
                        <p class="mt-2 fw-bold"><?php the_title(); ?></p>
                        <p style="color: #6c757d; font-weight: 500;"><?php echo $cargo; ?></p>
                    </div>-->

                <?php //} ?>

            <?php
                //$contador++;
            }
            wp_reset_postdata();
            ?>
        </div>
    </div>

</div>


<script>
    jQuery(document).ready(function($) {
        $('.slider_consultores').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3,
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
                        //centerMode: true,
                    }
                }, {
                    breakpoint: 1000,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        //centerMode: true,
                    }
                },
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        //centerMode: true,
                    }
                },
            ]
        });
    });
</script>