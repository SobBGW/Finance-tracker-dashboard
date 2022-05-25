<?php 

include "../config.php";

// establish a connection with the database
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn -> connect_error) {
    die("connection failed:" . $conn -> connect_error);
}

// SQL Statement
$sql = "CREATE TABLE tasks (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	task VARCHAR(100) NOT NULL,
	assigned_to VARCHAR(50) NOT NULL,
	due_date DATE NOT NULL,
	completed BOOLEAN NOT NULL DEFAULT FALSE
);";

if ($conn -> query($sql) === TRUE){
    echo "Table tasks has been successfully created";
} else {
    echo "Error Creating Table: " . $conn -> error;
}



?>
<!-- SELECT * FROM daily_tasks WHERE (completed = 0) OR (completed = 1 AND due_date >= DATE_SUB(CURDATE(), INTERVAL 2 DAY)) -->