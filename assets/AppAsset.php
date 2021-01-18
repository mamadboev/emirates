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
    public $sourcePath = __DIR__.'../web';
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'animate.ccs',
        'bootstrap.ccs',
        'flexslider.ccs',
        'icomoon.ccs',
        'owl.carousel.min.ccs',
        'owl.theme.default.min.ccs',
        'style.ccs',
    ];
    public $js = [
        'bootstrap.min.js',
        'google_map.js',
        'jquery.countTo.js',
        'jquery.easing.1.3.js',
        'jquery.flexslider-min.js',
        'jquery.min.js',
        'jquery.waypoints.min.js',
        'main.js',
        'modernizr-2.6.2.min.js',
        'owl.carousel.min.js',
        'respond.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    public $publishOptions = [
        'forceCopy'=>YII_DEBUG
    ];



}
