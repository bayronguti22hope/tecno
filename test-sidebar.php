<div class="col-md-2 sidebar col-25 hide-in-mobile wow fadeInUp" data-wow-delay="0.5s" style="visibility:hidden">
<h2 class="col-md-12 line-height-45 align-items-center sidebar-h2">
Categorías
            <div class="navbar-toggle collapsed category-btn-mobile show-in-mobile"><div class="mask1"></div><div class="mask2"></div>
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









    .category-btn-mobile {
        background-color: transparent;
        margin: 0 !important;
        /* display: flex !important; */
        /* align-items: center; */
        float: right;
        position: absolute;
        right: 10px;
        display: none;
    }

    .category-btn-mobile .icon-bar {
        color: white;
        background-color: white;
    }

    .category-btn-mobile .mask1 {
        cursor: pointer;
        display: block;
        background: red;
        width: 100%;
        height: 100%;
        position: absolute;
        left: 0;
        top: 0;
        z-index: 2;
        opacity: 0;
    }

    .category-btn-mobile .mask2 {
        cursor: pointer;
        display: block;
        background: blue;
        width: 100%;
        height: 100%;
        position: absolute;
        left: 0;
        top: 0;
        z-index: 1;
        opacity: 0;
    }

    .category-btn-mobile .mask3 {
        cursor: pointer;
        display: block;
        width: 100%;
        height: 100%;
        position: absolute;
        left: 0;
        top: 0;
        z-index: 2;
        opacity: 0;
    }

    .category-btn-mobile .mask4 {
        cursor: pointer;
        display: block;
        width: 100%;
        height: 100%;
        position: absolute;
        left: 0;
        top: 0;
        z-index: 1;
        opacity: 0;
    }

    .featured-mobile {
        float: left;
        width: 100%;
        padding-left: 15px;
        padding-right: 15px;
    }

    .featured-mobile h2.col-md-12 {
        float: left;
        background: #369b7d;
        width: 100%;
        color: white;
    }

    .featured-mobile li{

    }

    .featured-mobile a{

    }

    .featured-mobile img {
        width: 13px;
    }

    .featured-mobile .the_excerpt {
        display: none;
    }

    .featured-mobile .col-md-2 {
        /* display: none; */
        width: 11%;
        float: left;
    }
