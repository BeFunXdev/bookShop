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
        'css/meanmenu.min.css',
        'css/animate.css',
        'css/nivo-slider.css',
        'css/owl.carousel.min.css',
        'css/slick.css',
        'css/jquery-ui.min.css',
        'css/font-awesome.min.css',
        'css/jquery.fancybox.css',
        'css/bootstrap.min.css',
        'css/default.css',
        'style.css',
        'css/responsive.css'
    ];
    public $js = [
        'js/vendor/jquery-1.12.4.min.js',
        'js/jquery.meanmenu.min.j',
        'js/jquery.scrollUp.js',
        'js/owl.carousel.min.js',
        'js/slick.min.js',
        'js/wow.min.js',
        'js/jquery-ui.min.js',
        'js/jquery.countdown.min.js',
        'js/jquery.nivo.slider.js',
        'js/jquery.fancybox.min.js',
        'js/bootstrap.min.js',
        'js/popper.js',
        'js/plugins.js',
        'js/main.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
