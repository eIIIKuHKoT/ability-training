<?php

use yii\db\Migration;

class m170704_075303_article_keys extends Migration
{
    public function safeUp()
    {

            $this->addForeignKey('fk_article-lang_article_id','article_lang','id_article','article','id_article','CASCADE','CASCADE');
            $this->addForeignKey('fk_article-lang_lang_id','article_lang','id_lang','lang','id','RESTRICT','CASCADE');


    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_lang_article_id','article_lang');
        $this->dropForeignKey('fk_lang_id','article_lang');
        return false;
    }
}
