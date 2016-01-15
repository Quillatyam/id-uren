<?php
	include('inc/header.php');
	$title = "Contact";
	
	$output = str_replace('%TITLE%', $title, $output);
	echo $output;
?>
<div class="container" style="margin-left:15%; margin-top:8%;">
		<form class="form-horizontal" role="form" method="POST" action="#.php">
			<h1>Contact</h1>
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">Name</label>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="name" name="name" placeholder="Voornaam & Achternaam" value="">
				</div>
			</div>
	
			<div class="form-group">
				<label for="email" class="col-sm-2 control-label">Email</label>
				<div class="col-sm-7">
					<input type="email" class="form-control" id="email" name="email" placeholder="E-mail@hotmail.com" value="">
				</div>
			</div>
	
			<div class="form-group">
				<label for="message" class="col-sm-2 control-label">Message</label>
				<div class="col-sm-7">
					<textarea class="form-control" rows="4" name="message"></textarea>
				</div>
			</div>
	
			<div class="form-group">
				<div class="col-sm-7 col-sm-offset-2">
					<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
				</div>
			</div>
</div>
</form>
<?php include('inc/footer.php') ?>