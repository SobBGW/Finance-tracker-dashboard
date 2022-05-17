<?php 

include "../config.php";

// establish a connection with the database
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn -> connect_error) {
    die("connection failed:" . $conn -> connect_error);
}

// SQL Statement
$sql = "CREATE TABLE daily_recon (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	
);"



?>