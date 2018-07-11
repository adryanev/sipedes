<?php
/**
 * Created by PhpStorm.
 * User: adryanev
 * Date: 05/04/18
 * Time: 22:18
 */
/* @var $this \yii\web\View */

$currentRoute = Yii::$app->controller->id;
$currentAction = Yii::$app->controller->action->id
?>
    <div class="sidebar" data-active-color="rose" data-background-color="black" data-image="<?=Yii::$app->urlManager->baseUrl?>/img/sidebar-1.jpg">
        <!--
    Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
    Tip 2: you can also add an image using data-image tag
    Tip 3: you can change the color of the sidebar with data-background-color="white | black"
-->
        <div class="logo">
            <a href="<?= \yii\helpers\Url::toRoute(['site/index'])?>" class="simple-text logo-mini">
                PD
            </a>
            <a href="<?=\yii\helpers\Url::toRoute(['site/index'])?>" class="simple-text logo-normal">
                SIPEDES
            </a>
        </div>
        <div class="sidebar-wrapper">
            <div class="user">
                <div class="photo">
                    <img src="<?=Yii::$app->urlManager->baseUrl?>/img/faces/avatar.jpg" />
                </div>
                <div class="info">
                    <a href="#" >
                            <span>
                                <?=Yii::$app->user->identity->nama?>
                            </span>
                    </a>
                    <div class="clearfix"></div>
                    <div class="collapse" id="collapseExample">

                    </div>
                </div>
            </div>
            <ul class="nav">
                <li <?php if ($currentRoute == 'site') echo 'class="active"' ?>>
                    <?=\yii\helpers\Html::a('<i class="material-icons">dashboard</i>
                        <p>Beranda</p>',\yii\helpers\Url::to(['site/index']) )?>
                </li>
                <li <?php if ($currentRoute == 'penilaian') echo 'class="active"' ?>>
                    <a data-toggle="collapse" href="#componentsExamples">
                        <i class="material-icons">apps</i>
                        <p>Penilaian
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="componentsExamples">
                        <ul class="nav">
                            <li <?php if ($currentAction == 'desa' || $currentAction == 'penilaian-desa') echo 'class="active"' ?>>
                                <?= \yii\helpers\Html::a(' <span class="sidebar-mini">DES</span>
                                <span class="sidebar-normal">Penilaian Desa</span>',\yii\helpers\Url::toRoute(['penilaian/desa']))
                                ?>
                            </li>
                            <li <?php if ($currentAction == 'kelurahan') echo 'class="active"' ?>>
                                <?= \yii\helpers\Html::a(' <span class="sidebar-mini">KEL</span>
                                <span class="sidebar-normal">Penilaian Kelurahan</span>',\yii\helpers\Url::toRoute(['penilaian/kelurahan']))
                                ?>
                            </li>

                        </ul>
                    </div>
                </li>
                <li <?php if ($currentRoute == 'laporan') echo 'class="active"' ?>>
                    <?=\yii\helpers\Html::a('<i class="material-icons">book</i>
                        <p>Laporan</p>',\yii\helpers\Url::to(['laporan/index']) )?>
                </li>

           </ul>
        </div>
    </div>
