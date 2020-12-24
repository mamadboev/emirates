<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/animate.ccs',
        'css/bootstrap.ccs',
        'css/flexslider.ccs',
        'css/icomoon.ccs',
        'css/owl.carousel.min.ccs',
        'css/owl.theme.default.min.ccs',
        'css/style.ccs',
    ];
    public $js = [
        'js/bootstrap.min.js',
        'js/google_map.js',
        'js/jquery.countTo.js',
        'js/jquery.easing.1.3.js',
        'js/jquery.flexslider-min.js',
        'js/jquery.min.js',
        'js/jquery.waypoints.min.js',
        'js/main.js',
        'js/modernizr-2.6.2.min.js',
        'js/owl.carousel.min.js',
        'js/respond.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

   
}
