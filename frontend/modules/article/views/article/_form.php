<?php

use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\InputFile;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\elfinder\ElFinder;

/* @var $this yii\web\View */
/* @var $model common\models\Article */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="article-form">

    <?php $form = ActiveForm::begin();

    echo $form->field($model, 'title')->textInput(['maxlength' => true]);

    echo $form->field($model, 'image')->widget(InputFile::className(), [
    'language'      => 'ru',
    'controller'    => 'elfinder',
    'filter'        => 'image',
    'template'      => '<label>Image</label><div class="input-group">{input}<span class="input-group-btn">{button}</span></div>',
    'options'       => ['class' => 'form-control'],
    'buttonOptions' => ['class' => 'btn btn-primary'],
    'multiple'      => false,
    'name' => 'Article[image]',
    'id' => 'article-image',
    'value' => $model->image,
    'buttonName' => 'Select image',
    ]);

    echo $form->field($model, 'text')->widget(CKEditor::className(),[
        'editorOptions' => ElFinder::ckeditorOptions('elfinder',[]),
    ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
