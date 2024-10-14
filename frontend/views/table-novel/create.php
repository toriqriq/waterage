<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TableNovel $model */

$this->title = 'Create Table Novel';
$this->params['breadcrumbs'][] = ['label' => 'Table Novels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="table-novel-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
