<?php

namespace Fw\Core;

class Config {

    private static $data;

    public static function get($keys) {
        self::$data = require_once('fw/config.php');

        $array = self::$data;
        $keys = explode('/',$keys);

        foreach($keys as $key) {
            $array = $array[$key];
        }

        return $array;
    }

}

