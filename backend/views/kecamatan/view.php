<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Kecamatan */

$this->title = $model->nama_kecamatan;
$this->params['breadcrumbs'][] = ['label'=>'Wilayah','url'=>['wilayah/index']];
$this->params['breadcrumbs'][] = ['label' => 'Kecamatan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kecamatan-view">

    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <div class="card-content">
                    <h4 class="header-title m-t-0 m-b-30"><?= Html::encode($this->title) ?></h4>
                    <div class="row">
                        <div class="col-md-12">
                            <p>
                                <?= Html::a('Update', ['update', 'id' => $model->id_kecamatan], ['class' => 'btn btn-primary']) ?>
                                <?= Html::a('Hapus', ['delete', 'id' => $model->id_kecamatan], [
                                'class' => 'btn btn-danger',
                                'data' => [
                                'confirm' => 'Anda yakin untuk menghapus item ini?',
                                'method' => 'post',
                                ],
                                ]) ?>
                            </p>

                            <?= DetailView::widget([
                            'model' => $model,
                            'attributes' => [
                                        'id_kecamatan',
            'nama_kecamatan',
            'kabupaten.nama_kabupaten',
                                'kabupaten.provinsi.nama_provinsi'
                            ],
                            ]) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




</div>
