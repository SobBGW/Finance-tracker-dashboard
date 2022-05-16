<?php 

include '../config.php';

// Create a new Connection
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn -> connect_error) {
    die("connection failed:" . $conn -> connect_error);
}

// SQL Statement
$sql = "SELECT id, firstname, lastname, email, password, role, user_group FROM users WHERE username='test'";
$result = $conn -> query($sql);

// Loop through result
if ($conn -> query($sql) === TRUE){
    echo "Table users has been successfully created";
} else {
    echo "Error Creating Table: " . $conn -> error;
}

?>