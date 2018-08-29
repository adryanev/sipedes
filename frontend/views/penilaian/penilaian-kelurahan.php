<?php
/**
 * Created by PhpStorm.
 * User: adryanev
 * Date: 12/05/18
 * Time: 19:58
 */

use yii\bootstrap\Html;
use yii\widgets\ActiveForm;

$pertanyaanA3 = $pertanyaan['A']['A3'];
$pertanyaanA4 = $pertanyaan['A']['A4'];
$pertanyaanA5 = $pertanyaan['A']['A5'];
$pertanyaanB1 = $pertanyaan['B']['B1'];
$pertanyaanB2 = $pertanyaan['B']['B2'];
$pertanyaanB3 = $pertanyaan['B']['B3'];
$pertanyaanB4 = $pertanyaan['B']['B4'];
$pertanyaanB5 = $pertanyaan['B']['B5'];
$pertanyaanC1 = $pertanyaan['C']['C1'];
$pertanyaanC2 = $pertanyaan['C']['C2'];
$pertanyaanC3 = $pertanyaan['C']['C3'];
$pertanyaanC4 = $pertanyaan['C']['C4'];
$pertanyaanC5 = $pertanyaan['C']['C5'];
$pertanyaanC6 = $pertanyaan['C']['C6'];
$pertanyaanC7 = $pertanyaan['C']['C7'];
$pertanyaanC8 = $pertanyaan['C']['C8'];
$pertanyaanC9 = $pertanyaan['C']['C9'];

$i = 1;
?>
<div class="row">
    <div class="col-md-12">

        <div class="card">

            <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
            <div class="card-header">
                <h3 class="card-title">
                    Penilaian Kelurahan: <?= \yii\helpers\HtmlPurifier::process($kelurahan->nama_kelurahan)?>
                </h3>
                <h5>Silahkan isi penilaian Kelurahan ini.</h5>
            </div>
        </div>
        <?php $form = ActiveForm::begin()?>
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h4 class="info-text">Form A1</h4>
                    </div>
                </div>
                <div class="card-content">
                    <div class="row">

                        <div class="col-md-12">
                            <?=$form->field($penilaianKelurahan,'id_kelurahan')->hiddenInput(['readonly'=>true,'value'=>$kelurahan->id_kelurahan])->label('')?>
                            <?=$form->field($penilaianKelurahan,'tahun_penilaian')->textInput(['value'=> date('Y')])?>
                            <?=$form->field($a1,'nama')->textInput(['readonly'=>true,'value'=>$kelurahan->nama_kelurahan])?>
                            <?=$form->field($a1,'kode')->textInput(['readonly'=>true,'value'=>$kelurahan->id_kelurahan])?>
                            <?=$form->field($a1,'topologi')->dropDownList(['Pantai'=>'Pantai','Dataran Rendah'=>'Dataran Rendah','Pegunungan'=>'Pegunungan'])?>
                            <?=$form->field($a1,'orbitasi')->dropDownList([
                                'Lebih dari 6 Jam'=>'Lebih dari 6 Jam',
                                '5-6 Jam'=> '5-6 Jam',
                                '3-4 Jam'=> '3-4 Jam',
                                '1-2 Jam'=> '1-2 Jam',
                                'Kurang dari 1 Jam'=> 'Kurang dari 1 Jam'
                            ])->label('Orbitasi wilayah ke Kabupaten/Kota')?>
                            <?=$form->field($a1,'kondisi_1')->dropDownList([
                                'Ada di Ibukota Kecamatan'=>'Ada di Ibukota Kecamatan',
                                'Di luar Ibukota Kecamatan'=> 'Di luar Ibukota Kecamatan'

                            ])->label('Kondisi Wilayah')?>
                            <?=$form->field($a1,'kondisi_2')->dropDownList([
                                'Rawan Bencana'=>'Rawan Bencana',
                                'Tidak Rawan Bencana'=> 'Tidak Rawan Bencana'
                            ])->label('Kondisi Wilayah')?>
                        </div>


                    </div>

                        <div class="row">
                            <div class="card-header">
                                <div class="card-title">
                                    <h4 class="info-text">Form A2 </h4>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="row">

                                    <div class="col-md-12">
                                        <?=$form->field($a2,'batas')->dropDownList([
                                            'Tidak Ada'=> 'Tidak Ada',
                                            'Ada'=> 'Ada'
                                        ])->label('Batas Kelurahan')?>
                                        <?=$form->field($a2,'penetapan_batas')->dropDownList([
                                            'Tidak Ada'=>'Tidak Ada',
                                            'Ada'=>'Ada'
                                        ])->label('Penetapan Batas dengan Ordinat')?>
                                        <div class="clearfix"></div>
                                        <?=$form->field($a2,'umur_kurang_15')->textInput()->label('Penduduk Kurang dari 15 Tahun')?>
                                        <?=$form->field($a2,'umur_lebih_15_kurang_56')->textInput()->label('Penduduk Lebih dari 15 tahun sampai dengan 56 tahun')?>
                                        <?=$form->field($a2,'umur_lebih_56')->textInput()->label('Penduduk Lebih dari 56 Tahun')?>
                                        <?=$form->field($a2,'jumlah_penduduk_total')->textInput()->label('Jumlah penduduk Total')?>
                                        <?=$form->field($a2,'jumlah_penduduk_laki')->textInput()->label('Jumlah penduduk laki-laki')?>
                                        <?=$form->field($a2,'jumlah_penduduk_pr')->textInput()->label('Jumlah Penduduk Perempuan')?>
                                        <?=$form->field($a2,'jumlah_kk')->textInput()->label('Jumlah Kepala Keluarga')?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <div class="row">
                        <div class="card-header">
                            <div class="card-title">
                                <h4 class="info-text">Form A3 </h4>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="row">
                                <div class="col-sm-12">

                                    <table class="table table-bordered table-responsive">

                                        <thead>
                                        <tr>
                                            <td>No.</td>
                                            <td><p>Pertanyaan</p></td>
                                            <td><p>Jawaban</p></td>
                                        </tr>

                                        </thead>


                                        <tbody>
                                        <?php  $i = 1;
                                        foreach ($pertanyaanA3 as $itemPertanyaan):
                                            ?>
                                            <tr>
                                                <td><?= $i?></td>
                                                <td><?= $itemPertanyaan['pertanyaan']?></td>
                                                <td><?php foreach ($itemPertanyaan['jawaban'] as $jawaban){
                                                        echo $form->field($a3,"_".$i++)->widget(
                                                            \kartik\select2\Select2::className(),[
                                                                'data' => $jawaban,
                                                                'options' => ['placeholder'=>' Pilih Jawaban']
                                                            ]
                                                        )->label("");
                                                    }?></td>
                                            </tr>



                                        <?php endforeach; ?>

                                        </tbody>


                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="card-header">
                            <div class="card-title">
                                <h4 class="info-text">Form A4 </h4>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="row">
                                <div class="col-sm-12">

                                    <table class="table table-bordered table-responsive">

                                        <thead>
                                        <tr>
                                            <td>No.</td>
                                            <td><p>Pertanyaan</p></td>
                                            <td><p>Jawaban</p></td>
                                        </tr>

                                        </thead>


                                        <tbody>
                                        <?php
                                        $i = 1;
                                        foreach ($pertanyaanA4 as $itemPertanyaan):
                                            ?>
                                            <tr>
                                                <td><?= $i?></td>
                                                <td><?= $itemPertanyaan['pertanyaan']?></td>
                                                <td><?php foreach ($itemPertanyaan['jawaban'] as $jawaban){
                                                        echo $form->field($a4,"_".$i++)->widget(
                                                            \kartik\select2\Select2::className(),[
                                                                'data' => $jawaban,
                                                                'options' => ['placeholder'=>' Pilih Jawaban']
                                                            ]
                                                        )->label("");
                                                    }?></td>
                                            </tr>



                                        <?php endforeach; ?>

                                        </tbody>


                                    </table>
                                </div>

                            </div>
                        </div></div>
                    <div class="row">
                        <div class="card-header">
                            <div class="card-title">
                                <h4 class="info-text">Form A5 </h4>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="row">
                                <div class="col-sm-12">

                                    <table class="table table-bordered table-responsive">

                                        <thead>
                                        <tr>
                                            <td>No.</td>
                                            <td><p>Pertanyaan</p></td>
                                            <td><p>Jawaban</p></td>
                                        </tr>

                                        </thead>


                                        <tbody>
                                        <?php
                                        $i = 1;
                                        foreach ($pertanyaanA5 as $itemPertanyaan):
                                            ?>
                                            <tr>
                                                <td><?= $i?></td>
                                                <td><?= $itemPertanyaan['pertanyaan']?></td>
                                                <td><?php foreach ($itemPertanyaan['jawaban'] as $jawaban){
                                                        echo $form->field($a5,"_".$i++)->widget(
                                                            \kartik\select2\Select2::className(),[
                                                                'data' => $jawaban,
                                                                'options' => ['placeholder'=>' Pilih Jawaban']
                                                            ]
                                                        )->label("");
                                                    }?></td>
                                            </tr>



                                        <?php endforeach; ?>

                                        </tbody>


                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card-header">
                            <div class="card-title">
                                <h4 class="info-text">Form B1 </h4>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="row">
                                <div class="col-sm-12">

                                    <table class="table table-bordered table-responsive">

                                        <thead>
                                        <tr>
                                            <td>No.</td>
                                            <td><p>Pertanyaan</p></td>
                                            <td><p>Jawaban</p></td>
                                        </tr>

                                        </thead>


                                        <tbody>
                                        <?php
                                        $i = 1;
                                        foreach ($pertanyaanB1 as $itemPertanyaan):
                                            ?>
                                            <tr>
                                                <td><?= $i?></td>
                                                <td><?= $itemPertanyaan['pertanyaan']?></td>
                                                <td><?php foreach ($itemPertanyaan['jawaban'] as $jawaban){
                                                        echo $form->field($b1,"_".$i++)->widget(
                                                            \kartik\select2\Select2::className(),[
                                                                'data' => $jawaban,
                                                                'options' => ['placeholder'=>' Pilih Jawaban']
                                                            ]
                                                        )->label("");
                                                    }?></td>
                                            </tr>



                                        <?php endforeach; ?>

                                        </tbody>


                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card-header">
                            <div class="card-title">
                                <h4 class="info-text">Form B2 </h4>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="row">
                                <div class="col-sm-12">

                                    <table class="table table-bordered table-responsive">

                                        <thead>
                                        <tr>
                                            <td>No.</td>
                                            <td><p>Pertanyaan</p></td>
                                            <td><p>Jawaban</p></td>
                                        </tr>

                                        </thead>


                                        <tbody>
                                        <?php
                                        $i = 1;
                                        foreach ($pertanyaanB2 as $itemPertanyaan):
                                            ?>
                                            <tr>
                                                <td><?= $i?></td>
                                                <td><?= $itemPertanyaan['pertanyaan']?></td>
                                                <td><?php foreach ($itemPertanyaan['jawaban'] as $jawaban){
                                                        echo $form->field($b2,"_".$i++)->widget(
                                                            \kartik\select2\Select2::className(),[
                                                                'data' => $jawaban,
                                                                'options' => ['placeholder'=>' Pilih Jawaban']
                                                            ]
                                                        )->label("");
                                                    }?></td>
                                            </tr>



                                        <?php endforeach; ?>

                                        </tbody>


                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card-header">
                            <div class="card-title">
                                <h4 class="info-text">Form B3 </h4>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="row">
                                <div class="col-sm-12">

                                    <table class="table table-bordered table-responsive">

                                        <thead>
                                        <tr>
                                            <td>No.</td>
                                            <td><p>Pertanyaan</p></td>
                                            <td><p>Jawaban</p></td>
                                        </tr>

                                        </thead>


                                        <tbody>
                                        <?php
                                        $i = 1;
                                        foreach ($pertanyaanB3 as $itemPertanyaan):
                                            ?>
                                            <tr>
                                                <td><?= $i?></td>
                                                <td><?= $itemPertanyaan['pertanyaan']?></td>
                                                <td><?php foreach ($itemPertanyaan['jawaban'] as $jawaban){
                                                        echo $form->field($b3,"_".$i++)->widget(
                                                            \kartik\select2\Select2::className(),[
                                                                'data' => $jawaban,
                                                                'options' => ['placeholder'=>' Pilih Jawaban']
                                                            ]
                                                        )->label("");
                                                    }?></td>
                                            </tr>



                                        <?php endforeach; ?>

                                        </tbody>


                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card-header">
                            <div class="card-title">
                                <h4 class="info-text">Form B4 </h4>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="row">
                                <div class="col-sm-12">

                                    <table class="table table-bordered table-responsive">

                                        <thead>
                                        <tr>
                                            <td>No.</td>
                                            <td><p>Pertanyaan</p></td>
                                            <td><p>Jawaban</p></td>
                                        </tr>

                                        </thead>


                                        <tbody>
                                        <?php
                                        $i = 1;
                                        foreach ($pertanyaanB4 as $itemPertanyaan):
                                            ?>
                                            <tr>
                                                <td><?= $i?></td>
                                                <td><?= $itemPertanyaan['pertanyaan']?></td>
                                                <td><?php foreach ($itemPertanyaan['jawaban'] as $jawaban){
                                                        echo $form->field($b4,"_".$i++)->widget(
                                                            \kartik\select2\Select2::className(),[
                                                                'data' => $jawaban,
                                                                'options' => ['placeholder'=>' Pilih Jawaban']
                                                            ]
                                                        )->label("");
                                                    }?></td>
                                            </tr>



                                        <?php endforeach; ?>

                                        </tbody>


                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card-header">
                            <div class="card-title">
                                <h4 class="info-text">Form B5 </h4>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="row">
                                <div class="col-sm-12">

                                    <table class="table table-bordered table-responsive">

                                        <thead>
                                        <tr>
                                            <td>No.</td>
                                            <td><p>Pertanyaan</p></td>
                                            <td><p>Jawaban</p></td>
                                        </tr>

                                        </thead>


                                        <tbody>
                                        <?php
                                        $i = 1;
                                        foreach ($pertanyaanB5 as $itemPertanyaan):
                                            ?>
                                            <tr>
                                                <td><?= $i?></td>
                                                <td><?= $itemPertanyaan['pertanyaan']?></td>
                                                <td><?php foreach ($itemPertanyaan['jawaban'] as $jawaban){
                                                        echo $form->field($b5,"_".$i++)->widget(
                                                            \kartik\select2\Select2::className(),[
                                                                'data' => $jawaban,
                                                                'options' => ['placeholder'=>' Pilih Jawaban']
                                                            ]
                                                        )->label("");
                                                    }?></td>
                                            </tr>



                                        <?php endforeach; ?>

                                        </tbody>


                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card-header">
                            <div class="card-title">
                                <h4 class="info-text">Form C1 </h4>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="row">
                                <div class="col-sm-12">

                                    <table class="table table-bordered table-responsive">

                                        <thead>
                                        <tr>
                                            <td>No.</td>
                                            <td><p>Pertanyaan</p></td>
                                            <td><p>Jawaban</p></td>
                                        </tr>

                                        </thead>


                                        <tbody>
                                        <?php
                                        $i = 1;
                                        foreach ($pertanyaanC1 as $itemPertanyaan):
                                            ?>
                                            <tr>
                                                <td><?= $i?></td>
                                                <td><?= $itemPertanyaan['pertanyaan']?></td>
                                                <td><?php foreach ($itemPertanyaan['jawaban'] as $jawaban){
                                                        echo $form->field($c1,"_".$i++)->widget(
                                                            \kartik\select2\Select2::className(),[
                                                                'data' => $jawaban,
                                                                'options' => ['placeholder'=>' Pilih Jawaban']
                                                            ]
                                                        )->label("");
                                                    }?></td>
                                            </tr>



                                        <?php endforeach; ?>

                                        </tbody>


                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row"> <div class="card-header">
                            <div class="card-title">
                                <h4 class="info-text">Form C2 </h4>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="row">
                                <div class="col-sm-12">

                                    <table class="table table-bordered table-responsive">

                                        <thead>
                                        <tr>
                                            <td>No.</td>
                                            <td><p>Pertanyaan</p></td>
                                            <td><p>Jawaban</p></td>
                                        </tr>

                                        </thead>


                                        <tbody>
                                        <?php
                                        $i = 1;
                                        foreach ($pertanyaanC2 as $itemPertanyaan):
                                            ?>
                                            <tr>
                                                <td><?= $i?></td>
                                                <td><?= $itemPertanyaan['pertanyaan']?></td>
                                                <td><?php foreach ($itemPertanyaan['jawaban'] as $jawaban){
                                                        echo $form->field($c2,"_".$i++)->widget(
                                                            \kartik\select2\Select2::className(),[
                                                                'data' => $jawaban,
                                                                'options' => ['placeholder'=>' Pilih Jawaban']
                                                            ]
                                                        )->label("");
                                                    }?></td>
                                            </tr>



                                        <?php endforeach; ?>

                                        </tbody>


                                    </table>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="card-header">
                            <div class="card-title">
                                <h4 class="info-text">Form C3 </h4>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="row">
                                <div class="col-sm-12">

                                    <table class="table table-bordered table-responsive">

                                        <thead>
                                        <tr>
                                            <td>No.</td>
                                            <td><p>Pertanyaan</p></td>
                                            <td><p>Jawaban</p></td>
                                        </tr>

                                        </thead>


                                        <tbody>
                                        <?php
                                        $i = 1;
                                        foreach ($pertanyaanC3 as $itemPertanyaan):
                                            ?>
                                            <tr>
                                                <td><?= $i?></td>
                                                <td><?= $itemPertanyaan['pertanyaan']?></td>
                                                <td><?php foreach ($itemPertanyaan['jawaban'] as $jawaban){
                                                        echo $form->field($c3,"_".$i++)->widget(
                                                            \kartik\select2\Select2::className(),[
                                                                'data' => $jawaban,
                                                                'options' => ['placeholder'=>' Pilih Jawaban']
                                                            ]
                                                        )->label("");
                                                    }?></td>
                                            </tr>



                                        <?php endforeach; ?>

                                        </tbody>


                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card-header">
                            <div class="card-title">
                                <h4 class="info-text">Form C4 </h4>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="row">
                                <div class="col-sm-12">

                                    <table class="table table-bordered table-responsive">

                                        <thead>
                                        <tr>
                                            <td>No.</td>
                                            <td><p>Pertanyaan</p></td>
                                            <td><p>Jawaban</p></td>
                                        </tr>

                                        </thead>


                                        <tbody>
                                        <?php
                                        $i = 1;
                                        foreach ($pertanyaanC4 as $itemPertanyaan):
                                            ?>
                                            <tr>
                                                <td><?= $i?></td>
                                                <td><?= $itemPertanyaan['pertanyaan']?></td>
                                                <td><?php foreach ($itemPertanyaan['jawaban'] as $jawaban){
                                                        echo $form->field($c4,"_".$i++)->widget(
                                                            \kartik\select2\Select2::className(),[
                                                                'data' => $jawaban,
                                                                'options' => ['placeholder'=>' Pilih Jawaban']
                                                            ]
                                                        )->label("");
                                                    }?></td>
                                            </tr>



                                        <?php endforeach; ?>

                                        </tbody>


                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card-header">
                            <div class="card-title">
                                <h4 class="info-text">Form C5 </h4>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="row">
                                <div class="col-sm-12">

                                    <table class="table table-bordered table-responsive">

                                        <thead>
                                        <tr>
                                            <td>No.</td>
                                            <td><p>Pertanyaan</p></td>
                                            <td><p>Jawaban</p></td>
                                        </tr>

                                        </thead>


                                        <tbody>
                                        <?php
                                        $i = 1;
                                        foreach ($pertanyaanC5 as $itemPertanyaan):
                                            ?>
                                            <tr>
                                                <td><?= $i?></td>
                                                <td><?= $itemPertanyaan['pertanyaan']?></td>
                                                <td><?php foreach ($itemPertanyaan['jawaban'] as $jawaban){
                                                        echo $form->field($c5,"_".$i++)->widget(
                                                            \kartik\select2\Select2::className(),[
                                                                'data' => $jawaban,
                                                                'options' => ['placeholder'=>' Pilih Jawaban']
                                                            ]
                                                        )->label("");
                                                    }?></td>
                                            </tr>



                                        <?php endforeach; ?>

                                        </tbody>


                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card-header">
                            <div class="card-title">
                                <h4 class="info-text">Form C6 </h4>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="row">
                                <div class="col-sm-12">

                                    <table class="table table-bordered table-responsive">

                                        <thead>
                                        <tr>
                                            <td>No.</td>
                                            <td><p>Pertanyaan</p></td>
                                            <td><p>Jawaban</p></td>
                                        </tr>

                                        </thead>


                                        <tbody>
                                        <?php
                                        $i = 1;
                                        foreach ($pertanyaanC6 as $itemPertanyaan):
                                            ?>
                                            <tr>
                                                <td><?= $i?></td>
                                                <td><?= $itemPertanyaan['pertanyaan']?></td>
                                                <td><?php foreach ($itemPertanyaan['jawaban'] as $jawaban){
                                                        echo $form->field($c6,"_".$i++)->widget(
                                                            \kartik\select2\Select2::className(),[
                                                                'data' => $jawaban,
                                                                'options' => ['placeholder'=>' Pilih Jawaban']
                                                            ]
                                                        )->label("");
                                                    }?></td>
                                            </tr>



                                        <?php endforeach; ?>

                                        </tbody>


                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card-header">
                            <div class="card-title">
                                <h4 class="info-text">Form C7 </h4>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="row">
                                <div class="col-sm-12">

                                    <table class="table table-bordered table-responsive">

                                        <thead>
                                        <tr>
                                            <td>No.</td>
                                            <td><p>Pertanyaan</p></td>
                                            <td><p>Jawaban</p></td>
                                        </tr>

                                        </thead>


                                        <tbody>
                                        <?php
                                        $i = 1;
                                        foreach ($pertanyaanC7 as $itemPertanyaan):
                                            ?>
                                            <tr>
                                                <td><?= $i?></td>
                                                <td><?= $itemPertanyaan['pertanyaan']?></td>
                                                <td><?php foreach ($itemPertanyaan['jawaban'] as $jawaban){
                                                        echo $form->field($c7,"_".$i++)->widget(
                                                            \kartik\select2\Select2::className(),[
                                                                'data' => $jawaban,
                                                                'options' => ['placeholder'=>' Pilih Jawaban']
                                                            ]
                                                        )->label("");
                                                    }?></td>
                                            </tr>



                                        <?php endforeach; ?>

                                        </tbody>


                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card-header">
                            <div class="card-title">
                                <h4 class="info-text">Form C8 </h4>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="row">
                                <div class="col-sm-12">

                                    <table class="table table-bordered table-responsive">

                                        <thead>
                                        <tr>
                                            <td>No.</td>
                                            <td><p>Pertanyaan</p></td>
                                            <td><p>Jawaban</p></td>
                                        </tr>

                                        </thead>


                                        <tbody>
                                        <?php
                                        $i = 1;
                                        foreach ($pertanyaanC8 as $itemPertanyaan):
                                            ?>
                                            <tr>
                                                <td><?= $i?></td>
                                                <td><?= $itemPertanyaan['pertanyaan']?></td>
                                                <td><?php foreach ($itemPertanyaan['jawaban'] as $jawaban){
                                                        echo $form->field($c8,"_".$i++)->widget(
                                                            \kartik\select2\Select2::className(),[
                                                                'data' => $jawaban,
                                                                'options' => ['placeholder'=>' Pilih Jawaban']
                                                            ]
                                                        )->label("");
                                                    }?></td>
                                            </tr>



                                        <?php endforeach; ?>

                                        </tbody>


                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card-header">
                            <div class="card-title">
                                <h4 class="info-text">Form C9 </h4>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-bordered table-responsive">

                                        <thead>
                                        <tr>
                                            <td>No.</td>
                                            <td><p>Pertanyaan</p></td>
                                            <td><p>Jawaban</p></td>
                                        </tr>

                                        </thead>


                                        <tbody>
                                        <?php
                                        $i = 1;
                                        foreach ($pertanyaanC9 as $itemPertanyaan):
                                            ?>
                                            <tr>
                                                <td><?= $i?></td>
                                                <td><?= $itemPertanyaan['pertanyaan']?></td>
                                                <td><?php foreach ($itemPertanyaan['jawaban'] as $jawaban){
                                                        echo $form->field($c9,"_".$i++)->widget(
                                                            \kartik\select2\Select2::className(),[
                                                                'data' => $jawaban,
                                                                'options' => ['placeholder'=>' Pilih Jawaban']
                                                            ]
                                                        )->label("");
                                                    }?></td>
                                            </tr>



                                        <?php endforeach; ?>

                                        </tbody>


                                    </table>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-12">
                            <?= Html::a('Kembali',['penilaian/kelurahan'],['class'=>'btn btn-default btn-fill  pull-left'])?>
                            <?= Html::submitButton('Simpan',['class'=> 'btn btn-finish btn-fill btn-rose btn-wd  pull-right']) ?>
                        </div>
                    </div>

                </div>
            </div>







            <div class="clearfix"></div>

            <?php ActiveForm::end()?>
        </div>


        <!--      Wizard container        -->

        <!-- wizard container -->


    </div>
</div>

