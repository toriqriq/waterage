<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "table_novel".
 *
 * @property int $id
 * @property int|null $id_novel
 * @property string $judul
 * @property string $penulis
 * @property string $sinopsis
 * @property string $genre
 * @property string $tanggal_rilis
 * @property string $sampul
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 */
class TableNovel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'table_novel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_novel', 'status', 'created_at', 'updated_at'], 'integer'],
            [['judul', 'penulis', 'sinopsis', 'genre', 'tanggal_rilis', 'sampul', 'created_at', 'updated_at'], 'required'],
            [['judul', 'penulis', 'sinopsis', 'genre', 'tanggal_rilis', 'sampul'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_novel' => 'Id Novel',
            'judul' => 'Judul',
            'penulis' => 'Penulis',
            'sinopsis' => 'Sinopsis',
            'genre' => 'Genre',
            'tanggal_rilis' => 'Tanggal Rilis',
            'sampul' => 'Sampul',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
