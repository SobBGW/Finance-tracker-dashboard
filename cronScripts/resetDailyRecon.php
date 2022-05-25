<?php 
$servername = "localhost";
$username = "root";
$password = "hello1234";
$dbname = "finance_test";

// Establish connection to database
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn -> connect_error) {
    die("connection failed:" . $conn -> connect_error);
}

// Update Daily Recon Table to reset all vales

$sql = "UPDATE daily_recon SET created = '0', reviewed_1 = '0', reviewed_2 = '0', aprroved = '0', created_time = '00:00:00', reviewed_1_time = '00:00:00', reviewed_2_time = '00:00:00', approved_time = '00:00:00' WHERE id = 2";

if ($conn->query($sql) === TRUE) {
    echo "All values in daily recon have beeen reset";
} else {
    echo "Something went wrong, values could not be reset";
}

$conn -> close();

?>