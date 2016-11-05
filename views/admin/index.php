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
                        <a href="/blog" class="btn btn-sm">
                            <span>Блог</span>
                        </a>
                    </li>
                    <li>
                        <a href="/keys" class="btn btn-sm">
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
                <div class="col-md-5">
                    <div class="count_ip">
                     <?php foreach($select_count as $count) { ?>
                      <div class="col-md-12">
                          <div class="date">
                              <p>Дата:</p>
                              <span><?=$count['date']?></span>
                          </div>
                      </div>
                        <div class="col-md-12">
                            <div class="hit">
                            <p>Хосты:</p>
                            <span><?=$count['hosts']?></span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="host">
                              <p>Просмотры:</p>
                              <span><?=$count['views']?></span>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
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