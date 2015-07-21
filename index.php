<?php

require_once 'app/start.php';

$pages = [];
$querySql = "	SELECT *
				FROM pages";


if ($result_obj = $connection->query( $querySql )) { 

	while($result = $result_obj->fetch_array(MYSQLI_ASSOC)) {
		array_push($pages, $result  );
	}

}else{
	echo "<br /> Errore:" . $connection->error . "<br />";
}


require_once VIEW_ROOT . '/home.php';