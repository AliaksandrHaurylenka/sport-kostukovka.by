<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "our_pride".
 *
 * @property integer $id_our_pride
 * @property string $name
 * @property string $name_en
 * @property integer $id_sport_section
 * @property string $description
 */
class OurPride extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'our_pride';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'name_en', 'id_sport_section'], 'required'],
            [['id_sport_section'], 'integer'],
            [['description'], 'string'],
            [['name', 'name_en'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_our_pride' => 'Id Our Pride',
            'name' => 'Name',
            'name_en' => 'Name En',
            'id_sport_section' => 'Id Sport Section',
            'description' => 'Description',
        ];
    }
}
