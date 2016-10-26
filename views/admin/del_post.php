<?php
#@TODO Надо создать что то наподобии "Вы уверен что хотите удалить данную статью ? и варианты ответов ДА, НЕТ если да то нужно придумать
#что и куда нужно отправить для удаления из модели и после того как удалилось перекидывать в /blog, а если нажать НЕТ то что бы перкидывало
#так в /blog но статья не удалялась"

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title = 'Создать пост ISYMS';

/*Если Ip адресс и сессия не совпадают то мы редиректим на страницу с ошибкой*/
$session = Yii::$app->session;
if ($session['admin_ip'] != $_SERVER["REMOTE_ADDR"]){
    header('Location: http://'.$_SERVER['HTTP_HOST'].'/'.'error');
    die();
}
?>

<div class="post-delete">
    <div class="col-md-12">
        <a href="/blog" class="btn btn-primary btn-sm delete_post"><- Назад</a>
    </div>
</div>
