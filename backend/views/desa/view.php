<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Desa */

$this->title = $model->nama_desa;
$this->params['breadcrumbs'][] = ['label' => 'Desa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="desa-view">

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
                            <p>
                                <?= Html::a('Update', ['update', 'id' => $model->id_desa], ['class' => 'btn btn-primary']) ?>
                                <?= Html::a('Hapus', ['delete', 'id' => $model->id_desa], [
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
                                        'id_desa',
            ['attribute'=>'Nama Provinsi' ,
                'value'=>$model->getKecamatan()->one()->getKabupaten()->one()->getProvinsi()->one()->nama_provinsi],
            ['attribute'=>'Nama Kabupaten',
              'value'=>$model->getKecamatan()->one()->getKabupaten()->one()->nama_kabupaten],
            ['attribute'=>'Nama Kecamatan',
                'value'=>$model->getKecamatan()->one()->nama_kecamatan],
            'nama_desa',
           // 'id_kecamatan',
            'created_at',
            'updated_at',
                            ],
                            ]) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




</div>
