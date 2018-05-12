<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Provinsi */

$this->title = $model->id_provinsi;
$this->params['breadcrumbs'][] = ['label'=>'Wilayah','url'=>['wilayah/index']];
$this->params['breadcrumbs'][] = ['label' => 'Provinsi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="provinsi-view">

    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <div class="card-content">
                    <h4 class="header-title m-t-0 m-b-30"><?= Html::encode($this->title) ?></h4>
                    <div class="row">
                        <div class="col-md-12">
                            <p>
                                <?= Html::a('Update', ['update', 'id' => $model->id_provinsi], ['class' => 'btn btn-primary']) ?>
                                <?= Html::a('Hapus', ['delete', 'id' => $model->id_provinsi], [
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
                                        'id_provinsi',
            'nama_provinsi',
                            ],
                            ]) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




</div>
