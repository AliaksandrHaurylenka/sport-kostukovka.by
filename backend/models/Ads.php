<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ads".
 *
 * @property integer $id_ads
 * @property string $name_ads
 * @property string $text_ads
 * @property string $date
 */
class Ads extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ads';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_ads', 'text_ads', 'date'], 'required'],
            [['name_ads', 'text_ads'], 'string'],
            [['date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_ads' => 'Id Ads',
            'name_ads' => 'Name Ads',
            'text_ads' => 'Text Ads',
            'date' => 'Date',
        ];
    }
}
