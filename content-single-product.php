<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


global $product;
?>

<?php
	/**
	 * woocommerce_before_single_product hook.
	 *
	 * @hooked wc_print_notices - 10
	 */
	 do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>

<div itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="row">
	<div class="col-md-6 col-12">
	<?php
		/**
		 * woocommerce_before_single_product_summary hook.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action( 'woocommerce_before_single_product_summary' );
	?>
    </div>

	<div class="col-md-6 col-12 summary entry-summary">




  <div class="title-product-more">
      <h3 class="title-my-products"> <?php echo woocommerce_template_single_title(); ?></h3>
      <div class="col-12">
        <div class="row info-product-summary">
          <div class="">
            <p class="text-brand-product">Precio:</p>
						<p class="text-brand-product-code">Código:</p>



          </div>
          <div class="sku-row-description">
						<p class="price"><?php echo $product->get_price_html(); ?></p>
						<p class="sku-info-text">SKU: <?php echo get_the_id(); ?></p>
          </div>
        </div>
      </div>
    </div>
      <hr>




	<div class="row">
			<div class="col-12">


		<div class="woocommerce-product-details__short-description">
		    <?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ); ?>
		</div>



		<p class="description_long"></p>
			<p class="title_my_product">	<?php echo substr($product->get_description(),0,100); ?>...</p>
						<input id="see_more_check" type="checkbox">
							<label class="brands-highlight_see_more" for="see_more_check">Ver Más</label>
							<div class="description_short">
							<p>	<?php //echo substr($product->get_description(),200,1000); ?>...</p>
 							<?php echo $product->get_description(); ?>
						<p class="description_product_details">	<?php //echo substr($product->get_description(),100,7000); ?>...</p>
							</div>

		</div>
<!-- col-4 col-md-2 offset-md-3 offset-lg-0 -->
<!-- col-4 col-md-2 -->

<div class="container">
      <div class="row icons-btn-img-pro justify-content-center justify-content-lg-start">
          <div class="">
            <div class="background-icons">
            <a href="<?php echo get_permalink();?>?wpp_export=pdf">
              <img class="print-img"  src="https://comolove.com/tecnofijaciones/wp-content/uploads/2019/05/ICONO-PDF.svg" width="31px" height="auto" style="background: #d52414;" alt="">
              </a>
            </div>

          </div>
          <div class="">
            <div class="background-icons">
              <a href="<?php echo get_permalink();?>?wpp_export=print">
            <img class="print-img" src="https://comolove.com/tecnofijaciones/wp-content/uploads/2019/05/ICONO-IMPRESORA.svg" width="40px" style="background: #d52414 ;" alt="">
            </a>
          </div>
        </div>
          <div class="">
            <div class="background-icons">
                <a href="<?php echo get_permalink();?>?wpp_export=doc">
            <img class="print-img" src="https://comolove.com/tecnofijaciones/wp-content/uploads/2019/05/ICONO-DOC.svg" width="31px" height="auto" style="background: #d52414 ;" alt="">
              </a>
          </div>
        </div>
      </div>
</div> <!-- conatiner end -->

      <div class="col-12 quantity-product d-flex justify-content-center justify-content-lg-start"><p class="">Cantidad</p>
      <input type="number" class="input-text qty text" step="1" min="1" max="" name="quantity" value="1" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric" style="width: 65px;
padding-left: 10px; margin-left: 6%; padding: 20px 0px 20px 12px;">
    </div>

			<div class="row btns-row">
				<div class="col-12">
					<a rel="nofollow" href="/tecnofijaciones/producto-categoria/herramienta-a-bateria/corte-herramienta-a-bateria/?add-to-cart=20675" data-quantity="1" data-product_id="20675" data-product_sku="" class="btn-single product_type_simple add_to_cart_button ajax_add_to_cart added">Añadir al carrito</a>

					<a href="https://comolove.com/tecnofijaciones/carrito-de-compra/" class="added_to_cart wc-forward btn-single-blue" title="Ver carrito">Ver carrito</a>

				</div>

			</div>

</div><!--row -->

		</div>
		<?php
			/**
			 * woocommerce_single_product_summary hook.
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_price - 10
			 * @hooked woocommerce_template_single_excerpt - 20
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
			 */
			// do_action( 'woocommerce_single_product_summary',8 );
		?>

	</div><!-- .summary -->
<div class="col-xs-6">
	<?php
		/**
		 * woocommerce_after_single_product_summary hook.
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_upsell_display - 15
		 * @hooked woocommerce_output_related_products - 20
		 */
		do_action( 'woocommerce_after_single_product_summary' );
	?>
    </div>
	<meta itemprop="url" content="<?php the_permalink(); ?>" />

</div><!-- #product-<?php the_ID(); ?> -->
</div>
<?php do_action( 'woocommerce_after_single_product' ); ?>


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
