<?php

namespace backend\controllers;

use Yii;
use backend\models\Admin;
use backend\models\AdminSearch;
use yii\filters\AccessControl;
use yii\helpers\VarDumper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AdminController implements the CRUD actions for Admin model.
 */
class AdminController extends Controller
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
     * Lists all Admin models.
     * @return mixed
     */
    public function actionIndex()
    {
        if(Yii::$app->user->identity->jabatan != 'Super Admin' && Yii::$app->user->identity->jabatan != 'Pimpinan'){
            return $this->redirect(['admin/view']);
        }
        $searchModel = new AdminSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Admin model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {

        if(Yii::$app->user->identity->jabatan == 'Pimpinan' || Yii::$app->user->identity->jabatan == 'Super Admin'){
            $model = $this->findModel($id);
        }
        else{
            $model = $this->findModel(Yii::$app->user->identity->getId());
        }
        return $this->render('view', [
            'model' => $model
        ]);
    }

    /**
     * Creates a new Admin model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if(Yii::$app->user->identity->jabatan != 'Super Admin' && Yii::$app->user->identity->jabatan != 'Pimpinan'){
            return $this->redirect(['admin/view']);
        }
        $model = new Admin();
        $data = Yii::$app->request->post();


        if ($model->load($data)) {
            $pass = $data['Admin']['password_hash'];
            $model->generateAuthKey();
            $model->setPassword($pass);
            $model->avatar = "2.jpg";

            if($model->save()){
                return $this->redirect(['view', 'id' => $model->id]);
            }
            else{
                VarDumper::dump($model);
            }

        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Admin model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        if(Yii::$app->user->identity->jabatan != 'Super Admin' && Yii::$app->user->identity->jabatan != 'Pimpinan'){
            return $this->redirect(['admin/view']);
        }
        $model = $this->findModel($id);
        $currentPass = $model->password_hash;
        if ($model->load(Yii::$app->request->post()) ) {

            $pass = Yii::$app->request->post('Admin')['password_hash'];
            if($currentPass != $pass){
                $model->password_hash = Yii::$app->security->generatePasswordHash($pass);
            }else{
                $model->password_hash = $currentPass;
            }

            Yii::$app->session->setFlash('success','Admin berhasil diperbarui.');

            $model->save(false);
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Admin model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        if(Yii::$app->user->identity->jabatan != 'Super Admin' && Yii::$app->user->identity->jabatan != 'Pimpinan'){
            return $this->redirect(['admin/view']);
        }
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Admin model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Admin the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Admin::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
