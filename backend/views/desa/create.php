<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Desa */

$this->title = 'Tambah Desa';
$this->params['breadcrumbs'][] = ['label' => 'Desa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="desa-create">
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
                            <?= $this->render('_form', [
                            'model' => $model,
                            'dataKecamatan'=>$dataKecamatan,
                            ]) ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


</div>
