<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title = 'Создать пост ISYMS';

/*Если Ip адресс и сессия не совпадают то мы редиректим на страницу с ошибкой*/
$session = Yii::$app->session;
if ($session['admin_ip'] != $_SERVER["REMOTE_ADDR"]){
    header('Location: http://'.$_SERVER['HTTP_HOST'].'/'.'error');
    die();
}
?>
<div class="post-create" xmlns="http://www.w3.org/1999/html">
    <div class="col-md-12">
        <a href="/blog" class="btn btn-primary btn-sm create_post"><- Назад</a>
    </div>
    <div class="row">

        <?php foreach($mas as $massiv) { ?>
        <div class="post">
            <?php $form = ActiveForm::begin([
                'id' => 'edit-form',
                'options' => ['class' => 'form-horizontal'],
                'fieldConfig' => [
                    'template' => "{label}\n<div class=\"col-lg-4\">{input}</div>\n<div class=\"col-lg-6\">{error}</div>",
                    'labelOptions' => ['class' => 'col-lg-2 control-label'],
                ],
            ]); ?>
            <?= $form->field($model, 'name')->textInput(['autofocus' => true,'style'=>'width:600px;','value' => $massiv["name"]])->label("Имя поста") ?>
            <?= $form->field($model, 'meta')->textInput(['style'=>'width:600px;','value' => $massiv["meta-title"]])->label("Мета-title") ?>
            <?= $form->field($model, 'description')->textArea(['style'=>'width:600px; height:300px;','value' => $massiv["description"]])->label("Описание") ?>
            <?= $form->field($model, 'keywords')->textInput(['style'=>'width:600px;','value' => $massiv["keywords"]])->label("Ключевые слова") ?>

            <div class="form-group">
                <div class="col-lg-offset-1 col-lg-11">
                    <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary save_button', 'name' => 'save-button']) ?>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
        <?php } ?>

    </div>
    <script src="/assets/tinymce/js/tinymce/tinymce.min.js"></script>

<script>tinymce.init({
        selector:'textarea',
        menu: {
            file: {title: 'File', items: 'newdocument'},
            edit: {title: 'Edit', items: 'undo redo | cut copy paste pastetext | selectall'},
            insert: {title: 'Insert', items: 'link media | template hr'},
            view: {title: 'View', items: 'visualaid'},
            format: {title: 'Format', items: 'bold italic underline strikethrough superscript subscript | formats | removeformat'},
            table: {title: 'Table', items: 'inserttable tableprops deletetable | cell row column'},
            tools: {title: 'Tools', items: 'spellchecker code'}
        },
        height : 300,
        width: 600,
        mode: 'textareas',
        preview_styles: false,
        resize: false,
        toolbar: [
            'undo redo | styleselect | bold italic | link image',
            'alignleft aligncenter alignright'
        ]

    });</script>
</div>