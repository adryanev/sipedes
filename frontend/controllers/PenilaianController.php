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

        return $this->render('pilih-daerah',['title'=>$title]);
    }

    public function actionKelurahan(){
        return $this->render('index');
    }

}
