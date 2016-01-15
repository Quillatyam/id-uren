<?php
	include('inc/header.php');
	$title = "Persoonlijke instelling";
	
	$output = str_replace('%TITLE%', $title, $output);
	echo $output;
?>

<!-- Persoonlijke informatie edit  -->
<!-- ZIE DIT ALS EEN ADMIN PANEL -->
	<div class = "container" style="margin-left:500px; margin-top:100px;">
		<form id="signup-form">
		<h1>Account info</h1>
		<p>Je hoeft niet alles in te vullen alleen wat je wilt vervangen.</p>
			<div class="main-signup-form">
				<div class="signup-group">
					<div class="form-group" style = "width:200px;">
						<label for="pi_username" class="sr-only">Username</label>
						<input type="text" class="form-control" id="pi_username" name="pi_username" placeholder="New Username">
					</div>
					<div class="form-group" style = "width:200px;">
						<label for="pi_email" class="sr-only">Email</label>
						<input type="password" class="form-control" id="pi_email" name="pi_email" placeholder="New Email@example.com">
					</div>
					<div class="form-group" style = "width:200px;">
						<label for="pi_password" class="sr-only">Password</label>
						<input type="password" class="form-control" id="pi_password" name="pi_password" placeholder="New password">
					</div>
				</div>
				<button type="submit" class="btn btn-primary" id="edit">Edit</button>
				<button type="submit" class="btn btn-danger" id="delete">Delete Account</button>
			</div>
			<br>
		</form>
<?php include('inc/footer.php') ?>