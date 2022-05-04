<?php

namespace Fw\Core\Implements;

trait SingletonTrait {
    private static $instance;

	public static function getInstance()
	{
		if (!isset(self::$instance)) {
            self::$instance = new static();
        }
        
		return self::$instance;
	}

	private function __construct()
	{
	}
	private function __clone()
	{
	}
}