<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "timetable".
 *
 * @property integer $id_timetable
 * @property string $photo_timetable
 * @property string $timetable
 * @property string $alt
 */
class Timetable extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'timetable';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['photo_timetable', 'timetable', 'alt'], 'required'],
            [['timetable'], 'string'],
            [['photo_timetable'], 'string', 'max' => 70],
            [['alt'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_timetable' => 'Id Timetable',
            'photo_timetable' => 'Photo Timetable',
            'timetable' => 'Timetable',
            'alt' => 'Alt',
        ];
    }
}
