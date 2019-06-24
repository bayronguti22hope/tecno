<?php
/**
* The Template for displaying product archives, including the main shop page which is a post type archive
*
* This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
*
* HOWEVER, on occasion WooCommerce will need to update template files and you
* (the theme developer) will need to copy the new files to your theme to
* maintain compatibility. We try to do this as little as possible, but it does
* happen. When this occurs the version of the template file will be bumped and
* the readme will list any important changes.
*
* @see https://docs.woocommerce.com/document/template-structure/
* @package WooCommerce/Templates
* @version 3.4.0
*/

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
* Hook: woocommerce_before_main_content.
*
* @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
* @hooked woocommerce_breadcrumb - 20
* @hooked WC_Structured_Data::generate_website_data() - 30
*/


?>



<style media="screen">
  .detail-prod-Slider{
    background-image: url('<?php echo home_url()?>/wp-content/uploads/2019/04/TECNOFIJACIONES-BANNER-HERRAMIENTAS.jpg');
  }
</style>



	<section class="detail-prod-Slider">


		<div class="container content-col-Slider animated fadeInDown delay-1s hideme">
			<h2 class="head-text-Slider">HERRAMIENTA</h2>
			<p class="secondary-head-text">Manual</p>

			<button class="btn-slider-main"> <a id="link-Slider" href="<?php echo home_url()?>/producto-categoria/herramienta-manual/">Ver Más</a></button>

		</div>

		<div class="row menu-bar-below">

			<div class="col-12 col-md-6 col-lg-3">
				<button class="btn-slider">
					<a id="link-Slider" href="#">
						<p id="bar-down-text">Presupuestos</p></a>
					</button>
				</div>

				<div class="col-12 col-md-6 col-lg-3">
					<button class="btn-slider">
						<a id="link-Slider" href="#">
							<p id="bar-down-text">Nuestro Equipo de trabajo</p></a>
						</button>
					</div>

					<div class="col-12 col-md-6 col-lg-3">
						<button class="btn-slider">
							<a id="link-Slider" href="#">
								<p id="bar-down-text">Lineamiento de diseño</p></a>
							</button>
						</div>

						<div class="col-12 col-md-6 col-lg-3">
							<button class="btn-slider">
								<a id="link-Slider" href="#">
									<p id="bar-down-text">Asesores de ventas</p>
								</a>
								</button>
							</div>


					</div>

				</section>



				<!-- Finaliza la section del slider -->
				<div class="container animated fadeInDown delay-1s hideme">





					<div class="row">

						<div class="col-xl-3 col-lg-3 col-12 side-bar-cat">
							<div class="">

							<div class="col-12 select-mobile">
							<?php if  ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar") ) : ?>

								<?php  endif;?>

							</div>




					<div class="col-md-12 sidebar col-25 hide-in-mobile wow fadeInUp my_sidebar" data-wow-delay="0.5s" style="">
										<h2 class="col-md-12 line-height-45 sidebar-h2">
										Categorías
													<div class="navbar-toggle collapsed category-btn-mobile show-in-mobile" aria-labelledby="dropdownMenuRefenrence"><div class="mask1"></div><div class="mask2"></div>
													<span class="sr-only">Toggle navigation</span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
												</div>
												</h2>
										<?php //wp_nav_menu( array('menu' => 'categorias', 'container' => 'div'));?>
														<div class="menu-category-content">
										<?php
												$args = array(
											'taxonomy' => 'product_cat',
											'hide_empty' => false,
											'parent'   => 0
										);
										$product_cat = get_terms( $args );
										foreach ($product_cat as $parent_product_cat)
										{
										echo '
										<ul>
										<li><a href="'.get_term_link($parent_product_cat->term_id).'">'.$parent_product_cat->name.'</a>
										<ul>
										';
										 $child_args = array(
										 'taxonomy' => 'product_cat',
										'hide_empty' => false,
										 'parent' => $parent_product_cat->term_id
										 );
										 $child_product_cats = get_terms( $child_args );
										 foreach ($child_product_cats as $child_product_cat)
										 {
										 echo '<li><a href="'.get_term_link($child_product_cat->term_id).'">'.$child_product_cat->name.'</a></li>';
										 }
										echo '</ul>
										</li>
										</ul>';
										}
												?>

						</div>
					</div>







</div>
</div>






<div class="col-xl-8 col-lg-8 col-12 row-all-product">

<header class="d-flex justify-content-center woocommerce-products-header">
						<?php
					do_action( 'woocommerce_before_main_content' );

						 if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
							<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
						<?php endif; ?>

						<?php
						/**
						* Hook: woocommerce_archive_description.
						*
						* @hooked woocommerce_taxonomy_archive_description - 10
						* @hooked woocommerce_product_archive_description - 10
						*/
						do_action( 'woocommerce_archive_description' );
						?>
					</header>

	<div class="img-product-cat-rows row">
		<!--  <div class="row img-product-cat"> -->


		<?php
		if ( woocommerce_product_loop() ) {

			/**
			* Hook: woocommerce_before_shop_loop.
			*
			* @hooked woocommerce_output_all_notices - 10
			* @hooked woocommerce_result_count - 20
			* @hooked woocommerce_catalog_ordering - 30
			*/
			do_action( 'woocommerce_before_shop_loop' );

			woocommerce_product_loop_start();

			if ( wc_get_loop_prop( 'total' ) ) {
				while ( have_posts() ) {
					the_post();

					/**
					* Hook: woocommerce_shop_loop.
					*
					* @hooked WC_Structured_Data::generate_product_data() - 10
					*/
					do_action( 'woocommerce_shop_loop' );

					wc_get_template_part( 'content', 'product' );
				}
			}

			woocommerce_product_loop_end();

			/**
			* Hook: woocommerce_after_shop_loop.
			*
			* @hooked woocommerce_pagination - 10
			*/
			do_action( 'woocommerce_after_shop_loop' );
		} else {
			/**
			* Hook: woocommerce_no_products_found.
			*
			* @hooked wc_no_products_found - 10
			*/
			do_action( 'woocommerce_no_products_found' );
		}

		/**
		* Hook: woocommerce_after_main_content.
		*
		* @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		*/
		do_action( 'woocommerce_after_main_content' );

		/**
		* Hook: woocommerce_sidebar.
		*
		* @hooked woocommerce_get_sidebar - 10
		*/
		/* do_action( 'woocommerce_sidebar' ); */

		?>



	</div>

</div>

</div>

</div>







<section class="animated fadeInDown delay-1s hideme">

	<div class="container secondary-slider">
		<div class="row">

			<div class="col-12">

				<div class="back-title">

					<p class="title-brands">Nuestras Marcas</p>

				</div>

			</div>

		</div>

		<div class="row log-brands data-slick='{"slidesToShow": 3, "slidesToScroll":3}'">

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

<?php 	get_footer( 'shop' ); ?>
