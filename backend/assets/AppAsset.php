<?php

namespace backend\assets;
use floor12\notification\NotificationAsset;
use yii\web\AssetBundle;


/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'floor12\notification\NotificationAsset'
    ];
}
