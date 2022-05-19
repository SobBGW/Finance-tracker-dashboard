<?php 
include "../config.php";

// Create a new Connection
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn -> connect_error) {
    die("connection failed:" . $conn -> connect_error);
}

// Set password and hash it
// $password = "hello12345";
// $hashed_password = passsword_hash($password, PASSWORD_DEFAULT);


// SQL Statement
$sql = "INSERT INTO users (firstname, lastname, username, password, role, user_group) VALUES ('john', 'ham', 'test.user', 'hello1234', 'member', 'finance')";

// Execute sql statement
if($conn -> query($sql) === TRUE) {
    echo "New record added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn -> close();



?>