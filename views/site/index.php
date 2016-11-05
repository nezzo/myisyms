<?php
/* @var $this yii\web\View */
use yii\widgets\LinkPager;
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => "opencart cms,сайт интернет магазина,opencart модули,создание интернет магазина на opencart,сайт для интернет магазина,
                  модули для opencart,создание сайта на opencart,модули для сайта,социальные сайты,как сделать сайт на opencart,
                  opencart search module,opencart файлы для скачивания,все для opencart,мобильная версия opencart,описание интернет магазина,
                  создание сайта opencart"
]);
$this->registerMetaTag([
    'name' => 'description',
    'content' => "Веб-портал ISYMS. Создание модулей,сайтов, поддержка сайтов, создание веб-сервисов."
]);
$this->title = 'Официальный сайт ISYMS';
?>
<div class="site-index">
    <div class="body-content">
        <div class="row">
            <div class="top_info">
                <p>Портал веб-разработчика.</p>
            </div>
        </div>


        <div class="row">
            <div class="news_module">
                <?php foreach($news_index as $news){ ?>
                     <div class="col-md-4">
                         <div class="news_project">
                            <div class="news_name">
                                <a href="/pages/<?=$news['id']?>"><?=$news['name']?></a>
                            </div>
                            <div class="news_decription">
                                <?php if(!empty($news['image'])) { ?>
                                    <div class="news_image">
                                        <img  src="/web/image/posts/banner_posts/<?=$news['id']?>/<?=$news['image']?>" />
                                    </div>
                                 <?php } ?>

                            <?=$news['meta-description']?>
                            </div>

                            <div class="data">
                            <?=$news['data']?>
                            </div>

                         </div>
                     </div>

                   <?php } ?>
                <div class="col-md-12">
                    <div class="pagination_blog">
                        <?php
                        echo LinkPager::widget([
                            'pagination' => $pages,
                        ]);
                        ?>
                    </div>
                </div>
            </div>
      </div>

    </div>
</div>
