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
                <li <?php if ($currentRoute == 'provinsi' || $currentRoute == 'kabupaten' || $currentRoute == 'kecamatan' || $currentRoute == 'kelurahan' || $currentRoute == 'desa') echo 'class="active"' ?>>
                    <a data-toggle="collapse" href="#pagesExamples">
                        <i class="material-icons">map</i>
                        <p>Daerah
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="pagesExamples">
                        <ul class="nav">
                            <li <?php if ($currentRoute == 'provinsi') echo 'class="active"' ?>>
                                <?=
                                \yii\helpers\Html::a(' <span class="sidebar-mini">PROV</span>
                                    <span class="sidebar-normal">Provinsi</span>',\yii\helpers\Url::toRoute(['provinsi/index']))
                                ?>
                            </li>
                            <li <?php if ($currentRoute == 'kabupaten') echo 'class="active"' ?>>
                               <?= \yii\helpers\Html::a(' <span class="sidebar-mini">KAB</span>
                                <span class="sidebar-normal">Kabupaten</span>',\yii\helpers\Url::toRoute(['kabupaten/index']))
                                ?>
                            </li>
                            <li <?php if ($currentRoute == 'kecamatan') echo 'class="active"' ?>>
	                            <?= \yii\helpers\Html::a(' <span class="sidebar-mini">KEC</span>
                                <span class="sidebar-normal">Kecamatan</span>',\yii\helpers\Url::toRoute(['kecamatan/index']))
	                            ?>
                            </li>
                            <li <?php if ($currentRoute == 'desa') echo 'class="active"' ?>>
	                            <?= \yii\helpers\Html::a(' <span class="sidebar-mini">DES</span>
                                <span class="sidebar-normal">Desa</span>',\yii\helpers\Url::toRoute(['desa/index']))
	                            ?>
                            </li>
                            <li <?php if ($currentRoute == 'kelurahan') echo 'class="active"' ?>>
	                            <?= \yii\helpers\Html::a(' <span class="sidebar-mini">KEL</span>
                                <span class="sidebar-normal">Kelurahan</span>',\yii\helpers\Url::toRoute(['kelurahan/index']))
	                            ?>
                            </li>
                        </ul>
                    </div>
                </li>
                <li <?php if ($currentRoute == 'laporan') echo 'class="active"' ?>>
                    <a data-toggle="collapse" href="#componentsExamples">
                        <i class="material-icons">apps</i>
                        <p>Laporan
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="componentsExamples">
                        <ul class="nav">
                            <li <?php if ($currentAction == 'laporan-semua') echo 'class="active"' ?>>
	                            <?= \yii\helpers\Html::a(' <span class="sidebar-mini">ALL</span>
                                <span class="sidebar-normal">Semua Laporan</span>',\yii\helpers\Url::toRoute(['laporan/index']))
	                            ?>
                            </li>
                            <li <?php if ($currentAction == 'laporan-kategori') echo 'class="active"' ?>>
	                            <?= \yii\helpers\Html::a(' <span class="sidebar-mini">KT</span>
                                <span class="sidebar-normal">Per Kategori</span>',\yii\helpers\Url::toRoute(['laporan/kategori']))
	                            ?>
                            </li>

                        </ul>
                    </div>
                </li>
                <li <?php if ($currentRoute == 'user') echo 'class="active"' ?>>
	                <?=\yii\helpers\Html::a('<i class="material-icons">groups</i>
                        <p>Pengguna</p>',\yii\helpers\Url::to(['user/index']) )?>
                </li>
                <li <?php if ($currentRoute == 'admin') echo 'class="active"' ?>>
	                <?=\yii\helpers\Html::a('<i class="material-icons">person</i>
                        <p>Admin</p>',\yii\helpers\Url::to(['admin/index']) )?>
                </li>


            </ul>
        </div>
    </div>
