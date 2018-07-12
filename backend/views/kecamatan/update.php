<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Kecamatan */

$this->title = 'Update Kecamatan: '.$model->nama_kecamatan;
$this->params['breadcrumbs'][] = ['label'=>'Wilayah','url'=>['wilayah/index']];
$this->params['breadcrumbs'][] = ['label' => 'Kecamatan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama_kecamatan, 'url' => ['view', 'id' => $model->id_kecamatan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kecamatan-update">

    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <div class="card-content">
                    <h4 class="header-title m-t-0 m-b-30"></h4>
                    <div class="row">
                        <div class="col-md-12">
                            <?= $this->render('_form', [
                            'model' => $model,
                                'dataKabupaten'=>$dataKabupaten
                            ]) ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>




</div>
