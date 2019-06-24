<?php 
/* Template Name: Layout */ ?>

<?php $page = get_the_ID(); ?>
<?php get_header()?>

<!-- 
***********************************
***********************************
*******   BANNER-PRINCIPAL  *******
*********************************** 
***********************************
-->
<section class="row">
	<section class="col-12 home_background_principal interna" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>') !important;">
		<section class="container-fluid home_seccion_principal">
			<h1><?php echo the_title(); ?></h1>
		</section>
	</section>
</section>


<!-- 
***********************************
***********************************
**********   Flexible   ***********
*****   Servicio-Especifico  ******
***********************************
***********************************
-->
<?php
	// check if the flexible content field has rows of data
	if( have_rows('servicio-especifico') ):
	     // loop through the rows of data
	    while ( have_rows('servicio-especifico') ) : the_row(); ?>


		<!-- proyectos & galerías -->
		<?php if( get_row_layout() == 'galeria' ):
			$titulo = get_sub_field('titulo'); ?>
			<section class="pl-5 pr-5">
				<section class="row mt-5">
					<h2 class="col-12 text-center titulo_grande_h2"><?php echo $titulo;?></h2>
					<!-- botones de las galerías -->
					<?php
						$i = 1;
						// check if the repeater field has rows of data
						if( have_rows('gallery') ):
							// loop through the rows of data
							while ( have_rows('gallery') ) : the_row(); 
								$titulo_de_galeria = get_sub_field('titulo_de_galeria'); ?>
									<!-- Tab links -->
									<button id="galerias<?php echo $i;?>" class="col-4 col-md-2 tablinks" onclick="abrirGaleria(event, 'galeria<?php echo $i;?>')"><?php echo $titulo_de_galeria;?></button>
								<?php $i++; ?>
							<?php endwhile;
						else :
						// no rows found
						endif;
					?>
					<!-- galerías -->
					<?php
						$i = 1;
						$j = 1;
						// check if the repeater field has rows of data
						if( have_rows('gallery') ):
						// loop through the rows of data
							while ( have_rows('gallery') ) : the_row(); 
								$galeria = get_sub_field('galeria');
								$size = 'full'; // (thumbnail, medium, large, full or custom size) ?>
									<!-- Tab content -->
									<div id="galeria<?php echo $j;?>" class="row pt-3 pb-5 tabcontent">
										<?php
											// check if the repeater field has rows of data
											if( have_rows('fotos_de_galeria') ):
												// loop through the rows of data
												while ( have_rows('fotos_de_galeria') ) : the_row();
													$titulo_de_proyecto = get_sub_field('titulo_de_proyecto');
													$subtitulo_de_proyecto = get_sub_field('subtitulo_de_proyecto');
													$contratacion = get_sub_field('contratacion');
													$servicios = get_sub_field('servicios');
													$fecha_de_proyecto = get_sub_field('fecha_de_proyecto');
													$fotografia_de_proyecto = get_sub_field('fotografia_de_proyecto');
													?>
	<div class="col-6 col-md-3 imagen_galeria_proyectos" data-fecha_de_proyecto="<?php echo $fecha_de_proyecto;?>" data-servicios="<?php echo $servicios;?>" data-contratacion="<?php echo $contratacion;?>" data-subtitulo_de_proyecto="<?php echo $subtitulo_de_proyecto;?>" data-titulo_de_proyecto="<?php echo $titulo_de_proyecto;?>" data-foto="<?php echo $fotografia_de_proyecto['url'];?>" data-id="<?php echo $i ?>">
		<img id="modal<?php echo $i ?>" class="img-fluid" src="<?php echo $fotografia_de_proyecto['url'];?>" alt="">
		<div class="hover_galeria_proyectos">
			<h5 class="d-none d-lg-block"><?php echo $titulo_de_proyecto ?></h5>
			<h6 class="d-none d-lg-block pb-2"><?php echo $subtitulo_de_proyecto ?></h6>
			<a class="servicios_btn_vermas">Ver más</a>
			
		</div>
	</div>
													<?php $i++; ?>
												<?php endwhile;
											else :
											// no rows found
											endif;
										?>
									</div>	
								<?php $j++;
							endwhile;
						else :
						// no rows found
						endif;
					?>
					<!-- Tabs de Galerías -->
					<script>
						function abrirGaleria(evt, galeria) {
						// Declare all variables
						var i, tabcontent, tablinks;
						// Get all elements with class="tabcontent" and hide them
						tabcontent = document.getElementsByClassName("tabcontent");
						for (i = 0; i < tabcontent.length; i++) {
							tabcontent[i].style.display = "none";
						}
						// Get all elements with class="tablinks" and remove the class "active"
						tablinks = document.getElementsByClassName("tablinks");
						for (i = 0; i < tablinks.length; i++) {
							tablinks[i].className = tablinks[i].className.replace(" active", "");
						}
						// Show the current tab, and add an "active" class to the button that opened the tab
						document.getElementById(galeria).style.display = "flex";
						evt.currentTarget.className += " active";
						}
						// Get the element with id="defaultOpen" and click on it
						document.getElementById("galerias1").click();
					</script>
				</section>
			</section>


			<!-- modal -->
			<div class="galeria_modal modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">

				    <!-- vista -->
				    <div style="padding:0 3em;">

						<div style="margin: 1em;">
							<img id="foto" style="width:100%;" src="" alt="">
							<div class="galeria_modal_informacion">
								<div class="col-12" id="titulo_de_proyecto"></div>
								<div class="col-12" id="subtitulo_de_proyecto"></div>
								<div class="col-12 contratacion">Contratación</div>
								<div class="col-12" id="contratacion"></div>
								<div class="col-12 servicios">Servicios</div>
								<div class="col-12" id="servicios"></div>
								<div class="col-12" id="fecha_de_proyecto"></div>
								<div class="col-12 text-center">
									<button type="button" class="cerrar" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">Cerrar</span>
									</button>
								</div>
							</div>
						</div>

				    </div>
				    <!-- vista --> 
				</div>
			</div>
			<!-- fin-modal -->
			<!-- crear modal -->
			<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
			<!-- abrir-modal -->
			<script>
				$( ".imagen_galeria_proyectos" ).click(function() {
				  	// console.log( this );
				    var id = $(this).attr("data-id");
				    var foto = $(this).data("foto");
				    var titulo_de_proyecto = $(this).data("titulo_de_proyecto");
				    var subtitulo_de_proyecto = $(this).data("subtitulo_de_proyecto");
				    var contratacion = $(this).data("contratacion");
				    var servicios = $(this).data("servicios");
				    var fecha_de_proyecto = $(this).data("fecha_de_proyecto");



			        $('#titulo_de_proyecto').text(titulo_de_proyecto);
					$('#subtitulo_de_proyecto').text(subtitulo_de_proyecto);
					$('#contratacion').text(contratacion);
					$('#servicios').html(servicios);
					$('#fecha_de_proyecto').text(fecha_de_proyecto);

				    $('#foto').attr("src",foto);
				    $('#myModal').modal('show');
				});
			</script>
		<?php endif; ?>






		<!-- clientes -->
        <?php if( get_row_layout() == 'clientes' ): 
			$titulo = get_sub_field('titulo'); ?>
			<section class="row justify-content-center text-center">
					<h2 class="col-12 titulo_grande_h2"><?php echo $titulo;?></h2>
				<?php
				// check if the repeater field has rows of data
				if( have_rows('testimonios') ): ?>	
				 	<!-- loop through the rows of data -->
				    <?php while ( have_rows('testimonios') ) : the_row();
						$imagen = get_sub_field('imagen');
						$testimonio = get_sub_field('testimonio');
						$autor = get_sub_field('autor');
						$profesion_o_empresa = get_sub_field('profesion_o_empresa');
					?>
					<div class="col-11 col-md-6 col-lg-4 pt-2 pb-4 d-flex">
						<div class="clientes">
							<div class="col-12">
								<img src="<?php echo $imagen['url'];?>" alt="" class="img-fluid servicio_especifico_imagen">
							</div>
							<div class="col-12 pt-3 texto_icono_servicios"><?php echo $testimonio;?></div>
							<div class="col-12 pt-3 clientes_h5"><?php echo $autor;?></div>
							<div class="col-12 clientes_h6"><?php echo $profesion_o_empresa;?></div>
						</div>
					</div>
				    <?php endwhile;
				else :
				    // no rows found
				endif;
				?>
			</section>
        <?php endif; ?>



		<!-- imagen-descripcion -->
        <?php if( get_row_layout() == 'imagen-descripcion' ):
			$image = get_sub_field('imagen');
			$descripcion = get_sub_field('descripcion'); ?>
			<section class="row mt-5">
		        <section class="col-12 col-lg-8">
		            <img class="img-fluid home_internas_img_right" src="<?php echo $image['url'];?>" alt="">
		        </section>
		        <section class="col-12 col-lg-4 home_internas_contenedor_texto_left">
		            <div class="descripcion_left"><?php echo $descripcion;?></div>
		        </section>
			</section>
        <?php endif; ?>

		<!-- imagen-subtitulo-descripcion -->
        <?php if( get_row_layout() == 'imagen-subtitulo-descripcion' ):
			$image = get_sub_field('imagen');
			$subtitulo = get_sub_field('subtitulo');
			$descripcion = get_sub_field('descripcion'); ?>
			<section class="row mt-5">
		        <section class="col-12 col-lg-8">
		            <img class="img-fluid home_internas_img_right" src="<?php echo $image['url'];?>" alt="">
		        </section>
		        <section class="col-12 col-lg-4 home_internas_contenedor_texto_left">
		            <h3 class="home_internas_titulo"><?php echo $subtitulo;?></h3>
		            <div class="descripcion_left"><?php echo $descripcion;?></div>
		        </section>
			</section>
        <?php endif; ?>

		<!-- titulo-grande-lista-iconos -->
        <?php if( get_row_layout() == 'titulo-grande-lista-iconos' ): 
			$titulo_grande = get_sub_field('titulo-grande'); ?>
			<section class="row justify-content-center text-center">
					<h2 class="col-12 titulo_grande_h2"><?php echo $titulo_grande;?></h2>
				<?php
				// check if the repeater field has rows of data
				if( have_rows('lista-iconos') ): ?>	
				 	<!-- loop through the rows of data -->
				    <?php while ( have_rows('lista-iconos') ) : the_row();
						$icono = get_sub_field('icono');
						$texto_icono = get_sub_field('texto-icono');
					?>
					<div class="col-12 col-sm-6 col-md-4 pt-5 pb-5">
						<div class="col-12">
							<img src="<?php echo $icono['url'];?>" alt="" class="img-fluid servicio_especifico_imagen">
						</div>
						<div class="col-12 pt-3 texto_icono_servicios"><?php echo $texto_icono;?></div>
					</div>
				    <?php endwhile;
				else :
				    // no rows found
				endif;
				?>
			</section>
        <?php endif; ?>

		<!-- subtitulo-descripcion-imagen -->
        <?php if( get_row_layout() == 'subtitulo-descripcion-imagen' ):
			$subtitulo = get_sub_field('subtitulo');
			$descripcion = get_sub_field('descripcion');
			$image = get_sub_field('imagen'); ?>
    	
			<section class="row mt-5">
				<section class="col-12 col-lg-8 order-lg-2">
			        <img class="img-fluid home_internas_img_left" src="<?php echo $image['url'];?>" alt="">
			    </section>
			    <section class="col-12 col-lg-4 order-lg-1 home_internas_contenedor_texto_right">
			        <h3 class="home_internas_titulo"><?php echo $subtitulo;?></h3>
			        <div class="home_internas_parrafo_right"><?php echo $descripcion;?></div>
			    </section>
			</section>
        <?php endif; ?>


	    <?php endwhile;
	else :
	    // no layouts found
	endif;
?>

<!-- 
***********************************
***********************************
**********   Flexible   ***********
*********   Arquitectos  **********
***********************************
***********************************
-->
<?php
	// check if the flexible content field has rows of data
	if( have_rows('arquitectos') ):
	     // loop through the rows of data
	    while ( have_rows('arquitectos') ) : the_row(); ?>

		<!-- imagen-subtitulo-descripcion -->
        <?php if( get_row_layout() == 'arquitectos' ): ?>

			<section class="row mt-5">
				<?php
				// check if the repeater field has rows of data
				if( have_rows('arquitecto') ):
				 	// loop through the rows of data
				    while ( have_rows('arquitecto') ) : the_row();
						$nombre = get_sub_field('nombre');
						$descripcion = get_sub_field('descripcion'); 
						$imagen_de_fondo = get_sub_field('imagen_de_fondo'); ?>

					    <section class="col-12 col-md-6 arquitectos_imagen_de_fondo" style="background-image: url('<?php echo $imagen_de_fondo['url'];?>')">
					        <h3 class="text-center"><?php echo $nombre;?></h3>
					        <div><?php echo $descripcion;?></div>
					    </section>

				    <?php endwhile;
				else :
				    // no rows found
				endif;
				?>
			</section>

        <?php endif; ?>

	    <?php endwhile;
	else :
	    // no layouts found
	endif;
?>

<!-- 
***********************************
***********************************
**********   Flexible   ***********
**********   Proyectos  ***********
***********************************
***********************************
-->
<?php
	// check if the flexible content field has rows of data
	if( have_rows('proyectos') ):
	     // loop through the rows of data
	    while ( have_rows('proyectos') ) : the_row(); ?>

		<!-- proyectos & galerías -->
        <?php if( get_row_layout() == 'proyectos' ):
			$titulo = get_sub_field('titulo'); ?>
			<section class="pl-5 pr-5">
				<section class="row mt-5">
					<h2 class="col-12 text-center titulo_grande_h2"><?php echo $titulo;?></h2>
					
					<!-- botones de las galerías -->
					<?php
						$i = 1;
						// check if the repeater field has rows of data
						if( have_rows('galerias') ):
						 	// loop through the rows of data
						    while ( have_rows('galerias') ) : the_row(); 
								$titulo_de_galeria = get_sub_field('titulo_de_galeria'); ?>
								
								<!-- Tab links -->
							  	<button id="galerias<?php echo $i;?>" class="col-4 col-md-2 tablinks" onclick="abrirGaleria(event, 'galeria<?php echo $i;?>')"><?php echo $titulo_de_galeria;?></button>
								
								<?php $i++; ?>
						    <?php endwhile;
						else :
						    // no rows found
						endif;
					?>

					<!-- galerías -->
					<?php
						$i = 1;
						$j = 1;
						// check if the repeater field has rows of data
						if( have_rows('galerias') ):
						
						 	// loop through the rows of data
						    while ( have_rows('galerias') ) : the_row(); 
								$galeria = get_sub_field('galeria');
								$size = 'full'; // (thumbnail, medium, large, full or custom size) ?>
								
								<!-- Tab content -->
								<div id="galeria<?php echo $j;?>" class="row pt-3 pb-5 tabcontent">
									<?php if( $galeria ): ?>
									        <?php foreach( $galeria as $image ): ?>
									            <div class="col-6 col-md-3 imagen_galeria_proyectos" data-foto="<?php echo $image['url'];?>" data-id="<?php echo $i ?>">
									            	<img id="modal<?php echo $i ?>" class="img-fluid" src="<?php echo $image['url'];?>" alt="">
									            </div>
									            <?php $i++; ?>
									        <?php endforeach; ?>
									<?php endif; ?>
								</div>	
							<?php			            
							$j++;
								
						     endwhile;
						else :
						    // no rows found
						endif;
					?>

					<!-- Tabs de Galerías -->
					<script>
						function abrirGaleria(evt, galeria) {
						  // Declare all variables
						  var i, tabcontent, tablinks;
						  // Get all elements with class="tabcontent" and hide them
						  tabcontent = document.getElementsByClassName("tabcontent");
						  for (i = 0; i < tabcontent.length; i++) {
						    tabcontent[i].style.display = "none";
						  }
						  // Get all elements with class="tablinks" and remove the class "active"
						  tablinks = document.getElementsByClassName("tablinks");
						  for (i = 0; i < tablinks.length; i++) {
						    tablinks[i].className = tablinks[i].className.replace(" active", "");
						  }
						  // Show the current tab, and add an "active" class to the button that opened the tab
						  document.getElementById(galeria).style.display = "flex";
						  evt.currentTarget.className += " active";
						}
						// Get the element with id="defaultOpen" and click on it
						document.getElementById("galerias1").click();
					</script>

				</section>
			</section>
        <?php endif; ?>

		<!-- imagen-subtitulo-descripcion -->
        <?php if( get_row_layout() == 'imagen-subtitulo-descripcion' ):
			$image = get_sub_field('imagen');
			$subtitulo = get_sub_field('subtitulo');
			$descripcion = get_sub_field('descripcion'); ?>
			<section class="row mt-5">
		        <section class="col-12 col-lg-8">
		            <img class="img-fluid home_internas_img_right" src="<?php echo $image['url'];?>" alt="">
		        </section>
		        <section class="col-12 col-lg-4 home_internas_contenedor_texto_left">
		            <h3 class="home_internas_titulo"><?php echo $subtitulo;?></h3>
		            <div class="descripcion_left"><?php echo $descripcion;?></div>
		        </section>
			</section>
        <?php endif; ?>

	    <?php endwhile;
	else :
	    // no layouts found
	endif;
?>
	<!-- modal -->
	<div class="galeria_modal modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">

		    <!-- vista -->
		    <div class="row">

		      <div class="col-12">
		        <img id="foto" class="img-fluid" src="" alt="">
		      </div>

		      <div class="col-12 text-center">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
		      </div>

		    </div>
		    <!-- vista --> 
		</div>
	</div>
	<!-- fin-modal -->
	<!-- crear modal -->
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<!-- abrir-modal -->
	<script>
		$( ".imagen_galeria_proyectos" ).click(function() {
		  	// console.log( this );
		    var id = $(this).attr("data-id");
		    var foto = $(this).data("foto");
		    $('#foto').attr("src",foto);
		    $('#myModal').modal('show');
		});
	</script>


<!-- 
***********************************
***********************************
**********   SERVICIOS  ***********
***********************************
*********************************** 
-->
<?php if ($page == 19 || $page == 13) { ?>
	<?php } else { ?>
	<section id="servicios" class="row mt-5 servicios_contenedor">
	    <?php
			$args = array(
			'posts_per_page' => -1,
			'post_type' => 'page',
	        'order' => 'ASC',
			);
			$the_query = new WP_Query( $args );

		$i = 1;

		?>
		<?php if ( $the_query->have_posts() ) : ?>
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

		<?php $page = get_the_ID(); ?>

	    <?php if ($page == 80 || $page == 82 || $page == 84 || $page == 86) { ?>
			<section onMouseOver="dentro('item<?php echo $i ?>')" onMouseOut="fuera('item<?php echo $i ?>')" id="item<?php echo $i ?>" class="col-12 col-sm-6 col-lg-3 text-center serv">
				<section class="servicios_text">
					<h4 class="servicios_titulo"><?php echo the_title(); ?></h4>
					<a class="servicios_btn_vermas" href="<?php echo get_permalink(); ?>">Ver más</a>
				</section>
			</section>

		<?php  $i = $i + 1;	 ?>


	    <?php } ?>


		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>

		<?php else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</section>
	<!-- Hover Imagenes Servicios -->
	<script type="text/javascript">
	    function dentro(id) {
	        var item = document.getElementById(id);

	        // resolucion de pantalla
	        var w = window.outerWidth;

	        if (w > 991){
	            switch(id) {
	                case 'item1':
	                    document.getElementById('item1').style.transition = "all 1s";
	                    document.getElementById('item1').style.backgroundImage = "url(<?php echo get_stylesheet_directory_uri(); ?>/img/parts/cc1.jpg)";

	                    document.getElementById('item2').style.transition = "all 1s";
	                    document.getElementById('item2').style.backgroundImage = "url(<?php echo get_stylesheet_directory_uri(); ?>/img/parts/cc2.jpg)";

	                    document.getElementById('item3').style.transition = "all 1s";
	                    document.getElementById('item3').style.backgroundImage = "url(<?php echo get_stylesheet_directory_uri(); ?>/img/parts/cc3.jpg)";

	                    document.getElementById('item4').style.transition = "all 1s";
	                    document.getElementById('item4').style.backgroundImage = "url(<?php echo get_stylesheet_directory_uri(); ?>/img/parts/cc4.jpg)";
	                    break;

	                case 'item2':
	                    document.getElementById('item1').style.transition = "all 1s";
	                    document.getElementById('item1').style.backgroundImage = "url(<?php echo get_stylesheet_directory_uri(); ?>/img/parts/g1.jpg)";

	                    document.getElementById('item2').style.transition = "all 1s";
	                    document.getElementById('item2').style.backgroundImage = "url(<?php echo get_stylesheet_directory_uri(); ?>/img/parts/g2.jpg)";

	                    document.getElementById('item3').style.transition = "all 1s";
	                    document.getElementById('item3').style.backgroundImage = "url(<?php echo get_stylesheet_directory_uri(); ?>/img/parts/g3.jpg)";

	                    document.getElementById('item4').style.transition = "all 1s";
	                    document.getElementById('item4').style.backgroundImage = "url(<?php echo get_stylesheet_directory_uri(); ?>/img/parts/g4.jpg)";
	                    break;

	                case 'item3':
	                    document.getElementById('item1').style.transition = "all 1s";
	                    document.getElementById('item1').style.backgroundImage = "url(<?php echo get_stylesheet_directory_uri(); ?>/img/parts/d1.jpg)";

	                    document.getElementById('item2').style.transition = "all 1s";
	                    document.getElementById('item2').style.backgroundImage = "url(<?php echo get_stylesheet_directory_uri(); ?>/img/parts/d2.jpg)";

	                    document.getElementById('item3').style.transition = "all 1s";
	                    document.getElementById('item3').style.backgroundImage = "url(<?php echo get_stylesheet_directory_uri(); ?>/img/parts/d3.jpg)";

	                    document.getElementById('item4').style.transition = "all 1s";
	                    document.getElementById('item4').style.backgroundImage = "url(<?php echo get_stylesheet_directory_uri(); ?>/img/parts/d4.jpg)";
	                    break;

	                case 'item4':
	                    document.getElementById('item1').style.transition = "all 1s";
	                    document.getElementById('item1').style.backgroundImage = "url(<?php echo get_stylesheet_directory_uri(); ?>/img/parts/s1.jpg)";

	                    document.getElementById('item2').style.transition = "all 1s";
	                    document.getElementById('item2').style.backgroundImage = "url(<?php echo get_stylesheet_directory_uri(); ?>/img/parts/s2.jpg)";

	                    document.getElementById('item3').style.transition = "all 1s";
	                    document.getElementById('item3').style.backgroundImage = "url(<?php echo get_stylesheet_directory_uri(); ?>/img/parts/s3.jpg)";

	                    document.getElementById('item4').style.transition = "all 1s";
	                    document.getElementById('item4').style.backgroundImage = "url(<?php echo get_stylesheet_directory_uri(); ?>/img/parts/s4.jpg)";
	                    break;
	            }
	        } else{}
	    }

	    function fuera(id) {
	        var item = document.getElementById(id);

	        // resolucion de pantalla
	        var w = window.outerWidth;

	        if (w > 991){

	            document.getElementById('item1').style.transition = "all 1s";
	            document.getElementById('item1').style.backgroundImage = "url(<?php echo get_stylesheet_directory_uri(); ?>/img/parts/cc1.jpg)";

	            document.getElementById('item2').style.transition = "all 1s";
	            document.getElementById('item2').style.backgroundImage = "url(<?php echo get_stylesheet_directory_uri(); ?>/img/parts/g2.jpg)";

	            document.getElementById('item3').style.transition = "all 1s";
	            document.getElementById('item3').style.backgroundImage = "url(<?php echo get_stylesheet_directory_uri(); ?>/img/parts/d3.jpg)";

	            document.getElementById('item4').style.transition = "all 1s";
	            document.getElementById('item4').style.backgroundImage = "url(<?php echo get_stylesheet_directory_uri(); ?>/img/parts/s4.jpg)";

	        } else{
	            document.getElementById('item1').style.transition = "all 1s";
	            document.getElementById('item1').style.backgroundImage = "url(<?php echo get_stylesheet_directory_uri(); ?>/img/controlCalidad1024x683.jpg)";

	            document.getElementById('item2').style.transition = "all 1s";
	            document.getElementById('item2').style.backgroundImage = "url(<?php echo get_stylesheet_directory_uri(); ?>/img/geotecnia1024x683.jpg)";

	            document.getElementById('item3').style.transition = "all 1s";
	            document.getElementById('item3').style.backgroundImage = "url(<?php echo get_stylesheet_directory_uri(); ?>/img/diseno1024x683.jpg)";

	            document.getElementById('item4').style.transition = "all 1s";
	            document.getElementById('item4').style.backgroundImage = "url(<?php echo get_stylesheet_directory_uri(); ?>/img/supervision1024x683.jpg)";
	        }
	    }
	</script>
<?php } ?>




<?php get_footer()?>
