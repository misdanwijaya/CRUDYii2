<?php

namespace app\models;

use yii\db\ActiveRecord;

class Teams extends ActiveRecord
{
    public static function tableName()
    {
        return 'teams';
    }

    public function getLeague(){
        return $this->hasOne(Leagues::className(), ['id' => 'league_id']);
    }

    public function getGallery(){
        return $this->hasMany(TeamGalleries::className(), ['team_id' => 'id']);
    }
}