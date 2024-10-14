<?php

use yii\db\Migration;

/**
 * Class m241014_063340_table_novel
 */
class m241014_063340_table_novel extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {

        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // https://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%table_novel}}', [
            'id' => $this->primaryKey(),
            'id_novel' => $this->integer(),
            'judul' => $this->string()->notNull(),
            'penulis' => $this->string()->notNull(),
            'sinopsis' => $this->string()->notNull(),
            'genre' => $this->string()->notNull(),
            'tanggal_rilis' => $this->string()->notNull(),
            'sampul' => $this->string()->notNull(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),

            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%table_novel}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m241014_063340_table_novel cannot be reverted.\n";

        return false;
    }
    */
}
