<?php

class Database {

	private static $_mysqlUser 	= DB_USER; 
	private static $_mysqlPass 	= DB_PASS; 
	private static $_mysqlDb 	= DB_NAME; 
	private static $_hostName 	= DB_HOST;

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

	public static function getResult( $querySql ) {

		$resultArr = [];

		if ($result_obj = self::getConnection()->query( $querySql )) { 

			while($result = $result_obj->fetch_array(MYSQLI_ASSOC)) {
				array_push($resultArr, $result  );
			}

		}else{
			$resultArr = false;
			echo "<br /> Errore:" . self::getConnection()->error . "<br />";
		}

		return $resultArr;
	}

	public static function doQuery( $querySql ) {
		if ($result_obj = self::getConnection()->query( $querySql )) { 

		}else{
			$resultArr = false;
			echo "<br /> Errore:" . self::getConnection()->error . "<br />";
		}
	}


}

?>