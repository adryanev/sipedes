<?php

namespace backend\controllers;

use common\models\Provinsi;
use Yii;
use common\models\Kabupaten;
use common\models\KabupatenSearch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KabupatenController implements the CRUD actions for Kabupaten model.
 */
class KabupatenController extends Controller
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
                        'actions' => ['create','view','delete' ,'index','update'],
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
     * Lists all Kabupaten models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new KabupatenSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Kabupaten model.
     * @param string $id
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
     * Creates a new Kabupaten model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Kabupaten();
        $dataProvinsi = Provinsi::getProvinsiAsMap();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_kabupaten]);
        }

        return $this->render('create', [
            'model' => $model,
            'dataProvinsi'=>$dataProvinsi
        ]);
    }

    /**
     * Updates an existing Kabupaten model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $dataProvinsi = Provinsi::getProvinsiAsMap();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_kabupaten]);
        }

        return $this->render('update', [
            'model' => $model,
            'dataProvinsi'=>$dataProvinsi
        ]);
    }

    /**
     * Deletes an existing Kabupaten model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model =  $this->findModel($id);
        $model->status = 'TIDAK AKTIF';
        $model->save(false);
        Yii::$app->session->setFlash('success','Berhasil menghapus kabupaten');

        return $this->redirect(['index']);
    }

    /**
     * Finds the Kabupaten model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Kabupaten the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Kabupaten::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
