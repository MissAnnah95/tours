<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Images */
/* @var $form ActiveForm */
?>
<div class="addimages">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'listingId') ?>
        <?= $form->field($model, 'imagePath') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div>
