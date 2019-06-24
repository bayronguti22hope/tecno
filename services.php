<?php
/* Template Name: Servicios */?>

<?php get_header()?>


<?php
?>

<div class="container-fluid">




<section class="main-Slider">


      <div class=" container content-col-Slider delay-1s hideme">
        <h2 class="head-text-Slider-servicios">Nuestros Servicios</h2>
          <!-- <p class="secondary-head-text"><br></p> -->
            <button class="btn-slider-main"> <a id="link-Slider" href="<?php echo home_url()?>/tienda/">Ver Más</a></button>

      </div>


</section>
</div>



<div class="container">
  <div class="row special_row_service justify-content-around delay-1s hideme">
    <div class="col-12 col-md-5 col-lg-5 special_col_service">

        <div class="card">
        <img class="card-img-top" src="<?php echo home_url()?>/wp-content/uploads/2019/05/PRESUPUESTO-TECNOFIJACIONES.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Presupuestos</h5>
              <p class="card-text">Contamos con un equipo de personas con la capacidad de realizar sus presupuestos con solamente los planos de sus proyectos.<br>
                Podemos trabajar con usted desde la etapa de planeamiento y garantizar durante la ejecución precios y disponibilidad en el stock de las fijaciones y soportes que han sido cotizados con anterioridad.</p>
              <p class="card-text"><small class="text-muted"></small></p>
            </div>
      </div>


    </div>

    <div class="col-12  col-md-5 col-lg-5 special_col_service">
          <div class="card">
          <img class="card-img-top" src="<?php echo home_url()?>/wp-content/uploads/2019/05/EQUIPO-TECNOFIJACIONES.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nuestro equipo de trabajo</h5>
                <p class="card-text">En TecnoFijaciones de Costa Rica nos preocupamos por dar servicio completo desde las etapas de planeación de sus proyectos. Es por eso que ponemos a su disposición nuestro equipo de trabajo que lo podrá asesorar en cada paso..</p>
                <p class="card-text"><small class="text-muted"></small></p>
              </div>
        </div>
    </div>

  </div>



  <div class="row special_row_service justify-content-around">
    <div class="col-12 col-md-5 col-lg-5 special_col_service">

        <div class="card">
        <img class="card-img-top" src="<?php echo home_url()?>/wp-content/uploads/2019/05/ASESORES-TECNOFIJACIONES.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Asesores de ventas</h5>
              <p class="card-text">Si requiere de consejo profesional o demostraciones de productos a su oficina o en la zona de trabajo, llame nuestras oficinas para fijar una visita de nuestro consultor de producto en campo. Ellos le proveerán:<br></p>
                <ul>
                  <li>Consejo profesional y soporte de venta</li>
                  <li>Soluciones para aplicaciones especificas</li>
                  <li>Demostraciones de sistemas y productos de todas nuestras marcas</li>
                </ul>
              <p class="card-text"><small class="text-muted"></small></p>
            </div>
      </div>


    </div>



    <div class="col-12 col-md-5 col-lg-5 special_col_service">
          <div class="card">
          <img class="card-img-top" src="<?php echo home_url()?>/wp-content/uploads/2019/05/PLANEAMIENTO-TECNOFIJACIONES.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Planeamiento y diseño</h5>
                <p class="card-text">Comprendemos a nuestros clientes y sabemos que es de suma importancia contar con el respaldo técnico de los productos que se instalan en los diferentes proyectos. Si usted tiene una pregunta técnica específica sobre algún anclaje o su aplicación en el proyecto, puede comunicarse con nuestro personal técnico que le brindará:<br></p>
                  <ul>
                    <li>Consejos de fijación, todo el detalle de resistencia de cargas de cada uno de los anclajes que ofrecemos.</li>
                    <li>Consejos sobre soportes de tubería.</li>
                    <li>Seminarios técnicos para ingenieros en el área Estructural y Diseño.</li>
                    <li>Entrenamiento y soporte en el software de diseño de Anclajes P.D.A (Powers Design Assistant) exclusivo software de Powers Fastener que incorpora toda la legislación vigente del código internacional de construcción.</li>
                  </ul>
                <p class="card-text"><small class="text-muted"></small></p>
              </div>
        </div>
    </div>

  </div>



</div>










<!-- section of the brands -->

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


<?php get_footer()?>
