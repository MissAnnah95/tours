<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Listings */

$this->title = Yii::t('app', 'Update Listings: {name}', [
    'name' => $model->listingId,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Listings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->listingId, 'url' => ['view', 'id' => $model->listingId]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="listings-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
