<?php
	include('inc/header.php');
	$title = "Opvragen";
	
	$output = str_replace('%TITLE%', $title, $output);
	echo $output;
?>
	<div class="container">
  <h1>Opvragen</h1>
  <p>Voer je de juiste ID van een week in.</p>
	<!-- search -->
	<form class="navbar-form navbar-left" role="search">
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Search">
		</div>
		<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
	</form>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Datum</th>
        <th>Week</th>
        <th>Begin</th>
        <th>Eind</th>
        <th>Pauze</th>
        <th>Uurloon</th>
        <th>Totale Uren</th>
        <th>Totale Bedrag</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
		<td><button type="submit" class="btn btn-danger" id="delete">Delete</button></td>
      </tr>
    </tbody>
  </table>
</div>
<?php include('inc/footer.php') ?>