<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "events".
 *
 * @property integer $id_events
 * @property string $name_events
 * @property string $photo
 * @property string $text_events
 * @property string $date
 */
class Events extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'events';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_events', 'text_events', 'date'], 'required'],
            [['name_events', 'photo', 'text_events'], 'string'],
            [['date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_events' => 'Id Events',
            'name_events' => 'Name Events',
            'photo' => 'Photo',
            'text_events' => 'Text Events',
            'date' => 'Date',
        ];
    }
}
