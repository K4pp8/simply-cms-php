<?php

require_once 'app/start.php';

if (empty($_GET['page'])){
	
	$page = false;

}else  {
	
	//Bisogna prevedere la ricurezza per SQL injection
	$slug = $_GET['page'];

	$querySql = "SELECT *
				FROM pages
				WHERE slug = '" . $slug .
				"' LIMIT 1";

	$pages = Database::getResult( $querySql );

	//Mageggio per dare il primo record
	$page = $pages[0];

	if($page){
		//inserire controlli per la creazione delle date
	}

}

require VIEW_ROOT . '/page/show.php';