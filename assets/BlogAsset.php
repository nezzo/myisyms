<?php
/**
 * Created by PhpStorm.
 * User: nestor
 * Date: 26.10.16
 * Time: 22:55
 */

namespace app\assets;

use yii\web\AssetBundle;

class BlogAsset extends AssetBundle
{
    public $basePath = '@webroot'; //алиас каталога с файлами, который соответствует @web
    public $baseUrl = '@web';//Алиас пути к файлам
    public $css = [

    ];
    public $js = [
        'assets/js/admin.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];

    public $jsOptions = [ 'position' => \yii\web\View::POS_END ];
}