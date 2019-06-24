<?php
/* Template Name: Nuestras Marcas*/?>

<?php get_header()?>




<?php // echo get_the_title(); ?>


<div class="container-fluid">


        <section class="main-Slider">


        <div class=" container content-col-Slider">
          <h2 class="head-text-Slider">Nuestras Marcas</h2>
          <p class="secondary-head-text">Garantía y respaldo que garantiza <br> la calidad</p>
        </div>


              <div class="row menu-bar-below">


              <div class="col-12 col-md-6 col-lg-3">
              <button class="btn-slider">
              <a id="link-Slider" href="<?php get_site_url()?>/servicios/">
              <p id="bar-down-text">Presupuestos</p></a>
              </button>
              </div>

              <div class="col-12 col-md-6 col-lg-3">
              <button class="btn-slider">
              <a id="link-Slider" href="<?php get_site_url()?>/servicios/">
              <p id="bar-down-text">Nuestro Equipo de trabajo</p></a>
              </button>
              </div>

              <div class="col-12 col-md-6 col-lg-3">
              <button class="btn-slider">
              <a id="link-Slider" href="<?php get_site_url()?>/servicios/">
              <p id="bar-down-text">Lineamiento de diseño</p></a>
              </button>
              </div>

              <div class="col-12 col-md-6 col-lg-3">
              <button class="btn-slider">
              <a id="link-Slider" href="<?php get_site_url()?>/servicios/">
              <p id="bar-down-text">Asesores de ventas</p></a>
              </button>
              </div>

              </div>

        </section>
</div>
<div>&nbsp</div>
<div>&nbsp</div>
<div class="">
  <strong><h1><?php echo the_title(); ?></h1></strong>
</div>
<div>&nbsp</div>

    <div class="row">
      <div class="row carusel posicion-slider" style="margin: 0px !important;padding: 0px 60px;">
       <?php
       $args = array(
         'posts_per_page' => -1,
         'post_type' => 'marca',
         'orderby'   => 'ID',
             'order' => 'DESC'
       );
       $the_query = new WP_Query( $args );
       ?>

       <?php if ( $the_query->have_posts() ) :

       ?>
       <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

             <div class="col-md-3 wow zoomIn" style="padding:0px 20px;">
               <div class="col-xs-12 contenedor" style="padding-right: 0px;padding-left: 0px;">
                   <img class="img-responsive"  src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php echo the_title(); ?>" style="height: 40%;">
               </div>
                 <br>
             </div>

       <?php

           endwhile; ?>

       <?php wp_reset_postdata(); ?>
       <?php else : ?>
       <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
       <?php endif; ?>

     </div>

  </div>

<?php get_footer()?>
