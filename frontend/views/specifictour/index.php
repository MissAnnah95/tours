<?php

use yii\helpers\Url;
?>
<!DOCTYPE html>
<html>
  <head>
    <script src="https://maps.googleapis.com/maps/api/js?&callback=initMap&libraries=&v=weekly" defer></script>
    <script>
      function initMap() {
        const kenya = { lat: -2.634830794, lng: 37.250498998 };
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 4,
          center: kenya,
        });
        const marker = new google.maps.Marker({
          position: kenya,
          map: map,
        });
      }
    </script>

    <style>map {
  height: 400px;
  width: 100%;
}</style>

  </head>

  <body>


          <div class="container margin_top">
              <h1>Map</h1>
              <div id="map"></div>
          </div>


  </body>


</html>
