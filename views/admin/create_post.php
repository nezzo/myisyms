<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\assets\TinymceAsset;

$this->title = 'Создать пост ISYMS';
?>

<?php
/*Если Ip адресс и сессия не совпадают то мы редиректим на страницу с ошибкой*/
$session = Yii::$app->session;
if ($session['admin_ip'] != $_SERVER["REMOTE_ADDR"]){
    header('Location: http://'.$_SERVER['HTTP_HOST'].'/'.'error');
    die();
}
?>
<div class="post-create">
    <div class="col-md-12">
        <a href="/blog" class="btn btn-primary btn-sm create_post"><- Назад</a>
    </div>
    <div class="row">
        <div class="post">

            <?php $form = ActiveForm::begin([
                'id' => 'post-form',
                'options' => ['class' => 'form-horizontal'],
                'fieldConfig' => [
                    'template' => "{label}\n<div class=\"col-lg-4\">{input}</div>\n<div class=\"col-lg-6\">{error}</div>",
                    'labelOptions' => ['class' => 'col-lg-2 control-label'],
                ],
            ]); ?>
            <?= $form->field($model, 'name')->textInput(['autofocus' => true,'style'=>'width:600px;'])->label("Имя поста") ?>
            <?= $form->field($model, 'meta')->textInput(['style'=>'width:600px;'])->label("Мета-title") ?>
            <?= $form->field($model, 'metadescription')->textInput(['style'=>'width:600px;'])->label("Мета-description") ?>
            <?= $form->field($model, 'description')->textArea(['style'=>'width:600px; height:300px;'])->label("Описание") ?>
            <?= $form->field($model, 'keywords')->textInput(['style'=>'width:600px;'])->label("Ключевые слова") ?>

            <div class="form-group">
                <div class="col-lg-offset-1 col-lg-11">
                    <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary save_button', 'name' => 'save-button']) ?>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
<?php TinymceAsset::register($this);?>