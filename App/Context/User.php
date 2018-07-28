<?php

namespace App\Context;

use App\State\OnlineState;

class User
{
    private $name;
    private $state;

    public function __construct($name)
    {
        $this->name = $name;
        $this->state = OnlineState::getInstance();
    }

    public function getName()
    {
        return $this->name;
    }

    public function changeState()
    {
        $this->state = $this->state->nextState();
    }

    public function getStatus()
    {
        return $this->state->getStatus();
    }
}