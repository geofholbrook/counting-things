<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>

	header {
		text-align: center;
		padding: 5px;
		background-color: #ccc
	}

	footer {
		position: absolute;
  		bottom: 0;
  		width: 100%;
  		text-align: right;
  		background-color: #ccc
	}
</style>

<?php

// open a database connection (PHP, so inside <?php  and ?> :

$servername = "localhost";
$username = "gh-geof";
$password = "ge055rey";
$dbname = "gh-test-db";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// create a resource (result?)

$result = $conn->query("SELECT * FROM basic");

// count the rows that result from the query

$num_rows = mysqli_num_rows($result);

// pop a line off $result and put it in an array

$row = $result->fetch_assoc()

//or to iterate:

while ($row = $result->fetch_assoc()) {  }

// access a column value from $row
$row["<name of column>"]

?>


<script>

 $(document).ready(function(){


  /// STUFF IN HERE

}

</script>
</head>

<body  style="background-color:#eee">
	<header>
		<h1>counting things</h1>
		<h4>today is <span id="date"></span></h4>
		

	</header>

	<div class="well">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
					<div <div class="btn btn-primary">I did a push-up</div>
	    			<span class="lead">0</span>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>

	<footer>
		(c) Geof Holbrook
	</footer>

</body>

<script>document.getElementById("date").innerHTML = Date();</script>

