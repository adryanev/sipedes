<?php
/**
 * Created by PhpStorm.
 * User: adryanev
 * Date: 12/05/18
 * Time: 19:58
 */



$pertanyaanA3 = $pertanyaan[1]['B'][0]['B1'];

$i = 1;
?>
<div class="card">
    <div class="card-header">Pertanyaan A3</div>

    <div class="card-content">
        <table class="table table-bordered table-responsive">

            <thead>
            <tr>
                <td>No.</td>
                <td><p>Pertanyaan</p></td>
                <td><p>Jawaban</p></td>
            </tr>

            </thead>


            <tbody>
            <?php foreach ($pertanyaanA3 as $itemPertanyaan):
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
