<?php
$this->title = 'Админ панель ISYMS';
/*Если Ip адресс и сессия не совпадают то мы редиректим на страницу с ошибкой*/
$session = Yii::$app->session;
if ($session['admin_ip'] != $_SERVER["REMOTE_ADDR"]){
    header('Location: http://'.$_SERVER['HTTP_HOST'].'/'.'error');
    die();
}
#@TODO  Тут должен быть генератор ключей для модуля по моему алгоритмы  шифрования