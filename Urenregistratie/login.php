<?php
	include('inc/header.php');
	$title = "Log In";
	
	$output = str_replace('%TITLE%', $title, $output);
	echo $output;
?>

<!-- LOGIN FORM -->
	<div class = "container" style="margin-left:500px; margin-top:100px;">
		<form id="login-form">
		<h1>Login</h1>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group" style = "width:200px;">
						<label for="lg_username" class="sr-only">Username</label>
						<input type="text" class="form-control" id="lg_username" name="lg_username" placeholder="username">
					</div>
					<div class="form-group" style = "width:200px;">
						<label for="lg_password" class="sr-only">Password</label>
						<input type="password" class="form-control" id="lg_password" name="lg_password" placeholder="password">
					</div>
					<div class="form-group login-group-checkbox">
						<input type="checkbox" id="lg_remember" name="lg_remember">
						<label for="lg_remember">remember</label>
					</div>
				</div>
				<button type="submit" class="btn btn-primary" id="login">Login</button>
			</div>
			<br>
			<div class="etc-login-form">
				<p>forgot your password? <a href="#">click here</a></p>
				<p>new user? <a href="signup.php">create new account</a></p>
			</div>
		</form>
	</div>
<?php include('inc/footer.php') ?>