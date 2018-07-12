<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Desa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="desa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_kecamatan')->widget(\kartik\select2\Select2::className(),[
            'data'=>$dataKecamatan,
            'options'=>['placeholder'=>'Pilih Kecamatan']
    ])->label('Nama Kecamatan') ?>
    <?= $form->field($model, 'id_desa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_desa')->textInput(['maxlength' => true]) ?>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
