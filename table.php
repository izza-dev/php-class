
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

$student = "CREATE TABLE  students(
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(30),
password VARCHAR(40)
)";

if(mysqli_query($conn, $student)){
	echo "<br>Table Created";
} else {
	echo "Table Error";
}
 


?> 