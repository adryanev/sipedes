<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Desa */

$this->title = 'Update Desa: '.$model->nama_desa;
$this->params['breadcrumbs'][] = ['label'=>'Wilayah','url'=>['wilayah/index']];
$this->params['breadcrumbs'][] = ['label' => 'Desa', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama_desa, 'url' => ['view', 'id' => $model->id_desa]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="desa-update">

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
