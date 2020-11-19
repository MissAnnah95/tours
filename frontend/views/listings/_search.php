<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ListingsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="listings-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'listingId') ?>

    <?= $form->field($model, 'listingTypeId') ?>

    <?= $form->field($model, 'userId') ?>

    <?= $form->field($model, 'listingName') ?>

    <?= $form->field($model, 'basePrice') ?>

    <?php // echo $form->field($model, 'isApackage') ?>

    <?php // echo $form->field($model, 'createdAt') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
