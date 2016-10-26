<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link href="../css/style.css" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="/web/image/favicon.ico" type="image/x-icon">
</head>
<body>
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
            ['label' => 'Контакты', 'url' => ['/site/contact']],
            ['label' => 'Соц.сети',
             'items' =>[
                 
                 ['label' => 'Twitter', 'img'=>'','url' => 'https://twitter.com/Artur_ISYMS'],
                 ['label' => 'Telegram channel', 'url' => 'http://telegram.me/ISYMS'],
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
</body>
</html>
<?php $this->endPage() ?>

