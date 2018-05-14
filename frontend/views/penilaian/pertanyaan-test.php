<?php
/**
 * Created by PhpStorm.
 * User: adryanev
 * Date: 12/05/18
 * Time: 19:58
 */


$this->title = $title;

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
    <div class="col-md-12">
        <div class="wizard-container">
            <div class="card wizard-card" data-color="rose" id="wizardProfile">
                <form action="" method="">
                    <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
                    <div class="wizard-header">
                        <h3 class="wizard-title">
                            Penilaian Desa: {{nama_desa}}
                        </h3>
                        <h5>Silahkan isi penilaian desa ini.</h5>
                    </div>
                    <div class="wizard-navigation">
                        <ul>
                            <li>
                                <a href="#a1" data-toggle="tab">A1</a>
                            </li>
                            <li>
                                <a href="#a2" data-toggle="tab">A2</a>
                            </li>
                            <li>
                                <a href="#a3" data-toggle="tab">A3</a>
                            </li>
                            <li>
                                <a href="#a4" data-toggle="tab">A4</a>
                            </li>
                            <li>
                                <a href="#a5" data-toggle="tab">A5</a>
                            </li>
                            <li>
                                <a href="#b1" data-toggle="tab">B1</a>
                            </li>
                            <li>
                                <a href="#b2" data-toggle="tab">B2</a>
                            </li>
                            <li>
                                <a href="#b3" data-toggle="tab">B3</a>
                            </li>
                            <li>
                                <a href="#b4" data-toggle="tab">B4</a>
                            </li>
                            <li>
                                <a href="#b5" data-toggle="tab">B5</a>
                            </li>
                            <li>
                                <a href="#c1" data-toggle="tab">C1</a>
                            </li>
                            <li>
                                <a href="#c2" data-toggle="tab">C2</a>
                            </li>
                            <li>
                                <a href="#c3" data-toggle="tab">C3</a>
                            </li>
                            <li>
                                <a href="#c4" data-toggle="tab">C4</a>
                            </li>
                            <li>
                                <a href="#c5" data-toggle="tab">C5</a>
                            </li>
                            <li>
                                <a href="#c6" data-toggle="tab">C6</a>
                            </li>
                            <li>
                                <a href="#c7" data-toggle="tab">C7</a>
                            </li>
                            <li>
                                <a href="#c8" data-toggle="tab">C8</a>
                            </li>
                            <li>
                                <a href="#c9" data-toggle="tab">C9</a>
                            </li>





                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane" id="a1">
                            <div class="row">
                                <h4 class="info-text">Silahkan isi Form A1 Berikut</h4>
                                <div class="col-md-12">
                                    Pertanyaan A1
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="a2">
                            <h4 class="info-text"> What are you doing? (checkboxes) </h4>
                            <div class="row">
                                <div class="col-md-12">
                                    Pertanyaan A2
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="a3">
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
                                                        echo \kartik\select2\Select2::widget([
                                                            'name' => "_".$i++,
                                                            'data' => $jawaban,
                                                            'options' => ['placeholder'=>' Pilih Jawaban']
                                                        ]);
                                                    }?></td>
                                            </tr>



                                        <?php endforeach; ?>

                                        </tbody>


                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="a4">
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
                                                        echo \kartik\select2\Select2::widget([
                                                            'name' => "_".$i++,
                                                            'data' => $jawaban,
                                                            'options' => ['placeholder'=>' Pilih Jawaban']
                                                        ]);
                                                    }?></td>
                                            </tr>



                                        <?php endforeach; ?>

                                        </tbody>


                                    </table>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane" id="a5">
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
                                                        echo \kartik\select2\Select2::widget([
                                                            'name' => "_".$i++,
                                                            'data' => $jawaban,
                                                            'options' => ['placeholder'=>' Pilih Jawaban']
                                                        ]);
                                                    }?></td>
                                            </tr>



                                        <?php endforeach; ?>

                                        </tbody>


                                    </table>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane" id="b1">
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
                                                        echo \kartik\select2\Select2::widget([
                                                            'name' => "_".$i++,
                                                            'data' => $jawaban,
                                                            'options' => ['placeholder'=>' Pilih Jawaban']
                                                        ]);
                                                    }?></td>
                                            </tr>



                                        <?php endforeach; ?>

                                        </tbody>


                                    </table>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane" id="b2">
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
                                                        echo \kartik\select2\Select2::widget([
                                                            'name' => "_".$i++,
                                                            'data' => $jawaban,
                                                            'options' => ['placeholder'=>' Pilih Jawaban']
                                                        ]);
                                                    }?></td>
                                            </tr>



                                        <?php endforeach; ?>

                                        </tbody>


                                    </table>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane" id="b3">
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
                                                        echo \kartik\select2\Select2::widget([
                                                            'name' => "_".$i++,
                                                            'data' => $jawaban,
                                                            'options' => ['placeholder'=>' Pilih Jawaban']
                                                        ]);
                                                    }?></td>
                                            </tr>



                                        <?php endforeach; ?>

                                        </tbody>


                                    </table>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane" id="b4">
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
                                                        echo \kartik\select2\Select2::widget([
                                                            'name' => "_".$i++,
                                                            'data' => $jawaban,
                                                            'options' => ['placeholder'=>' Pilih Jawaban']
                                                        ]);
                                                    }?></td>
                                            </tr>



                                        <?php endforeach; ?>

                                        </tbody>


                                    </table>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane" id="b5">
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
                                                        echo \kartik\select2\Select2::widget([
                                                            'name' => "_".$i++,
                                                            'data' => $jawaban,
                                                            'options' => ['placeholder'=>' Pilih Jawaban']
                                                        ]);
                                                    }?></td>
                                            </tr>



                                        <?php endforeach; ?>

                                        </tbody>


                                    </table>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane" id="c1">
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
                                                        echo \kartik\select2\Select2::widget([
                                                            'name' => "_".$i++,
                                                            'data' => $jawaban,
                                                            'options' => ['placeholder'=>' Pilih Jawaban']
                                                        ]);
                                                    }?></td>
                                            </tr>



                                        <?php endforeach; ?>

                                        </tbody>


                                    </table>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane" id="c2">
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
                                                        echo \kartik\select2\Select2::widget([
                                                            'name' => "_".$i++,
                                                            'data' => $jawaban,
                                                            'options' => ['placeholder'=>' Pilih Jawaban']
                                                        ]);
                                                    }?></td>
                                            </tr>



                                        <?php endforeach; ?>

                                        </tbody>


                                    </table>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane" id="c3">
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
                                                        echo \kartik\select2\Select2::widget([
                                                            'name' => "_".$i++,
                                                            'data' => $jawaban,
                                                            'options' => ['placeholder'=>' Pilih Jawaban']
                                                        ]);
                                                    }?></td>
                                            </tr>



                                        <?php endforeach; ?>

                                        </tbody>


                                    </table>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane" id="c4">
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
                                                        echo \kartik\select2\Select2::widget([
                                                            'name' => "_".$i++,
                                                            'data' => $jawaban,
                                                            'options' => ['placeholder'=>' Pilih Jawaban']
                                                        ]);
                                                    }?></td>
                                            </tr>



                                        <?php endforeach; ?>

                                        </tbody>


                                    </table>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane" id="c5">
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
                                                        echo \kartik\select2\Select2::widget([
                                                            'name' => "_".$i++,
                                                            'data' => $jawaban,
                                                            'options' => ['placeholder'=>' Pilih Jawaban']
                                                        ]);
                                                    }?></td>
                                            </tr>



                                        <?php endforeach; ?>

                                        </tbody>


                                    </table>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane" id="c6">
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
                                                        echo \kartik\select2\Select2::widget([
                                                            'name' => "_".$i++,
                                                            'data' => $jawaban,
                                                            'options' => ['placeholder'=>' Pilih Jawaban']
                                                        ]);
                                                    }?></td>
                                            </tr>



                                        <?php endforeach; ?>

                                        </tbody>


                                    </table>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane" id="c7">
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
                                                        echo \kartik\select2\Select2::widget([
                                                            'name' => "_".$i++,
                                                            'data' => $jawaban,
                                                            'options' => ['placeholder'=>' Pilih Jawaban']
                                                        ]);
                                                    }?></td>
                                            </tr>



                                        <?php endforeach; ?>

                                        </tbody>


                                    </table>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane" id="c8">
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
                                                        echo \kartik\select2\Select2::widget([
                                                            'name' => "_".$i++,
                                                            'data' => $jawaban,
                                                            'options' => ['placeholder'=>' Pilih Jawaban']
                                                        ]);
                                                    }?></td>
                                            </tr>



                                        <?php endforeach; ?>

                                        </tbody>


                                    </table>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane" id="c9">
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
                                                        echo \kartik\select2\Select2::widget([
                                                            'name' => "_".$i++,
                                                            'data' => $jawaban,
                                                            'options' => ['placeholder'=>' Pilih Jawaban']
                                                        ]);
                                                    }?></td>
                                            </tr>



                                        <?php endforeach; ?>

                                        </tbody>


                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="wizard-footer">
                        <div class="pull-right">
                            <input type='button' class='btn btn-next btn-fill btn-rose btn-wd' name='next' value='Selanjutnya' />
                            <input type='button' class='btn btn-finish btn-fill btn-rose btn-wd' name='finish' value='Selesai' />
                        </div>
                        <div class="pull-left">
                            <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Sebelumnya' />
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!--      Wizard container        -->

<!-- wizard container -->

<?php

$js = <<<JS
  $(document).ready(function() {
        initMaterialWizard();
        setTimeout(function() {
            $('.card.wizard-card').addClass('active');
        }, 600);
    });
 initMaterialWizard = function() {
        // Code for the Validator
    

        // Wizard Initialization
        $('.wizard-card').bootstrapWizard({
            'tabClass': 'nav nav-pills',
            'nextSelector': '.btn-next',
            'previousSelector': '.btn-previous',

            onNext: function(tab, navigation, index) {
                var valid = $('.wizard-card form').valid();
                if (!valid) {
                    validator.focusInvalid();
                    return false;
                }
            },

            onInit: function(tab, navigation, index) {
                //check number of tabs and fill the entire row
                var total = navigation.find('li').length;
                var wizard = navigation.closest('.wizard-card');

                first_li = navigation.find('li:first-child a').html();
                moving_div = $('<div class="moving-tab">' + first_li + '</div>');
                $('.wizard-card .wizard-navigation').append(moving_div);

                refreshAnimation(wizard, index);

                $('.moving-tab').css('transition', 'transform 0s');
            },

            onTabClick: function(tab, navigation, index) {
                var valid = $('.wizard-card form').valid();

                if (!valid) {
                    return false;
                } else {
                    return true;
                }
            },

            onTabShow: function(tab, navigation, index) {
                var total = navigation.find('li').length;
                var current = index + 1;

                var wizard = navigation.closest('.wizard-card');

                // If it's the last tab then hide the last button and show the finish instead
                if (current >= total) {
                    $(wizard).find('.btn-next').hide();
                    $(wizard).find('.btn-finish').show();
                } else {
                    $(wizard).find('.btn-next').show();
                    $(wizard).find('.btn-finish').hide();
                }

                button_text = navigation.find('li:nth-child(' + current + ') a').html();

                setTimeout(function() {
                    $('.moving-tab').text(button_text);
                }, 150);

                var checkbox = $('.footer-checkbox');

                if (!index == 0) {
                    $(checkbox).css({
                        'opacity': '0',
                        'visibility': 'hidden',
                        'position': 'absolute'
                    });
                } else {
                    $(checkbox).css({
                        'opacity': '1',
                        'visibility': 'visible'
                    });
                }

                refreshAnimation(wizard, index);
            }
        });

        

        $(window).resize(function() {
            $('.wizard-card').each(function() {
                wizard = $(this);

                index = wizard.bootstrapWizard('currentIndex');
                refreshAnimation(wizard, index);

                $('.moving-tab').css({
                    'transition': 'transform 0s'
                });
            });
        });

        function refreshAnimation(wizard, index) {
            total = wizard.find('.nav li').length;
            li_width = 100 / total;

            total_steps = wizard.find('.nav li').length;
            move_distance = wizard.width() / total_steps;
            index_temp = index;
            vertical_level = 0;

            mobile_device = $(document).width() < 600 && total > 3;

            if (mobile_device) {
                move_distance = wizard.width() / 2;
                index_temp = index % 2;
                li_width = 50;
            }

            wizard.find('.nav li').css('width', li_width + '%');

            step_width = move_distance;
            move_distance = move_distance * index_temp;

            current = index + 1;

            if (current == 1 || (mobile_device == true && (index % 2 == 0))) {
                move_distance -= 8;
            } else if (current == total_steps || (mobile_device == true && (index % 2 == 1))) {
                move_distance += 8;
            }

            if (mobile_device) {
                vertical_level = parseInt(index / 2);
                vertical_level = vertical_level * 38;
            }

            wizard.find('.moving-tab').css('width', step_width);
            $('.moving-tab').css({
                'transform': 'translate3d(' + move_distance + 'px, ' + vertical_level + 'px, 0)',
                'transition': 'all 0.5s cubic-bezier(0.29, 1.42, 0.79, 1)'

            });
            $('html, body').animate({ scrollTop: 0 }, 'fast');
        }
    }


JS;

$this->registerJs($js);
