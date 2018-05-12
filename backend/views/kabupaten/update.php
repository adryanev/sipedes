<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Kabupaten */

$this->title = 'Update Kabupaten: '.$model->nama_kabupaten;
$this->params['breadcrumbs'][] = ['label'=>'Wilayah','url'=>['wilayah/index']];
$this->params['breadcrumbs'][] = ['label' => 'Kabupaten', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama_kabupaten, 'url' => ['view', 'id' => $model->id_kabupaten]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kabupaten-update">

    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <div class="card-content">
                    <h4 class="header-title m-t-0 m-b-30"></h4>
                    <div class="row">
                        <div class="col-md-12">
                            <?= $this->render('_form', [
                            'model' => $model,
                                'dataProvinsi'=>$dataProvinsi
                            ]) ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>




</div>
