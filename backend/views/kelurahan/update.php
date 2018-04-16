<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Kelurahan */

$this->title = 'Update Kelurahan: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Kelurahan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kelurahan, 'url' => ['view', 'id' => $model->id_kelurahan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kelurahan-update">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="rose">
                    <i class="material-icons">face</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title"><?= Html::encode($this->title) ?></h4>
                    <div class="row">
                        <div class="col-md-12">
                            <?= $this->render('_form', [
                            'model' => $model,
                            'dataKecamatan'=>$dataKecamatan
                            ]) ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>




</div>
