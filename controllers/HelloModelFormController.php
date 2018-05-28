<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\models\TeamsForm;
use app\models\RegistrationForm;
use app\models\MyProfileForm;

class HelloModelFormController extends Controller
{

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        $model = new TeamsForm();
        $data = array (
                'model'=>$model,
            );

        if ($model->load(Yii::$app->request->post('TeamsForm')) && $model->validate()) {

        } else {

        }

        return $this->render('index', $data);
    }

    //untuk registrasi
    public function actionRegistration()
    {
        $model = new RegistrationForm();
        $data = array (
                'model'=>$model,
            );

        if ($model->load(Yii::$app->request->post('RegistrationForm')) && $model->validate()) {

        } else {

        }

        return $this->render('registration', $data);
    }

    //edit profil
    public function actionMyProfile()
    {
        $model = new MyProfileForm();
        $data = array (
                'model'=>$model,
            );

        if ($model->load(Yii::$app->request->post('MyProfileForm')) && $model->validate()) {

        } else {

        }

        return $this->render('my-profile', $data);
    }
}