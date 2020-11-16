<<<<<<< HEAD
// $(document).ready(function () {
//     var itemsMainDiv = ('.MultiCarousel');
//     var itemsDiv = ('.MultiCarousel-inner');
//     var itemWidth = "";

//     $('.leftLst, .rightLst').click(function () {
//         var condition = $(this).hasClass("leftLst");
//         if (condition)
//             click(0, this);
//         else
//             click(1, this)
//     });

//     ResCarouselSize();




//     $(window).resize(function () {
//         ResCarouselSize();
//     });

//     //this function define the size of the items
//     function ResCarouselSize() {
//         var incno = 0;
//         var dataItems = ("data-items");
//         var itemClass = ('.item');
//         var id = 0;
//         var btnParentSb = '';
//         var itemsSplit = '';
//         var sampwidth = $(itemsMainDiv).width();
//         var bodyWidth = $('body').width();
//         $(itemsDiv).each(function () {
//             id = id + 1;
//             var itemNumbers = $(this).find(itemClass).length;
//             btnParentSb = $(this).parent().attr(dataItems);
//             itemsSplit = btnParentSb.split(',');
//             $(this).parent().attr("id", "MultiCarousel" + id);


//             if (bodyWidth >= 1200) {
//                 incno = itemsSplit[3];
//                 itemWidth = sampwidth / incno;
//             }
//             else if (bodyWidth >= 992) {
//                 incno = itemsSplit[2];
//                 itemWidth = sampwidth / incno;
//             }
//             else if (bodyWidth >= 768) {
//                 incno = itemsSplit[1];
//                 itemWidth = sampwidth / incno;
//             }
//             else {
//                 incno = itemsSplit[0];
//                 itemWidth = sampwidth / incno;
//             }
//             $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
//             $(this).find(itemClass).each(function () {
//                 $(this).outerWidth(itemWidth);
//             });

//             $(".leftLst").addClass("over");
//             $(".rightLst").removeClass("over");

//         });
//     }


//     //this function used to move the items
//     function ResCarousel(e, el, s) {
//         var leftBtn = ('.leftLst');
//         var rightBtn = ('.rightLst');
//         var translateXval = '';
//         var divStyle = $(el + ' ' + itemsDiv).css('transform');
//         var values = divStyle.match(/-?[\d\.]+/g);
//         var xds = Math.abs(values[4]);
//         if (e == 0) {
//             translateXval = parseInt(xds) - parseInt(itemWidth * s);
//             $(el + ' ' + rightBtn).removeClass("over");

//             if (translateXval <= itemWidth / 2) {
//                 translateXval = 0;
//                 $(el + ' ' + leftBtn).addClass("over");
//             }
//         }
//         else if (e == 1) {
//             var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
//             translateXval = parseInt(xds) + parseInt(itemWidth * s);
//             $(el + ' ' + leftBtn).removeClass("over");

//             if (translateXval >= itemsCondition - itemWidth / 2) {
//                 translateXval = itemsCondition;
//                 $(el + ' ' + rightBtn).addClass("over");
//             }
//         }
//         $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
//     }

//     //It is used to get some elements from btn
//     function click(ell, ee) {
//         var Parent = "#" + $(ee).parent().attr("id");
//         var slide = $(Parent).attr("data-slide");
//         ResCarousel(ell, Parent, slide);
//     }

// });



//         function regular_map() {
//             var var_location = new google.maps.LatLng(40.725118, -73.997699);

//             var var_mapoptions = {
//                 center: var_location,
//                 zoom: 14
//             };

//             var var_map = new google.maps.Map(document.getElementById("map-container"),
//                 var_mapoptions);

//             var var_marker = new google.maps.Marker({
//                 position: var_location,
//                 map: var_map,
//                 title: "New York"
//             });
//         }

//         // Initialize maps
//         google.maps.event.addDomListener(window, 'load', regular_map);

// // Carousel options

// $('.carousel').carousel({
//             interval: 3000,
//         })

=======
>>>>>>> 4de87fb985be4840f699eecee4bfddcbbc0132d7
        // new coracel
        $(function () {
            $('.material-tooltip-main').tooltip({
              template: '<div class="tooltip md-tooltip"><div class="tooltip-arrow md-arrow"></div><div class="tooltip-inner md-inner"></div></div>'
            });
          })



          $(window).scroll(function(){
            $('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
          });

<<<<<<< HEAD

          // Startup Scripts
$(document).ready(function()
{
	$('.hero').css('height', ($(window).height() - $('header').outerHeight()) + 'px'); // Set hero to fill page height

	$('#scroll-hero').click(function()
	{
		$('html,body').animate({scrollTop: $("#hero-bloc").height()}, 'slow');
	});
});


// Window resize
$(window).resize(function()
{
	$('.hero').css('height', ($(window).height() - $('header').outerHeight()) + 'px'); // Refresh hero height
}); 
=======
>>>>>>> 4de87fb985be4840f699eecee4bfddcbbc0132d7
