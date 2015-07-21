<?php

require_once 'app/start.php';

$querySql = "	SELECT *
				FROM pages";

$pages = Database::getResult( $querySql );

require_once VIEW_ROOT . '/home.php';