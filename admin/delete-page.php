<?php

require '../app/start.php';

if (!empty($_GET['id'])){
	

	$deletQuery = "DELETE FROM pages
	WHERE id = '" . $_GET['id'] . "'";

	//echo $deletQuery;

	$resultINSert = Database::doQuery( $deletQuery );

}

header('Location: ' . BASE_URL . 'admin/list.php');