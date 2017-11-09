<?php

namespace frontend\models;

use yii\db\ActiveRecord;

class History extends ActiveRecord
{
	public static function tableName()
    {
        return 'history';
    }
}