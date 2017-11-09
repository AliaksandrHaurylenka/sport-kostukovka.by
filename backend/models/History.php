<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "history".
 *
 * @property integer $id_history
 * @property string $photo_name
 * @property string $alt
 * @property string $discription_men
 * @property string $where_history
 * @property integer $string
 */
class History extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'history';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['photo_name', 'alt', 'discription_men', 'where_history'], 'required'],
            [['alt', 'discription_men'], 'string'],
            [['string'], 'integer'],
            [['photo_name'], 'string', 'max' => 30],
            [['where_history'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_history' => 'Id History',
            'photo_name' => 'Photo Name',
            'alt' => 'Alt',
            'discription_men' => 'Discription Men',
            'where_history' => 'Where History',
            'string' => 'String',
        ];
    }
}
