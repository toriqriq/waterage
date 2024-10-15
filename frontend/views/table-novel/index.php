<?php

use app\models\TableNovel;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Table Novels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="table-novel-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Table Novel', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>ID</th>
                <th>ID Novel</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Sinopsis</th>
                <th>Genre</th>
                <th>Tanggal Rilis</th>
                <th>Sampul</th>
                <th>Status</th>
                <th>Dibuat Pada</th>
                <th>Diperbarui Pada</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php


            foreach ($dataProvider->models as $index => $model): ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= $model->id ?></td>
                    <td><?= $model->id_novel ?></td>
                    <td><?= $model->judul ?></td>
                    <td><?= $model->penulis ?></td>
                    <td><?= $model->sinopsis ?></td>
                    <td><?= $model->genre ?></td>
                    <td><?= $model->tanggal_rilis ?></td>
                    <td>
                        <?= Html::img('@web/' . $model->sampul, ['alt' => 'Sampul', 'style' => 'width:50px;height:auto;']) ?>
                    </td>
                    <td><?= $model->status ?></td>
                    <td><?= $model->created_at ?></td>
                    <td><?= $model->updated_at ?></td>
                    <td>
                        <?= Html::a('View', ['view', 'id' => $model->id], ['class' => 'btn btn-info']) ?>
                        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-warning']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                            'class' => 'btn btn-danger',
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                        ]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


</div>