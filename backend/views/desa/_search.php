<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\DesaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="desa-search">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-content">
                    <h4 class="card-title"><?= Html::encode($this->title) ?></h4>

                    <div class="row">
                        <div class="col-md-12">
                            <?php $form = ActiveForm::begin([
                            'action' => ['index'],
                            'method' => 'get',
                                                            'options' => [
                                'data-pjax' => 1
                                ],
                                                        ]); ?>

                                <?= $form->field($model, 'id_desa') ?>

    <?= $form->field($model, 'nama_desa') ?>

    <?= $form->field($model, 'id_kecamatan') ?>

                            <div class="form-group">
                                <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
                                <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
                            </div>

                            <?php ActiveForm::end(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
