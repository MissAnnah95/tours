<?php

/* @var $this yii\web\View */

$this->title = 'Tours';
?>
<div id="carouselExampleIndicators" class="carousel slide pb-3" data-ride="carousel" >
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://www.synotrip.com/sites/default/files/styles/900x900/public/ecotrekking/12838464077.jpg?itok=_oVP6VyQ" height="" width="" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>African Tour</h5>
        <p>, nulla, tempore. Deserunt excepturi quas vero.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://p0.pikist.com/photos/793/968/cornfield-sunset-sugar-palm-silhouettes-evening-sun-rise-green-view-sun-rice.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Adventure In Africa</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://cdn.tourradar.com/s3/content-pages/279/1024x460/ZFkGZ2.jpeg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Black is Beauty</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="card shadow-sm d-flex" style="position: absolute; top:60%; align-content:center; left: 20%; width:50%; ">
<form class="search pt-2">
        <div class="form-group d-flex row p-2">

            <!-- Left column -->
            <div class="searchbar col-5">
                <input type="dropdown" class="form-control p-4 fa-facebook" placeholder="Choose Destination...">
            </div>


            <!-- Right column -->
            <div class="col-5">
                <input type="date" class="form-control p-4">
            </div>
            <div class="col-2">
            <a href="#" class="mt-2 p-2 w-3 btn btn-primary">Search</a>
            </div>
        </div>
    </form>
</div>


<?php echo $this->render('_services')?>

<!-- Carousel -->
<div>
<h4 class="card-title pb-2 font-weight-bold">Plan Your Next Adventure</h4>

<div class="row blog">
                <div class="col-md-12">
                    <div id="blogCarousel" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#blogCarousel" data-slide-to="1"></li>
                        </ol>

                        <!-- Carousel items -->
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <div class="row">
                                <div class="col-md-3 box shadow">
                                <i class="fa fa-heart  like  p-1 my-1 mr-3" data-toggle="tooltip" data-placement="top" title="I like it"></i>
                                    <div class="discount rounded-pill">
                                        <p>50% off</p>
                                    </div>
                                        <a href="#">
                                        <img src="https://cdn.24.co.za/files/Cms/General/d/2922/35300c417c124af4a2aa6aa4357812d4.jpg"  class="card-img-top h-100"
                                          alt="sample photo">
                                          </a>
                                          <div class="region">
                                          <p><strong>East Africa</strong> 2020</p>
                                          </div>
                                          <div class="deals">
                                              <p>122 deals</p>
                                          </div>
                                    </div>
                                    <div class="col-md-3 box shadow">
                                <i class="fa fa-heart  like  p-1 my-1 mr-3" data-toggle="tooltip" data-placement="top" title="I like it"></i>
                                    <div class="discount rounded-pill">
                                        <p>50% off</p>
                                    </div>
                                        <a href="#">
                                        <img src="https://www.travelweek.ca/wp-content/uploads/2014/10/10.01_news_On-The-Go-Tours-safari.jpg"  class="card-img-top h-100"
                                          alt="sample photo">
                                          </a>
                                          <div class="region">
                                          <p><strong>West Africa</strong> 2020</p>
                                          </div>
                                          <div class="deals">
                                              <p>122 deals</p>
                                          </div>
                                    </div>
                                    <div class="col-md-3 box shadow">
                                <i class="fa fa-heart  like  p-1 my-1 mr-3" data-toggle="tooltip" data-placement="top" title="I like it"></i>
                                    <div class="discount rounded-pill">
                                        <p>50% off</p>
                                    </div>
                                        <a href="#">
                                        <img src="https://northafricapost.com/wp-content/uploads/2016/01/tourisme.jpg"  class="card-img-top h-100"
                                          alt="sample photo">
                                          </a>
                                          <div class="region">
                                          <p><strong>North Africa</strong> 2020</p>
                                          </div>
                                          <div class="deals">
                                              <p>122 deals</p>
                                          </div>
                                    </div>
                                    <div class="col-md-3 box shadow">
                                <i class="fa fa-heart  like  p-1 my-1 mr-3" data-toggle="tooltip" data-placement="top" title="I like it"></i>
                                    <div class="discount rounded-pill">
                                        <p>50% off</p>
                                    </div>
                                        <a href="#">
                                        <img src="https://www.webintravel.com/wp-content/uploads/2019/10/africa-travel.jpg"  class="card-img-top h-100"
                                          alt="sample photo">
                                          </a>
                                          <div class="region">
                                          <p><strong>East Africa</strong> 2020</p>
                                          </div>
                                          <div class="deals">
                                              <p>122 deals</p>
                                          </div>
                                    </div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->

                            <div class="carousel-item">
                                <div class="row">
                                <div class="col-md-3 box shadow">
                                <i class="fa fa-heart  like  p-1 my-1 mr-3" data-toggle="tooltip" data-placement="top" title="I like it"></i>
                                    <div class="discount rounded-pill">
                                        <p>50% off</p>
                                    </div>
                                        <a href="#">
                                        <img src="data:image/jpeg;base64,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"  class="card-img-top h-100"
                                          alt="sample photo">
                                          </a>
                                          <div class="region">
                                          <p><strong>East Africa</strong> 2020</p>
                                          </div>
                                          <div class="deals">
                                              <p>122 deals</p>
                                          </div>
                                    </div>

                                    <div class="col-md-3 box shadow">
                                <i class="fa fa-heart  like  p-1 my-1 mr-3" data-toggle="tooltip" data-placement="top" title="I like it"></i>
                                    <div class="discount rounded-pill">
                                        <p>50% off</p>
                                    </div>
                                        <a href="#">
                                        <img src="https://corporatemaldives.com/wp-content/uploads/2020/08/tourism-minitry.jpg"  class="card-img-top h-100"
                                          alt="sample photo">
                                          </a>
                                          <div class="region">
                                          <p><strong>East Africa</strong> 2020</p>
                                          </div>
                                          <div class="deals">
                                              <p>122 deals</p>
                                          </div>
                                    </div>
                                    <div class="col-md-3 box shadow">
                                <i class="fa fa-heart  like  p-1 my-1 mr-3" data-toggle="tooltip" data-placement="top" title="I like it"></i>
                                    <div class="discount rounded-pill">
                                        <p>50% off</p>
                                    </div>
                                        <a href="#">
                                        <img src="https://i1.wp.com/www.traveloffpath.com/wp-content/uploads/2020/07/Latin-America-Reopening-Countries-Opening-Borders-For-Tourism.jpg?fit=900%2C558&ssl=1"  class="card-img-top h-100"
                                          alt="sample photo">
                                          </a>
                                          <div class="region">
                                          <p><strong>East Africa</strong> 2020</p>
                                          </div>
                                          <div class="deals">
                                              <p>122 deals</p>
                                          </div>
                                    </div>
                                    <div class="col-md-3 box shadow">
                                <i class="fa fa-heart  like  p-1 my-1 mr-3" data-toggle="tooltip" data-placement="top" title="I like it"></i>
                                    <div class="discount rounded-pill">
                                        <p>50% off</p>
                                    </div>
                                        <a href="#">
                                        <img src="https://campuspress.yale.edu/tribune/files/2018/05/blog-new-5.jpg"  class="card-img-top h-100"
                                          alt="sample photo">
                                          </a>
                                          <div class="region">
                                          <p><strong>East Africa</strong> 2020</p>
                                          </div>
                                          <div class="deals">
                                              <p>122 deals</p>
                                          </div>
                                    </div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->

                        </div>
                        <!--.carousel-inner-->
                    </div>
                    <!--.Carousel-->

                </div>
            </div>

<!-- end -->
</div>



    <?php echo $this->render('_spotlight')?>
    <?php echo $this->render('_recomended')?>
    <?php echo $this->render('_contact')?>
</div>
