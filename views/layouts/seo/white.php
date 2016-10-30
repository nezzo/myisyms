<?php
/*Создаем пустую страницу для robot.txt и других страниц где нужная пустая страница*/

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
AppAsset::register($this);
?>
<?= $content ?>



