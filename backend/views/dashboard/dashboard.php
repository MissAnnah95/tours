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

  <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">CPU Traffic</span>
              <span class="info-box-number">90<small>%</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Likes</span>
              <span class="info-box-number">41,410</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Sales</span>
              <span class="info-box-number">760</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">New Members</span>
              <span class="info-box-number">2,000</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>


    <div id="map"></div>
  </body>
</html>