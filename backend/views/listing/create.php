<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Listings */

$this->title = Yii::t('app', 'Create Listings');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Listings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            <?= Html::encode($this->title) ?>
                        </header>
                        <div class="panel-body">
                            <?= $this->render('_form', [
                                    'model' => $model,
                                ]) ?>
                        </div>
                    </section>

            </div>
        </div>
