<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\grid\GridView;
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
  //          'url:url',
            'image',
            'published',
            'date_update',
            'date_create',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>