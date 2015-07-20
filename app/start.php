<?php

ini_set('display_errors', 'On');

define('APP_ROOT', __DIR__);
define('BASE_URL', 'http://localhost:8888/simply-cms-php/');

$db = PDO('mysql:host=127.0.0.1;dbname=cms', 'cms' , 'cmscms')