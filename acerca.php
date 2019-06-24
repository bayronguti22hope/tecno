<?php
/* Template Name: Acerca de Nosotros */?>

<?php get_header()?>


<?php // echo get_the_title(); ?>

<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

    <?php the_content(); ?>


    <div class="container-fluid">


    <section class="main-Slider">


          <div class=" container content-col-Slider delay-1s hideme">
            <h2 class="head-text-Slider">Nosotros</h2>
              <p class="secondary-head-text-about">Quiénes Somos<br> y Nuestras Marcas</p>

                <button class="btn-slider-main"> <a id="link-Slider" href=" <?php echo home_url()?>/tienda/">Ver Más</a></button>

          </div>


    <div class="row menu-bar-below delay-1s hideme">


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



      <div class="container delay-1s hideme">
        <div class="row">

            <div class="col-12">
              <div class="card">
                <h5 class="card-title">QUIÉNES SOMOS</h5>
                <hr>
                  <div class="card-body">
                    <p class="info_text_about">Nuestra empresa nace a principios del año 2011 bajo la experiencia de uno de sus fundadores con más de 10 años en el campo de Fijaciones y Soportería Electromecánica. TecnoFijaciones de Costa Rica S.A. surge de la idea de resolver las necesidades de las diferentes áreas de la industria con productos de alta calidad y con certificaciones internacionales como IBC (International Building Code), FM ( Factory Mutual), UL (Underwriter Laboratories) y todas las normas de ASTM (American Section of the International Association for Testing Materials ) entre otras.<br>
                    Somos importadores directos de las marcas que representamos y contamos con el respaldo técnico, de servicio y de stock de cada uno de los fabricantes que forman parte de nuestra oferta de productos. TecnoFijaciones de Costa Rica se encuentra siempre en la búsqueda de nuevos fabricantes que con sus productos innovadores mejoren la eficiencia y costos de instalación que tienen nuestros clientes en cada uno de sus proyectos.</p>
                  </div>
                </div>
            </div>




          <div class="row special_row_service justify-content-around">

            <div class="col-12 col-md-5 col-lg-5">
              <div class="box_card">
                <img class="card-img-top" src="<?php echo home_url()?>/wp-content/uploads/2019/05/ASESORES-TECNOFIJACIONES.jpg" alt="Card image cap">
              <h5 class="card-title">Nuestra Misión</h5>
              <hr>
              <div class="card-body">
                <p class="info_text_about">Nuestro principal objetivo es brindarle al mercado una nueva solución para los sistemas de fijación, con productos de alta calidad, con excelentes precios y atentos a las necesidades y demandas de nuestros clientes.</p>
              </div>
              </div>
            </div>


            <div class="col-12 col-md-5 col-lg-5">
              <div class="box_card">
                <img class="card-img-top" src="<?php echo home_url()?>/wp-content/uploads/2019/05/PLANEAMIENTO-TECNOFIJACIONES.jpg" alt="Card image cap">
              <h5 class="card-title">Nuestra Visión</h5>
              <hr>
              <div class="card-body">
                <p class="info_text_about">Consolidarnos como la compañía líder en comercialización de sistemas de fijación en el mercado, a través de un servicio de calidad que logre la satisfacción total de nuestros clientes; contando con personal profesional capacitado capaz de responder y adaptarse a los cambios que se producen en el mercado.</p>
              </div>
              </div>
            </div>

          </div><!-- row -->

          </div>

            </div>


            <div class="container">
              <div class="row">
                <div class="col-12">

                  <div class="back-title">

                    <p class="title-brands delay-1s hideme">Todas Nuestras Marcas</p>

                  </div>

                </div>

              </div>

            </div>




                <div class="container">
                  <div class="row row-brands-img delay-1s hideme">



                    <div class="col-12 col_img_brands">
                      <img class="img_brands_row"src="<?php echo home_url()?>/wp-content/uploads/2019/05/MARCAS-TECNOFIJACIONES-LINEA-3.png" alt="">
                    </div>

                    <div class="col-12 col_img_brands">
                      <img class="img_brands_row" src="<?php echo home_url()?>/wp-content/uploads/2019/05/MARCAS-TECNOFIJACIONES-LINEA-2.png" alt="">
                    </div>

                    <div class="col-12 col_img_brands">
                      <img class="img_brands_row" src="<?php echo home_url()?>/wp-content/uploads/2019/05/MARCAS-TECNOFIJACIONES-LINEA-1.png" alt="">
                    </div>

                  </div>

                </div>
<?php endwhile; ?>

<?php endif; ?>

<?php get_footer()?>
