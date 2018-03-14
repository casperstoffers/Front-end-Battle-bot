<?php
include "sys/sessions.php";

//Post data ophalen en beveiligen
$username = $_POST['username']; 
$password = $_POST['password'];
$username = strip_tags($username); 
$password = strip_tags($password);

//Checken of de username bestaat en het wachtwoord klopt, zo ja inloggen en gegevens opslaan.
	if(isset($_POST['submit'])){
		if($username == "" || $password == ""){
			echo"<div class='alert alert-info'>";
			  echo"Vul alstublieft iets in!";
			echo"</div>";
		}else{
			if(array_key_exists($username, $logins)){
				if($logins[$username] == $password){
					
					$_SESSION['username'] = $username;
					$_SESSION['isLogged'] = 1;
					header("location:$BASELINK/client.php");
				}else{
					echo"<div class='alert alert-danger'>";
					  echo"<strong>Fout,</strong> dit is het onjuiste wachtwoord!";
					echo"</div>";
				}
			}else{
				echo"<div class='alert alert-danger'>";
				  echo"<strong>Fout,</strong> de opgegeven client bestaat niet!";
				echo"</div>";
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Arduino Battlebots</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="tpl/css/stylesheet.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo $BASELINK; ?>/home.php"><img src="tpl/image/w3newbie.png" alt="logo"></a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="<?php echo $BASELINK; ?>/home.php">Home</a></li>
					<li><a href="<?php echo $BASELINK; ?>/ipcams.php">Volg de battle!</a></li>
					<li><a href="<?php echo $BASELINK; ?>/clients.php">Clients</a></li>
					<li><a href="<?php echo $BASELINK; ?>/contact.php">Contact</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
							Login<span class="caret"></span>
						</a>
						<div class="dropdown-menu" id="formLogin">
							<div class="row">
								<div class="container-fluid">
									<form action='' method='post' accept-charset='UTF-8'>
										<div class="form-group">
											<label>Client</label>
											<input class="form-control" name="username" id="username" type="text">
										</div>
										<div class="form-group">
											<label>Wachtwoord</label>
											<input class="form-control" name="password" id="password" type="password"><br>
										</div>
										<button type="submit" name="submit" class="btn btn-success btn-sm">Login</button>
									</form>
								</div>
							</div>
						</div>
					</li>
				</ul>			
			</div>
		</div>
	</nav>
	<div id="pagecontents">