<?php

/* @var $this yii\web\View */

$this->title = 'Beranda | SIPEDES';
$year = date('Y');
?>
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="row">

    <div class="col-lg-3 col-md-6">
        <div class="card-box widget-user">
            <div class="text-center">
                <h2 class="text-warning" data-plugin="counterup"><?= \common\models\Desa::find()->count()?></h2>
                <h5>Jumlah Desa</h5>
            </div>
        </div>
    </div>


    <div class="col-lg-3 col-md-6">
        <div class="card-box widget-user">
            <div class="text-center">
                <h2 class="text-custom" data-plugin="counterup"><?= \common\models\Kelurahan::find()->count()?></h2>
                <h5>Jumlah Kelurahan</h5>
            </div>
        </div>
    </div>
    <!-- end col -->


    <div class="col-lg-3 col-md-6">
        <div class="card-box widget-user">
            <div class="text-center">
                <h2 class="text-success" data-plugin="counterup"><?=\common\models\PenilaianDesa::find()->where(['tahun_penilaian'=>$year])->count()?></h2>
                <h5>Penilaian Desa Tahun Ini</h5>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="card-box widget-user">
            <div class="text-center">
                <h2 class="text-danger" data-plugin="counterup"><?= \common\models\PenilaianKelurahan::find()->where(['tahun_penilaian'=>$year])->count() ?></h2>
                <h5>Penilaian Kelurahan Tahun Ini</h5>
            </div>
        </div>
    </div>
</div>
<!-- end row -->


<div class="row">
    <div class="col-lg-12">
        <div class="card-box">

            <h4 class="header-title m-t-0 m-b-30">Selamat datang di Backend.</h4>


        </div>
    </div><!-- end col -->

</div>
<!-- end row -->

