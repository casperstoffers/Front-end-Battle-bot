<?php

// Configuration
if (file_exists('sys/config.php')) {
	require_once('sys/config.php');
}  

if (file_exists('tpl/inc/header.php')) {
	require_once('tpl/inc/header.php');
}

require_once "lib/pages/score.php";

if (file_exists('tpl/inc/footer.php')) {
	require_once('tpl/inc/footer.php');
}

?>