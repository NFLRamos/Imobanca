<div class="modal fade classe-modal" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content caixa-modal shadow">
      <div class="modal-header mb-3">
        <h4 class="modal-title ms-0 ms-md-5 fw-bold" style="color:#041f39" data-bs-toggle="modal" data-bs-target="#exampleModal1"><?php _e('Preencha o Formulário') ?></h4>
        <button type="button" class="btn-close me-0 me-md-5" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php
        $lang = get_bloginfo("language");
        if ($lang == 'pt-PT') {
        }
        if ($lang == 'es-ES') {
        }
        if ($lang == 'fr-FR') {
        }
        if ($lang == 'en-GB') {
        }
        echo do_shortcode('[contact-form-7 id="168" title="Form ParceriaPT"]');
        ?>
      </div>
    </div>
  </div>
</div>