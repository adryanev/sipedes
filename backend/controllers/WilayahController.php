<?php

namespace backend\controllers;

use common\models\Desa;
use common\models\Kabupaten;
use common\models\Kecamatan;
use common\models\Kelurahan;
use common\models\Provinsi;
use yii\data\ActiveDataProvider;

class WilayahController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvinsi = Provinsi::find()->limit(10);
        $dataKabupaten = Kabupaten::find()->limit(10);
        $dataKecamatan = Kecamatan::find()->limit(10);
        $dataKelurahan = Kelurahan::find()->limit(10);
        $dataDesa= Desa::find()->limit(10);

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
