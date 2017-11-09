<?php

namespace frontend\models;

use yii\db\ActiveRecord;

class Carousel extends ActiveRecord
{
	public static function tableName()
    {
        return 'carousel';
    }
}