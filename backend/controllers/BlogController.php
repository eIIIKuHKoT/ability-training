<?php

namespace backend\controllers;

use common\models\Article;
use yii\data\ActiveDataProvider;
class BlogController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionArticles(){

        $dataProvider = new ActiveDataProvider([
            'query' => Article::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);

    }

}
