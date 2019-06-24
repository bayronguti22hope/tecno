<?php

// Registro del menú de WordPress
add_theme_support( 'nav-menus' );
add_theme_support('woocommerce');   // <-- El sobreescribe el template de WooCommerce

if ( function_exists( 'register_nav_menus' ) ) {
register_nav_menus(
array(
'main' => 'Main',
'secondary' => 'Secondary'
)
);
}



function cc_mime_types($mimes) {
$mimes['svg'] = 'image/svg+xml';
return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


function mostrar_productos_primario( $category_id ) {
?>

<?php

$category = get_term_by( 'id',  $category_id , 'product_cat', 'ARRAY_A' ) ;

$terms = get_terms( array(
'taxonomy' => 'post_tag',
'hide_empty' => false,
) );

$args = array(
'post_type' => 'product',
'posts_per_page' => 6,
'tax_query' => array(
'relation' => 'AND',
array(
'taxonomy' => 'product_cat',
'field' => 'id',
'terms' => $category_id
),

),);

$the_query = new WP_Query( $args );

?>

<div class="row  animated fadeInUp">

<div class="col-12 col-md-4">
<div class="sec-new-prod-img">
<h3 class="news-productos-text-red"><?php echo $category['name']; ?></h3>
<h6 class="new-mytext">NUEVOS</h6>
<button class="btn-see_more">
<a id="link-Slider" href="<?php echo get_term_link($category_id) ?>">
<p id="bar-down-text">Ver Todos</p></a>
</button>
</div>
</div>

<div class="col-12 col-md-8">

<div class="row">

<?php
if ( $the_query->have_posts() ) {
while ( $the_query->have_posts() ) {
$the_query->the_post();
?>

<div class="col-6 col-md-4 producto">

<img class="news-producto" src="<?php echo get_the_post_thumbnail_url( get_the_id() ,'full' ); ?>" alt="">
<p class="product-title-01 text-center">  <?php  echo  get_the_title(); ?></p>
<p class="sku-info-text">SKU: <?php echo get_the_id(); ?></p>

</div>


<?php
}
wp_reset_postdata();
}
?>

</div>

</div>

</div>

<?php

} // funcion mostrar productos



function mostrar_productos_secundario( $category_id ) {
?>

<?php

$category = get_term_by( 'id',  $category_id , 'product_cat', 'ARRAY_A' ) ;

$terms = get_terms( array(
'taxonomy' => 'post_tag',
'hide_empty' => false,
) );

$args = array(
'post_type' => 'product',
'posts_per_page' => 6,
'tax_query' => array(
'relation' => 'AND',
array(
'taxonomy' => 'product_cat',
'field' => 'id',
'terms' => $category_id
),

),);

$the_query = new WP_Query( $args );

?>

<div class="row animated fadeInDown d-flex">


<div class="col-12 col-md-8 order-1 order-md-0 ">

<div class="row margin">

<?php
if ( $the_query->have_posts() ) {
while ( $the_query->have_posts() ) {
$the_query->the_post();
?>

<div class="col-6 col-md-4 producto">

<img class="news-producto" src="<?php echo get_the_post_thumbnail_url( get_the_id() ,'full' ); ?>" alt="">
<p class="product-title-01 text-center">  <?php  echo  get_the_title(); ?></p>
<p class="sku-info-text">SKU: <?php  echo  get_the_id(); ?></p>

</div>


<?php
}
wp_reset_postdata();
}
?>

</div>

</div>


<div class="col-12 col-md-4 order-0 order-md-1">
<div class="sec-secondary-prod-img">
<h3 class="secondary-productos-text-blue"><?php echo $category['name']; ?></h3>
<h6 class="new-mytext">MANUAL</h6>
<button class="btn-see_more">
<a id="link-Slider" href="<?php echo get_term_link($category_id) ?>">
<p id="bar-down-text">Ver Más</p></a>
</button>
</div>

</div>

</div>


</div>

<?php

} // funcion mostrar productos

if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Sidebar',
    'before_widget' => '<div class = "sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);


add_action('woocommerce_before_single_product', 'mytext');

function mytext(){
  echo "Product";
}



add_action( 'woocommerce_single_product_summary', 'title_custom_action', 10 );

function title_custom_action() {
    echo  get_the_title();
}

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );


remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );



// function my_editor_content( $post_excerpt ) {
// $content = 'The default text, imposed by me, needs to be here in every product.';
// return $content.'<br>'.$post_excerpt;
// }
// add_filter('woocommerce_short_description', 'my_editor_content', 10, 1);


strip_tags($product->description, '<ul><li><h2>');


///////////////////////////

// La función no será utilizada antes del 'init'.
add_action( 'init', 'my_custom_init' );
/* Here's how to create your customized labels */
function my_custom_init() {
	$labels = array(
	'name' => _x( 'Marcas', 'post type general name' ),
        'singular_name' => _x( 'Marca', 'post type singular name' ),
        'add_new' => _x( 'Añadir nuevo', 'marca' ),
        'add_new_item' => __( 'Añadir nueva Marca' ),
        'edit_item' => __( 'Editar Marca' ),
        'new_item' => __( 'Nueva Marca' ),
        'view_item' => __( 'Ver Marca' ),
        'search_items' => __( 'Buscar Marca' ),
        'not_found' =>  __( 'No se han encontrado Marcas' ),
        'not_found_in_trash' => __( 'No se han encontrado Marcas en la papelera' ),
        'parent_item_colon' => ''
    );

    // Creamos un array para $args
    $args = array( 'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );

    register_post_type( 'Marca', $args );
}





?>
