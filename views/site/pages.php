<?php
/*Регистрация тегов keywords*/
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => "$keywords"
]);
$this->title = "$title ISYMS";
?>

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
