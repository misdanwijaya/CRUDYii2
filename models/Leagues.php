<?php

namespace app\models;

use yii\db\ActiveRecord;

class Leagues extends ActiveRecord
{
    public static function tableName()
    {
        return 'leagues';
    }
}