<?php

class Database {
	private static $_mysqlUser = "cms"; 
	private static $_mysqlPass = "cmscms"; 
	private static $_mysqlDb = "cms"; 
	private static $_hostName = "localhost";

	protected static $_connection = NULL;

	private function __construct(){}

	public static function getConnection() {
		if (!self::$_connection) {
			self::$_connection = new mysqli(self::$_hostName, self::$_mysqlUser, self::$_mysqlPass, self::$_mysqlDb);
			if (self::$_connection->connect_error) {
				die('Connect Error: ' . self::$_connection->connect_error);
			}
		}
	return self::$_connection; 
	}	
}

?>