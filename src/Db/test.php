<?php

use Natanarobson\PhpLibrary\Db\DbConnect;

require "../../vendor/autoload.php";

DbConnect::setConfig('./config.php');

var_export(require './config.php');

echo '<hr>';
$pdo = DbConnect::getInstance();
var_export($pdo);
