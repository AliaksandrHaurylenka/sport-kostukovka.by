<?php

namespace frontend\models;

use yii\db\ActiveRecord;

class Ads extends ActiveRecord
{
	public static function tableName()
    {
        return 'ads';
    }
}