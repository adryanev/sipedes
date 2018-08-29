<?php
/**
 * Created by PhpStorm.
 * User: adryanev
 * Date: 7/1/2018
 * Time: 1:01 PM
 */

/**
 * @var $kab common\models\Kabupaten
 *
 */

$tahunLaporan = Yii::$app->request->get('tahun');
$jenis = Yii::$app->request->get('jenis');

?>

<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h4 class="header-title m-t-0 m-b-30">Laporan Penilaian <?= $jenis === 'desa'?  'Desa':  'Kelurahan'?> di  <?= $kab->nama_kabupaten?></h4>

            <table class="table table-bordered table-hover table-responsive table-box">
                <thead>
                <tr style="background-color: lightblue">
                    <th rowspan="2">NO</th>
                    <th rowspan="2">Kecamatan</th>
                    <th rowspan="2"><?= $jenis === 'desa'?  'Desa':  'Kelurahan'?></th>
                    <th colspan="3" class="text-center">Tahun <?= $tahunLaporan ?></th>
                </tr>
                <tr style="background-color: lightblue">
                    <th >Status Tingkat Perkembangan</th>
                    <th >Skor Nilai Hasil Evaluasi Diri</th>
                </tr>
                <tr style="background-color: lightblue">
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                </tr>
                </thead>
                <tbody>

                <?php
                if($jenis === 'desa'):
                ?>

                <?php
                $no = 1;
                    foreach ($struktur as $kecamatan):
                ?>
               <tr>
                   <td rowspan="<?= count($kecamatan->desas)?>"><?=$no++?></td>
                   <td rowspan="<?= count($kecamatan->desas) ?>"><?=$kecamatan->nama_kecamatan?></td>
                   <td><?= $kecamatan->desas[0]->nama_desa?></td>
                   <td><?= \common\models\PenilaianDesa::find()->where(['id_desa'=>$struktur[0]->desas[0]->id_desa, 'tahun_penilaian'=>$tahunLaporan])->one() === null ? "Belum Dinilai" : \common\models\PenilaianDesa::find()->where(['id_desa'=>$struktur[0]->desas[0]->id_desa, 'tahun_penilaian'=>$tahunLaporan])->one()->getPerkembangan()  ?></td>
                   <td> <?=  \common\models\PenilaianDesa::find()->where(['id_desa'=>$kecamatan->desas[0]->id_desa, 'tahun_penilaian'=>$tahunLaporan]) ->one() === null? "-" : \common\models\PenilaianDesa::find()->where(['id_desa'=>$kecamatan->desas[0]->id_desa, 'tahun_penilaian'=>$tahunLaporan])->one()->totalNilai()?></td>
               </tr>
                    <?php
                        for ($i = 1; $i < count($kecamatan->desas); $i++){
                            echo "<tr>";
                            echo "<td>";
                            echo  $kecamatan->desas[$i]->nama_desa;
                            echo "</td>";

                            echo "<td>";
                            if(\common\models\PenilaianDesa::find()->where(['id_desa'=>$kecamatan->desas[$i]->id_desa, 'tahun_penilaian'=>$tahunLaporan])->one() === null){
                                echo "Belum Dinilai";
                            }else{
                              echo  \common\models\PenilaianDesa::find()->where(['id_desa'=>$kecamatan->desas[$i]->id_desa, 'tahun_penilaian'=>$tahunLaporan])->one()->getPerkembangan();                            }
                           echo "</td>";

                           echo "<td>";
                            if(\common\models\PenilaianDesa::find()->where(['id_desa'=>$kecamatan->desas[$i]->id_desa, 'tahun_penilaian'=>$tahunLaporan])->one() === null){
                                echo "-";
                            }else{
                                echo  \common\models\PenilaianDesa::find()->where(['id_desa'=>$kecamatan->desas[$i]->id_desa, 'tahun_penilaian'=>$tahunLaporan])->one()->totalNilai();                            }
                           echo "</td>";
                            echo "</tr>";
                        }

                        ?>
                <?php
                endforeach;
                ?>

                <?php elseif ($jenis === 'kelurahan'):?>
                    <?php
                    $no = 1;
                    foreach ($struktur as $kecamatan):
                        ?>
                        <tr>
                            <td rowspan="<?= count($kecamatan->kelurahans)>0 ? count($kecamatan->kelurahans) : 1 ?>"><?=$no++?></td>
                            <td rowspan="<?= count($kecamatan->kelurahans)>0 ? count($kecamatan->kelurahans) : 1 ?>"><?=$kecamatan->nama_kecamatan?></td>
                            <?php
                            if(count($kecamatan->kelurahans) === 0){
                             echo "
                               <td> Tidak ada data</td>
                               <td> Tidak ada data</td>
                               <td> Tidak ada data</td>
                               
                      
                             "
                             ;

                            }else{
                                ?>
                                <td><?= $kecamatan->kelurahans[0]->nama_kelurahan?></td>
                               <?php try{

                                    if( \common\models\PenilaianKelurahan::find()->where(['id_kelurahan'=>$kecamatan->kelurahans[0]->id_kelurahan, 'tahun_penilaian'=>$tahunLaporan])->one() === null){
                                        echo " <td>Belum Dinilai</td>
                                    <td> - </td>";

                                    }
                                    else{
                                        echo " <td>".\common\models\PenilaianKelurahan::find()->where(['id_kelurahan'=>$kecamatan->kelurahans[0]->id_kelurahan, 'tahun_penilaian'=>$tahunLaporan])->one()->getPerkembangan()."</td>
                                <td>".\common\models\PenilaianKelurahan::find()->where(['id_kelurahan'=>$kecamatan->kelurahans[0]->id_kelurahan, 'tahun_penilaian'=>$tahunLaporan])->one()->totalNilai()."</td>
                            
";
                                    }

                                }
                                catch (Exception $e){

                                }

                                ?>




                            <?php }?>
                        </tr>
                        <?php
                        for ($i = 1; $i < count($kecamatan->kelurahans); $i++) {
                echo "<tr>";
                            echo "<td>";
                            echo $kecamatan->kelurahans[$i]->nama_kelurahan;
                            echo "</td>";

                            echo "<td>";

                            if(\common\models\PenilaianKelurahan::find()->where(['id_kelurahan' => $kecamatan->kelurahans[$i]->id_kelurahan, 'tahun_penilaian' => $tahunLaporan])->one() === null){
                                echo "Belum Dinilai";
                            }else
                            echo \common\models\PenilaianKelurahan::find()->where(['id_kelurahan' => $kecamatan->kelurahans[$i]->id_kelurahan, 'tahun_penilaian' => $tahunLaporan])->one()->getPerkembangan();

                            echo "</td>";

                            echo "<td>";
                            if(\common\models\PenilaianKelurahan::find()->where(['id_kelurahan'=>$kecamatan->kelurahans[$i]->id_kelurahan, 'tahun_penilaian'=>$tahunLaporan])->one() === null){
                                echo "-";
                            }else{
                                echo  \common\models\PenilaianKelurahan::find()->where(['id_kelurahan'=>$kecamatan->kelurahans[$i]->id_kelurahan, 'tahun_penilaian'=>$tahunLaporan])->one()->totalNilai();
                            echo "</td>";
                            echo "</tr>";
                        }
                        }

                        ?>
                    <?php
                    endforeach;
                    ?>


                <?php endif;?>

                </tbody>
            </table>
        </div>
    </div>
</div>
