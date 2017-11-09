<?php

namespace frontend\models;

use yii\db\ActiveRecord;

class Coach extends ActiveRecord
{
	public static function tableName()
    {
        return 'coach';
    }
}