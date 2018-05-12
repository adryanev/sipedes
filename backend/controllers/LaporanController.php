<?php

namespace backend\controllers;

class LaporanController extends \yii\web\Controller
{
    public function actionIndex()
    {

        return $this->render('index');
    }

    public function actionLaporanDesa(){

        if(\Yii::$app->request->isAjax){

        }
    }

}
