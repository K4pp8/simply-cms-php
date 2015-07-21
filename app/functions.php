<?php

function escap($text){
	return htmlspecialchars( $text , ENT_QUOTES, 'UTF-8');
}