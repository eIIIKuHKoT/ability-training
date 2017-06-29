<?php

use yii\db\Migration;

class m170629_104053_lang extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%lang}}', [
            'id' => $this->primaryKey(),
            'url' => $this->string(255)->notNull(),
            'local' => $this->string(255)->notNull(),
            'name' => $this->string(255)->notNull(),
            'default' => $this->smallInteger()->defaultValue(0),
            'enabled' => $this->smallInteger()->defaultValue(0),
            'date_update' => $this->integer()->notNull(),
            'date_create' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->batchInsert('lang', ['url', 'local', 'name', 'default', 'enabled', 'date_update', 'date_create'], [
            ['en', 'en', 'English', 0, 1,  time(), time()],
            ['ru', 'ru', 'Русский', 0, 0, time(), time()],
            ['uk', 'uk', 'Українська', 1, 1, time(), time()],
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%lang}}');
    }
}
