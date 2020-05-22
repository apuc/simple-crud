<?php

use mihaildev\elfinder\InputFile;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin();

echo '<div class="col-xs-6">';

echo $form->field($model, 'csv')->widget(InputFile::className(), [
    'language'      => 'ru',
    'controller'    => 'elfinder', // вставляем название контроллера, по умолчанию равен elfinder
   // 'filter'        => 'image',    // фильтр файлов, можно задать массив фильтров https://github.com/Studio-42/elFinder/wiki/Client-configuration-options#wiki-onlyMimes
    'template'      => '<label>Article</label><div class="input-group">{input}<span class="input-group-btn">{button}</span></div>',
    'options'       => ['class' => 'form-control'],
    'buttonOptions' => ['class' => 'btn btn-primary'],
    'multiple'      => false,       // возможность выбора нескольких файлов
    'name' => 'ReadForm[csv]',
    'id' => 'readform-csv',
    'value' => $model->csv,
    'buttonName' => 'Select article',
]);

echo Html::submitButton('Save', ['class' => 'btn btn-primary']);

echo '</div>';

ActiveForm::end();