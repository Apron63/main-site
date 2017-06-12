<?php
namespace frontend\controllers;

use yii\web\Controller;

/**
 * Article controller
 */
class ArticleController extends Controller
{
    public function actionYiiAndSymfony()
    {
        return $this->render('YiiAndSymfony');
    }

    public function actionNostalgie()
    {
        return $this->render('nostalgie');
    }

    public function actionFirst()
    {
        echo 'Test!';
    }
}
