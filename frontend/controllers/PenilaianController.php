<?php

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
use common\models\PenilaianMasyarakatDesa;
use common\models\PenilaianPemerintahanDesa;
use common\models\PenilaianWilayahDesa;

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
use common\models\PenilaianMasyarakatKelurahan;
use common\models\PenilaianPemerintahanKelurahan;
use common\models\PenilaianWilayahKelurahan;


use common\models\Provinsi;
use http\Url;
use kartik\depdrop\DepDropAction;
use Yii;
use yii\base\InvalidConfigException;
use yii\db\Exception;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
use yii\helpers\Json;
use yii\helpers\VarDumper;
use yii\web\Response;

class PenilaianController extends \yii\web\Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['desa','kelurahan','penilaian-desa' ,'index','penilaian-kelurahan','get-kelurahan','get-provinsi','get-kabupaten','get-kecamatan','get-desa'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionDesa(){
        $title = 'Desa';
        $dataProvinsi = Provinsi::getProvinsiAsMap();
        return $this->render('pilih-daerah',['title'=>$title,'provinsi'=>$dataProvinsi]);
    }

    public function actionKelurahan(){
        $title = 'Kelurahan';
        $dataProvinsi = Provinsi::getProvinsiAsMap();
        return $this->render('pilih-kelurahan',['title'=>$title,'provinsi'=>$dataProvinsi]);
    }

    public function actionPenilaianDesa($idDesa){
        $dataDesa = Desa::findOne($idDesa);
        $penilaianDesa = new PenilaianDesa();
        $penilaianWilayah = new PenilaianWilayahDesa();
        $penilaianPemerintahan = new PenilaianPemerintahanDesa();
        $penilaianKemasyarakatan = new PenilaianMasyarakatDesa();

        $a1 = new PenilaianDesaA1();
        $a2 = new PenilaianDesaA2();
        $a3 = new PenilaianDesaA3();
        $a4 = new PenilaianDesaA4();
        $a5 = new PenilaianDesaA5();
        $b1 = new PenilaianDesaB1();
        $b2 = new PenilaianDesaB2();
        $b3 = new PenilaianDesaB3();
        $b4 = new PenilaianDesaB4();
        $b5 = new PenilaianDesaB5();
        $c1 = new PenilaianDesaC1();
        $c2 = new PenilaianDesaC2();
        $c3 = new PenilaianDesaC3();
        $c4 = new PenilaianDesaC4();
        $c5 = new PenilaianDesaC5();
        $c6 = new PenilaianDesaC6();
        $c7 = new PenilaianDesaC7();
        $c8 = new PenilaianDesaC8();
        $c9 = new PenilaianDesaC9();

        if(Yii::$app->request->isPost){
            $data = Yii::$app->request->post();
            if($penilaianDesa->load($data) &&
                $a1->load($data) && $a2->load($data) && $a3->load($data) && $a4->load($data)
                && $a5->load($data) && $b1->load($data) && $b2->load($data) && $b3->load($data)
                && $b4->load($data) && $b5->load($data) && $c1->load($data) && $c2->load($data)
                && $c3->load($data) && $c4->load($data) && $c5->load($data) && $c6->load($data)
                && $c7->load($data) && $c8->load($data) && $c9->load($data)){

                $trans =  Yii::$app->db->beginTransaction();
                $penilaianDesa->penilai = Yii::$app->user->identity->getId();
                $sumA3 = $a3->sumA3();
               $sumA4 = $a4->sumA4();
               $sumA5 =  $a5->sumA5();
              $sumB1 =   $b1->sumB1();
              $sumB2 =   $b2->sumB2();
               $sumB3 =  $b3->sumB3();
               $sumB4 =  $b4->sumB4();
               $sumB5 =  $b5->sumB5();
               $sumC1 =  $c1->sumC1();
               $sumC2 =  $c2->sumC2();
               $sumC3 =  $c3->sumC3();
               $sumC4 =  $c4->sumC4();
              $sumC5 =   $c5->sumC5();
               $sumC6 =  $c6->sumC6();
                $sumC7 = $c7->sumC7();
               $sumC8 =  $c8->sumC8();
               $sumC9 =  $c9->sumC9();

               $penilaianWilayah->sub_total_wilayah = $sumA3 + $sumA4 + $sumA5;
               $penilaianPemerintahan->sub_total_pemerintahan = $sumB1 + $sumB2 + $sumB3 + $sumB4 + $sumB5;
               $penilaianKemasyarakatan->sub_total_masyarakat = $sumC1 + $sumC2 + $sumC3+ $sumC4 + $sumC5 + $sumC6 + $sumC7+
                   $sumC8 + $sumC9;

                if($penilaianDesa->save()){
                    $penilaianWilayah->id_penilaian_desa = $penilaianDesa->id;
                    $penilaianPemerintahan->id_penilaian_desa = $penilaianDesa->id;
                    $penilaianKemasyarakatan->id_penilaian_desa = $penilaianDesa->id;

                    if($penilaianWilayah->save() && $penilaianPemerintahan->save() && $penilaianKemasyarakatan->save()){
                        $a1->id_penilaian_wilayah_desa = $penilaianWilayah->id;
                        $a2->id_penilaian_wilayah_desa = $penilaianWilayah->id;
                        $a3->id_penilaian_wilayah_desa = $penilaianWilayah->id;
                        $a4->id_penilaian_wilayah_desa = $penilaianWilayah->id;
                        $a5->id_penilaian_wilayah_desa = $penilaianWilayah->id;
                        $b1->id_penilaian_pemerintahan_desa = $penilaianPemerintahan->id;
                        $b2->id_penilaian_pemerintahan_desa = $penilaianPemerintahan->id;
                        $b3->id_penilaian_pemerintahan_desa = $penilaianPemerintahan->id;
                        $b4->id_penilaian_pemerintahan_desa = $penilaianPemerintahan->id;
                        $b5->id_penilaian_pemerintahan_desa = $penilaianPemerintahan->id;
                        $c1->id_penilaian_kemasyarakatan_desa= $penilaianKemasyarakatan->id;
                        $c2->id_penilaian_kemasyarakatan_desa= $penilaianKemasyarakatan->id;
                        $c3->id_penilaian_kemasyarakatan_desa= $penilaianKemasyarakatan->id;
                        $c4->id_penilaian_kemasyarakatan_desa= $penilaianKemasyarakatan->id;
                        $c5->id_penilaian_kemasyarakatan_desa= $penilaianKemasyarakatan->id;
                        $c6->id_penilaian_kemasyarakatan_desa= $penilaianKemasyarakatan->id;
                        $c7->id_penilaian_kemasyarakatan_desa= $penilaianKemasyarakatan->id;
                        $c8->id_penilaian_kemasyarakatan_desa= $penilaianKemasyarakatan->id;
                        $c9->id_penilaian_kemasyarakatan_desa= $penilaianKemasyarakatan->id;

                        if($a1->save(false) && $a2->save(false) && $a3->save(false) && $a4->save(false) && $a5->save(false) &&
                        $b1->save(false) && $b2->save(false) && $b3->save(false) && $b4->save(false) && $b5->save(false) &&
                        $c1->save(false) && $c2->save(false) && $c3->save(false) && $c4->save(false) && $c5->save(false) &&
                        $c6->save(false) && $c7->save(false) && $c8->save(false) && $c9->save(false)){

                            try {
                                $trans->commit();
                                Yii::$app->session->setFlash('success','Berhasil melakukan penilaian Desa');
                               return $this->redirect(['penilaian/desa']);
                            } catch (Exception $e) {
                                $trans->rollBack();
                                VarDumper::dump($e);
                                exit();
                            }

                        }else{
                            echo '<pre>';
                            echo 'Gagal menyimpan A1-C9';
                            $trans->rollBack();
                            exit();
                        }
                    }
                    else{
                        echo 'Gagal menyimpan wilayah pemerintahan dan kemasyarakatan';
                        $trans->rollBack();
                        exit();
                    }
                }else{
                    echo 'Gagal menyimpan penilaian Desa';
                    $trans->rollBack();

                    exit();
                }



            }
        }


        $file =file_get_contents(Yii::getAlias('@webroot').'/pertanyaan_desa.json');


        $pertanyaan = Json::decode($file);

        return $this->render('penilaian-desa',[
            'pertanyaan'=>$pertanyaan,
            'desa'=>$dataDesa,
            'penilaianDesa'=>$penilaianDesa,
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
    public function actionPenilaianKelurahan($idKelurahan){

        $dataKelurahan = Kelurahan::findOne($idKelurahan);
        $penilaianKelurahan = new PenilaianKelurahan();
        $penilaianWilayah = new PenilaianWilayahKelurahan();
        $penilaianPemerintahan = new PenilaianPemerintahanKelurahan();
        $penilaianKemasyarakatan = new PenilaianMasyarakatKelurahan();

        $a1 = new PenilaianKelurahanA1();
        $a2 = new PenilaianKelurahanA2();
        $a3 = new PenilaianKelurahanA3();
        $a4 = new PenilaianKelurahanA4();
        $a5 = new PenilaianKelurahanA5();
        $b1 = new PenilaianKelurahanB1();
        $b2 = new PenilaianKelurahanB2();
        $b3 = new PenilaianKelurahanB3();
        $b4 = new PenilaianKelurahanB4();
        $b5 = new PenilaianKelurahanB5();
        $c1 = new PenilaianKelurahanC1();
        $c2 = new PenilaianKelurahanC2();
        $c3 = new PenilaianKelurahanC3();
        $c4 = new PenilaianKelurahanC4();
        $c5 = new PenilaianKelurahanC5();
        $c6 = new PenilaianKelurahanC6();
        $c7 = new PenilaianKelurahanC7();
        $c8 = new PenilaianKelurahanC8();
        $c9 = new PenilaianKelurahanC9();

        if(Yii::$app->request->isPost){
            $data = Yii::$app->request->post();
            if($penilaianKelurahan->load($data) &&
                $a1->load($data) && $a2->load($data) && $a3->load($data) && $a4->load($data)
                && $a5->load($data) && $b1->load($data) && $b2->load($data) && $b3->load($data)
                && $b4->load($data) && $b5->load($data) && $c1->load($data) && $c2->load($data)
                && $c3->load($data) && $c4->load($data) && $c5->load($data) && $c6->load($data)
                && $c7->load($data) && $c8->load($data) && $c9->load($data)){

                $trans =  Yii::$app->db->beginTransaction();
                $penilaianKelurahan->penilai = Yii::$app->user->identity->getId();
                $sumA3 = $a3->sumA3();
                $sumA4 = $a4->sumA4();
                $sumA5 =  $a5->sumA5();
                $sumB1 =   $b1->sumB1();
                $sumB2 =   $b2->sumB2();
                $sumB3 =  $b3->sumB3();
                $sumB4 =  $b4->sumB4();
                $sumB5 =  $b5->sumB5();
                $sumC1 =  $c1->sumC1();
                $sumC2 =  $c2->sumC2();
                $sumC3 =  $c3->sumC3();
                $sumC4 =  $c4->sumC4();
                $sumC5 =   $c5->sumC5();
                $sumC6 =  $c6->sumC6();
                $sumC7 = $c7->sumC7();
                $sumC8 =  $c8->sumC8();
                $sumC9 =  $c9->sumC9();

                $penilaianWilayah->sub_total_wilayah = $sumA3 + $sumA4 + $sumA5;
                $penilaianPemerintahan->sub_total_pemerintahan = $sumB1 + $sumB2 + $sumB3 + $sumB4 + $sumB5;
                $penilaianKemasyarakatan->sub_total_masyarakat = $sumC1 + $sumC2 + $sumC3+ $sumC4 + $sumC5 + $sumC6 + $sumC7+
                    $sumC8 + $sumC9;

                if($penilaianKelurahan->save()){
                    $penilaianWilayah->id_penilaian_kelurahan = $penilaianKelurahan->id;
                    $penilaianPemerintahan->id_penilaian_kelurahan = $penilaianKelurahan->id;
                    $penilaianKemasyarakatan->id_penilaian_kelurahan = $penilaianKelurahan->id;

                    if($penilaianWilayah->save() && $penilaianPemerintahan->save() && $penilaianKemasyarakatan->save()){
                        $a1->id_penilaian_wilayah_kelurahan = $penilaianWilayah->id;
                        $a2->id_penilaian_wilayah_kelurahan = $penilaianWilayah->id;
                        $a3->id_penilaian_wilayah_kelurahan = $penilaianWilayah->id;
                        $a4->id_penilaian_wilayah_kelurahan = $penilaianWilayah->id;
                        $a5->id_penilaian_wilayah_kelurahan = $penilaianWilayah->id;
                        $b1->id_penilaian_pemerintahan_kelurahan = $penilaianPemerintahan->id;
                        $b2->id_penilaian_pemerintahan_kelurahan = $penilaianPemerintahan->id;
                        $b3->id_penilaian_pemerintahan_kelurahan = $penilaianPemerintahan->id;
                        $b4->id_penilaian_pemerintahan_kelurahan = $penilaianPemerintahan->id;
                        $b5->id_penilaian_pemerintahan_kelurahan = $penilaianPemerintahan->id;
                        $c1->id_penilaian_kemasyarakatan_kelurahan= $penilaianKemasyarakatan->id;
                        $c2->id_penilaian_kemasyarakatan_kelurahan= $penilaianKemasyarakatan->id;
                        $c3->id_penilaian_kemasyarakatan_kelurahan= $penilaianKemasyarakatan->id;
                        $c4->id_penilaian_kemasyarakatan_kelurahan= $penilaianKemasyarakatan->id;
                        $c5->id_penilaian_kemasyarakatan_kelurahan= $penilaianKemasyarakatan->id;
                        $c6->id_penilaian_kemasyarakatan_kelurahan= $penilaianKemasyarakatan->id;
                        $c7->id_penilaian_kemasyarakatan_kelurahan= $penilaianKemasyarakatan->id;
                        $c8->id_penilaian_kemasyarakatan_kelurahan= $penilaianKemasyarakatan->id;
                        $c9->id_penilaian_kemasyarakatan_kelurahan= $penilaianKemasyarakatan->id;

                        if($a1->save(false) && $a2->save(false) && $a3->save(false) && $a4->save(false) && $a5->save(false) &&
                            $b1->save(false) && $b2->save(false) && $b3->save(false) && $b4->save(false) && $b5->save(false) &&
                            $c1->save(false) && $c2->save(false) && $c3->save(false) && $c4->save(false) && $c5->save(false) &&
                            $c6->save(false) && $c7->save(false) && $c8->save(false) && $c9->save(false)){

                            try {
                                $trans->commit();
                                Yii::$app->session->setFlash('success','Berhasil melakukan penilaian Kelurahan');
                                return $this->redirect(['penilaian/kelurahan']);
                            } catch (Exception $e) {
                                $trans->rollBack();
                                VarDumper::dump($e);
                                exit();
                            }

                        }else{
                            echo '<pre>';
                            echo 'Gagal menyimpan A1-C9';
                            $trans->rollBack();
                            exit();
                        }
                    }
                    else{
                        echo 'Gagal menyimpan wilayah pemerintahan dan kemasyarakatan';
                        $trans->rollBack();
                        exit();
                    }
                }else{
                    echo 'Gagal menyimpan penilaian Kelurahan';
                    $trans->rollBack();

                    exit();
                }



            }
        }


        $file =file_get_contents(Yii::getAlias('@webroot').'/pertanyaan_kelurahan.json');


        $pertanyaan = Json::decode($file);

        return $this->render('penilaian-kelurahan',[
            'pertanyaan'=>$pertanyaan,
            'kelurahan'=>$dataKelurahan,
            'penilaianKelurahan'=>$penilaianKelurahan,
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
