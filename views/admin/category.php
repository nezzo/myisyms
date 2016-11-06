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
<div class="block_news">
    <div class="col-md-2">
        <a href="/create-category" class="btn btn-primary btn-sm create_post">Создать категорию</a>
    </div>
    <?php foreach ($category_blog as $category) { ?>
        <div class="col-md-12">
            <div class=" blog-news ">
               <div class="col-md-11">
                    <div class="blog-meta-title">
                        <?=$category['name_category']?>
                    </div>
                </div>

                <div class="col-md-1">
                    <div class="blog-news-edit">
                        <div class="col-md-12">
                            <div class="button_create"><a href="/edit-category/<?=$category['id']?>"><img src="/web/image/admin/edit.gif"/></a></div>
                        </div>
                        <div class="col-md-12">
                            <div class="button_del"><a href="/del-category/<?=$category['id']?>"><img src="/web/image/admin/del.png"/></a></div>
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
