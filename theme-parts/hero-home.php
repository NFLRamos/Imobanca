<?php
/*
Load Hero Image (options field) and SearchBox based on  Search & Filter Pro - The Ultimate WordPress Filter Plugin 2.5.10.
Title are option field to. All Configs are made one WP dasboard on Config menu.
Style are changed on src/sass/themes/_blocks.scss - look for #HERO tag.
*/

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>
<div class="hero container-fluid bg-cover" style="background-image: url('<?php echo get_field('heroImage','options'); ?>')">
        <div class="container-xxl">
            <div class="row">
                <div class="col-12 holder">
                    <div >
                        <p class="title"><?php echo get_field('titleHero','options'); ?></p>
                        <div class="searchBox-home">
                            <ul class="nav nav-pills searchBox-nav w-auto" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active btn-lg" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><?php _e('Pesquisa'); ?></button>
                                </li>
                                <!--<li class="nav-item" role="presentation">
                                    <button class="nav-link btn-lg" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><?php _e('Corporate'); ?></button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link btn-lg" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false"><?php _e('Empreendimento'); ?></button>
                                </li>-->
                            </ul>
                            <div class="tab-content p-3" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <?php echo do_shortcode('[searchandfilter id="23"]'); ?><br/>
                                    <hr>
                                    <a href="<?php echo get_bloginfo('url') ?>/imoveis" class="btn btn-outline-primary btn-sm"><?php _e('Ver todos os Imóveis')?></a>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>