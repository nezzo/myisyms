<?php

/* @var $this yii\web\View */

$this->title = 'Блог ISYMS';
?>

<?php
/*Если Ip адресс и сессия не совпадают то мы редиректим на страницу с ошибкой*/
$session = Yii::$app->session;
if ($session['admin_ip'] != $_SERVER["REMOTE_ADDR"]){
    header('Location: http://'.$_SERVER['HTTP_HOST'].'/'.'error');
    die();
}
?>
<div class="block_news">
    <?php foreach ($news as $news_blog) { ?>

        <div class="col-md-12">
            <div class=" blog-news box-news-<?=$news_blog['id']?>">
                <div class="col-md-2">
                    <div class="blog-news-name">
                        <?=$news_blog['name']?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-news-decription">
                        <?=$news_blog['description']?>
                    </div>
                 </div>
                 <div class="col-md-2">
                    <div class="blog-news-image">
                        <?=$news_blog['image']?>
                    </div>
                 </div>
                 <div class="col-md-2">
                    <div class="blog-news-data">
                        <?=$news_blog['data']?>
                    </div>
                 </div>

                 <div class="col-md-2">
                    <div class="blog-news-edit">

                    </div>
                 </div>

            </div>
        </div>

    <?php } ?>

</div>