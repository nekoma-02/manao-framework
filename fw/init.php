<?php

use Fw\Core\Application;

session_start();

define("CORE",true);
define('TEMPLATE_PATH', $_SERVER['DOCUMENT_ROOT'] . '/fw/views/');

spl_autoload_register(function ($class) {
    $file = $class . '.php';
    if (file_exists($file)) {
        require $file;
    }
});

$app = Application::getInstance();