<?php include './includes/header.php'; ?>


<?php 

session_start();

// Check if user logged in redirect them to the dashboard page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    // CHANGE LOCATION OF REDIRECT
    header("location: welcome.php");
    exit;
}

// Load in database
include './config.php';

// Connect to database
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn -> connect_error) {
    die("connection failed:" . $conn -> connect_error);
}

// Login vars
$username = $password = "";
$error = "";

// Login Form Post Request Handler
if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty($_POST["username"]) or empty($_POST["password"])) {
        $error = "username or password is missing";
    }

    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    $sql = "SELECT id, firstname, lastname, username, password, user_group, role FROM users";
    $result = $conn -> query($sql);

    if($result -> num_rows > 0) {
        while($row = $result -> fetch_assoc()) {
            $rows[] = $row;
        }
    } else {
        echo "0 results";
    }

    echo $rows;




    // Check username and password exist in $_POST
    // isset($_POST["username"]);
    // isset($_POST["password"]);

    // 
}

    
// Store username and password in vars
$username = $_POST["username"];
$password = $_POST["password"];
?>

<!--  Div -->

<div class="container">


    <!-- Loginbox -->
    <div class="login-box">

        <form action="./index.php" method="post" class="login-form">
            <!-- Username -->
            <input type="text" name="username" id="username-input" placeholder="Username"><br>
            <!-- Password -->
            <input type="password" name="password" id="password-input" placeholder="Password"><br>
            <!-- Submit Button -->
            <button type="submit" id="submit-button">Submit</button><br>
        </form>
    </div>

</div>

<?php include "./includes/footer.php"; ?>


