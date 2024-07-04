<div class="text-center" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/fundo-parceiros-pq.png'); background-size:cover; background-repeat:no-repeat;height:470px; width:100%; ">

    <div>
        <h2 class="fw-bold pt-3 text-black"><?php _e('Rodeados pelos melhores</br>parceiros para o bem de si') ?></h2>

        <div class="container largura-par tema-parceiros mt-5">
            <div class="row">
                <div class="col-12">

                    <div class="slider_parceiros ">
                        <?php
                        $args = array(
                            'post_type' => 'parceiros',
                            'orderby' => 'rand',
                            'posts_per_page' => -1
                        );

                        $partner = new WP_Query($args);
                        while ($partner->have_posts()) {
                            $partner->the_post();

                            $imagem = get_field('logotipo')
                        ?>

                            <a style="text-decoration:none;" target="_blank" href="<?php the_field('link_url') ?>">
                                <div class="card-parceiros">
                                    <img style="object-fit:contain; width:50%; height:40px;" src="<?php echo $imagem['url'] ?>">
                                    <p class="text-black mt-3" style="font-size:13px; padding:0 40px;"><?php echo get_field('texto1') ?> </p>
                                </div>
                            </a>
                        <?php
                        }
                        wp_reset_postdata();
                        ?>
                    </div>
                    <a class=" mt-lg-2 btn btn-light" role="button" data-bs-toggle="modal" data-bs-target="#exampleModal1"><?php _e('Seja nosso Parceiro') ?></a>
                </div>
            </div>
        </div>
    </div>

</div>


<script>
    jQuery(document).ready(function($) {
        $('.slider_parceiros').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 4000,
            //centerMode: true,
            arrows: false,
            dots: true,
        });
    });
</script>