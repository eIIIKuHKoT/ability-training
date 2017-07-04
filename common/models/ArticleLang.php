<?php

namespace common\models;

use Yii;
use frontend\models\Lang;
/**
 * This is the model class for table "article_lang".
 *
 * @property integer $id_article
 * @property integer $id_lang
 * @property string $preview
 * @property string $title
 * @property string $text
 * @property string $meta_desc
 * @property string $meta_title
 * @property string $meta_keywords
 *
 * @property Article $idArticle
 * @property Lang $idLang
 */
class ArticleLang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article_lang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_article', 'id_lang'], 'required'],
            [['id_article', 'id_lang'], 'integer'],
            [['preview', 'text', 'meta_desc'], 'string'],
            [['title', 'meta_title', 'meta_keywords'], 'string', 'max' => 255],
            [['id_article', 'id_lang'], 'unique', 'targetAttribute' => ['id_article', 'id_lang'], 'message' => 'The combination of Id Article and Id Lang has already been taken.'],
            [['id_article'], 'exist', 'skipOnError' => true, 'targetClass' => Article::className(), 'targetAttribute' => ['id_article' => 'id_article']],
            [['id_lang'], 'exist', 'skipOnError' => true, 'targetClass' => Lang::className(), 'targetAttribute' => ['id_lang' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_article' => 'Id Article',
            'id_lang' => 'Id Lang',
            'preview' => 'Preview',
            'title' => 'Title',
            'text' => 'Text',
            'meta_desc' => 'Meta Desc',
            'meta_title' => 'Meta Title',
            'meta_keywords' => 'Meta Keywords',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdArticle()
    {
        return $this->hasOne(Article::className(), ['id_article' => 'id_article']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdLang()
    {
        return $this->hasOne(Lang::className(), ['id' => 'id_lang']);
    }
}
