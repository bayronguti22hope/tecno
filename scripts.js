$('.productos_slider').slick({
centerMode: true,
centerPadding: '',
slidesToShow: 3,
responsive: [

{
breakpoint: 1200,
settings: {
arrows: true,
centerMode: true,
centerPadding: '',
slidesToShow: 5
}
},
{
breakpoint: 999,
settings: {
arrows: true,
centerMode: true,
centerPadding: '',
slidesToShow: 4
}
},

{
breakpoint: 768,
settings: {
arrows: true,
centerMode: true,
centerPadding: '',
slidesToShow: 3
}
},
{
breakpoint: 480,
settings: {
arrows: true,
centerMode: false,
centerPadding: '40px',
slidesToShow: 1,
}
}
]
});
