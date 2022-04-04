<?php



/**
 * Testing Config class
 */

use Fw\Core\Config;

require_once('fw/init.php');

$k = new Config;
$array = $k->get('db/login');

echo $array;
