<?php
$id = intval($_GET['p']);

if($id==0){
   echo "Пожалуйста введите корректные данные!";
   exit();
}
?>

<div class="page_content">
    <div class="page_name">
        <?=$page['name']?>
    </div>
    <div class="tab-content">
        <div class="tab-image">
            
        </div>
        <div class="tab-active">
            
        </div>
    </div>
</div>
