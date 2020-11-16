<?php

namespace frontend\controllers;

class SpecifictourController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionTour()
    {
        return $this->render('tour');
    }

}
