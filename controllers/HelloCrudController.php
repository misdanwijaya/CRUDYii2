<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\helpers\Url;
use yii\web\UploadedFile;

use app\models\Teams;
use app\models\Leagues;
use app\models\TeamsForm;
use app\models\TeamGalleries;
use app\models\TeamGalleriesForm;

class HelloCrudController extends Controller
{

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index',],
                'rules' => [
                    [
                        'actions' => ['index',],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    //list awal
    public function actionIndex()
    {
        $query = Teams::find();
        $teams = $query->orderBy('id')
            ->all();

        return $this->render('index', ['teams'=>$teams]);
    }

    //detail
    public function actionDetail($id)
    {
        $team = Teams::findOne(['id'=>$id]);
        return $this->render('detail', ['team'=>$team]);
    }

    //add
    public function actionAdd()
    {
        $forms = new TeamsForm();

        if ($forms->load(Yii::$app->request->post()) && $forms->validate())
        {
            $request = Yii::$app->request;

            $team = new Teams();
            $team->name = $request->post('TeamsForm')['name'];
            $team->description = $request->post('TeamsForm')['description'];
            $team->country = $request->post('TeamsForm')['country'];
            $team->league_id = $request->post('TeamsForm')['league_id'];
            $team->save();

            return $this->redirect(Url::to(['hello-crud/index']));
        }
        else 
        {
            $leagues = Leagues::find()->select(['name', 'id'])
                                        ->indexBy('id')
                                        ->column();

                return $this->render('add', ['forms'=>$forms, 'leagues'=>$leagues]);

        }
    }

    //edit
    public function actionEdit($id)
    {
        $forms = new TeamsForm();

        if ($forms->load(Yii::$app->request->post()) && $forms->validate())
        {
            $request = Yii::$app->request;

            $team = Teams::findOne(['id', $id]);
            $team->name = $request->post('TeamsForm')['name'];
            $team->description = $request->post('TeamsForm')['description'];
            $team->country = $request->post('TeamsForm')['country'];
            $team->league_id = $request->post('TeamsForm')['league_id'];
            $team->save();

            return $this->redirect(Url::to(['hello-crud/detail', 'id'=>$id]));
        }
        else 
        {
            $team = Teams::findOne(['id', $id]);
            $leagues = Leagues::find()->select(['name', 'id'])
                                        ->indexBy('id')
                                        ->column();

            return $this->render('edit', ['forms'=>$forms, 'leagues'=>$leagues, 'team'=>$team]);

        }
    }

    //delete satu tim
    public function actionDelete($id)
    {
        $team = Teams::findOne(['id' => $id]);
        $team->delete();

        return $this->redirect(Url::to(['hello-crud/index']));
    }

    //delete semua
    public function actionDeleteAll()
    {
        Teams::deleteAll();
        return $this->redirect(Url::to(['hello-crud/index']));
    }

    //untuk galeri
    public function actionGallery($id)
    {
        $team = Teams::findOne(['id' => $id]);
        $galleries = TeamGalleries::find()->where(['team_id' => $id])->orderBy('id')->all();
        return $this->render('gallery', ['team'=>$team, 'galleries'=>$galleries]);
    }

    //tambah galeri
    public function actionAddPhoto($id)
    {
        $forms = new TeamGalleriesForm();

        if ($forms->load(Yii::$app->request->post()) && $forms->validate())
        {
            $request = Yii::$app->request;
            $forms->photo = UploadedFile::getInstance($forms, 'photo');

            $team = new TeamGalleries();
            $team->name = $request->post('TeamGalleriesForm')['name'];
            $team->description = $request->post('TeamGalleriesForm')['description'];
            $team->team_id = $id;
            $team->save();

            $filepath = 'upload/'.$forms->photo->baseName.'_'.sha1($team->id).'.'.$forms->photo->extension;
            $forms->photo->saveAs($filepath);
            $team->filepath = $filepath;
            $team->save();

            return $this->redirect(Url::to(['hello-crud/gallery', 'id'=>$id]));
        }
        else 
        {
            $team = Teams::findOne(['id' => $id]);
            return $this->render('add_photo', ['team'=>$team, 'forms'=>$forms]);
        }
    }

    //edit photo
    public function actionEditPhoto($id, $gal_id)
    {

        $forms = new TeamGalleriesForm();

        if ($forms->load(Yii::$app->request->post()) && $forms->validate())
        {
            $request = Yii::$app->request;

            $photo = TeamGalleries::findOne(['id'=>$gal_id]);
            $photo->name = $request->post('TeamGalleriesForm')['name'];
            $photo->description = $request->post('TeamGalleriesForm')['description'];
            $photo->save();

            return $this->redirect(Url::to(['hello-crud/gallery', 'id'=>$id]));
        }
        else 
        {
            $team = Teams::findOne(['id' => $id]);
            $photo = TeamGalleries::findOne(['id'=>$gal_id]);
            return $this->render('edit_photo', ['team'=>$team, 'forms'=>$forms, 'photo'=>$photo]);
        }
    }

    //delete photo
    public function actionDeletePhoto($id, $gal_id)
    {
        $photo = TeamGalleries::findOne(['id'=>$gal_id]);
        unlink($photo->filepath);
        $photo->delete();

        return $this->redirect(Url::to(['hello-crud/gallery', 'id'=>$id]));        
    }
}