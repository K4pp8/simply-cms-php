<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL);

define('APP_ROOT', __DIR__);
define('VIEW_ROOT', APP_ROOT . '/views');
define('BASE_URL', 'http://localhost:8888/simply-cms-php/');

require_once APP_ROOT . '/util/db.php';
$connection = Database::getConnection(); 


//$db = PDO('mysql:host=127.0.0.1;dbname=cms', 'cms' , 'cmscms');