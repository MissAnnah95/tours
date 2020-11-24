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


$('#blogCarousel').carousel({
    interval: 3000
});

function initMap() {
  const kenya = { lat: -2.634830794, lng: 37.250498998 };
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 8,
    center: kenya,
  });
  const marker = new google.maps.Marker({
    position: kenya,
    map: map,
  });
}