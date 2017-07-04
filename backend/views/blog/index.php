<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\grid\GridView;
use yii\grid\DataColumn;
use frontend\components\LangUrlManager;
$this->title = 'Articles';
$this->params['breadcrumbs'][] = $this->title;

$q = new LangUrlManager();
var_dump(Yii::$app->urlManager->baseUrl);
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
                'value' => function($data){
                    return Html::a(
                        'asd',
                        Yii::$app->urlManager->baseUrl.'/blog/'.$data->url,
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
            'published',
            'date_update',
            'date_create',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>