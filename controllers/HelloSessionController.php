<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

class HelloSessionController extends Controller
{

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    //session data

    public function actionIndex()
    {
        $session = Yii::$app->session;
        $session->set('language', 'en-US');
        $session->set('dialect', 'California');

        echo "Memasang session di halaman index";
    }

    public function actionDisplay()
    {
        $session = Yii::$app->session;
        echo $session->get('language');
        echo "<br/>";
        echo $session->get('dialect');
    }

    public function actionDestroy()
    {
        $session = Yii::$app->session; 

        $session->remove('language');
        $session->remove('dialect');

        echo "Menghapus session";
    }

    //flash data
    public function actionFlashData()
    {
        $session = Yii::$app->session; 

        $session->setFlash('message', 'Ini adalah pesan flash data dari hello-session/flash-data...');
        $session->setFlash('message_kedua', 'Ini adalah pesan kedua flash data dari hello-session/flash-data...');
        $session->setFlash('message_ketiga', 'Ini adalah pesan ketiga flash data dari hello-session/flash-data...');

        return $this->redirect('/hello-yii/web/index.php/hello-session/flash-display');
    }

    public function actionFlashDisplay()
    {
        $session = Yii::$app->session; 

        echo "Menampilkan flash data... <br/>";

        echo $session->getFlash('message');
        echo "<br/>";
        echo $session->getFlash('message_kedua');
        echo "<br/>";
        echo $session->getFlash('message_ketiga');
    }

}