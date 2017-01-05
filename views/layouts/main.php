<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\models\admin\Count;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="robots" content="all"/>
    <meta name="yandex-verification" content="b3abc93067df7aef" />
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="shortcut icon" href="/web/image/favicon.ico" type="image/x-icon">
    <script type="text/javascript" src="//vk.com/js/api/openapi.js?136"></script>

    <script type="text/javascript">
        VK.init({apiId: 5693592, onlyWidgets: true});
    </script>
</head>
<body>
<?php
//Запускаем функцию по учету пользователей
/*Вчерашняя дата по удалению записей из базы за вчера*/
$date = date("d.m.Y", mktime(0, 0, 0, date("m"), date("d")-1, date("Y")));

/*Получаем ip  адресс пользователя*/
$ip = Yii::$app->getRequest()->getUserIP();

/*Подключаем модель куда будет заноситься информация о пользователях*/
$count = new Count();

if ($count->old_connects() == 0){
    $count->dell_ips($date);
    $count->user_ip($ip);
    $count->update_visits();

}else{

    //Если такой IP-адрес уже сегодня был (т.е. это не уникальный посетитель)
    if($count->get_ip_adress($ip) == $ip){
        $count->update_hit();
    }else{

        // Если сегодня такого IP-адреса еще не было (т.е. это уникальный посетитель)
        $count->user_ip($ip);
        $count->update_host_hit();
    }
}

?>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'ISYMS | Программирование',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top top_menu',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Главная', 'url' => Yii::$app->homeUrl],
            ['label' => 'Разделы',
                'items' =>[
                   ['label' => 'Модули', 'url' => ['/site/module']]
                ],
            ],
            ['label' => 'Контакты', 'url' => ['/site/contact']],
            ['label' => 'Соц.сети',
             'items' =>[

                 ['label' => 'Twitter', 'img'=>'','url' => 'https://twitter.com/Artur_ISYMS'],
                // ['label' => 'Telegram channel', 'url' => 'http://telegram.me/ISYMS'],
                 ['label' => 'Linkedin', 'url' => 'https://ua.linkedin.com/in/артур-легуша-8623b589'],
             ],
             ],
            //['label' => 'Поиск', 'url' => '#'],
            '<li class="seach"><img src="/web/image/ssearch.png" /></li>',

         ],

    ]);
    NavBar::end();
    ?>
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Created by Artur Legusha <?= date('Y') ?></p>
    </div>
</footer>
<?php $this->endBody() ?>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'U4joCZY5Wt';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-28859992-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
<?php $this->endPage() ?>

