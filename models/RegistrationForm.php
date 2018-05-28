<?php

namespace app\models;

use yii\base\Model;

class RegistrationForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $confirm_password;
    public $website;
    public $phone;

    public function rules()
    {
        return [
            ['username', 'required','message' => 'Username gak boleh kosong'],
            ['username', 'string','max'=>'20'],
            ['email', 'required','message' => 'E-mail gak boleh kosong'],
            ['email', 'email'],
            ['password', 'required','message' => 'Password gak boleh kosong'],
            ['confirm_password', 'required','message' => 'Confirm password gak boleh kosong'],
        ];
    }
}
