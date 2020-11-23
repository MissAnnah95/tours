<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Listings */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="listings-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'listingTypeId')->textInput() ?>

    <?= $form->field($model, 'userId')->textInput() ?>

    <?= $form->field($model, 'listingName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'basePrice')->textInput() ?>

    <?= $form->field($model, 'isApackage')->textInput() ?>

    <?= $form->field($model, 'createdAt')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
