<?php
/* @var $this yii\web\View */

use yii\widgets\Pjax;
use yii\helpers\Html;
use \fedemotta\datatables\DataTables;

$this->title = 'Wilayah';
$this->params['breadcrumbs'][] = $this->title;
?>



<div class="row">
    <div class="col-lg-12">
        <div class="card-box">


            <h4 class="header-title m-t-0 m-b-30">Pintasan Wilayah</h4>

            <div class="row">
                <div class="col-md-2 col-lg-offset-1 ">
                    <?= Html::a('Provinsi',\yii\helpers\Url::to(['provinsi/index']),['class'=>'btn btn-success'])?>
                </div>
                <div class="col-md-2 ">
                    <?= Html::a('Kabupaten',\yii\helpers\Url::to(['kabupaten/index']),['class'=>'btn btn-primary'])?>
                </div>
                <div class="col-md-2 ">
                    <?= Html::a(' Kecamatan',\yii\helpers\Url::to(['kecamatan/index']),['class'=>'btn btn-warning'])?>
                </div>
                <div class="col-md-2 ">
                    <?= Html::a('Kelurahan',\yii\helpers\Url::to(['kelurahan/index']),['class'=>'btn btn-danger'])?>
                </div>
                <div class="col-md-2 col-lg-offset-1t">
                    <?= Html::a('Desa',\yii\helpers\Url::to(['desa/index']),['class'=>'btn btn-default'])?>
                </div>
            </div>

        </div>
    </div><!-- end col -->

</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card-box">

            <h4 class="header-title m-t-0 m-b-30">Provinsi</h4>

            <?php Pjax::begin(); ?>
            <?= DataTables::widget([
                'dataProvider' => $dataProvinsi,
               // 'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn','header'=>'No'],

                    'id_provinsi',
                    'nama_provinsi',

                ],
            ]); ?>
            <?php Pjax::end(); ?>

            <div class="row pull">
                <div class="col-md-offset-10">
                    <?= Html::a('Lihat selengkapnya <span><i class="fa fa-arrow-right"></i></span> ', \yii\helpers\Url::to(['provinsi/index']),['class'=>'btn btn-primary'])?>

                </div>
            </div>


        </div>
    </div><!-- end col -->

</div>



<div class="row">
    <div class="col-lg-12">
        <div class="card-box">


            <h4 class="header-title m-t-0 m-b-30">Kabupaten</h4>

            <?php Pjax::begin(); ?>
            <?= DataTables::widget([
                'dataProvider' => $dataKabupaten,
                // 'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn','header'=>'No'],

                    'id_kabupaten',
                    'nama_kabupaten',
                    'provinsi.nama_provinsi',
                ],
            ]); ?>
            <?php Pjax::end(); ?>

            <div class="row pull">
                <div class="col-md-offset-10">
                    <?= Html::a('Lihat selengkapnya <span><i class="fa fa-arrow-right"></i></span> ', \yii\helpers\Url::to(['kabupaten/index']),['class'=>'btn btn-primary'])?>

                </div>
            </div>


        </div>
    </div><!-- end col -->

</div>



<div class="row">
    <div class="col-lg-12">
        <div class="card-box">


            <h4 class="header-title m-t-0 m-b-30">Kecamatan</h4>

            <?php Pjax::begin(); ?>
            <?= DataTables::widget([
                'dataProvider' => $dataKecamatan,
                // 'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn','header'=>'No'],

                    'id_kecamatan',
                    'nama_kecamatan',
                    'kabupaten.nama_kabupaten',

                ],
            ]); ?>
            <?php Pjax::end(); ?>
            <div class="row pull">
                <div class="col-md-offset-10">
                    <?= Html::a('Lihat selengkapnya <span><i class="fa fa-arrow-right"></i></span> ', \yii\helpers\Url::to(['kecamatan/index']),['class'=>'btn btn-primary'])?>

                </div>
            </div>



        </div>
    </div><!-- end col -->

</div>



<div class="row">
    <div class="col-lg-12">
        <div class="card-box">

            <h4 class="header-title m-t-0 m-b-30">Kelurahan</h4>

            <?php Pjax::begin(); ?>
            <?= DataTables::widget([
                'dataProvider' => $dataKelurahan,
                // 'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn','header'=>'No'],

                    'id_kelurahan',
                    'nama_kelurahan',
                    'kecamatan.nama_kecamatan',
                ],
            ]); ?>
            <?php Pjax::end(); ?>
            <div class="row pull">
                <div class="col-md-offset-10">
                    <?= Html::a('Lihat selengkapnya <span><i class="fa fa-arrow-right"></i></span> ', \yii\helpers\Url::to(['kelurahan/index']),['class'=>'btn btn-primary'])?>

                </div>
            </div>



        </div>
    </div><!-- end col -->

</div>


<div class="row">
    <div class="col-lg-12">
        <div class="card-box">



            <h4 class="header-title m-t-0 m-b-30">Desa</h4>


            <?php Pjax::begin(); ?>
            <?= DataTables::widget([
                'dataProvider' => $dataDesa,
                // 'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn','header'=>'No'],

                    'id_desa',
                    'nama_desa',
                    'kecamatan.nama_kecamatan',
                ],
            ]); ?>
            <?php Pjax::end(); ?>
            <div class="row pull">
                <div class="col-md-offset-10">
                    <?= Html::a('Lihat selengkapnya <span><i class="fa fa-arrow-right"></i></span> ', \yii\helpers\Url::to(['desa/index']),['class'=>'btn btn-primary'])?>

                </div>
            </div>


        </div>
    </div><!-- end col -->

</div>