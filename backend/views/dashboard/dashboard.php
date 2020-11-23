<?php

use yii\helpers\Url;
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Add Map</title>
    <script
      src="https://maps.googleapis.com/maps/api/js?&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
    <style type="text/css">
      #map {
        height: 400px;
        width: 100%;
      }
    </style>
    <script>
      function initMap() {

        const africa = { lat :-8.7832, lng: 34.5085};
        
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 3,
          center: africa,
        });


      var markers=[
      {params:{lat: -2.6527, lng: 37.2606},
      iconImage:"https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png",
      content:'Amboseli National Park is in southern Kenya. It’s known for its large elephant herds and views of immense Mount Kilimanjaro, across the border in Tanzania.'
      },
      {params:{lat: -1.3719, lng:34.9381},
      content:'Maasai Mara National Reserve is an area of preserved savannah wilderness in southwestern Kenya, along the Tanzanian border. Its animals include lions, cheetahs, elephants, zebras and hippos. Wildebeest traverse its plains during their annual migration.',
      },
      {params:{lat: -25.356958, lng: 29.065119},
      iconImage:"https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png",
      content:'Mabusa Nature Reserve, South Africa'
      },
      {params:{lat: -30.087797, lng: 17.580688},
      iconImage:"https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png",
      content:'Namaqualand, South Africa'
      },
      {params:{lat: -24.014019, lng: 30.077747},
      iconImage:"https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png",
      content:'Wolkberg Wilderness Area, Wolkberg, South Africa'
      },
      {params:{lat: 3.900000, lng: 33.849998},
      iconImage:"https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png",
      content:'Kidepo Valley National Park, Uganda'
      },
      {params:{lat: -1.363721, lng: 29.638269},
      iconImage:"https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png",
      content:'Mgahinga Gorilla National Park, Uganda'
      },
      {params:{lat: 36.457741, lng: 	7.423325},
      iconImage:"https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png",
      content:'Guelma, Algeria Geographic Information'
      },
      {params:{lat: 18.000000	, lng: 9.000000},
      iconImage:"https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png",
      content:'Air and Tenere Natural Reserve, Niger'
      },
      {params:{lat: 6.666667, lng: 9.166667},
      iconImage:"https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png",
      content:'Obudu mountain resort., Nigeria'
      },
      {params:{lat:29.9773, lng: 31.1325},
      iconImage:"https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png",
      content:'The Pyramids of Giza, Giza, Egypt'
      },
      ];

      function addMarker(props) {
        const marker = new google.maps.Marker({
          position: props.params,
          map: map,
          });

          if(props.iconImage)
          {
            marker.setIcon(props.iconImage);
          }
          if(props.content)
          {
            const infowindow = new google.maps.InfoWindow({
            content: props.content,
          });
          marker.addListener("click", () => {
            infowindow.open(map, marker);
          });
          }
          
      }


      for(var i =0;i<markers.length;i++)
      {
        addMarker(markers[i]);
      }     
      }
    </script>
  </head>
  <body>

  <div class="row shadow-sm">
    <div class="col-md-3" >
    <a class="active" href="<?= Url::to(['messaging/inbox'])?>">
    <div class="mini-stat clearfix">        
            <span class="mini-stat-icon orange"><i class="fa fa-gavel"></i></span>
            <div class="mini-stat-info">
                <span>320</span>
                Today's Total Bookings
            </div>
    </div>
  </a>
    </div>
    <div class="col-md-3">
    <a class="active" href="<?= Url::to(['messaging/inbox'])?>">
        <div class="mini-stat clearfix">
            <span class="mini-stat-icon tar"><i class="fa fa-tag"></i></span>
            <div class="mini-stat-info">
                <span>22,450</span>
                Total Users
            </div>
        </div>
    </a>
    </div>
    <div class="col-md-3">
    <a class="active" href="<?= Url::to(['messaging/inbox'])?>">
        <div class="mini-stat clearfix">
            <span class="mini-stat-icon pink"><i class="fa fa-money"></i></span>
            <div class="mini-stat-info">
                <span>34,320</span>
                Total Destinations
            </div>
        </div>
    </a>
    </div>
    <div class="col-md-3">
    <a class="active" href="<?= Url::to(['messaging/inbox'])?>">
        <div class="mini-stat clearfix">
            <span class="mini-stat-icon green"><i class="fa fa-eye"></i></span>
            <div class="mini-stat-info">
                <span>720</span>
                Service Prividers
            </div>
        </div>
    </a>
    </div>
</div>
    <div id="map" class="map shadow-sm"></div>
  </body>
</html>