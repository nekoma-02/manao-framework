<?php

namespace Fw\Core;

class Application {

    public static $instance;
    private $__components = [];
    private $pager = null;
    private $template = null;


    private function __construct() {}

    private function __clone() {}

    public static function getInstance() : Application {
        if (!isset(self::$instance)) {
            self::$instance = new static();
        }

        return self::$instance;
    }

}