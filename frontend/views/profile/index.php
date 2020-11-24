<?php

use yii\helpers\Html;
use common\models\User;
use frontend\models\Profile;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ProfileSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Profiles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profile-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <div class="container">
      <div class = "row">

      <div class = "col-3">
        <div class="card border shadow-sm" style="width: 18rem;">
          <img class="card-img-top" src="<?= Yii::$app->request->baseUrl ?>/listingsimages/profile.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
        <br></br>

        <div class="card border shadow-sm" style="width: 18rem;">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>

      </div>
      <div class = "col-6">
        <div class="card border text-left">
              <div class="card-header1" id="profile">
                My Profile
              </div>
              <div class="card-body">
                <tbody>

								<tr>
									<td>User Name</td>
									<td>:</td>
									<td>Maryann Kamau</td>
								</tr>
                <hr>

								<tr>
									<td>Password</td>
									<td>:</td>
									<td>mypasswordtour</td>
								</tr>
                <hr>
								<tr>
									<td>Email</td>
									<td>:</td>
									<td>sam_anderson@gmail.com</td>
								</tr>
                <hr>

								<tr>
									<td>Phone</td>
									<td>:</td>
									<td>+01 4561 3214</td>
								</tr>
                <hr>

								<tr>
									<td>Date of birth</td>
									<td>:</td>
									<td>03 Jun 1980</td>
								</tr>
                <hr>

								<tr>
									<td>Address</td>
									<td>:</td>
									<td>8800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</td>
								</tr>
                <hr>
								<tr>
									<td>Status</td>
									<td>:</td>
									<td><button class="light">Active</button>
									</td>
								</tr>
							</tbody>
              </div>
              <div class="card-footer text-muted">

                <p class="card-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters

</p>
                <a href="<?= Url::to(['/profile/create'])?>" class="btn btn-primary">Edit Profile</a>
              </div>
            </div>

      </div>
      <div class="col-3">
        <div class="card border text-center" style="margin-right:20px">
              <div class="card-header1">
                Notifications
              </div>
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>

            </div>
      </div>
    </div>

    </div>



</div>
