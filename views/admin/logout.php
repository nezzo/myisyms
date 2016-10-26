<?php
/*Удаляем сессию и редеректим на главную*/
$session = Yii::$app->session;
     unset($session['admin_ip']);
    header('Location: http://'.$_SERVER['HTTP_HOST'].'/');
    die();
?>
