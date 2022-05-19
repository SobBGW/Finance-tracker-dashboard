<?php 

// include database script
include "./config.php";

// Establish connection to database
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn -> connect_error) {
    die("connection failed:" . $conn -> connect_error);
}

// Allow all sources to request information from the api
header("Access-Control-Allow-Origin: *");
// Returned Content Type
header("Content-Type:application/json");



?>