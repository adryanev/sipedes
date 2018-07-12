<?php
/* @var $this yii\web\View */
?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">

                <h4 class="header-title m-t-0 m-b-30">Laporan Per Kabupaten</h4>


                <?php \yii\bootstrap\ActiveForm::begin()?>
                <?= \kartik\select2\Select2::widget([
                    'data'=>$kabupaten,
                    'name'=>'id_kabupaten_lap_kab',
                    'id'=>'id_kabupaten_lap_kab',
                    'options'=>['placeholder'=>'Pilih Kabupaten']
                ])?>

               <?= \kartik\select2\Select2::widget([
                       'data'=>['desa'=>'Desa','kelurahan'=>'Kelurahan'],
                   'name'=>'jenis',
                   'id'=>'jenis',
                   'options'=>['placeholder'=>'Pilih Jenis Laporan']
               ]) ?>

                <?=
                \kartik\date\DatePicker::widget([
                    'options'=>['placeholder'=>'Pilih tahun laporan'],
                    'type'=> \kartik\date\DatePicker::TYPE_INPUT,
                    'id'=>'tahun_lap_kab','name'=>'tahun_laporan',
                    'pluginOptions'=>[
                        'autoclose'=>true,
                        'startView'=>'years',
                        'minViewMode'=>'years',
                        'format'=> 'yyyy'
                    ]


                ])
                ?>

                <?php \yii\bootstrap\ActiveForm::end()?>

                <div id="pilih-kab">

                </div>

                <br>
                <div class="clearfix"></div>


                <?php \yii\widgets\Pjax::begin()?>
                <?php \yii\widgets\Pjax::end()?>


            </div>
        </div><!-- end col -->

    </div>
<div class="row">
    <div class="col-lg-12">
        <div class="card-box">

            <h4 class="header-title m-t-0 m-b-30">Laporan Penilaian Desa</h4>


            <?php \yii\bootstrap\ActiveForm::begin()?>
            <?= \kartik\select2\Select2::widget([
                'data'=>$provinsi,
                'name'=>'id_provinsi',
                'id'=>'id_provinsi_desa',
                'options'=>['placeholder'=>'Pilih Provinsi']
            ])?>

            <?= \kartik\depdrop\DepDrop::widget([
                'name'=>'id_kabupaten',
                'type'=>\kartik\depdrop\DepDrop::TYPE_SELECT2,
                'options'=>['id'=>'id_kabupaten_desa'],
                'pluginOptions'=>[
                    'depends'=>['id_provinsi_desa'],
                    'placeholder'=>'Pilih Kabupaten',
                    'url'=>[\yii\helpers\Url::toRoute(['laporan/get-kabupaten'])]
                ]
            ])?>

            <?=
            \kartik\depdrop\DepDrop::widget([
                'name'=> 'id_kecamatan',
                'type'=> \kartik\depdrop\DepDrop::TYPE_SELECT2,
                'options'=>['id'=> 'id_kecamatan_desa'],
                'pluginOptions'=>[
                    'depends'=>['id_provinsi_desa','id_kabupaten_desa'],
                    'placeholder'=> 'Pilih Kecamatan',
                    'url'=>[\yii\helpers\Url::toRoute(['laporan/get-kecamatan'])]
                ]
            ])
            ?>

            <?=
            \kartik\depdrop\DepDrop::widget([
                'name'=>'id_desa',
                'type'=> \kartik\depdrop\DepDrop::TYPE_SELECT2,
                'options'=>['id'=>'id_desa'],
                'pluginOptions'=>[
                    'depends'=>['id_provinsi_desa','id_kabupaten_desa','id_kecamatan_desa'],
                    'placeholder'=> 'Pilih Desa',
                    'url'=>[\yii\helpers\Url::toRoute(['laporan/get-desa'])]
                ]
            ])
            ?>

            <?=
            \kartik\date\DatePicker::widget([
                    'options'=>['placeholder'=>'Pilih tahun laporan'],
                'type'=> \kartik\date\DatePicker::TYPE_INPUT,
                'id'=>'tahun_laporan','name'=>'tahun_laporan',
                'pluginOptions'=>[
                        'autoclose'=>true,
                    'startView'=>'years',
                    'minViewMode'=>'years',
                    'format'=> 'yyyy'
                ]


           ])
            ?>

            <?php \yii\bootstrap\ActiveForm::end()?>

            <div id="pilih-desa">

            </div>

            <br>
            <div class="clearfix"></div>


            <?php \yii\widgets\Pjax::begin()?>
            <?php \yii\widgets\Pjax::end()?>


        </div>
    </div><!-- end col -->

</div>
<div class="row">
        <div class="col-lg-12">
            <div class="card-box">

                <h4 class="header-title m-t-0 m-b-30">Laporan Penilaian Kelurahan</h4>


                <?php \yii\bootstrap\ActiveForm::begin()?>
                <?= \kartik\select2\Select2::widget([
                    'data'=>$provinsi,
                    'name'=>'id_provinsi',
                    'id'=>'id_provinsi_kelurahan',
                    'options'=>['placeholder'=>'Pilih Provinsi']
                ])?>

                <?= \kartik\depdrop\DepDrop::widget([
                    'name'=>'id_kabupaten',
                    'type'=>\kartik\depdrop\DepDrop::TYPE_SELECT2,
                    'options'=>['id'=>'id_kabupaten_kelurahan'],
                    'pluginOptions'=>[
                        'depends'=>['id_provinsi_kelurahan'],
                        'placeholder'=>'Pilih Kabupaten',
                        'url'=>[\yii\helpers\Url::toRoute(['laporan/get-kabupaten'])]
                    ]
                ])?>

                <?=
                \kartik\depdrop\DepDrop::widget([
                    'name'=> 'id_kecamatan',
                    'type'=> \kartik\depdrop\DepDrop::TYPE_SELECT2,
                    'options'=>['id'=> 'id_kecamatan_kelurahan'],
                    'pluginOptions'=>[
                        'depends'=>['id_provinsi_kelurahan','id_kabupaten_kelurahan'],
                        'placeholder'=> 'Pilih Kecamatan',
                        'url'=>[\yii\helpers\Url::toRoute(['laporan/get-kecamatan'])]
                    ]
                ])
                ?>

                <?=
                \kartik\depdrop\DepDrop::widget([
                    'name'=>'id_kelurahan',
                    'type'=> \kartik\depdrop\DepDrop::TYPE_SELECT2,
                    'options'=>['id'=>'id_kelurahan'],
                    'pluginOptions'=>[
                        'depends'=>['id_provinsi_kelurahan','id_kabupaten_kelurahan','id_kecamatan_kelurahan'],
                        'placeholder'=> 'Pilih Kelurahan',
                        'url'=>[\yii\helpers\Url::toRoute(['laporan/get-kelurahan'])]
                    ]
                ])
                ?>

                <?=
                \kartik\date\DatePicker::widget([
                    'options'=>['placeholder'=>'Pilih tahun laporan'],
                    'type'=> \kartik\date\DatePicker::TYPE_INPUT,
                    'id'=>'tahun_laporan_kelurahan','name'=>'tahun_laporan',
                    'pluginOptions'=>[
                        'autoclose'=>true,
                        'startView'=>'years',
                        'minViewMode'=>'years',
                        'format'=> 'yyyy'
                    ]


                ])
                ?>

                <?php \yii\bootstrap\ActiveForm::end()?>

                <div id="pilih-kelurahan">

                </div>

                <br>
                <div class="clearfix"></div>


                <?php \yii\widgets\Pjax::begin()?>
                <?php \yii\widgets\Pjax::end()?>


            </div>
        </div><!-- end col -->

    </div>
<?php
$url = \yii\helpers\Url::toRoute(['laporan/laporan-desa']);
$urlKab = \yii\helpers\Url::toRoute(['laporan/laporan-kab-desa']);
$urlKel = \yii\helpers\Url::toRoute(['laporan/laporan-kelurahan']);
$js = <<<JS
    const desa = $('#id_desa');
    const tahun = $('#tahun_laporan');
    const divDesa = $('#pilih-desa');
    
    tahun.on('change',()=>{
        
        if(typeof desa.val() === "string"){
            divDesa.html('<a href="{$url}?idDesa='+desa.val()+'&tahun='+tahun.val()+'" class="btn btn-primary"> Pilih </a>');
        }
    });
    
    const kabupaten = $('#id_kabupaten_lap_kab');
    let jenis = $('#jenis');
    const tahunLapKab = $('#tahun_lap_kab');
    const divKab = $('#pilih-kab');
  
    tahunLapKab.on('change',()=>{
           divKab.html('<a href="{$urlKab}?idKabupaten='+kabupaten.val()+'&tahun='+tahunLapKab.val()+'&jenis='+jenis.val()+'" class="btn btn-primary"> Pilih </a>');
    });
    
    const kelurahan = $('#id_kelurahan');
    const tahunKelurahan = $('#tahun_laporan_kelurahan');
    const divKel = $('#pilih-kelurahan');
    
    tahunKelurahan.on('change',() =>{
            divKel.html('<a href="{$urlKel}?idKelurahan='+kelurahan.val()+'&tahun='+tahunKelurahan.val()+'" class="btn btn-primary"> Pilih </a>');
    });
    
    
    
JS;

$this->registerJS($js);
