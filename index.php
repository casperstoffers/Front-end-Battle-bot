<?php
// Configuration
if (file_exists('sys/config.php')) {
	require_once('sys/config.php');
}  

// Requesting Pages
if(isset($_GET['requested_path'])) {
    $requested_path = $_GET['requested_path'];
} else {
    $requested_path = "/";
}

if(file_exists($_SERVER['DOCUMENT_ROOT']."/lib/pages/".$requested_path) && $requested_path != "/" && !empty($requested_path)){

    if(substr($requested_path, -1) == "/"){
        $requested_path .="index.php";
    }

    $fetch_file = $_SERVER['DOCUMENT_ROOT']."/lib/pages/".$requested_path;

} else if($requested_path == "/" || empty($requested_path)) {

    $fetch_file = $_SERVER['DOCUMENT_ROOT']."/lib/pages/home.php";

} else {

    $fetch_file = $_SERVER['DOCUMENT_ROOT']."/lib/error/404.php";

}

if (file_exists('tpl/inc/header.php')) {
	require_once('tpl/inc/header.php');
}

require_once $fetch_file;

if (file_exists('tpl/inc/footer.php')) {
	require_once('tpl/inc/footer.php');
}

?>