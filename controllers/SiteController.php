<?php
namespace frontend\controllers;

use qiyu\Controller;

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
        return $this->render('index.tpl');
    }

    public function actionTest()
    {
        $this->layout = false;
        return $this->render('test.tpl', ['test' => 'smarty']);
    }
}
