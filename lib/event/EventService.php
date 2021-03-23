<?php


class EventService
{
    public function deleteEvent(\app\models\Event $event) {
        $event->delete();
    }
}