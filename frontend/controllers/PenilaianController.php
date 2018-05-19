<?php

namespace frontend\controllers;

use common\models\Desa;
use common\models\Kabupaten;
use common\models\Kecamatan;
use common\models\Kelurahan;
use common\models\Provinsi;
use http\Url;
use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
use yii\helpers\Json;
use yii\helpers\VarDumper;
use yii\web\Response;

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

    public function actionPenilaianDesa($desa){
        $idDesa = Yii::$app->request->get($desa);
        $dataDesa = Desa::findOne($idDesa);


        $title = 'Desa';
        $file =file_get_contents(Yii::getAlias('@webroot').'/pertanyaan_desa.json');


        $pertanyaan = Json::decode($file);


    }
    public function actionGetProvinsi(){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $dataProvinsi = Provinsi::getProvinsiAsMap();
//        $dataProvinsi = Provinsi::find()->all();;

        return $dataProvinsi;
    }
    public function actionGetKabupaten($idProvinsi){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $idProp = HtmlPurifier::process($idProvinsi);
        $kab = Kabupaten::find()->where(['id_provinsi'=>$idProp])->all();
        $dataKab = ArrayHelper::map($kab,'id_kabupaten','nama_kabupaten');
        return $dataKab;
    }
    public function actionGetKecamatan($idKabupaten){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $idKab = HtmlPurifier::process($idKabupaten);
        $kec = Kecamatan::find()->where(['id_kabupaten'=>$idKab])->all();
        $dataKec = ArrayHelper::map($kec,'id_kecamatan','nama_kecamatan');

        return $dataKec;
    }
    public function actionGetKelurahan($idKecamatan){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $idKec = HtmlPurifier::process($idKecamatan);
        $kel = Kelurahan::find()->where(['id_kecamatan'=>$idKec])->all();
        $dataKel = ArrayHelper::map($kel,'id_kelurahan','nama_kelurahan');

        return $dataKel;
    }

    public function actionGetDesa($idKecamatan){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $idKec = HtmlPurifier::process($idKecamatan);
        $des = Desa::find()->where(['id_kecamatan'=>$idKec])->all();
        $dataDesa = ArrayHelper::map($des,'id_desa','nama_desa');
        return $dataDesa;
    }


}
