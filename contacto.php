<?php
/* Template Name: Contacto*/?>

<?php get_header()?>




<?php // echo get_the_title(); ?>


<div class="container-fluid">


        <section class="main-Slider">


        <div class=" container content-col-Slider">
          <h2 class="head-text-Slider">CONTACTO</h2>
            <p class="secondary-head-text_contact">ESTAMOS A SU <br> SERVICIO</p>



        </div>


              <div class="row menu-bar-below">


              <div class="col-12 col-md-6 col-lg-3">
              <button class="btn-slider">
              <a id="link-Slider" href="<?php echo home_url()?>/servicios/">
              <p id="bar-down-text">Presupuestos</p></a>
              </button>
              </div>

              <div class="col-12 col-md-6 col-lg-3">
              <button class="btn-slider">
              <a id="link-Slider" href="<?php echo home_url()?>/servicios/">
              <p id="bar-down-text">Nuestro Equipo de trabajo</p></a>
              </button>
              </div>

              <div class="col-12 col-md-6 col-lg-3">
              <button class="btn-slider">
              <a id="link-Slider" href="<?php echo home_url()?>/servicios/">
              <p id="bar-down-text">Lineamiento de diseño</p></a>
              </button>
              </div>

              <div class="col-12 col-md-6 col-lg-3">
              <button class="btn-slider">
              <a id="link-Slider" href="<?php echo home_url()?>/servicios/">
              <p id="bar-down-text">Asesores de ventas</p></a>
              </button>
              </div>

              </div>

        </section>
</div>

<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>



  <div class="container contact_main">
    <div class="row">
      <div class="col-12 col-md-6 form_page_content">

            <?php the_content(); ?>

      </div>
      <div class="col-12 col-md-6">

        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="">
            <h4 class="d-flex justify-content-center justify-content-sm-center justify-content-md-start justify-content-xl-start main_text_contact">Estamos para usted</h4>
            <hr>
            <h4 class="d-flex justify-content-center justify-content-sm-center justify-content-md-start justify-content-xl-start text_contact">Teléfono</h4>
              <p class="d-flex justify-content-center justify-content-sm-center justify-content-md-start  justify-content-xl-start text_contact_info">(506) 2256-8115</p>
              <p class="d-flex justify-content-center justify-content-sm-center justify-content-md-start justify-content-xl-start text_contact_info">(506) 2256-8117</p>
            <h4 class="d-flex justify-content-center justify-content-sm-center justify-content-md-start justify-content-xl-start text_contact">Whatsapp</h4>
              <p class="d-flex justify-content-center justify-content-sm-center justify-content-md-start justify-content-xl-start text_contact_info">(506) 8509-3088</p>
            <h4 class="d-flex justify-content-center justify-content-sm-center justify-content-md-start justify-content-xl-start text_contact">Email</h4>
              <p class="d-flex justify-content-center justify-content-sm-center justify-content-md-start justify-content-xl-start text_contact_info">contacto@tecnofijacionescr.com</p>
            <h4 class="d-flex justify-content-center justify-content-sm-center justify-content-md-start justify-content-xl-start text_contact">Dirrección</h4>
              <p class="d-flex justify-content-center justify-content-sm-center justify-content-md-start justify-content-xl-start text_contact_info" style="
    text-align: left;">Costado este del Banco Nacional Condominio<br> HorizontalJW Bodega #21, La Uruca, <br>  San José, Costa Rica</p>
          </div>
        </div>


      </div>

    </div>

  </div>







<?php endwhile; ?>

<?php endif; ?>



<?php get_footer()?>
