<?php 

include './Helper.php';
include './Config.php';
include './Admin.php';
include './Player.php';
include './Hanged.php';

$config = new Config();

$hanged = new Hanged($config);
$hanged ->start();