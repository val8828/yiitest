<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "event".
 *
 * @property int $id
 * @property int $eventIdInScada
 * @property int $objectId
 * @property string|null $technicalDescription
 * @property string|null $objectDescription
 * @property int|null $priorityNumber
 * @property string|null $eventRegistrationTime
 */
class Event extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'event';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['eventIdInScada', 'objectId'], 'required'],
            [['id', 'eventIdInScada', 'objectId', 'priorityNumber'], 'integer'],
            [['eventRegistrationTime'], 'safe'],
            [['technicalDescription', 'objectDescription'], 'string', 'max' => 150],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'eventIdInScada' => 'Event Id In Scada',
            'objectId' => 'Object ID',
            'technicalDescription' => 'Technical Description',
            'objectDescription' => 'Object Description',
            'priorityNumber' => 'Priority Number',
            'eventRegistrationTime' => 'Event Registration Time',
        ];
    }
}
