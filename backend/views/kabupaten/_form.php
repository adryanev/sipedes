<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Kabupaten */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kabupaten-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'id_provinsi')->widget(\kartik\select2\Select2::className(),[
            'data' => $dataProvinsi,
        'options' => ['placeholder'=>'Pilih Provinsi']
    ])->label('Nama Provinsi')?>

    <?= $form->field($model, 'id_kabupaten')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_kabupaten')->textInput(['maxlength' => true]) ?>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
