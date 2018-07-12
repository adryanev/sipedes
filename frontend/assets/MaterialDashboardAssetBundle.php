<?php
/**
 * Created by PhpStorm.
 * User: adryanev
 * Date: 05/04/18
 * Time: 22:05
 */

namespace frontend\assets;


use yii\web\AssetBundle;

class MaterialDashboardAssetBundle extends AssetBundle
{

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/material-dashboard.css?v=1.2.0',
        'http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css',
        'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons',
        'https://fonts.googleapis.com/icon?family=Material+Icons',
    ];
    public $js = [

        'js/material.min.js',
        'js/perfect-scrollbar.jquery.min.js',
        'js/arrive.min.js',
        'js/jquery.validate.min.js',
        'js/es6-promise-auto.min.js',
        'js/moment.min.js',
        'js/chartist.min.js',
        'js/jquery.bootstrap-wizard.js',
        'js/bootstrap-notify.js',
        'js/bootstrap-datetimepicker.js',
        'js/jquery-jvectormap.js',
        'js/nouislider.min.js',
        'js/jquery.select-bootstrap.js',
        //'js/demo.js',
        'js/fullcalendar.min.js',
        'js/jquery.tagsinput.js',
        'js/jasny-bootstrap.min.js',
        'js/material-dashboard.js?v=1.2.0',
	    'js/yii2-override.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapPluginAsset',
	    '\yii2mod\alert\AlertAsset'

    ];
}