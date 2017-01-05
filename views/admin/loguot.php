<?php
/*Удаляем сессию и редеректим на главную*/
$session = Yii::$app->session;
    $session->close('admin_ip');
    header('Location: http://'.$_SERVER['HTTP_HOST'].'/'.'index');
    die();

?>
