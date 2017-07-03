<?php

use yii\db\Migration;

class m170703_182343_article_table extends Migration
{
    public function safeUp()
    {

        $this->createTable('article',[
            'id_article' => $this->primaryKey(),
            'url' => $this->string(255)->notNull(),
            'preview' => $this->string(255)->notNull(),
            'published' => $this->smallInteger()->defaultValue(0),
            'date_update' => $this->integer()->notNull(),
            'date_create' => $this->integer()->notNull(),
        ]);

        $this->createTable('article_lang',[
            'id_article' => $this->integer(11)->notNull(),
            'id_lang' => $this->integer(11)->notNull(),
            'preview' => $this->text(),
            'title' => $this->string(255)->notNull(),
            'text' => $this->text()->notNull(),
            'meta_desc' => $this->string(255)->notNull(),
            'meta_title' => $this->string(255)->notNull(),
            'meta_keywords' => $this->string(255)->notNull(),
        ]);

        $this->createIndex('idx_article_lang','article_lang',[
            'id_article','id_lang'
        ],true);


    }

    public function safeDown()
    {
        $this->dropTable('article');
        $this->dropTable('article_lang');

        return false;
    }


}
