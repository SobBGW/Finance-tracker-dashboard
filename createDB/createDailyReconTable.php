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
	created BOOLEAN NOT NULL DEFAULT FALSE,
	review_1 BOOLEAN NOT NULL DEFAULT FALSE,
	review_2 BOOLEAN NOT NULL DEFAULT FALSE,
	approval BOOLEAN NOT NULL DEFAULT FALSE,
	create_time TIME ON UPDATE CURRENT_TIMESTAMP NOT NULL DEFAULT '001:00:00',
	review_1_time TIME ON UPDATE CURRENT_TIMESTAMP NOT NULL DEFAULT '001:00:00',
	review_2_time TIME ON UPDATE CURRENT_TIMESTAMP NOT NULL DEFAULT '001:00:00',
	approval_time TIME ON UPDATE CURRENT_TIMESTAMP NOT NULL DEFAULT '001:00:00'

);";

if ($conn -> query($sql) === TRUE){
    echo "Table daily_recon has been successfully created";
} else {
    echo "Error Creating Table: " . $conn -> error;
}



?>