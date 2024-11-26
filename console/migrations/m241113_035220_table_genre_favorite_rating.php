<?php

use yii\db\Migration;

/**
 * Class m241113_035220_table_genre_favorite_rating
 */
class m241113_035220_table_genre_favorite_rating extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // Tabel genres
        $this->createTable('{{%table_genres}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
        ]);

        // Tabel pivot novel_genres
        $this->createTable('{{%table_novel_genres}}', [
            'novel_id' => $this->integer()->notNull(),
            'genre_id' => $this->integer()->notNull(),
        ]);

        // Tabel favorites
        $this->createTable('{{%table_favorites}}', [
            'id' => $this->primaryKey(),
            'novel_id' => $this->integer()->notNull(),
            'user_id' => $this->integer()->notNull(),
            'created_at' => $this->integer()->notNull(),
        ]);

        // Tabel ratings
        $this->createTable('{{%table_ratings}}', [
            'id' => $this->primaryKey(),
            'novel_id' => $this->integer()->notNull(),
            'user_id' => $this->integer()->notNull(),
            'rating' => $this->decimal(2, 1)->notNull(),
            'created_at' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%table_ratings}}');
        $this->dropTable('{{%table_favorites}}');
        $this->dropTable('{{%table_novel_genres}}');
        $this->dropTable('{{%table_genres}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m241113_035220_table_genre_favorite_rating cannot be reverted.\n";

        return false;
    }
    */
}
