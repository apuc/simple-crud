<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Article */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="article-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?php
    echo DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
//            'text:ntext',
            [
                'format' => 'raw',
                'label' => 'Image',
                'value' => function ($data) {
                    return Html::tag('img', null, [
                        'src' => Url::to('@web' . $data->image),
                        'width' => '480px', 'class' => 'scale']);
                },
            ],
        ],
    ]);

    echo "<p><b>Text:</b></p>\n";
    echo '<div class="container">' . $model->text . '</div>';

    ?>

</div>
