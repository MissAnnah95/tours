<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ProfileSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profile-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'profileId') ?>

    <?= $form->field($model, 'userId') ?>

    <?= $form->field($model, 'isCompany') ?>

    <?= $form->field($model, 'isSupplier') ?>

    <?= $form->field($model, 'countryId') ?>

    <?php // echo $form->field($model, 'profileImagePath') ?>

    <?php // echo $form->field($model, 'fullNames') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'dateOfBirth') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
