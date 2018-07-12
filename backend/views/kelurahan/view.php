<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Kelurahan */

$this->title = $model->nama_kelurahan;
$this->params['breadcrumbs'][] = ['label'=>'Wilayah','url'=>['wilayah/index']];;
$this->params['breadcrumbs'][] = ['label' => 'Kelurahan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kelurahan-view">

    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <div class="card-content">
                    <h4 class="header-title m-t-0 m-b-30"><?= Html::encode($this->title) ?></h4>
                    <div class="row">
                        <div class="col-md-12">
                            <p>
                                <?= Html::a('Update', ['update', 'id' => $model->id_kelurahan], ['class' => 'btn btn-primary']) ?>
                                <?= Html::a('Hapus', ['delete', 'id' => $model->id_kelurahan], [
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
                                        'id_kelurahan',
            'nama_kelurahan',
            'kecamatan.nama_kecamatan',
                                'kecamatan.kabupaten.nama_kabupaten',
                                'kecamatan.kabupaten.provinsi.nama_provinsi'
                            ],
                            ]) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




</div>
