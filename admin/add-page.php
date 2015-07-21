<?php

require '../app/start.php';

if( !empty($_POST) ){
	$label 	= $_POST['label'];
	$title 	= $_POST['title'];
	$slug 	= $_POST['slug'];
	$body 	= $_POST['body'];

	$insertQuery = "INSERT INTO pages ( label, title , slug, body, created )
	VALUES ( '".$label."','". $title."','".$slug . "','" . $body . "',NOW())";

	$resultINSert = Database::doQuery( $insertQuery );

	header('Location: ' . BASE_URL . 'admin/list.php');
}

require VIEW_ROOT . '/admin/add.php';