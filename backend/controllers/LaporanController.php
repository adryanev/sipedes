<?php

namespace backend\controllers;

use common\models\Desa;
use common\models\Kabupaten;
use common\models\Kecamatan;
use common\models\Kelurahan;
use common\models\PenilaianDesa;
use common\models\PenilaianDesaA1;
use common\models\PenilaianDesaA2;
use common\models\PenilaianDesaA3;
use common\models\PenilaianDesaA4;
use common\models\PenilaianDesaA5;
use common\models\PenilaianDesaB1;
use common\models\PenilaianDesaB2;
use common\models\PenilaianDesaB3;
use common\models\PenilaianDesaB4;
use common\models\PenilaianDesaB5;
use common\models\PenilaianDesaC1;
use common\models\PenilaianDesaC2;
use common\models\PenilaianDesaC3;
use common\models\PenilaianDesaC4;
use common\models\PenilaianDesaC5;
use common\models\PenilaianDesaC6;
use common\models\PenilaianDesaC7;
use common\models\PenilaianDesaC8;
use common\models\PenilaianDesaC9;
use common\models\PenilaianMasyarakatDesa;
use common\models\PenilaianPemerintahanDesa;
use common\models\PenilaianWilayahDesa;
use common\models\Provinsi;
use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
use yii\helpers\Json;
use yii\helpers\VarDumper;
use yii\web\NotFoundHttpException;
use yii\web\Response;

class LaporanController extends \yii\web\Controller
{


     public function actionLaporanKabDesa($idKabupaten,$tahun,$jenis){

         $kab = HtmlPurifier::process($idKabupaten);
         $kabupaten = Kabupaten::findOne($kab);
         $thn = HtmlPurifier::process($tahun);
         $jn = HtmlPurifier::process($jenis);
         $kec = $kabupaten->kecamatans;
         $structure = $kec;
         $desa = null;
         if($jn === 'desa'){

             foreach ($kec as $k){
                 $desa = $k->desas;
//                 $structure = $desa;

             }
         }
         elseif ($jn === 'kelurahan'){
             $kelurahan = [];
         }
         else{
             throw new NotFoundHttpException("Yang anda cara tidak ada");
         }




         return $this->render('laporan-kabupaten',['kab'=>$kabupaten, 'desa'=>$desa,'struktur'=>$structure]);
     }
    public function actionIndex()
    {
        $dataProvinsi = Provinsi::getProvinsiAsMap();
        $dataKabupaten = Kabupaten::getKabupatenAsMap();
        return $this->render('index',['provinsi'=>$dataProvinsi,'kabupaten'=>$dataKabupaten]);
    }

    public function actionLaporanDesa($idDesa,$tahun){

        $des = HtmlPurifier::process($idDesa);
        $desa = Desa::find()->where(['id_desa'=>$des])->one();
        $thn = HtmlPurifier::process($tahun);
        $penDes = PenilaianDesa::find()->where(['id_desa'=>$des,'tahun_penilaian'=>$thn])->one();
        $penilaianWilayah= PenilaianWilayahDesa::find()->where(['id_penilaian_desa'=>$penDes->id])->one();
        $penilaianPemerintahan = PenilaianPemerintahanDesa::find()->where(['id_penilaian_desa'=>$penDes->id])->one();
        $penilaianKemasyarakatan = PenilaianMasyarakatDesa::find()->where(['id_penilaian_desa'=>$penDes->id])->one();
        $a1 = PenilaianDesaA1::find()->where(['id_penilaian_wilayah_desa'=>$penilaianWilayah->id])->one();
        $a2 = PenilaianDesaA2::find()->where(['id_penilaian_wilayah_desa'=>$penilaianWilayah->id])->one();
        $a3 = PenilaianDesaA3::find()->where(['id_penilaian_wilayah_desa'=>$penilaianWilayah->id])->one();
        $a4 = PenilaianDesaA4::find()->where(['id_penilaian_wilayah_desa'=>$penilaianWilayah->id])->one();
        $a5 = PenilaianDesaA5::find()->where(['id_penilaian_wilayah_desa'=>$penilaianWilayah->id])->one();
        $b1 = PenilaianDesaB1::find()->where(['id_penilaian_pemerintahan_desa'=>$penilaianPemerintahan->id])->one();
        $b2 = PenilaianDesaB2::find()->where(['id_penilaian_pemerintahan_desa'=>$penilaianPemerintahan->id])->one();
        $b3 = PenilaianDesaB3::find()->where(['id_penilaian_pemerintahan_desa'=>$penilaianPemerintahan->id])->one();
        $b4 = PenilaianDesaB4::find()->where(['id_penilaian_pemerintahan_desa'=>$penilaianPemerintahan->id])->one();
        $b5 = PenilaianDesaB5::find()->where(['id_penilaian_pemerintahan_desa'=>$penilaianPemerintahan->id])->one();
        $c1 = PenilaianDesaC1::find()->where(['id_penilaian_kemasyarakatan_desa'=>$penilaianKemasyarakatan->id])->one();
        $c2 = PenilaianDesaC2::find()->where(['id_penilaian_kemasyarakatan_desa'=>$penilaianKemasyarakatan->id])->one();
        $c3 = PenilaianDesaC3::find()->where(['id_penilaian_kemasyarakatan_desa'=>$penilaianKemasyarakatan->id])->one();
        $c4 = PenilaianDesaC4::find()->where(['id_penilaian_kemasyarakatan_desa'=>$penilaianKemasyarakatan->id])->one();
        $c5 = PenilaianDesaC5::find()->where(['id_penilaian_kemasyarakatan_desa'=>$penilaianKemasyarakatan->id])->one();
        $c6 = PenilaianDesaC6::find()->where(['id_penilaian_kemasyarakatan_desa'=>$penilaianKemasyarakatan->id])->one();
        $c7 = PenilaianDesaC7::find()->where(['id_penilaian_kemasyarakatan_desa'=>$penilaianKemasyarakatan->id])->one();
        $c8 = PenilaianDesaC8::find()->where(['id_penilaian_kemasyarakatan_desa'=>$penilaianKemasyarakatan->id])->one();
        $c9 = PenilaianDesaC9::find()->where(['id_penilaian_kemasyarakatan_desa'=>$penilaianKemasyarakatan->id])->one();

        return $this->render('laporan-desa',[
            'desa'=>$desa,
            'penilaianDesa'=>$penDes,
            'penilaianWilayah'=>$penilaianWilayah,
            'penilaianPemerintahan'=>$penilaianPemerintahan,
            'penilaianKemasyarakatan'=>$penilaianKemasyarakatan,
            'a1'=>$a1,
            'a2'=>$a2,
            'a3'=>$a3,
            'a4'=>$a4,
            'a5'=>$a5,
            'b1'=>$b1,
            'b2'=>$b2,
            'b3'=>$b3,
            'b4'=>$b4,
            'b5'=>$b5,
            'c1'=>$c1,
            'c2'=>$c2,
            'c3'=>$c3,
            'c4'=>$c4,
            'c5'=>$c5,
            'c6'=>$c6,
            'c7'=>$c7,
            'c8'=>$c8,
            'c9'=>$c9,
        ]);
    }

    public function actionGetProvinsi(){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $dataProvinsi = Provinsi::getProvinsiAsMap();

        return $dataProvinsi;
    }
    public function actionGetKabupaten(){
        $kab = [];
        if(isset($_POST['depdrop_parents'])){
            $parent = $_POST['depdrop_parents'];
            if($parent!=null){
                $id = $parent[0];
                $kab = Kabupaten::find()->select(['id_kabupaten as id','nama_kabupaten as name'])->where(['id_provinsi'=>$id])->asArray()->all();

                echo Json::encode(['output'=>$kab, 'selected'=>'']);
                return;

            }
        }
        echo Json::encode(['output'=>'', 'selected'=>'']);
    }
    public function actionGetKecamatan(){

        $kec = [];
        if(isset($_POST['depdrop_parents'])){
            $ids = $_POST['depdrop_parents'];
            $idProv = empty($ids[0]) ? null : $ids[0];
            $idKab = empty($ids[1])? null : $ids[1];

            if($idKab !=null){
                $kec = Kecamatan::find()->select(['id_kecamatan as id', 'nama_kecamatan as name'])->where(['id_kabupaten'=>$idKab])->asArray()->all();
                echo Json::encode(['output'=>$kec,'selected'=>'']);
                return;
            }
        }
        echo Json::encode(['output'=>'','selected'=>'']);
    }
    public function actionGetKelurahan($idKecamatan){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $idKec = HtmlPurifier::process($idKecamatan);
        $kel = Kelurahan::find()->where(['id_kecamatan'=>$idKec])->all();
        $dataKel = ArrayHelper::map($kel,'id_kelurahan','nama_kelurahan');

        return $dataKel;
    }

    public function actionGetDesa(){

        $out = [];
        if(isset($_POST['depdrop_parents'])){
            $ids = $_POST['depdrop_parents'];
            $idProv = empty($ids) ? null : $ids[0];
            $idKab = empty($ids)? null :  $ids[1];
            $idKec = empty($ids) ? null : $ids[2];

            if($idKec != null){
                $des = Desa::find()->select(['id_desa as id', 'nama_desa as name'])->where(['id_kecamatan'=>$idKec])->asArray()->all();
                echo Json::encode(['output'=>$des,'selected' => '']);
                return;
            }

        }

        echo Json::encode(['output'=>'','selected'=>'']);
    }


}
