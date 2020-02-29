<?php

$servername ="localhost";
$username="root";
$password="";
$dbname="mydbs";


//create connection
$conn = new mysqli($servername,$username,$password,$dbname);

//check connection

if($conn->connect_error){
	die("connection failed:".$conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['pass'];

$insert = "INSERT INTO students(email,password ) 
		   VALUES('$email', '$password')";		   

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Create form</title>
  </head>
  <body>
  
	<div class="container">
		<h1>Form Result</h1>
		
		<?php
			if(mysqli_query($conn, $insert)){
				echo '<h3>Your record has been added successfully</h3>';
			} else {
				echo '<b>There is an error<b>';
			}
		?>
		<div class="row">
			<div class="col"><a href="All Form Record.php" class="btn btn-warning">All Form Record</a></div>
			<div class="col"><a href="form.php" class="btn btn-info">Create New form</a></div>
		</div>
	</div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>