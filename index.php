<?php

require_once 'app/start.php';

$pages = $db->query(" 
		SELECT id, labe, slug
		FROM pages
	")->fetchAll(PDO::FETCH_ASSOC);

var_dump($pages);

require_once VIEW_ROOT . 'home.php';