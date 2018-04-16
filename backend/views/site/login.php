<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login | SIPEDES';

$fieldOptions1 = [
    'options' => ['class' => 'input-group'],
    'template'=>" <span class=\"input-group-addon\"> <i class=\"material-icons\">email</i></span><div class=\"form-group label-floating\">{label}{input}{hint}{error}</div>",
];

$fieldOptions2 =[
    'options' => ['class' => 'input-group'],
    'template'=>" <span class=\"input-group-addon\"> <i class=\"material-icons\">lock</i></span><div class=\"form-group label-floating\">{label}{input}{hint}{error}</div>",
];
?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                    <div class="card card-login card-hidden">
                        <div class="card-header text-center" data-background-color="rose">
                            <h3 class="card-title">Login</h3>
                            <div class="social-line">
                                <h5>Untuk Melanjutkan</h5>
                            </div>
                        </div>
                        <p class="category text-center">
                            Isi sesuai data anda.
                        </p>
                        <div class="card-content">
                            <?= $form->field($model, 'username',$fieldOptions1)->textInput()->label('Username',['class'=> 'control-label'] ) ?>

                            <?= $form->field($model, 'password',$fieldOptions2)->passwordInput()->label('Password') ?>

                            <?= $form->field($model, 'rememberMe')->checkbox() ?>

                            <div class="footer text-center">
                                <?= Html::submitButton('Login', ['class' => 'btn btn-rose btn-wd btn-lg', 'name' => 'login-button']) ?>
                            </div>
                    </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
