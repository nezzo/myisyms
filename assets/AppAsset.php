<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/style.css',
        'assets/fancybox/source/jquery.fancybox.css?v=2.1.5',
        'assets/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5',
        'assets/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7',

    ];
    public $js = [
        'assets/js/site.js',
        'assets/fancybox/lib/jquery.mousewheel-3.0.6.pack.js',
        'assets/fancybox/source/jquery.fancybox.pack.js?v=2.1.5',
        'assets/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6',
        'assets/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7',


    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',

    ];
    public $jsOptions = [ 'position' => \yii\web\View::POS_END ];
}
