<?php
	include_once 'db_file/database.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
	<link rel="stylesheet" href="css/index.css">
	<title>Keryon Agriculture</title>

  </head>
  <body>
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<ul class="navbar-nav">
			<li class="nav-item active">
			<a class="nav-link" href="#">KERYON</a>
			</li>
		</ul>
		</nav>
		<div class="container">
			<div class="row down mx-auto">
				<div class="col space">
					<a href="db_file/insert.php"><button type="button" class="btn btn-primary btn-lg">Add Customers</button></a>
				</div><br>
				<div class="col space">
					<a href="db_file/retrieve.php"><button type="button" class="btn btn-primary btn-lg">View Customers</button></a>
				</div>
				<div class="w-100"></div><br>
				<div class="col space">
					<a href="db_file/delete.php"><button type="button" class="btn btn-primary btn-lg">Delete Customers</button></a>
				</div>
				<div class="col space">
					<a href="db_file/update.php"><button type="button" class="btn btn-primary btn-lg">Update Customers</button></a>
				</div>
			</div>
		</div>
		<div class="container">
			<footer class="bg-light footer">
				<p>Made with <i class="fa fa-heart"></i> by Gajanan Petnekar</p>
			</footer>
		<div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>