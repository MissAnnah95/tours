<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\Listingtypes;

/* @var $this yii\web\View */
/* @var $model frontend\models\Listings */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="listings-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'userId')->hiddenInput(['value'=>yii::$app->user->id])->label(false) ?>
    
    <?= $form->field($model, 'listingName')->textInput(['maxlength' => true]) ?>
      
    <?= $form->field($model, 'listingTypeId')->dropDownList(ArrayHelper::map(Listingtypes::find()->all(), 'listingTypeId', 'listingTypeDesc')) ?>
    
    <?= $form->field($model, 'isApackage')->dropDownList(['1'=>'Yes','0'=>'No']) ?>
    
    <?= $form->field($model, 'basePrice')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>


