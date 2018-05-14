<?php

namespace frontend\controllers;

use Yii;
use yii\helpers\Json;
use yii\helpers\VarDumper;

class PenilaianController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionDesa(){

        $title = 'Desa';
        $file =file_get_contents(Yii::getAlias('@webroot').'/pertanyaan_desa.json');


        $pertanyaan = Json::decode($file);
        return $this->render('pertanyaan-test',['title'=>$title,'pertanyaan'=>$pertanyaan]);
    }

    public function actionKelurahan(){
        return $this->render('index');
    }

}
