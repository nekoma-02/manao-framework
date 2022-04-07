<?php

namespace Fw\Core;

class Config {

    private static $data;

    public static function get($keys) {
        self::$data = require_once('fw/config.php');

        $result = self::$data;
        $keys = explode('/',$keys);

        foreach($keys as $key) {
            $result = $result[$key];
        }

        return $result;
    }

}

