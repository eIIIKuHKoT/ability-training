<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\grid\GridView;
use yii\grid\DataColumn;
use yii\grid\CheckboxColumn;
use frontend\components\LangUrlManager;

$this->title = 'Articles';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="lang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Lang'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //          'id_article',
            [
                'class' => DataColumn::className(), // Не обязательно
                'value' => function ($data) {
                    return Html::a(
                        '',
                        '#',
                        [
                            'title' => '',
                            'target' => '_blank'
                        ]
                    );
                },
                'format' => 'raw',
                'label' => 'Article Link',
            ],
            'image:image:Preview Image',
            [
                'class' => 'yii\grid\CheckboxColumn',
                'header' =>  'Published',

                'checkboxOptions' => function ($model, $key, $index, $column) {
                    return ['value' => $model->published, 'checked' => $model->published,
                        'disabled' => true
                    ];
                }
            ],

            [
                'attribute' => 'date_update',
                'format' => ['date', 'HH:mm:ss dd.MM.Y'],
                'options' => ['width' => '100']
            ],
            [
                'attribute' => 'date_create',
                'format' => ['date', 'HH:mm:ss dd.MM.Y'],
                'options' => ['width' => '100']
            ],


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>