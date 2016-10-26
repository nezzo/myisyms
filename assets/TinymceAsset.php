<?php
/**
 * Created by PhpStorm.
 * User: nestor
 * Date: 27.10.16
 * Time: 1:55
 */

namespace app\assets;
use yii\web\AssetBundle;

/*Подключаем файлы редеактора*/
class TinymceAsset extends AssetBundle
{
    public $basePath = '@webroot'; //алиас каталога с файлами, который соответствует @web
    public $baseUrl = '@web';//Алиас пути к файлам
    public $css = [

    ];
    public $js = [
        '/assets/tinymce/js/tinymce/tinymce.min.js',
        '/assets/tinymce/config_isyms.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];

    public $jsOptions = [ 'position' => \yii\web\View::POS_END ];
}