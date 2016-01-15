<!DOCTYPE html>
<html lang="en">
<head>
  <?php $output = '<title>%TITLE%</title>' ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse ">
<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>                        
			</button>
			<a class="navbar-brand" href="#">Uren registratie</a>
		</div>
		
		<div class="collapse navbar-collapse" id="myNavbar">
			<!-- menu -->
			<ul class="nav navbar-nav ">
				<li class="active"><a href="index.php">Home</a></li>
				<li class="active"><a href="invoeren.php">Invoeren</a></li>
				<li class="active"><a href="opvragen.php">Opvragen</a></li>
				<li class="active"><a href="contact.php">Contact</a></li>
				<li class="active"><a href="persoonlijke_instelling.php">Persoonlijke Instelling</a></li><!-- Dit komt alleen als er iemand ingelogd is. -->
			</ul>
			<!-- login -->
			<ul class="nav navbar-nav navbar-right">
				<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
				<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			</ul>
		</div>
	</div>
</nav>