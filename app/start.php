<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL);

//Uti
//require_once './app/util/setup-config.php';
//$config = new Config;
//$config->load('config.php');
//$config->get('db.host');


define('APP_ROOT', __DIR__);
define('VIEW_ROOT', APP_ROOT . '/views');
define('BASE_URL', 'http://localhost:8888/simply-cms-php/');

require_once APP_ROOT . '/util/db.php';

$connection = Database::getConnection(); 

require_once APP_ROOT . '/functions.php';
