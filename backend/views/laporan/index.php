<?php
/* @var $this yii\web\View */
?>

<div class="row">
    <div class="col-lg-12">
        <div class="card-box">

            <h4 class="header-title m-t-0 m-b-30">Laporan Penilaian Desa/Kelurahan</h4>

            <?php \yii\widgets\Pjax::begin()?>
            <?php \yii\bootstrap\Html::beginForm(['laporan'])?>

            <div class="form-group">
                <?= \kartik\select2\Select2::widget([

                    'id' => 'deskel',
                    'name' => 'nama_deskel',
                    'options' => ['placeholder'=>'Pilih desa / kelurahan'],


                ])?>
            </div>

            <div class="form-group">
                <?= \kartik\select2\Select2::widget([

                    'id' => 'tahun',
                    'name' => 'tahun',
                    'options' => ['placeholder'=>'Pilih tahun'],


                ])?>
            </div>

            <?= \yii\bootstrap\Html::submitButton('Pilih',['class'=>'btn btn-primary'])?>

            <?php \yii\bootstrap\Html::endForm()?>

            <br>
            <div class="clearfix"></div>

            <?php \yii\widgets\Pjax::end()?>


        </div>
    </div><!-- end col -->

</div>

