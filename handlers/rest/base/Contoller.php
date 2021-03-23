<?php

class Contoller extends \yii\base\Controller {

    /**
     * @var string
     */
    private $user;

    /**
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param string $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

}