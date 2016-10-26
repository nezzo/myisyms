<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title = 'Удалить пост ISYMS';

/*Если Ip адресс и сессия не совпадают то мы редиректим на страницу с ошибкой*/
$session = Yii::$app->session;
if ($session['admin_ip'] != $_SERVER["REMOTE_ADDR"]){
    header('Location: http://'.$_SERVER['HTTP_HOST'].'/'.'error');
    die();
}
header('Location: http://'.$_SERVER['HTTP_HOST'].'/'.'blog');
?>
