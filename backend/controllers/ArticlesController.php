<?php

namespace backend\controllers;

use common\models\Article;
use yii\data\ActiveDataProvider;
class ArticlesController extends \yii\web\Controller
{
    public function actionIndex()
    {

        $dataProvider = new ActiveDataProvider([
            'query' => Article::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);

    }

}
