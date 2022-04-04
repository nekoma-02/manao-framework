<?php



/**
 * Testing Config class
 */

use Fw\Core\Config;

require_once('fw/init.php');

$array =  Config::get('db/login');

echo $array;
