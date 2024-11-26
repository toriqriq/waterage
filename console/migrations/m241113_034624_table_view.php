<?php

use yii\db\Migration;

/**
 * Class m241113_034624_table_view
 */
class m241113_034624_table_view extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // https://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%table_view}}', [
            'id' => $this->primaryKey(),
            'novel_id' => $this->integer()->notNull(),
            'chapter_id' => $this->integer()->defaultValue(null), // Optional
            'view_count' => $this->integer()->notNull()->defaultValue(0),
            'date' => $this->date()->notNull(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%table_view}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m241113_034624_table_view cannot be reverted.\n";

        return false;
    }
    */
}
