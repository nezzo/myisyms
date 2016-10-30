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
<div class="row">
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
</div>
</div>
