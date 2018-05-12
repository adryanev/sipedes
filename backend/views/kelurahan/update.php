<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Kelurahan */

$this->title = 'Update Kelurahan: '.$model->nama_kelurahan;
$this->params['breadcrumbs'][] = ['label'=>'Wilayah','url'=>['wilayah/index']];
$this->params['breadcrumbs'][] = ['label' => 'Kelurahan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama_kelurahan, 'url' => ['view', 'id' => $model->id_kelurahan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kelurahan-update">

    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <div class="card-content">
                    <h4 class="header-title m-t-0 m-b-30"></h4>
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
