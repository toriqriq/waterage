<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TableNovel $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="table-novel-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_novel')->textInput() ?>

    <?= $form->field($model, 'judul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'penulis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sinopsis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'genre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_rilis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sampul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
