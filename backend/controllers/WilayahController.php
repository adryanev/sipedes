<?php

namespace backend\controllers;

use common\models\Desa;
use common\models\Kabupaten;
use common\models\Kecamatan;
use common\models\Kelurahan;
use common\models\Provinsi;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;

class WilayahController extends \yii\web\Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],

        ];
    }
    public function actionIndex()
    {
        $dataProvinsi = Provinsi::find()->where(['status'=>'AKTIF'])->limit(10);
        $dataKabupaten = Kabupaten::find()->where(['status'=>'AKTIF'])->limit(10);
        $dataKecamatan = Kecamatan::find()->where(['status'=>'AKTIF'])->limit(10);
        $dataKelurahan = Kelurahan::find()->where(['status'=>'AKTIF'])->limit(10);
        $dataDesa= Desa::find()->where(['status'=>'AKTIF'])->limit(10);

        $dataProviderProvinsi = new ActiveDataProvider(['query' => $dataProvinsi]);
        $dataProviderKabupaten = new ActiveDataProvider(['query' => $dataKabupaten]);
        $dataProviderKecamatan = new ActiveDataProvider(['query' => $dataKecamatan]);
        $dataProviderKelurahan = new ActiveDataProvider(['query' => $dataKelurahan]);
        $dataProviderDesa = new ActiveDataProvider(['query' => $dataDesa]);
        return $this->render('index',[
            'dataProvinsi'=>$dataProviderProvinsi,
            'dataKabupaten'=>$dataProviderKabupaten,
            'dataKecamatan'=>$dataProviderKecamatan,
            'dataKelurahan'=>$dataProviderKelurahan,
            'dataDesa'=>$dataProviderDesa
        ]);
    }

}
