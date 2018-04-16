<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ProvinsiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Provinsi';
$this->params['breadcrumbs'][] = $this->title;
?>

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
                                                                                            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
                            
                            <p>
                                <?= Html::a('Tambah Provinsi', ['create'], ['class' => 'btn btn-success']) ?>
                            </p>

                                                            <?= GridView::widget([
                                                                    'summary' => false,
                                'dataProvider' => $dataProvider,
                                'filterModel' => $searchModel,
        'columns' => [
                                ['class' => 'yii\grid\SerialColumn','header' => 'No'],

                                            //'id_provinsi',
            'nama_provinsi',
           // 'created_at:datetime',
            //'updated_at:datetime',

                                ['class' => 'yii\grid\ActionColumn',
                                    'header' => 'Aksi'
                                ],
                                ],
                                ]); ?>
                                                        

                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
