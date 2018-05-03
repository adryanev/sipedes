<?php

namespace backend\controllers;

use common\models\Kecamatan;
use Yii;
use common\models\Kelurahan;
use common\models\KelurahanSearch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KelurahanController implements the CRUD actions for Kelurahan model.
 */
class KelurahanController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
	        'access' => [
		        'class' => AccessControl::className(),
		        'rules' => [
			        [
				        'actions' => ['create','view','index','delete'],
				        'allow' => true,
				        'roles' => ['@'],
			        ],
		        ],
	        ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Kelurahan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new KelurahanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Kelurahan model.
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
     * Creates a new Kelurahan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Kelurahan();
        $dataKecamatan = Kecamatan::getAllKecamatanAsKeyValue();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
        	Yii::$app->session->setFlash('success','Berhasil menambahkan kelurahan');
            return $this->redirect(['view', 'id' => $model->id_kelurahan]);
        }

        return $this->render('create', [
            'model' => $model,
	        'dataKecamatan'=>$dataKecamatan
        ]);
    }

    /**
     * Updates an existing Kelurahan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $dataKecamatan = Kecamatan::getAllKecamatanAsKeyValue();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
	        Yii::$app->session->setFlash('success','Berhasil mengubah kelurahan');
            return $this->redirect(['view', 'id' => $model->id_kelurahan]);
        }

        return $this->render('update', [
            'model' => $model,
            'dataKecamatan'=>$dataKecamatan
        ]);
    }

    /**
     * Deletes an existing Kelurahan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
	    Yii::$app->session->setFlash('success','Berhasil menghapus kelurahan');

        return $this->redirect(['index']);
    }

    /**
     * Finds the Kelurahan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Kelurahan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Kelurahan::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}