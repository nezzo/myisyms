<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;


$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <div class="contact_title"><p><?= Html::encode($this->title) ?></p></div>
    <div class="block_contact">
        <?php foreach($contact as $contacts); ?>
          <p>Email: <?=$contacts['email']?></p>
          <p>Skype: <?=$contacts['skype']?></p>
    </div>
    
</div>
