<?php

/* @var $this yii\web\View */

$this->title = 'Админ панель ISYMS';
?>

<?php
/*Если Ip адресс и сессия не совпадают то мы редиректим на страницу с ошибкой*/
$session = Yii::$app->session;
 if ($session['admin_ip'] != $_SERVER["REMOTE_ADDR"]){
   header('Location: http://'.$_SERVER['HTTP_HOST'].'/'.'error');
     die();
 }
?>
<div class="row">
    <div class="menu_index">
        <div class="col-md-2">
            <div class="menu">
                <p>Меню</p>
                <ul>
                    <li>
                        <a href="/blog">
                            <span>Блог</span>
                        </a>
                    </li>
                    <li>
                        <a href="/keys">
                            <span>Ключь модуля</span>
                        </a>
                    </li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-2">
                    <div class="count_ip">
                     <? #@TODO  тут выводим (возможно график) сколько было поситителей за сутки?>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="mail_index">
                    <? #@TODO тут надо написать приложение по чтению писем?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>