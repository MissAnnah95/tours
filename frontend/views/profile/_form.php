<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Profile */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="profile-form">


    <?php $form = ActiveForm::begin(); ?>

    <div class="container">
    <div class="row justify-content-end">
    <div class="col-12">
      <div class="col-sm-4">
      <div class="card-outline shadow-sm">

        <div class="row justify-content-center" style="font-size:120px;padding: 10px">
          <div class="card" style="width: 18rem;">
            <img src="<?= Yii::$app->request->baseUrl ?>/listingsimages/t5.jpg" class="card-img-top" alt="...">
          </div>
      </div>
        <div class="row justify-content-center" style="font-size:0.83em;">
          <div>
            <div class="custom-file mr-20px ml-20px">
               <input type="file" class="custom-file-input" id="uploadProfile">
               <label class="custom-file-label" for="uploadProfile">Choose file</label>
             </div>
             <br></br>

             <!-- Users Name -->
               <?= $form->field($model, 'fullNames')->textInput(['maxlength' => true]) ?>

               <!-- Phone Number -->
               <?= $form->field($model, 'phone')->textInput() ?>

               <!-- Email address -->
               <?= $form->field($model, 'address')->textarea(['rows' => 6]) ?>

               <!-- Address -->
               <?= $form->field($model, 'address')->textarea(['rows' => 6]) ?>

          </div>
        </div>
        <div class="card-body">
          <i class="fa fa-check-square-o" aria-hidden="true" style="font-size:50px"></i>
          <br></br>
          <h5 class="card-title">Identity Verification</h5>
          <p class="card-text font-weight-light">Show others you’re really you with the identity verification badge.</p>
          <button type="button" class="btn btn-outline-secondary">Get The Badge</button>
        </div>
        <br></br>
        <div class="card-footer">
          <div class="text" style="font-size: 1.2rem">
          <p><strong>Sam Smith Confirmed</strong></p>
        </div>
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
      </div>
    </div>


    </div>

    </div>
    </div>
    <?= $form->field($model, 'userId')->textInput() ?>

    <?= $form->field($model, 'isCompany')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'isSupplier')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'countryId')->textInput() ?>

    <?= $form->field($model, 'profileImagePath')->textInput() ?>

    <?= $form->field($model, 'fullNames')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput() ?>

    <?= $form->field($model, 'dateOfBirth')->textInput() ?>

    <?= $form->field($model, 'address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
