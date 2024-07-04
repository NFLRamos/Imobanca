<div class="container-fluid bgBlueG mt-5 pt-5 pb-5">
        <div class="container-xxl mt-5 mb-5">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/cta.png">
                </div>
                <div class="col-md-6">
                    <div class="p-5 mt-4 mb-4">
                        <h4 class="text-amarelo"><?php echo get_field('titulo', 'options') ?></h4>  
                        <h3 class="text-white mt-3"><?php echo get_field('titulo2', 'options') ?></h3> 
                        <p class="pt-2 text-white fw-bold"><?php echo get_field('texto1', 'options') ?></p>
                        <p class="text-white"><?php echo get_field('texto2', 'options') ?></p>
                        <p class="text-white"><?php echo get_field('texto3', 'options') ?></p>
                        <a class="mt-5 btn btn-light" role="button" href="#"><?php _e('Fale connosco') ?>o</a>
                    </div>    
                </div>
            </div>
        </div>
</div>