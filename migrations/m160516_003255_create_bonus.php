<?php

namespace jumper423\module\bonus\migrations;

use yii\db\Migration;

/**
 * Class m160516_003255_create_bonus
 */
class m160516_003255_create_bonus extends Migration
{
    public function up()
    {
        $this->createTable(
            '{{%bonus}}',
            [
                'id' => $this->primaryKey(),
                'series' => $this->string(64)->notNull(),
                'number' => $this->integer()->notNull()->unique(),
                'generate_at' => $this->integer()->notNull(),
                'completion_at' => $this->integer()->notNull(),
                'use_at' => $this->integer(),
                'active' => $this->boolean()->defaultValue(true)->notNull(),
            ]
        );
        $this->createIndex('bonus_number_INDEX', '{{%bonus}}', 'number', true);
    }

    public function down()
    {
        $this->dropTable('{{%bonus}}');
    }
}
