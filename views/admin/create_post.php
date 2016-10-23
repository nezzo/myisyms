<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
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
                'id' => 'login-form',
                'options' => ['class' => 'form-horizontal'],
                'fieldConfig' => [
                    'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                    'labelOptions' => ['class' => 'col-lg-1 control-label'],
                ],
            ]); ?>

            <?= $form->field($model, 'name_post')->textInput(['autofocus' => true]) ?>
            <?= $form->field($model, 'meta_title')->textInput(['autofocus' => true]) ?>
            <?= $form->field($model, 'image')->textInput(['autofocus' => true]) ?>
            <?= $form->field($model, 'description')->textInput(['autofocus' => true]) ?>
            <?= $form->field($model, '$keywords')->textInput(['autofocus' => true]) ?>

            <div class="form-group">
                <div class="col-lg-offset-1 col-lg-11">
                    <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>
            </div>
            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>