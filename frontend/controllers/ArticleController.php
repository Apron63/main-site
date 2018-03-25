<?php
namespace frontend\controllers;

use yii\web\Controller;

/**
 * Article controller
 */
class ArticleController extends Controller
{

    public function actionYiiBootstrap4()
    {
        return $this->render('YiiBootstrap-4');
    }

    public function actionYiiAndSymfony()
    {
        return $this->render('YiiAndSymfony');
    }

    public function actionNostalgie()
    {
        return $this->render('nostalgie');
    }

    public function actionHacks()
    {
        return $this->render('hacks');
    }

    public function actionFirst()
    {
        echo 'Test!';
    }
}
