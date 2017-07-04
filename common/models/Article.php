<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "article".
 *
 * @property integer $id_article
 * @property string $url
 * @property string $image
 * @property integer $published
 * @property integer $date_update
 * @property integer $date_create
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['url', 'image', 'date_update', 'date_create'], 'required'],
            [['published', 'date_update', 'date_create'], 'integer'],
            [['url', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_article' => 'Id Article',
            'url' => 'Url',
            'image' => 'Image',
            'published' => 'Published',
            'date_update' => 'Date Update',
            'date_create' => 'Date Create',
        ];
    }
}
