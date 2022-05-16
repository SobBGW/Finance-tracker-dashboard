<?php 
include "../config.php";

// Create a new Connection
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn -> connect_error) {
    die("connection failed:" . $conn -> connect_error);
}

$sql = "INSERT INTO users (firstname, lastname, email, password, role, group) VALUES ('john', 'ham', 'john.ham@gmail.com', 'hejgajshjksadj', 'member', 'finance')";
?>