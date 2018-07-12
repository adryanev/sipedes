<?php
/**
 * Created by PhpStorm.
 * User: adryanev
 * Date: 12/05/18
 * Time: 21:07
 */


?>

<div class="card">

    <div class="card-header card-header-icon" data-background-color="green">
        <i class="material-icons">map</i>
    </div>
    <div class="card-content">
        <h4 class="card-title">Pilih <?=$title?></h4>

        <div class="row">
            <div class="col-md-12">

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
                        'url'=>[\yii\helpers\Url::toRoute(['penilaian/get-kabupaten'])]
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
                        'url'=>[\yii\helpers\Url::toRoute(['penilaian/get-kecamatan'])]
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
                        'url'=>[\yii\helpers\Url::toRoute(['penilaian/get-desa'])]
                    ]
                ])
                ?>

                <?php \yii\bootstrap\ActiveForm::end()?>

                <div id="pilih-desa">

                </div>
            </div>
        </div>
    </div>
</div>
<?php
$url = \yii\helpers\Url::toRoute(['penilaian/penilaian-desa']);
$js = <<<JS
    const desa = $('#id_desa');
    const divDesa = $('#pilih-desa');
    
    desa.on('change',()=>{
        
        if(typeof desa.val() === "string"){
            divDesa.html('<a href="{$url}?idDesa='+desa.val()+'" class="btn btn-primary"> Pilih </a>');
        }
    });
  
JS;

$this->registerJS($js);