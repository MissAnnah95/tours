<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Locations */
/* @var $form ActiveForm */
?>
<br><br><br></br></br></br>
<!-- <div class="container">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'listingId') ?>
        <?= $form->field($model, 'regionId') ?>
        <?= $form->field($model, 'countryId') ?>
        <?= $form->field($model, 'cityId') ?>
        <?= $form->field($model, 'latitude') ?>
        <?= $form->field($model, 'longitude') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div> -->



<div class="container">
    <div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="progress" id="progress1">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">                
            </div>
            <span class="progress-type">Overall Progress</span>
            <span class="progress-completed">60%</span>
        </div> 
     </div>
    </div>
    <div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="row step">
            <div id="div1" class="col-md-4" onclick="javascript: resetActive(event, 0);">
                <span class="fa fa-pencil"></span>
                <p>Listing Details</p>
            </div>
            <div class="col-md-4 activestep" onclick="javascript: resetActive(event, 60);">
                <span class="fa fa-map-marker"></span>
                <p>Location Details</p>
            </div>
            <div id="last" class="col-md-4" onclick="javascript: resetActive(event, 100);">
                <span class="fa fa-picture-o"></span>
                <p>Add Images</p>
            </div>
      </div>
      </div>
      </div>
   <div class="panel panel-primary">
    <div class="panel-body">
      <h3 class="text-on-pannel text-primary"><strong class="text-uppercase"> <?= Html::encode($this->title) ?> </strong></h3>
            <div class="row">
                <?php $form = ActiveForm::begin(); ?>
                     <?= $form->field($model, 'listingId')->hiddenInput(['value'=>$listingId])->label(false) ?>
      				        <div class="col-md-4 col-sm-6">
				                <div class="form-horizontal">
				                
				                     <div class="form-group">
				                        <label class="col-md-4 control-label" for="latitude">Latitude:</label>
				                        <div class="col-md-8">
				                        
				                        	<?= $form->field($model, 'latitude')->textInput(['id'=>'latitude', 'class'=>'form-control latitude'])->label(false) ?>
				                        	
				                        </div>
				                    </div>
				                    <div class="form-group">
				                        <label class="col-md-4 control-label" for="longitude">Longitude:</label>
				                        <div class="col-md-8">
				                        
				                        <?= $form->field($model, 'longitude')->textInput(['id'=>'longitude', 'class'=>'form-control longitude'])->label(false) ?>
				                       
				                        </div>
				                    </div>
				                    <div class="form-group">
				                        <label class="col-md-4 control-label" for="longitude">Country </label>
				                        <div class="col-md-8">
				                         <?= $form->field($model, 'country')->textInput(['maxlength' => true, 'id'=>'country', 'class'=>'form-control country'])->label(false)?>
				                		
				                        </div>
				                    </div>
				                   
						</div><br>
						<div class="row">
						    <div class="form-group col-md-12">
                                <?= Html::submitButton('Next <span class="fa fa-forward"></span>', ['class' => 'btn btn-warning pull-right']) ?>
                            </div>
						</div>	
        		</div>
                <?php ActiveForm::end(); ?>
              </div>
       </div>
