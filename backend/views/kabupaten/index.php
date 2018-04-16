<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\KabupatenSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kabupaten';
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
                                <?php Pjax::begin(); ?>
                                                                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
                            
                            <p>
                                <?= Html::a('Tambah Kabupaten', ['create'], ['class' => 'btn btn-success']) ?>
                            </p>

                                                            <?= GridView::widget([
                                'dataProvider' => $dataProvider,
                                'filterModel' => $searchModel,
        'columns' => [
                                ['class' => 'yii\grid\SerialColumn','header' => 'No'],

                                           // 'id_kabupaten',
            'nama_kabupaten',
           // 'id_provinsi',
           // 'created_at',
            //'updated_at',

                                ['class' => 'yii\grid\ActionColumn','header' => 'Aksi'],
                                ],
                                ]); ?>
                                                            <?php Pjax::end(); ?>


                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
