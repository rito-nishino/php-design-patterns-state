<?php

namespace App\State;

use App\State\Interfaces\StateInterface;

class OfflineState implements StateInterface
{
    private static $instance = null;

    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new OfflineState();
        }
        return self::$instance;
    }

    public function nextState()
    {
        return OnlineState::getInstance();
    }

    public function getStatus()
    {
        return '<span style="color: darkgray;">オフライン</span>';
    }

    public final function __clone()
    {
        throw new \Exception('This Instance is Not Clone');
    }

    public final function __wakeup()
    {
        throw new \Exception('This Instance is Not unserialize');
    }
}