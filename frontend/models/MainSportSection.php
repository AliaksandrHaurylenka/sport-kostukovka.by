<?php

namespace frontend\models;

use yii\db\ActiveRecord;

class MainSportSection extends ActiveRecord
{
	public static function tableName()
    {
        return 'main_sport_section';
    }	
}