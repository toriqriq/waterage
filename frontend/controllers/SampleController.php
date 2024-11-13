<?php

// SampleController.php
namespace frontend\controllers;

use app\models\TableNovel;
use Yii;
use yii\web\Controller;
use yii\web\Response;

class SampleController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionGetData1()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        // Data untuk tampilan 1
        $data = TableNovel::find()->all();

        return $data;
    }

    public function actionGetData2()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;

        // Data untuk tampilan 2
        $data = TableNovel::find()->all();

        return $data;
    }

    public function actionGetData3()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;

        // Data untuk tampilan 3
        $data = [
            ['id' => 1, 'name' => 'Item 1 from Data 3'],
            ['id' => 2, 'name' => 'Item 2 from Data 3'],
        ];

        return $data;
    }
}
