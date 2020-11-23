<?php

namespace backend\controllers;

use Yii;
use common\models\Listings;
use common\models\ListingsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\Locations;
use common\models\Images;

/**
 * ListingsController implements the CRUD actions for Listings model.
 */
class ListingsController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Listings models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ListingsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Listings model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Listings model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Listings();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['addlocation', 'listingId' => $model->listingId]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionAddlocation($listingId)
    {
        $model = new Locations();
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['addimages']);
        }
        
        return $this->render('addlocation', [
            'model' => $model,
            'listingId'=>$listingId
        ]);
    }

    public function actionAddimages($imageId)
    {
        $model = new Images();
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        }
        
        return $this->render('addimages', [
            'model' => $model,
            'imageId'=>$imageId
        ]);
    }
    /**
     * Updates an existing Listings model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->listingId]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Listings model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Listings model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Listings the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Listings::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
