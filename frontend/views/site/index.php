<?php

/* @var $this yii\web\View */
use yii\helpers\Url;


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




<?php echo $this->render('_courasel')?>
    <?php echo $this->render('_spotlight')?>
    <?php echo $this->render('_recomended')?>
    <?php echo $this->render('_contact')?>
</div>
