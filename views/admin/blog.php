<?php

/* @var $this yii\web\View */
use yii\widgets\LinkPager;

/*Подключаем скрипт со своим js*/
use app\assets\BlogAsset;

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
<div class="col-md-12">
    <a href="/create-post" class="btn btn-primary btn-sm create_post">Создать пост</a>
</div>
<div class="block_news">
    <?php foreach ($news as $news_blog) { ?>

        <div class="col-md-12">
            <div class=" blog-news box-news-<?=$news_blog['id']?>">
                <div class="col-md-2">
                    <div class="blog-news-name">
                        <?=$news_blog['name']?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="blog-news-decription">
                        <?=$news_blog['description']?>
                    </div>
                 </div>

                <div class="col-md-2">
                    <div class="blog-news-keywords">
                        <?=$news_blog['keywords']?>
                    </div>
                </div>

                 <div class="col-md-1">
                    <div class="blog-meta-title">
                        <?=$news_blog['meta-title']?>
                    </div>
                 </div>
                <div class="col-md-2">
                    <div class="blog-meta-title">
                        <?=$news_blog['meta-description']?>
                    </div>
                </div>
                 <div class="col-md-1">
                    <div class="blog-news-data">
                        <?=$news_blog['data']?>
                    </div>
                 </div>

                 <div class="col-md-1">
                    <div class="blog-news-edit">
                        <div class="col-md-12">
                            <div class="button_create"><a href="/edit-post/<?=$news_blog['id']?>"><img src="/web/image/admin/edit.gif"/></a></div>
                        </div>
                        <div class="col-md-12">
                            <div class="button_del"><a href="/del-post/<?=$news_blog['id']?>"><img src="/web/image/admin/del.png"/></a></div>
                        </div>
                    </div>
                 </div>

            </div>
        </div>

    <?php } ?>
    <div class="pagination_blog">
    <?php
    echo LinkPager::widget([
        'pagination' => $pages,
    ]);
    ?>
    </div>
</div>

<?php /*Подключаем свои скрипты*/
BlogAsset::register($this);
?>
