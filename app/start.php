<?php

require_once( 'config.php' );

if( DEBUG ){
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);	
}

require_once( APP_ROOT . '/util/db.php' );

$connection = Database::getConnection(); 

require_once( APP_ROOT . '/functions.php' );