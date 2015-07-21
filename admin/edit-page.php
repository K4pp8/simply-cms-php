<?php

require '../app/start.php';

if( !empty($_POST) ){
	$id 	= $_POST['id'];
	$label 	= $_POST['label'];
	$title 	= $_POST['title'];
	$slug 	= $_POST['slug'];
	$body 	= $_POST['body'];

	$insertQuery = "UPDATE pages SET
	label = '".$label."',
	title = '". $title."',
	slug = '".$slug . "',
	body = '" . $body . "',
	updated = NOW()
	WHERE id='" .$id . "'";

	$resultINSert = Database::doQuery( $insertQuery );

	header('Location: ' . BASE_URL . 'admin/list.php');
}

if (!isset($_GET['id'])){
	
	header('Location: ' . BASE_URL . 'admin/list.php');
	die();
}

	$querySql = "SELECT *
				FROM pages
				WHERE id = '" . $_GET['id'] ."'";

	$pages = Database::getResult( $querySql );

	//Mageggio per dare il primo record
	$page = $pages[0];


require VIEW_ROOT . '/admin/edit.php';