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
        <div class="card widget-user">
            <div class="card-content">

                <div class="text-center">
                    <h2 class="text-warning" data-plugin="counterup"><?= \common\models\Desa::find()->count()?></h2>
                    <h5>Jumlah Desa</h5>
                </div>

            </div>

        </div>
    </div>


    <div class="col-lg-3 col-md-6">
        <div class="card widget-user">
            <div class="card-content">
                <div class="text-center">
                    <h2 class="text-custom" data-plugin="counterup"><?= \common\models\Kelurahan::find()->count()?></h2>
                    <h5>Jumlah Kelurahan</h5>
                </div>
            </div>


        </div>
    </div>
    <!-- end col -->


    <div class="col-lg-3 col-md-6">
        <div class="card widget-user">
            <div class="card-content">
                <div class="text-center">
                    <h2 class="text-success" data-plugin="counterup">1599</h2>
                    <h5>Penilaian Desa <?=date('Y')?></h5>
                </div>
            </div>


        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="card widget-user">
            <div class="card-content">
                <div class="text-center">
                    <h2 class="text-danger" data-plugin="counterup">82</h2>
                    <h5>Penilaian Kelurahan <?=date('Y')?></h5>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- end row -->


<div class="row">
    <div class="col-lg-12">
        <div class="card">

            <div class="card-content">
                <h4>Selamat datang di Backend.</h4>
            </div>



        </div>
    </div><!-- end col -->

</div>
<!-- end row -->

