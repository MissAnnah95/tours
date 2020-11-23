<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/footer.css',
        'css/site.css',

        'css/custom.css',
        'css/specifictour.css',
        'css/landing.css',
        'css/booking.css',

    ];
    public $js = [
        'css/landing.js',
        'js/custom.js',
        'js/profile.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
