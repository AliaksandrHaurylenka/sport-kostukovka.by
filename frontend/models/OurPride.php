<?php

namespace frontend\models;

use yii\db\ActiveRecord;

class OurPride extends ActiveRecord
{
	public static function tableName()
    {
        return 'our_pride';
    }
}