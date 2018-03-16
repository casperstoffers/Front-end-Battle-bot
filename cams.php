<?php

// Configuration
if (file_exists('sys/config.php')) {
	require_once('sys/config.php');
}  

// Requesting Pages
$requested_path = "ipcams.php";


if(file_exists("lib/pages/".$requested_path) && $requested_path != "/" && !empty($requested_path)){

    if(substr($requested_path, -1) == "/"){
        $requested_path .="index.php";
    }

    $fetch_file = "lib/pages/".$requested_path;

} else if($requested_path == "/" || empty($requested_path)) {

    $fetch_file = "lib/pages/home.php";

} else {

    $fetch_file = "lib/error/404.php";

}

//temp manuel link changer

if (file_exists('tpl/inc/header.php')) {
	require_once('tpl/inc/header.php');
}

require_once $fetch_file;

if (file_exists('tpl/inc/footer.php')) {
	require_once('tpl/inc/footer.php');
}

?>