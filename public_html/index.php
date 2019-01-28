<?php
//FRONT CONTROLLER

define('DEV_ROOT_PATH', realpath(dirname(__FILE__).'/../').'/');
require_once(DEV_ROOT_PATH.'application/core/Router.php');

$router= new Router();
$router->start($_SERVER['REQUEST_URI']);
?>
