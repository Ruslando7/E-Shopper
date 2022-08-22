<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%yii2loc}}`.
 */
class m220822_150038_create_yii2loc_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%contact}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'email' => $this->string(255)->notNull(),
            'subject' => $this->string(255)->notNull(),
            'text' => $this->text()->notNull(),
            'date' => $this->dateTime()->notNull(),
        ]);

        $this->createTable('{{%order}}', [
            'id' => $this->primaryKey(),
            'created_at' => $this->dateTime()->notNull(),
            'updated_at' => $this->dateTime()->notNull(),
            'qty' => $this->integer(10)->notNull(),
            'sum' => $this->float()->notNull(),
            'status' => 'ENUM("0", "1") NOT NULL',
            'name' => $this->string(255)->notNull(),
            'email' => $this->string(255)->notNull(),
            'phone' => $this->string(255)->notNull(),
            'address' => $this->string(255)->notNull(),
        ]);

        $this->createTable('{{%order_item}}', [
            'id' => $this->primaryKey(),
            'order_id' => $this->integer(10)->notNull(),
            'product_id' => $this->integer(10)->notNull(),
            'name' => $this->string(255)->notNull(),
            'price' => $this->float()->notNull(),
            'qty_item' => $this->integer(11)->notNull(),
            'sum_item' => $this->float()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%contact}}');
        $this->dropTable('{{%order}}');
        $this->dropTable('{{%order_item}}');
    }
}
