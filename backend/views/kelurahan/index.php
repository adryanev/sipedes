<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\KelurahanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kelurahan';
$this->params['breadcrumbs'][] = ['label'=>'Wilayah','url'=>['wilayah/index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <div class="card-content">
                <h4 class="header-title m-t-0 m-b-30"><?= Html::encode($this->title) ?></h4>
                    <div class="row">
                        <div class="col-md-12">
                                <?php Pjax::begin(); ?>
                                                                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
                            
                            <p>
                                <?= Html::a('Tambah Kelurahan', ['create'], ['class' => 'btn btn-success']) ?>
                            </p>

                                                            <?= \fedemotta\datatables\DataTables::widget([
                                'dataProvider' => $dataProvider,
                                'filterModel' => $searchModel,
        'columns' => [
                                ['class' => 'yii\grid\SerialColumn','header'=>'No'],

                                            'id_kelurahan',
            'nama_kelurahan',
            'kecamatan.nama_kecamatan',

                                ['class' => 'yii\grid\ActionColumn','header'=>'Aksi'],
                                ],
                                ]); ?>
                                                            <?php Pjax::end(); ?>


                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
