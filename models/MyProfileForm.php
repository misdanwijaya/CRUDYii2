<?php

namespace app\models;

use yii\base\Model;

class MyProfileForm extends Model
{
    public $username;
    public $email;
    public $phone;
    public $website;
    public $about;

    public $photo;
    public $hobby;
    public $gender;
    public $jobs;

    public function rules()
    {
        return [
            ['username', 'required','message' => 'Username gak boleh kosong'],
            ['username', 'string','max'=>'20'],

            ['email', 'required','message' => 'E-mail gak boleh kosong'],
            ['email', 'email'],

            ['website', 'url'],

            ['phone', 'string', 'length'=>[7, 12]],

            ['about', 'string'],

            ['hobby', 'string'],

            ['gender', 'string'],

            ['jobs', 'string'],

            ['photo', 'file', 'extensions' => ['png', 'jpg', 'gif'], 'maxSize' => 1024*1024],
        ];
    }
}
