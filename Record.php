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

$student = "SELECT * FROM students";

$result = mysqli_query($conn, $student);		   

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>All form record</title>
  </head>
  <body>
  
	<div class="container">
		<h1>All Record</h1>
		
		<table class="table">
			<tr>
				<th>ID</th>
				<th>Email</th>
				<th>Password</th>
				<th>Action</th>
			</tr>
			
			<?php
				if(mysqli_num_rows($result) > 0){
					
					while($row = mysqli_fetch_assoc($result)){
			
			?>
				<tr>
					<td><?php echo $row['id'] ; ?></td>
					<td><?php echo $row['email'] ; ?></td>
					<td><?php echo $row['password'] ; ?></td>
					<td>
						<a href="#" class="btn btn-success">Edit</a>
						<a href="#" class="btn btn-secondary">Delete</a>
					</td>
				</tr>
			<?php		
					}
		
				} else {
					echo 'No Record Found';
				}
			?>
			
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</table>
		
		<div class="row">
			<div class="col"><a href="Record.php" class="btn btn-warning">Record</a></div>
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