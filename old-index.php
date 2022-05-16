<?php include './includes/header.php'; ?>

<?php 

// If user logged in redirect them to the dashboard page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    // CHANGE LOCATION OF REDIRECT
    header("location: welcome.php");
    exit;
}

// Login Form Post Request Handler
if($_SERVER["REQUEST_METHOD"] == "POST"){
// Check username and password exist in $_POST
isset($_POST["username"]);
isset($_POST["password"]);
}

// Store username and password in vars
$username = $_POST["username"];
$password = $_POST["password"];


// TEST REMOVE LATER
// echo $username . " " . $password;

// TEST REMOVE LATER
// if($username == "hello") { echo " hello"; }

// }


?>


<!-- DIV -->
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
