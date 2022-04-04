<?php

namespace Fw\Core;

class Config {

    private static $data;

    public function __construct()
    {
        self::$data = require_once('fw/config.php');
    }

    public function get($keys) {
        $array = self::$data;

        $keys = explode('/',$keys);

        foreach($keys as $key) {
            $array = $array[$key];
        }

        return $array;
    }

}

