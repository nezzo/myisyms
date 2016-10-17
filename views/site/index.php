<?php

/* @var $this yii\web\View */

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
                            <?=$news['name']?>
                            </div>
                            <div class="news_decription">
                            <?=$news['decription']?>
                            </div>
                            <div class="data">
                            <?=$news['data']?>
                            </div>
                         </div>    
                     </div>    
                
                   <?php } ?>
            </div>
      </div> 

    </div>
</div>
