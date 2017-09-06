<?php
namespace frontend\controllers;

use qiyu\Controller;
use Yii;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionTest()
    {
        $this->layout = false;
        return $this->render('test.tpl', ['test' => 'smarty']);
    }
    public function actionJson()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $data = ['a' => 1, 'b' => 2];
        return $data;
    }
}
