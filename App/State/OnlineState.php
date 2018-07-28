<?php

namespace App\State;

use App\State\Interfaces\StateInterface;

class OnlineState implements StateInterface
{
    private static $instance = null;

    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new OnlineState();
        }
        return self::$instance;
    }

    public function nextState()
    {
        return OfflineState::getInstance();
    }

    public function getStatus()
    {
        return '<span style="color: blue;">オンライン</span>';
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