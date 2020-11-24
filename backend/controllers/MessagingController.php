<?php

namespace backend\controllers;

class MessagingController extends \yii\web\Controller
{
    public function actionCompose()
    {
        return $this->render('compose');
    }
    public function actionInbox()
    {
        return $this->render('inbox');
    }
    public function actionView()
    {
        return $this->render('view');
    }
    

}
