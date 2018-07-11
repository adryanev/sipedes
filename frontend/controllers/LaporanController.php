<?php
/**
 * Created by PhpStorm.
 * User: adryanev
 * Date: 7/11/2018
 * Time: 9:26 AM
 */

namespace frontend\controllers;


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
use common\models\PenilaianKelurahan;
use common\models\PenilaianKelurahanA1;
use common\models\PenilaianKelurahanA2;
use common\models\PenilaianKelurahanA3;
use common\models\PenilaianKelurahanA4;
use common\models\PenilaianKelurahanA5;
use common\models\PenilaianKelurahanB1;
use common\models\PenilaianKelurahanB2;
use common\models\PenilaianKelurahanB3;
use common\models\PenilaianKelurahanB4;
use common\models\PenilaianKelurahanB5;
use common\models\PenilaianKelurahanC1;
use common\models\PenilaianKelurahanC2;
use common\models\PenilaianKelurahanC3;
use common\models\PenilaianKelurahanC4;
use common\models\PenilaianKelurahanC5;
use common\models\PenilaianKelurahanC6;
use common\models\PenilaianKelurahanC7;
use common\models\PenilaianKelurahanC8;
use common\models\PenilaianKelurahanC9;
use common\models\PenilaianMasyarakatDesa;
use common\models\PenilaianMasyarakatKelurahan;
use common\models\PenilaianPemerintahanDesa;
use common\models\PenilaianPemerintahanKelurahan;
use common\models\PenilaianWilayahDesa;
use common\models\PenilaianWilayahKelurahan;
use common\models\Provinsi;
use Yii;
use yii\filters\AccessControl;
use yii\helpers\HtmlPurifier;
use yii\helpers\Json;
use yii\web\NotFoundHttpException;
use yii\web\Response;

class LaporanController extends \yii\web\Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['laporan-kab-desa','index','laporan-kelurahan' ,'laporan-desa'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ]
        ];


    }

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
//                  $structure = $desa;

            }
        }
        elseif ($jn === 'kelurahan'){
            foreach ($kec as $k){
                $desa = $k->kelurahans;
//                  $structure = $desa;

            }

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

    public function actionLaporanKelurahan($idKelurahan,$tahun){
        $kel = HtmlPurifier::process($idKelurahan);
        $kelurahan = Kelurahan::find()->where(['id_kelurahan'=>$kel])->one();
        $thn = HtmlPurifier::process($tahun);
        $penKel = PenilaianKelurahan::find()->where(['id_kelurahan'=>$kel,'tahun_penilaian'=>$thn])->one();
        $penilaianWilayah= PenilaianWilayahKelurahan::find()->where(['id_penilaian_Kelurahan'=>$penKel->id])->one();
        $penilaianPemerintahan = PenilaianPemerintahanKelurahan::find()->where(['id_penilaian_Kelurahan'=>$penKel->id])->one();
        $penilaianKemasyarakatan = PenilaianMasyarakatKelurahan::find()->where(['id_penilaian_kelurahan'=>$penKel->id])->one();
        $a1 = PenilaianKelurahanA1::find()->where(['id_penilaian_wilayah_kelurahan'=>$penilaianWilayah->id])->one();
        $a2 = PenilaianKelurahanA2::find()->where(['id_penilaian_wilayah_kelurahan'=>$penilaianWilayah->id])->one();
        $a3 = PenilaianKelurahanA3::find()->where(['id_penilaian_wilayah_kelurahan'=>$penilaianWilayah->id])->one();
        $a4 = PenilaianKelurahanA4::find()->where(['id_penilaian_wilayah_kelurahan'=>$penilaianWilayah->id])->one();
        $a5 = PenilaianKelurahanA5::find()->where(['id_penilaian_wilayah_kelurahan'=>$penilaianWilayah->id])->one();
        $b1 = PenilaianKelurahanB1::find()->where(['id_penilaian_pemerintahan_kelurahan'=>$penilaianPemerintahan->id])->one();
        $b2 = PenilaianKelurahanB2::find()->where(['id_penilaian_pemerintahan_kelurahan'=>$penilaianPemerintahan->id])->one();
        $b3 = PenilaianKelurahanB3::find()->where(['id_penilaian_pemerintahan_kelurahan'=>$penilaianPemerintahan->id])->one();
        $b4 = PenilaianKelurahanB4::find()->where(['id_penilaian_pemerintahan_kelurahan'=>$penilaianPemerintahan->id])->one();
        $b5 = PenilaianKelurahanB5::find()->where(['id_penilaian_pemerintahan_kelurahan'=>$penilaianPemerintahan->id])->one();
        $c1 = PenilaianKelurahanC1::find()->where(['id_penilaian_kemasyarakatan_kelurahan'=>$penilaianKemasyarakatan->id])->one();
        $c2 = PenilaianKelurahanC2::find()->where(['id_penilaian_kemasyarakatan_kelurahan'=>$penilaianKemasyarakatan->id])->one();
        $c3 = PenilaianKelurahanC3::find()->where(['id_penilaian_kemasyarakatan_kelurahan'=>$penilaianKemasyarakatan->id])->one();
        $c4 = PenilaianKelurahanC4::find()->where(['id_penilaian_kemasyarakatan_kelurahan'=>$penilaianKemasyarakatan->id])->one();
        $c5 = PenilaianKelurahanC5::find()->where(['id_penilaian_kemasyarakatan_kelurahan'=>$penilaianKemasyarakatan->id])->one();
        $c6 = PenilaianKelurahanC6::find()->where(['id_penilaian_kemasyarakatan_kelurahan'=>$penilaianKemasyarakatan->id])->one();
        $c7 = PenilaianKelurahanC7::find()->where(['id_penilaian_kemasyarakatan_kelurahan'=>$penilaianKemasyarakatan->id])->one();
        $c8 = PenilaianKelurahanC8::find()->where(['id_penilaian_kemasyarakatan_kelurahan'=>$penilaianKemasyarakatan->id])->one();
        $c9 = PenilaianKelurahanC9::find()->where(['id_penilaian_kemasyarakatan_kelurahan'=>$penilaianKemasyarakatan->id])->one();

        return $this->render('laporan-kelurahan',[
            'kelurahan'=>$kelurahan,
            'penilaianKelurahan'=>$penKel,
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
    public function actionGetKelurahan(){
        $out = [];
        if(isset($_POST['depdrop_parents'])){
            $ids = $_POST['depdrop_parents'];
            $idProv = empty($ids) ? null : $ids[0];
            $idKab = empty($ids)? null :  $ids[1];
            $idKec = empty($ids) ? null : $ids[2];

            if($idKec != null){
                $des = Kelurahan::find()->select(['id_kelurahan as id', 'nama_kelurahan as name'])->where(['id_kecamatan'=>$idKec])->asArray()->all();
                echo Json::encode(['output'=>$des,'selected' => '']);
                return;
            }

        }

        echo Json::encode(['output'=>'','selected'=>'']);
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