<?php
	include('inc/header.php');
	$title = "Sign Up";
	
	$output = str_replace('%TITLE%', $title, $output);
	echo $output;
?>
<!-- SIGN UP -->
	<div class = "container" style="margin-left:500px; margin-top:100px;">
		<form id="signup-form">
		<h1>Sign Up</h1>
			<div class="main-signup-form">
				<div class="signup-group">
					<div class="form-group" style = "width:200px;">
						<label for="su_username" class="sr-only">Username</label>
						<input type="text" class="form-control" id="su_username" name="su_username" placeholder="username">
					</div>
					<div class="form-group" style = "width:200px;">
						<label for="su_email" class="sr-only">Email</label>
						<input type="password" class="form-control" id="su_email" name="su_email" placeholder="deeznuts@example.com">
					</div>
					<div class="form-group" style = "width:200px;">
						<label for="su_password" class="sr-only">Password</label>
						<input type="password" class="form-control" id="su_password" name="su_password" placeholder="password">
					</div>
				</div>
				<button type="submit" class="btn btn-primary" id="signup">signup</button>
			</div>
			<br>
		</form>
	</div>
<?php include('inc/footer.php') ?>