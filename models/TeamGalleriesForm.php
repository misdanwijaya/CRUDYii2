<?php

namespace app\models;

use yii\base\Model;

class TeamGalleriesForm extends Model
{
    public $name;
    public $description;
    public $photo;
    public $team_id;

    public function rules()
    {
        return [
            ['name', 'required','message' => 'Nama gambar gak boleh kosong'],
            ['name', 'string','max'=>'50'],
            ['description', 'string'],
            ['photo', 'file', 'extensions' => ['png', 'jpg', 'gif'], 'maxSize' => 1024*1024],
        ];
    }
}