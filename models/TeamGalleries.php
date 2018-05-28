<?php

namespace app\models;

use yii\db\ActiveRecord;

class TeamGalleries extends ActiveRecord
{
    public $teamsCount;

    public static function tableName()
    {
        return 'team_galleries';
    }

    public function getTeam(){
        return $this->hasOne(Teams::className(), ['id' => 'team_id']);
    }
}