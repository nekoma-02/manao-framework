<?php 
if (!defined('CORE') || CORE !== true) exit;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php 
    $this->pager->addString('<title>Sanya page</title>');
    use Fw\Core\Pager;
    Pager::showHead();
    ?>

</head>
<body>
<h1>Hello world</h1>