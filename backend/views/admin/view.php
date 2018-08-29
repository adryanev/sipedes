<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Admin */

$this->title = $model->username;
$jabatan = Yii::$app->user->identity->jabatan;
$this->params['breadcrumbs'][] = ['label' => 'Admin', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-view">

    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <div class="card-content">
                    <h4 class="header-title m-t-0 m-b-30"><?= Html::encode($this->title) ?></h4>
                    <div class="row">
                        <div class="col-md-12">
                            <p>
                                <?= $jabatan === 'Pimpinan' || $jabatan === 'Super Admin'? Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) : ''?>
                                <?= $jabatan === 'Pimpinan' || $jabatan === 'Super Admin'? Html::a('Hapus', ['delete', 'id' => $model->id], [
                                'class' => 'btn btn-danger',
                                'data' => [
                                'confirm' => 'Anda yakin untuk menghapus item ini?',
                                'method' => 'post',
                                ],
                                ]) : '' ?>
                            </p>

                            <?= DetailView::widget([
                            'model' => $model,
                            'attributes' => [
                                        //'id',
            'username',
          //  'auth_key',
          //  'password_hash',
          //  'password_reset_token',
            'email:email',
            //'status',
            'nama',
            'nip',
            //'avatar',
            'jabatan',
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
