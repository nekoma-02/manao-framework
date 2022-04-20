<?php
require_once('fw/init.php');

$app->header();

$app->includeComponent('fw:work.news','default',['title' => 'work progress']);

$app->footer();
?>