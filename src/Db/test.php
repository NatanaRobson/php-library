<?php

use Natanarobson\PhpLibrary\Db\DbConnect;
use EAMann\Sessionz\Manager;

require "../../vendor/autoload.php";

DbConnect::setConfig('./config.php');

var_export(require './config.php');

echo '<hr>';
$pdo = DbConnect::getInstance();
var_export($pdo);


/**
 * Test use code from _Packagist_GitHub
 */
$mngr = new Manager();
$mngr->read(1);
// Test OK!