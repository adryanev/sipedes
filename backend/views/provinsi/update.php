<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Provinsi */

$this->title = 'Update Provinsi: '.$model->nama_provinsi;
$this->params['breadcrumbs'][] = ['label'=>'Wilayah','url'=>['wilayah/index']];
$this->params['breadcrumbs'][] = ['label' => 'Provinsi', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama_provinsi, 'url' => ['view', 'id' => $model->id_provinsi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="provinsi-update">

    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <div class="card-content">
                    <h4 class="header-title m-t-0 m-b-30"></h4>
                    <div class="row">
                        <div class="col-md-12">
                            <?= $this->render('_form', [
                            'model' => $model,
                            ]) ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>




</div>
