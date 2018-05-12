<?php
/**
 * Created by PhpStorm.
 * User: adryanev
 * Date: 05/04/18
 * Time: 22:23
 */
/* @var $this \yii\web\View */
/* @var $content string */

use yii\bootstrap\Html;
use yii\widgets\Breadcrumbs;

?>

<div class="main-panel">
    <nav class="navbar navbar-transparent navbar-absolute">
        <div class="container-fluid">
            <div class="navbar-minimize">
                <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                    <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                    <i class="material-icons visible-on-sidebar-mini">view_list</i>
                </button>
            </div>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"> <?= \yii\helpers\Inflector::camel2words(Yii::$app->controller->id)?> </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
<!--                    <li>-->
<!--                        <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">-->
<!--                            <i class="material-icons">dashboard</i>-->
<!--                            <p class="hidden-lg hidden-md">Dashboard</p>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li class="dropdown">-->
<!--                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">-->
<!--                            <i class="material-icons">notifications</i>-->
<!--                            <span class="notification">5</span>-->
<!--                            <p class="hidden-lg hidden-md">-->
<!--                                Notifications-->
<!--                                <b class="caret"></b>-->
<!--                            </p>-->
<!--                        </a>-->
<!--                        <ul class="dropdown-menu">-->
<!--                            <li>-->
<!--                                <a href="#">Mike John responded to your email</a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="#">You have 5 new tasks</a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="#">You're now friend with Andrew</a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="#">Another Notification</a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="#">Another One</a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </li>-->

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="material-icons">person</i>
                            <p class="hidden-lg hidden-md">Profile</p>
                            <?=Yii::$app->user->identity->username?>
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                            <?= Html::a(
                                'Pengaturan Akun',
                                ['/admin/update/'.Yii::$app->user->getId()],
                                ['data-method' => 'post']
                            ) ?>
                            </li>
                            <li>
                                <?= Html::a(
                                    'Sign out',
                                    ['/site/logout'],
                                    ['data-method' => 'post']
                                ) ?>
                            </li>
                        </ul>
                    </li>

                    <li class="separator hidden-lg hidden-md"></li>
                </ul>
<!--                <form class="navbar-form navbar-right" role="search">-->
<!--                    <div class="form-group form-search is-empty">-->
<!--                        <input type="text" class="form-control" placeholder="Search">-->
<!--                        <span class="material-input"></span>-->
<!--                    </div>-->
<!--                    <button type="submit" class="btn btn-white btn-round btn-just-icon">-->
<!--                        <i class="material-icons">search</i>-->
<!--                        <div class="ripple-container"></div>-->
<!--                    </button>-->
<!--                </form>-->
            </div>
        </div>
    </nav>
    <div class="content">
        <div class="container-fluid">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
           <?=$content?>
        </div>
    </div>

