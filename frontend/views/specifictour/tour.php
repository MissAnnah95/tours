<?php

use yii\helpers\Url;
?>
<!DOCTYPE html>
<html>
  <head>
    <script src="https://maps.googleapis.com/maps/api/js?&callback=initMap&libraries=&v=weekly" defer></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" media="screen" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
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
  </head>

  <body class="margin_bottom body">
      <section>
        <div class="container">
        <div class="shadow-sm p-3 mb-5 bg-white rounded">
          <div class="row margin_top">
           <div class="col-md-8 col-sm-6 col-xs-12 b_packages">
             
           <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
                  <div class="carousel-inner to-border_radius">
                    <div class="carousel-item active">
                      <img class="d-block w-100" id = "startimage" src="<?= Yii::$app->request->baseUrl ?>/specifictourimages/amboseli.jpg" class="img-fluid" alt="Responsive image">

                    </div>
                    <div class="carousel-item">
                  <img class="d-block w-100" id = "startimage" src="<?= Yii::$app->request->baseUrl ?>/specifictourimages/amboseli1.jpg" class="img-fluid" alt="Responsive image">

                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" id = "startimage" src="<?= Yii::$app->request->baseUrl ?>/specifictourimages/amboseli2.jpg" class="img-fluid" alt="Responsive image">

                    </div>
                    <div class="carousel-item">
                  <img class="d-block w-100" id = "startimage" src="<?= Yii::$app->request->baseUrl ?>/specifictourimages/amboseli3.jpg" class="img-fluid" alt="Responsive image">

                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" id = "startimage" src="<?= Yii::$app->request->baseUrl ?>/specifictourimages/amboseli4.jpg" class="img-fluid" alt="Responsive image">

                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
              </div>
              </div>

              <div class="col-md-4 col-sm-6">
                <div class="shadow-sm p-3 mb-5 bg-white rounded">
                <p class="text-muted">10 Days</p>
                <h3>Kenya One Life Adventures - 10 Days</h3>

                <p>From Tsavo to Amboseli</p>

              <div class="row">
                <div class="col-md-6 col-sm-6">
                  <b>Tour Operator :</b><br>
                  <p>BonFire Adventures</p>
                  <b>Age Range :</b><br>
                  <p>18 to 55</p>
                  <b>Tour Id :</b>
                  <p>163826</p>
                  <p><br>From<br>
                    <span style="color: grey;"><b>US <span style="font-size: 30px;">$686</span></b></span>
                  </p>
                </div>

                <div class="col-md-6 col-sm-6">
                  <b>Max group size:</b><br>
                  <p>16</p>
                  <b>Language :</b>
                  <p>English</p>
                </div>
                </div>
                </div>
                </div>
                </div>
          </div>
        </div>
      </section>

      <section>
      <div class="container ">
          <div class="row">
      <div class="col-md-8 col-sm-6 col-xs-12 b_packages">
      <!--Carousel Wrapper-->
      <div id="multi-item-example" class="carousel slide carousel-multi-item carousel-multi-item-2" data-ride="carousel">
      <div class="shadow-sm p-3 mb-5 bg-white rounded">
      <h1>Places You'll See</h1>

        <!--Controls-->
        <div class="controls-top ">
          <a class="black-text" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
          <a class="black-text pull-right" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
        </div>
        <!--/.Controls-->

        <!--Slides-->
        <div class="carousel-inner " role="listbox">

          <!--First slide-->
          <div class="carousel-item active">
              <div class="container">
              <div class="row">

            <div class="col-md-3 mb-3">
              <div class="card">
                <img class="img-fluid" src="<?= Yii::$app->request->baseUrl ?>/specifictourimages/1.jpg"
                  alt="Card image cap">
              </div>
            </div>

            <div class="col-md-3 mb-3">
              <div class="card">
                <img class="img-fluid" src="<?= Yii::$app->request->baseUrl ?>/specifictourimages/2.jpg"
                  alt="Card image cap">
              </div>
            </div>

            <div class="col-md-3 mb-3">
              <div class="card">
                <img class="img-fluid" src="<?= Yii::$app->request->baseUrl ?>/specifictourimages/3.jpg"
                  alt="Card image cap">
              </div>
            </div>

            <div class="col-md-3 mb-3">
              <div class="card">
                <img class="img-fluid" src="<?= Yii::$app->request->baseUrl ?>/specifictourimages/4.jpg"
                  alt="Card image cap">
              </div>
            </div>
            </div>
            </div>
          </div>
          <!--/.First slide-->

          <!--Second slide-->
          <div class="carousel-item">
          <div class="container">
              <div class="row">
            <div class="col-md-3 mb-3">
              <div class="card">
                <img class="img-fluid" src="<?= Yii::$app->request->baseUrl ?>/specifictourimages/5.jpg"
                  alt="Card image cap">
              </div>
            </div>

            <div class="col-md-3 mb-3">
              <div class="card">
                <img class="img-fluid" src="<?= Yii::$app->request->baseUrl ?>/specifictourimages/6.jpg"
                  alt="Card image cap">
              </div>
            </div>

            <div class="col-md-3 mb-3">
              <div class="card">
                <img class="img-fluid" src="<?= Yii::$app->request->baseUrl ?>/specifictourimages/7.jpg"
                  alt="Card image cap">
              </div>
            </div>

            <div class="col-md-3 mb-3">
              <div class="card">
                <img class="img-fluid" src="<?= Yii::$app->request->baseUrl ?>/specifictourimages/8.jpg"
                  alt="Card image cap">
              </div>
            </div>
            </div>
            </div>
          </div>
          <!--/.Second slide-->

          <!--Third slide-->
          <div class="carousel-item">
          <div class="container">
              <div class="row">
            <div class="col-md-3 mb-3">
              <div class="card">
                <img class="img-fluid" src="<?= Yii::$app->request->baseUrl ?>/specifictourimages/9.jpg"
                  alt="Card image cap">
              </div>
            </div>

            <div class="col-md-3 mb-3">
              <div class="card">
                <img class="img-fluid" src="<?= Yii::$app->request->baseUrl ?>/specifictourimages/10.jpg"
                  alt="Card image cap">
              </div>
            </div>

            <div class="col-md-3 mb-3">
              <div class="card">
                <img class="img-fluid" src="<?= Yii::$app->request->baseUrl ?>/specifictourimages/11.jpg"
                  alt="Card image cap">
              </div>
            </div>

            <div class="col-md-3 mb-3">
              <div class="card">
                <img class="img-fluid" src="<?= Yii::$app->request->baseUrl ?>/specifictourimages/12.jpg"
                  alt="Card image cap">
              </div>
            </div>
              </div>
            </div>
          </div>
         </div>
        </div>
      </div>
      </div>
     </div>
      </section>  
      
      <section>
          <div class="container ">
            <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12 b_packages">
            <div class="shadow-sm p-3 mb-5 bg-white rounded">
              <h1>Map</h1>
              <div id="map"></div>
              </div>
            </div>
            </div>
          </div>
      </section>

      <section>
          <div class="container margin_top">
            <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12 b_packages">
            <div class="shadow-sm p-3 mb-5 bg-white rounded">
              <h1>Itinerary</h1>
              <p>Start and end in Amboseli! With the Best of the Scenic Reserved Areas : Tsavo,Amboseli,Rift Valley, you have a 20 days tour package taking you through Amboseli, Mt. Kenyaand 2 other destinations. Best of the Western Arctic: Mombasa and Maasai mara includes flights, an expert guide, meals, transport.</p>
              <div>
              <div class="accordion" id="accordionExample">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <b>Introduction</b>
              </button>
            </h2>
          </div>

          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              Explore Egypt
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <b>Day 1: Arrival Cairo – Overnight in Cairo (No Meals)</b> 
              </button>
            </h2>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
            Arrive in Cairo airport, you will be met and assist by our representative who will assist you through the formalities, and then be transferred to your hotel, overnight at your hotel in Cairo. 
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <b>Day 2: Giza – Pyramids tour – be ready at 07.15 AM to meet your tour guide, Overnight in Cairo (B)</b> 
              </button>
            </h2>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
            After breakfast, then you will start the tour by visiting the awe inspiring pyramids and the Sphinx at Giza plateau, visit to papyrus factory  then head to visit the Egyptian museum, and finally to the open market (Khan El Khalili) the Bazaar with the numerous souvenirs shops and the coffee shops. back to your hotel, Overnight Cairo. (B)      </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <b>Day 3: Flight to Aswan, Aswan Day tour - Nile cruise and overnight in Aswan (B, L, D)</b> 
              </button>
            </h2>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
            After breakfast,  check out from your Cairo hotel. Transfer to Cairo airport, Flight to Aswan, upon arrival, start the day with a morning tour of the famous High Dam of Aswan. Next you will visit the romantic Temple of Philae, visit to perfume place, transfer you to your Nile Cruise, lunch on board, dinner, and overnight on your 5 star standard Nile cruise. (B, L, D)      </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <b>Day 4: Nile Cruise – Edfu Temple – Kom Ombo Temple – Overnight Nile cruise in Edfu (B, L, D)</b> 
              </button>
            </h2>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
            (Optional Early morning trip to Abu Simbel by road with breakfast box - without missing any part of the tour) 
      After breakfast, free time then have lunch then enjoy sailing down the fertile bank of the Nile to visit Kom-Ombo Temples. Continue down the Nile to the city of Edfu, dinner and overnight on your 5 stars standard Nile Cruise.       </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <b>Day 5: Optional tour to Alexandria – Overnight in Cairo(B)</b> 
              </button>
            </h2>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
            After breakfast, free time in Cairo, or you have the chance for an Optional tour to Alexandria, Overnight Cairo.      </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <b>Day 6: Flight (B)</b> 
              </button>
            </h2>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
            After breakfast take your memories with you in the flight back home. 
          (Extension to Jordan, Israel, Morocco, and Dubai is available )      </div>
          </div>
        </div>
        
              </div>
              </div>
            </div>
            </div>
          </div>
          </div>

      </section>

      <section>
      <div class="container margin_top">
            <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12 b_packages">
            <div class="shadow-sm p-3 mb-5 bg-white rounded">
              <h1>Services Available</h1>
              <div>
              <div class="accordion" id="accordionExample">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <b>Accommodation</b>
              </button>
            </h2>
          </div>

          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
            9 nights in a choice of cabin types, all with en suite facilities, 2 nights hotel in Toronto.
      </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <b>Guide</b> 
              </button>
            </h2>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
            Full complement of qualified Expedition Staff</div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <b>Meals</b>        </button>
            </h2>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
            All meals while on the ship Beer and house wine during dinner    </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <b>Transport</b> 
              </button>
            </h2>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
            All transport
      </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <b>Flights</b> 
              </button>
            </h2>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
            International flights are not i ncluded We can include flights from the UK.  Please contact us for a quote.
            </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <b>Insurance</b> 
              </button>
            </h2>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
            Insurance is not included</div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <b>Additional Services</b> 
              </button>
            </h2>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
            Travel insurance Single accommodation (available on request)Visas or vaccinations Mandatory transfer package (including return charter flights between Toronto and Resolute) which is £1700 per person (or equivalent in booking currency) paid on booking</div>
          </div>
        </div>
        
      </div>
              </div>
            </div>
            </div>
          </div>
              </div>
              </div>
            </div>
            </div>
      </div>
      </section>
        <section>
          <div class="container margin_top">
            <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12 b_packages">
            <div id="outer">
            <div class="shadow-sm p-3 mb-5 bg-white rounded">
              <h1>Planned departure Dates</h1><br>
            <p>
                <button class="btn btn-outline-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Planned departure Dates</button>
                  <a class="btn btn-outline-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">August 2021</a>
                  <button class="btn btn-outline-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">September 2021</button>
              </p>
              <br><br><br>

              
              <div class="row">
                <div class="row">
                <div class="card text-center cardcenter collapse multi-collapse" id="multiCollapseExample1">
                    <div class="card-body">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-6">
                      <div class="card-header"><b>13 August, 2021</b></div>
                      <p class="card-text">Sunday</p>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-6">
                      <div class="card-header"><b>17 August, 2021</b></div>
                      <p class="card-text">Tuesday</p>
                      </div>
                    </div>  
                  </div>
                  <div class="a_center">
                    <a href="<?= Url::to(['site/booking'])?>" class="btn btn-primary >">Approve Date</a>
                    </div>
                    </div>
                    <div class="card-footer text-muted">KSh 1,197</div>
                  </div>
                </div>

                <div class="row">
                <div class="card text-center cardcenter collapse multi-collapse" id="multiCollapseExample2">
                    <div class="card-body">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-6">
                      <div class="card-header"><b>14 September, 2021</b></div>
                      <p class="card-text">Sunday</p>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-6">
                      <div class="card-header"><b>17 September, 2021</b></div>
                      <p class="card-text">Tuesday</p>
                      </div>
                    </div>  
                  </div>
                  <div class="a_center">
                    <a href="<?= Url::to(['site/booking'])?>" class="btn btn-primary >">Approve Date</a>
                    </div>
                    </div>
                    <div class="card-footer text-muted">KSh 1,197</div>
                  </div>
                </div>
              </div>
            </div>
            </div>
            </div>
          </div>
      </section>

      <section>
          <div class="container ">
            <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12 b_packages">
            <div class="shadow-sm p-3 mb-5 bg-white rounded">
              <h1>Accommodation</h1><br><hr>
              <div class="container ">
                  <div class="row">
                    <div class="col-md-1 col-sm-1 col-xs-12 b_packages">
                    <div class="column"><i class="fa fa-bed" aria-hidden="true"></i></div>
                    </div>
                    <div class="col-md-11 col-sm-11 b_packages">
                    <div class="column"><b >Hotel</b><br>6 nights<hr></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-1 col-sm-1 col-xs-12 b_packages">
                    <div class="column"><i class="fa fa-home" aria-hidden="true"></i></div>
                    </div>
                    <div class="col-md-11 col-sm-11 b_packages">
                    <div class="column"><b >Home-stay</b><br>1 night<hr></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-1 col-sm-1 col-xs-12 b_packages">
                    <div class="column"><i class="fa fa-subway" aria-hidden="true"></i></div>
                    </div>
                    <div class="col-md-11 col-sm-11 b_packages">
                    <div class="column"><b >Sleeper Train</b><br>1 night<hr></div>
                    </div>
                  </div>
                  </div>
                  </div>
            </div>
          </div>
      </section>

     </div>

      <section>
      <div class="container margin_top">
          <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12 b_packages">
            <div class="shadow-sm p-3 mb-5 bg-white rounded">
            <h1>Customer Reviews</h1><br>

            <table class="roundedCorners back_color">
               
                <tr>
                  <td colspan="2">
                  <div class="container ">
                  <div class="row">

                    <div class="col-md-1 col-sm-1 col-xs-12 b_packages">
                    <div class="column"><i class="fa fa-star" aria-hidden="true"></i></div>
                    </div>
                    <div class="col-md-9 col-sm-9 b_packages">
                    <div class="column"><b >Overall Rating</b><br>Excellent</div>
                    </div>
                    <div class="col-md-1 col-sm-1 b_packages">
                    <div class="column pull-right"><b >4.7</b></div>
                    </div>
                    <div class="col-md-1 col-sm-1 col-xs-12 b_packages">
                    <div class="column"><i class="fa fa-star" aria-hidden="true"></i></div>
                    </div>

                  </div>
                  </div>
                  </td>
                </tr>

                <tr>
                  <td>
                  <div class="container ">
                  <div class="row">
                    <div class="col-md-1 col-sm-1 col-xs-12 b_packages">
                    <div class="column"><i class="fa fa-bookmark-o" aria-hidden="true"></i></div>
                    </div>
                    <div class="col-md-8 col-sm-8 b_packages">
                    <div class="column"><b >Itinerary</b><br>Excellent</div>
                    </div>
                    <div class="col-md-1 col-sm-1 b_packages">
                    <div class="column pull-right"><b >4.7</b></div>
                    </div>
                    <div class="col-md-1 col-sm-1 b_packages">
                    <div class="column"><i class="fa fa-star" aria-hidden="true"></i></div>
                    </div>
                  </div>
                  </div>
                  </td>

                  <td>
                  <div class="container ">
                  <div class="row">
                    <div class="col-md-1 col-sm-1 col-xs-12 b_packages">
                    <div class="column"><i class="fa fa-hand-o-right" aria-hidden="true"></i></div>
                    </div>
                    <div class="col-md-8 col-sm-8 b_packages">
                    <div class="column"><b >Guide</b><br>Excellent</div>
                    </div>
                    <div class="col-md-1 col-sm-1 b_packages">
                    <div class="column pull-right"><b >4.2</b></div>
                    </div>
                    <div class="col-md-1 col-sm-1 b_packages">
                    <div class="column"><i class="fa fa-star" aria-hidden="true"></i></div>
                    </div>
                  </div>
                  </div>
                  </td>
                </tr>

                <tr>
                  <td>
                  <div class="container ">
                  <div class="row">
                    <div class="col-md-1 col-sm-1 col-xs-12 b_packages">
                    <div class="column"><i class="fa fa-subway" aria-hidden="true"></i></div>
                    </div>
                    <div class="col-md-8 col-sm-8 b_packages">
                    <div class="column"><b >Transport</b><br>Excellent</div>
                    </div>
                    <div class="col-md-1 col-sm-1 b_packages">
                    <div class="column pull-right"><b >4.5</b></div>
                    </div>
                    <div class="col-md-1 col-sm-1 b_packages">
                    <div class="column"><i class="fa fa-star" aria-hidden="true"></i></div>
                    </div>
                  </div>
                  </div>
                  </td>

                  <td>
                  <div class="container ">
                  <div class="row">
                    <div class="col-md-1 col-sm-1 col-xs-12 b_packages">
                    <div class="column"><i class="fa fa-bed" aria-hidden="true"></i></div>
                    </div>
                    <div class="col-md-8 col-sm-8 b_packages">
                    <div class="column"><b >Accommodation</b><br>Excellent</div>
                    </div>
                    <div class="col-md-1 col-sm-1 b_packages">
                    <div class="column pull-right"><b >4.7</b></div>
                    </div>
                    <div class="col-md-1 col-sm-1 b_packages">
                    <div class="column"><i class="fa fa-star" aria-hidden="true"></i></div>
                    </div>
                  </div>
                  </div>
                  </td>
                </tr>

                <tr>
                  <td>
                  <div class="container ">
                  <div class="row">
                    <div class="col-md-1 col-sm-1 col-xs-12 b_packages">
                    <div class="column"><i class="fa fa-cutlery" aria-hidden="true"></i></div>
                    </div>
                    <div class="col-md-8 col-sm-8 b_packages">
                    <div class="column"><b >Food</b><br>Excellent</div>
                    </div>
                    <div class="col-md-1 col-sm-1 b_packages">
                    <div class="column pull-right"><b >4.2</b></div>
                    </div>
                    <div class="col-md-1 col-sm-1 b_packages">
                    <div class="column"><i class="fa fa-star" aria-hidden="true"></i></div>
                    </div>
                  </div>
                  </div>
                  </td>

                  <td>
                  <div class="container ">
                  <div class="row">
                    <div class="col-md-1 col-sm-1 col-xs-12 b_packages">
                    <div class="column"><i class="fa fa-flag-o" aria-hidden="true"></i></div>
                    </div>
                    <div class="col-md-8 col-sm-8 b_packages">
                    <div class="column"><b >Tour Operator</b><br>Excellent</div>
                    </div>
                    <div class="col-md-1 col-sm-1 b_packages">
                    <div class="column pull-right"><b >4.5</b></div>
                    </div>
                    <div class="col-md-1 col-sm-1 b_packages">
                    <div class="column"><i class="fa fa-star" aria-hidden="true"></i></div>
                    </div>
                  </div>
                  </div>
                  </td>
                </tr>
                
              </table>
              </div>
            </div>
          </div>
         </div>

      </section>
  </body>
</html>