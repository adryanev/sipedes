<?php
/* @var $this yii\web\View */
?>

<div class="row">
    <div class="col-lg-12">
        <div class="card-box">

            <h4 class="header-title m-t-0 m-b-30">Laporan Penilaian Desa/Kelurahan</h4>


            <?php \yii\bootstrap\ActiveForm::begin()?>
            <?= \kartik\select2\Select2::widget([
                'data'=>$provinsi,
                'name'=>'id_provinsi',
                'id'=>'id_provinsi',
                'options'=>['placeholder'=>'Pilih Provinsi']
            ])?>

            <?= \kartik\depdrop\DepDrop::widget([
                'name'=>'id_kabupaten',
                'type'=>\kartik\depdrop\DepDrop::TYPE_SELECT2,
                'options'=>['id'=>'id_kabupaten'],
                'pluginOptions'=>[
                    'depends'=>['id_provinsi'],
                    'placeholder'=>'Pilih Kabupaten',
                    'url'=>[\yii\helpers\Url::toRoute(['laporan/get-kabupaten'])]
                ]
            ])?>

            <?=
            \kartik\depdrop\DepDrop::widget([
                'name'=> 'id_kecamatan',
                'type'=> \kartik\depdrop\DepDrop::TYPE_SELECT2,
                'options'=>['id'=> 'id_kecamatan'],
                'pluginOptions'=>[
                    'depends'=>['id_provinsi','id_kabupaten'],
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
                    'depends'=>['id_provinsi','id_kabupaten','id_kecamatan'],
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

<?php
$url = \yii\helpers\Url::toRoute(['laporan/laporan-desa']);
$js = <<<JS
    const desa = $('#id_desa');
const tahun = $('#tahun_laporan');
    const divDesa = $('#pilih-desa');
    
    tahun.on('change',()=>{
        
        if(typeof desa.val() === "string"){
            divDesa.html('<a href="{$url}?idDesa='+desa.val()+'&tahun='+tahun.val()+'" class="btn btn-primary"> Pilih </a>');
        }
    });
  
JS;

$this->registerJS($js);
