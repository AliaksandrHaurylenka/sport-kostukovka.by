<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "service".
 *
 * @property integer $id_service
 * @property string $service
 * @property double $price
 * @property double $price_the_evening
 * @property double $price_5_lessons
 * @property double $price_10_lessons
 * @property double $price_other
 */
class Service extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'service';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['service'], 'required'],
            [['service'], 'string'],
            [['price', 'price_the_evening', 'price_5_lessons', 'price_10_lessons', 'price_other'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_service' => 'Id Service',
            'service' => 'Service',
            'price' => 'Price',
            'price_the_evening' => 'Price The Evening',
            'price_5_lessons' => 'Price 5 Lessons',
            'price_10_lessons' => 'Price 10 Lessons',
            'price_other' => 'Price Other',
        ];
    }
}
