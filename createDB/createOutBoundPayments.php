<?php 

include "../config.php";

// establish a connection with the database
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn -> connect_error) {
    die("connection failed:" . $conn -> connect_error);
}

// SQL Statement
$sql = "CREATE TABLE outbound_payments (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	entity VARCHAR(10) NOT NULL,
	transaction_type VARCHAR(40) NOT NULL,
	amount INT(10) NOT NULL,
	date_submitted DATE NOT NULL DEFAULT CURRENT_TIMESTAMP,
	time_submitted TIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	authorised BOOLEAN NOT NULL DEFAULT FALSE

);";

if ($conn -> query($sql) === TRUE){
    echo "Table outbound_payments has been successfully created";
} else {
    echo "Error Creating Table: " . $conn -> error;
}



?>