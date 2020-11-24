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

  <?php if (Yii::$app->user->can('admin')){?> 
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

    <div class="row">
    <div class="col-md-3">
        <section class="panel">
            <div class="panel-body">
                <div class="top-stats-panel">
                    <div class="gauge-canvas">
                        <h4 class="widget-h">Monthly Expense</h4>
                        <canvas width="160" height="100" id="gauge"></canvas>
                    </div>
                    <ul class="gauge-meta clearfix">
                        <li id="gauge-textfield" class="pull-left gauge-value">1,150</li>
                        <li class="pull-right gauge-title">Safe</li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
    <div class="col-md-3">
        <section class="panel">
            <div class="panel-body">
                <div class="top-stats-panel">
                    <div class="daily-visit">
                        <h4 class="widget-h">Daily Visitors</h4>
                        <div id="daily-visit-chart" style="width: 100%; height: 100px; display: block; padding: 0px; position: relative;">

                        <canvas class="flot-base" width="131" height="100" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 131px; height: 100px;"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div style="position: absolute; max-width: 43px; top: 89px; font: 400 10px / 11.5px &quot;Open Sans&quot;, sans-serif; color: rgb(102, 102, 102); left: 34px; text-align: center;">2</div><div style="position: absolute; max-width: 43px; top: 89px; font: 400 10px / 11.5px &quot;Open Sans&quot;, sans-serif; color: rgb(102, 102, 102); left: 56px; text-align: center;">4</div><div style="position: absolute; max-width: 43px; top: 89px; font: 400 10px / 11.5px &quot;Open Sans&quot;, sans-serif; color: rgb(102, 102, 102); left: 78px; text-align: center;">6</div><div style="position: absolute; max-width: 43px; top: 89px; font: 400 10px / 11.5px &quot;Open Sans&quot;, sans-serif; color: rgb(102, 102, 102); left: 100px; text-align: center;">8</div><div style="position: absolute; max-width: 43px; top: 89px; font: 400 10px / 11.5px &quot;Open Sans&quot;, sans-serif; color: rgb(102, 102, 102); left: 120px; text-align: center;">10</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div style="position: absolute; top: 64px; font: 400 10px / 11.5px &quot;Open Sans&quot;, sans-serif; color: rgb(102, 102, 102); left: 11px; text-align: right;">0</div><div style="position: absolute; top: 32px; font: 400 10px / 11.5px &quot;Open Sans&quot;, sans-serif; color: rgb(102, 102, 102); left: 6px; text-align: right;">50</div><div style="position: absolute; top: 1px; font: 400 10px / 11.5px &quot;Open Sans&quot;, sans-serif; color: rgb(102, 102, 102); left: 0px; text-align: right;">100</div></div></div><canvas class="flot-overlay" width="131" height="100" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 131px; height: 100px;"></canvas></div>
                        <ul class="chart-meta clearfix">
                            <li class="pull-left visit-chart-value">3233</li>
                            <li class="pull-right visit-chart-title"><i class="fa fa-arrow-up"></i> 15%</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="col-md-3">
        <section class="panel">
            <div class="panel-body">
                <div class="top-stats-panel">
                    <h4 class="widget-h">Top Advertise</h4>
                    <div class="sm-pie" style="padding: 0px; position: relative;">
                    <canvas class="flot-base" width="131" height="100" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 131px; height: 100px;"></canvas><canvas class="flot-overlay" width="131" height="100" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 131px; height: 100px;"></canvas><div class="legend"><div style="position: absolute; width: 64px; height: 54px; top: 5px; right: 5px; background-color: rgb(255, 255, 255); opacity: 0.85;"> </div><table style="position:absolute;top:5px;right:5px;;font-size:smaller;color:#545454"><tbody><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(255,223,124);overflow:hidden"></div></div></td><td class="legendLabel">Samsung</td></tr><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(178,222,247);overflow:hidden"></div></div></td><td class="legendLabel">Nokia</td></tr><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(239,179,230);overflow:hidden"></div></div></td><td class="legendLabel">Syphony</td></tr></tbody></table></div></div>
                </div>
            </div>
        </section>
    </div>
    <div class="col-md-3">
        <section class="panel">
            <div class="panel-body">
                <div class="top-stats-panel">
                    <h4 class="widget-h">Daily Sales</h4>
                    <div class="bar-stats">
                        <ul class="progress-stat-bar clearfix">
                            <li data-percent="50%"><span class="progress-stat-percent pink" style="height: 50%;"></span></li>
                            <li data-percent="90%"><span class="progress-stat-percent" style="height: 90%;"></span></li>
                            <li data-percent="70%"><span class="progress-stat-percent yellow-b" style="height: 70%;"></span></li>
                        </ul>
                        <ul class="bar-legend">
                            <li><span class="bar-legend-pointer pink"></span> New York</li>
                            <li><span class="bar-legend-pointer green"></span> Los Angels</li>
                            <li><span class="bar-legend-pointer yellow-b"></span> Dallas</li>
                        </ul>
                        <div class="daily-sales-info">
                            <span class="sales-count">1200 </span> <span class="sales-label">Products Sold</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
</div>
<?php }?>

  <?php if (Yii::$app->user->can('supplier')){?> 
  <div class="row shadow-sm">
    <div class="col-md-3" >
    <a class="active" href="<?= Url::to(['messaging/inbox'])?>">
    <div class="mini-stat clearfix">        
            <span class="mini-stat-icon orange"><i class="fa fa-gavel"></i></span>
            <div class="mini-stat-info">
                <span>520</span>
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
                <span>450</span>
                Customers Served
            </div>
        </div>
    </a>
    </div>
    <div class="col-md-3">
    <a class="active" href="<?= Url::to(['messaging/inbox'])?>">
        <div class="mini-stat clearfix">
            <span class="mini-stat-icon pink"><i class="fa fa-money"></i></span>
            <div class="mini-stat-info">
                <span>60</span>
                Unattended Bookings
            </div>
        </div>
    </a>
    </div>
    <div class="col-md-3">
    <a class="active" href="<?= Url::to(['messaging/inbox'])?>">
        <div class="mini-stat clearfix">
            <span class="mini-stat-icon green"><i class="fa fa-eye"></i></span>
            <div class="mini-stat-info">
                <span>47</span>
                Destinations
            </div>
        </div>
    </a>
    </div>
</div>
<?php }?>
    <div id="map" class="map shadow-sm"></div>
  </body>
</html>