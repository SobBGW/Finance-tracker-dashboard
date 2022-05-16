<?php 

include '../config.php';

// Create a new Connection
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn -> connect_error) {
    die("connection failed:" . $conn -> connect_error);
}

// SQL Statement
$sql = "CREATE TABLE users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    password VARCHAR(100),
    role VARCHAR(20),
    group VARCHAR(20)
);"
;

// Execute the statement
if ($conn -> query($sql) === TRUE){
    echo "Table users has been successfully created";
} else {
    echo "Error Creating Table: " . $conn -> error;
}

?>