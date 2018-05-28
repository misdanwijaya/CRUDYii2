<?php

namespace app\models;

use yii\base\Model;

class TeamsForm extends Model
{
    public $name;
    public $country;
    public $description;
    public $league_id;

    public function attributeLabels()
    {
        return [
            'name' => 'Nama tim sepakbola',
            'country' => 'Negara asal',
            'description' => 'Tentang tim'
        ];
    }

    public function rules()
    {
        return [
            ['name', 'required','message' => 'Nama tim gak boleh kosong'],
            ['name', 'string','max'=>'20'],
            ['country', 'required','message' => 'Negara asal tim gak boleh kosong'],
            ['country', 'string','max'=>'25'],
        ];
    }
}