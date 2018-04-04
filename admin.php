<?php
	session_start();
	$_SESSION['username'] = "admin";
	header('Location: '. "score.php");
?>
