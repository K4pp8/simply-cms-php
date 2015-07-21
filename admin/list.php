<?php

require '../app/start.php';

$querySql = "	SELECT *
				FROM pages
				ORDER BY CREATED DESC";

$pages = Database::getResult( $querySql );

require VIEW_ROOT . '/admin/list.php';