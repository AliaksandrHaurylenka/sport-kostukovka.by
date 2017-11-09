<?php

namespace frontend\models;

use yii\db\ActiveRecord;

class Timetable extends ActiveRecord
{
	public static function tableName()
    {
        return 'timetable';
    }
}