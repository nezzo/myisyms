<?php
/*Регистрация тегов keywords*/
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => "$keywords"
]);
$this->registerMetaTag([
    'name' => 'description',
    'content' => "$meta_description"
]);
$this->title = "$title ISYMS";
?>
<div class="row" xmlns="http://www.w3.org/1999/html">
<div class="col-md-9">
<div class="page_content">
    <div class="tab-data">
            <?=$data?>
        </div>
    <div class="page_name">
        <h1><?=$name?></h1>
    </div>
    <div class="tab-content">
       <div class="tab-active">
            <?=$description?>
        </div>
     </div>
</div>
</div>
<div class="col-md-3">
   <div class="page_widget">
       <div class="head_news_page_widget">
           <p>Новости</p>
       </div>
       <div class="block_news_page_widget">
           <?php foreach ($news_widget as $news) {?>
               <a href="/pages/<?=$news['id']?>"><p><?=$news['name']?></p></a>
           <?php } ?>
       </div>
   </div>
    <div class="share_pluso">
        <div class="share_pluso_text">
        <p>Понравилась запись? Поделитесь ею.</p>
        </div>
        <div class="pluso_widget">
            <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
            <script src="//yastatic.net/share2/share.js"></script>
            <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,gplus,twitter,blogger,linkedin"></div>
        </div>
    </div>
</div>

</div>
