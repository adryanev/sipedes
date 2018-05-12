<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Kecamatan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kecamatan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_kabupaten')->widget(\kartik\select2\Select2::className(),[
            'data' => $dataKabupaten,
        'options' => ['placeholder'=>'Pilih Kabupaten']
    ]) ?>

    <?= $form->field($model, 'id_kecamatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_kecamatan')->textInput(['maxlength' => true]) ?>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
