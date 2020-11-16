        // new coracel
        $(function () {
            $('.material-tooltip-main').tooltip({
              template: '<div class="tooltip md-tooltip"><div class="tooltip-arrow md-arrow"></div><div class="tooltip-inner md-inner"></div></div>'
            });
          })



          $(window).scroll(function(){
            $('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
          });

// another corasel

function carouselClonesDelete(){
  $('.carousel-item-clone').remove();
}

function carouselClone(){
carouselClonesDelete();
$('.carousel .carousel-item').each(function(){
var next = $(this).next();
if (!next.length) {
next = $(this).siblings(':first');
}
next.children(':first-child').clone().addClass('carousel-item-clone').appendTo($(this));

if (next.next().length>0) {
next.next().children(':first-child').clone().addClass('carousel-item-clone').appendTo($(this));
}
else {
$(this).siblings(':first').children(':first-child').clone().addClass('carousel-item-clone').appendTo($(this));
}
});
}

if ($(window).width() < 480) {
$('.carousel-item img').removeClass('col-4').removeClass('col-6');
} else {
carouselClone();
if($(window).width() < 769){
$('.carousel-item img').addClass('col-6').removeClass('col-4');
} else {
$('.carousel-item img').addClass('col-4').removeClass('col-6');
}
}

$(window).on('resize', function(){
if ($(window).width() < 480) {
carouselClonesDelete();
$('.carousel-item img').removeClass('col-4').removeClass('col-6');
} else {
carouselClone();
if($(window).width() < 769){
$('.carousel-item img').addClass('col-6').removeClass('col-4');
} else {
$('.carousel-item img').addClass('col-4').removeClass('col-6');
}
}
$('#recipeCarousel').carousel({
interval: 10000
})
});

$('#recipeCarousel').carousel({
interval: 10000
})