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
                    <h2 class="text-success" data-plugin="counterup"><?=\common\models\PenilaianDesa::find()->where(['tahun_penilaian'=>$year])->count()?></h2>
                    <h5>Penilaian Desa  <?=date('Y')?></h5>
                </div>
            </div>


        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="card widget-user">
            <div class="card-content">
                <div class="text-center">
                    <h2 class="text-danger" data-plugin="counterup"><?= \common\models\PenilaianKelurahan::find()->where(['tahun_penilaian'=>$year])->count() ?></h2>
                    <h5>Penilaian Kelurahan  <?=date('Y')?></h5>
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
                <h4>Selamat datang di Fronted SISTEM INFORMASI PENILAIAN DESA DAN KELURAHAN.</h4>
                <h5 class="text-capitalize">Visi</h5>
                <pre>Terwujudnya Pemberdayaan Masyarakat, Pemerintahan dan Pembangunan Desa/Kelurahan menuju Kemandirian Desa/Kelurahan"</pre>
                <h5 class="text-capitalize">Misi</h5>
                <pre>1.	Peningkatan dan Pemantapan Perencanaan Program, Pengelolaan Keuangan, Perlengkapan serta Kepegawaian dan Umum
2.	Peningkatan dan Pemantapan Pemberdayaan Masyarakat Desa, Kelurahan serta Sosial Budaya dan Komunitas Adat.
3.	Peningkatan dan Pemantapan Permbedayaan Masyarakat Desa/Kelurahan dan Pengembangan Kapasitas, pengelolaan Keuangan dan Aset Desa.
4.	Peningkatan dan Pemantapan Pembangunan Infrastruktur dasar sarana prasarana, resetlemtn, perumahan masyarakat miskin, dan Ekonomi Masyarakat Desa dan Kelurahan.
5.	Peningkatan dan Pemantapan Analisa Kebutuhan serta Permasyarakatan Teknologi Tepat Guna.
</pre>
            </div>




        </div>
    </div><!-- end col -->

</div>
<!-- end row -->

