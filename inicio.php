<?php
/* Template Name: Inicio */?>

<?php get_header()?>


<?php
//echo do_shortcode( '[rev_slider alias="home"]' );
?>

<style media="screen">
.main-Slider{
  background-image: url("<?php echo home_url()?>/wp-content/uploads/2019/03/bg.jpeg");
}
.sec-new-prod-img{
	background-image: url('<?php echo home_url()?>/wp-content/uploads/2019/03/IMAGEN-PRODUCTOS-NUEVOS.jpg');
}
.sec-secondary-prod-img{
	background-image: url('<?php echo home_url()?>/wp-content/uploads/2019/03/IMAGEN-HERRAMIENTA-MANUAL.jpg');
}
.power-col{
  background-image: url('<?php echo home_url()?>/wp-content/uploads/2019/04/LOGO-POWERS-FASTENERS.svg');
}
.dewalt-col{
  background-image: url('<?php echo home_url()?>/wp-content/uploads/2019/03/NUESTRAS-MARCAS-LOGO-DEWALT.svg');
}
.sata-col{
  background-image: url('<?php echo home_url()?>/wp-content/uploads/2019/03/NUESTRAS-MARCAS-LOGO-SATA.svg');
}
.sikla-col{
  background-image: url('<?php echo home_url()?>/wp-content/uploads/2019/03/NUESTRAS-MARCAS-LOGO-SIKLA.svg');
}

</style>
<!--<img  height="auto" class="img img-responsive" src="<?php get_site_url(); ?>maquetado/image-2.jpg"> -->
<div class="container-fluid">


<section class="main-Slider">


<div class=" container content-col-Slider">
  <h2 class="head-text-Slider">Soluciones</h2>
    <p class="secondary-head-text">Para la industria <br> Actual</p>

      <button class="btn-slider-main"> <a id="link-Slider" href="#">Ver Más</a></button>

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

<section class="container my-sec-products">
<?php mostrar_productos_primario( 595 ); ?>

<?php mostrar_productos_secundario( 573 ); ?>

<?php mostrar_productos_primario( 585 ); ?>

<?php mostrar_productos_secundario( 177 ); ?>

</section>

<section class="animated fadeInDown delay-1s hideme">

    <div class="container secondary-slider">
      <div class="row">

          <div class="col-12">

              <div class="back-title">

                <p class="title-brands">Nuestras Marcas</p>

              </div>

          </div>

      </div>

      <div class="row log-brands data-slick='{"slidesToShow": 3, "slidesToScroll": 3}'">

        <!--  <div class="power-col">

        </div> -->
          <div class="dewalt-col">

          </div>
          <div class="sata-col">

          </div>
          <div class="sikla-col">

          </div>
          <div class="dewalt-col">

          </div>
          <div class="sata-col">

          </div>

          </div>

      </div>

    </div>

</section>
<script type="text/javascript">
jQuery('.log-brands').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  arrows: false,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: false,
        arrows: false
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        dots: false,
        slidesToScroll: 2,
        autoplay: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        dots: false,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        dots: false,
        slidesToScroll: 1,
        autoplay: true
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});


</script>


<!--<img  height="auto" class="img img-responsive" src="<?php get_site_url(); ?>maquetado/image-3.jpg">

<img  height="auto" class="img img-responsive" src="<?php get_site_url(); ?>maquetado/image-4.jpg">

<img  height="auto" class="img img-responsive" src="<?php get_site_url(); ?>maquetado/image-5.jpg">

<img  height="auto" class="img img-responsive" src="<?php get_site_url(); ?>maquetado/image-6.jpg">

<img  height="auto" class="img img-responsive" src="<?php get_site_url(); ?>maquetado/image-7.jpg"> -->

<?php get_footer()?>
