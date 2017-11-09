<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "coach".
 *
 * @property integer $id_coach
 * @property string $name
 * @property string $name_en
 * @property integer $id_sport_section
 * @property string $description
 * @property string $archive
 */
class Coach extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'coach';
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
            [['archive'], 'string', 'max' => 7],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_coach' => 'Id Coach',
            'name' => 'Name',
            'name_en' => 'Name En',
            'id_sport_section' => 'Id Sport Section',
            'description' => 'Description',
            'archive' => 'Archive',
        ];
    }
}
