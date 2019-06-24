<?php
/* Template Name: Detalles de Products */?>

<?php get_header()?>


<?php
?>


<!-- section of the brands -->

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
