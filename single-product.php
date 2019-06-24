	<?php
	/**
	* The Template for displaying all single products
	*
	* This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
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

	get_header( 'shop' );

	$terms = get_the_terms( $post->ID, 'product_cat' );


	?>
	<div class="row">

	<div class="col-xs-12 col-md-12 col-lg-12">
	<?php
	/**
	* woocommerce_before_main_content hook.
	*
	* @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
	* @hooked woocommerce_breadcrumb - 20
	*/
	do_action( 'woocommerce_before_main_content' );
	?>

	<?php while ( have_posts() ) : the_post(); ?>

	<?php wc_get_template_part( 'content', 'single-product' ); ?>

	<?php endwhile; // end of the loop. ?>

	<?php
	/**
	* woocommerce_after_main_content hook.
	*
	* @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
	*/
	do_action( 'woocommerce_after_main_content' );
	?>
	</div>
	<div class="col-xs-12 col-md-12 col-lg-12 ">

	<h3 class="normal text-product-related">Categorías</h3>
	<ul class="current_category">


	<?php


	foreach ($terms as $index => $term) {
	$terms[$index]->orden = $term->parent;

	}





	//var_dump($terms);


	foreach($terms as $listitem)
	{
	if( $listitem->parent == 0)
	{

	if( $listitem->term_id != 42 and  $listitem->term_id != 43)
	{
	echo "<li><a class='hvr-grow' href='".get_term_link( $listitem->term_id, 'product_cat' )."'>".$listitem->name.'</a>';

	}
	}else{
	echo'<ul>';
	echo "<li><a class='cate-active hvr-grow' href='".get_term_link( $listitem->term_id, 'product_cat' )."'>".$listitem->name.'</a>';

	}




	if( $listitem->parent == 0)
	{




	}else{
	echo "</ul>";
	echo "</li>";
	}

	}

	?>


	</ul>



	</div>


	</div>

	<?php get_footer( 'shop' ); ?>
