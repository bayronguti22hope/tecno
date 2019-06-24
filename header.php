<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

<title><?php echo get_the_title(); ?></title>

<link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!-- STYLE -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" rel="stylesheet">

<!-- FONT AWESOME -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

<!-- BOOTSTRAP -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!-- ANIMATE -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

<!-- Custom Styles & Mobile -->
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/custom.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/mobile.css">

<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

<?php wp_head(); ?>
</head>
<body class="container-fluid text-center">

<!-- HEADER -->
<header>

<!-- <img  class="img img-responsive" src="<?php //get_site_url(); ?>maquetado/image-1.jpg"> -->
<div class="header row animated fadeInDown delay-1s hideme">


  <div class="col-12 col-md-12 text-right text-md-left ">


    <section class="d-block d-xl-none  text-right">
        <!-- Large modal -->
        <button type="button" class="header_menu_ham" data-toggle="modal" data-target=".bd-example-modal-lg">
            <section class="header_menu_icon_ham">
                <span></span>
                <span></span>
                <span></span>
            </section>
        </button>
    </section>

  </div>

<div class="col-12 col-md-3 text-center text-md-left ">
<a id="logo" href="<?php echo get_site_url(); ?>"><img height="50px" src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/03/LOGO-TECNOFIJACIONES.svg" alt="" /></a>

</div>


<div class="col-md-6" id="bar-search">
    <form role="search" method="get" class="woocommerce-product-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label class="screen-reader-text" for="woocommerce-product-search-field-<?php echo isset( $index ) ? absint( $index ) : 0; ?>">
    BUSCAR
    </label>
    <input type="search" id="woocommerce-product-search-field-<?php echo isset( $index ) ? absint( $index ) : 0; ?>" class="search-field" placeholder="BUSCAR" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'woocommerce' ); ?>" />

    <button id="buscar" type="submit"><img height="15px" src="<?php echo get_template_directory_uri(); ?>/iconos/ICONO_BUSCAR.svg" alt="" /></button>
    <input type="hidden" name="post_type" value="product" /> </form>
</div>

<div class="col-md-3 text-md-right text-center">

<div class="boton-social">
  <a target="_blank" href="https://www.facebook.com/TecnoFijaciones/">
    <img height="30px" src="<?php echo get_template_directory_uri(); ?>/iconos/ICONO_FACEBOOK.svg" alt="" />
  </a>
  <a target="_blank" href="https://www.instagram.com/tecnofijacionescr/?hl=en">
    <img height="30px" src="<?php echo get_template_directory_uri(); ?>/iconos/ICONO_INSTAGRAM.svg" alt="" />
  </a>
  <a href="<?php echo home_url()?>/carrito-de-compra/">
    <img height="30px" src="<?php echo get_template_directory_uri(); ?>/iconos/ICONO_CARRITO.svg" alt="" />
  </a>
  <a href="<?php echo home_url()?>/mi-cuenta/">
    <img height="30px" src="<?php echo get_template_directory_uri(); ?>/iconos/ICONO_USER.svg" alt="" />
  </a>

</div>

<?php get_site_url(); ?>

</div>
</div>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php wp_nav_menu( array( 'theme_location' => 'main', 'menu_id' => 'primary-menu' ) ); ?>

    </div>
  </div>
</div>
<section class="d-none d-xl-block  menu_desktop text-center">
  <?php wp_nav_menu( array( 'theme_location' => 'main', 'menu_id' => 'primary-menu' ) ); ?>
</section>


</header>

<!-- NAVEGADOR -->
<!-- <nav class="row">

</nav> -->
