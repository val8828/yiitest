<?php
namespace app\models\event;

use app\models\Event;
/**
 * Class EventQuery
 *
 * @package beget\lib\customer\models\customer *
 * @method Event one($db=null)
 * @method Event[] all($db=null)
 */

class EventQuery extends \yii\db\ActiveQuery
{
    /**
     * @param $someShit
     * @return EventQuery
     */
    public function bySomeShit($someShit) {

        $a = Event::tableName();

        return $this->andWhere([$a.".column" => $someShit]);
    }
}