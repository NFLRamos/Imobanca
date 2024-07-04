<div class="container-xxl tema-contactos mb-5">
    <div class="row">
    <div class="col-md-4">
            <div class="card-contact-info shadow">
                <div class="card-line-c">
                    <figure class="icon-contact-mail "></figure>
                <h2>Email</h2>
                <p>info@info.pt</p>
                </div >

                <div class="card-line-c">
                    <figure class="icon-contact-call "></figure>
                <h2>Telefone</h2>
                <p>+351 916 582 423</p>
                </div>

                <div  class="card-line-c">
                    <figure class="icon-contact-pin "></figure>
                <h2>Morada</h2>
                <p>Av. Lourenço Peixinho 15, 2A</p>
                </div>

                <div  class="card-line-c">
                    <figure class="icon-contact-time "></figure>
                <h2>Horário</h2>
                <p>9h:00 - 18h:00</p>
                </div>
            </div>
    </div>
        <!--<div class="col-md-2">
            <div class="card-contact-info shadow">
                <figure class="icon-contact-call "></figure>
                <h2>Telefone</h2>
                <p>+351 916 582 423</p>
            </div>

            <div class="card-contact-info shadow">
                <figure class="icon-contact-call "></figure>
                <h2>Telefone</h2>
                <p>+351 916 582 423</p>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card-contact-info shadow">
                <figure class="icon-contact-call "></figure>
                <h2>Telefone</h2>
                <p>+351 916 582 423</p>
            </div>

            <div class="card-contact-info shadow">
                <figure class="icon-contact-call "></figure>
                <h2>Telefone</h2>
                <p>+351 916 582 423</p>
            </div>
        </div>-->
        <div class="col-md-1"></div>





            <!--<h4 class="text-amarelo fw-bold mt-5"><?php _e('Home to You') ?></h4>
            <h2 class="mt-3 fw-bold"><?php _e('Aqui, para o apoiar nas</br>suas decisões') ?></h2>

            <div class="d-flex mt-3" style="flex-direction: column;">
                <i style="display:flex; align-items:center;" class="mt-2 las la-map-marker"><span class="ms-3" style="font-weight:400 !important; font-size:20px !important; line-height: 1.3;"><?php echo get_field('morada', 'options') ?></span></i> </br>
                <i class="mt-2 las la-phone"><span class="ms-3" style="margin-left:5px; font-size:20px !important; font-weight:400 !important;"><?php echo get_field('telefone', 'options') ?></span></i></br>
                <i class="mt-2 lab la-whatsapp"><span class="ms-3" style="margin-left:5px; font-size:20px !important; font-weight:400 !important;"><?php echo get_field('whatsaap', 'options') ?></span></i></br>
            </div>-->

        

        <div class="col-md-7 order-first order-md-last">
            <div class="shadow contact-form mb-5">

                
                    <ul class="nav nav-tabs" id="myTab" role="tablist" style="justify-content:space-around; align-items: center; text-align: center;">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><?php _e('Tenho uma questão') ?></a>
                        </li>
                        <!--<li class="nav-item" role="presentation" style="width:32%;">
                            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><?php _e('Quero vender') ?></a>
                        </li>
                        <li class="nav-item" role="presentation" style="width:34%;">
                            <a class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false"><?php _e('Recrutamento') ?></a>
                        </li>-->
                    </ul>
                

                <div class="tab-content p-3" id="myTabContent">
                    <h3 class="mt-4 mb-5 ms-5 fw-bold"><?php _e('Estamos disponiveis para ajudar!') ?></h3>
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <?php echo do_shortcode('[contact-form-7 id="162" title="Form Questao PT"]'); ?>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <?php echo do_shortcode('[contact-form-7 id="167" title="Form Quero vender PT"]'); ?>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <?php echo do_shortcode('[contact-form-7 id="168" title="Form Recrutamento PT"]'); ?>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>