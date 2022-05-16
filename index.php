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
        // exit;
    } else {

        // Store username and password
        $username = trim($_POST["username"]);
        $password = trim($_POST["password"]);

        // Construct and execute sql query
        $sql = "SELECT id, firstname, lastname, username, password, user_group, role FROM users WHERE id = 8 ";
        $result = $conn -> query($sql);

        // $error = "Incorrect Username or Password";

        // Check a single result is returned
        if($result -> num_rows === 1){
            $row = $result -> fetch_array();
            // Get hashed password
            $hashed_password = $row["password"];
            // Compare password
            if(password_verify($password, $hashed_password)){
                // Set Session variables
                $_SESSION["loggedin"] = "true";
                $_SESSION["name"] = $row["firstname"] . " " . $row["lastname"];
                $_SESSION["role"] = $row["role"];
                $_SESSION["user_group"] = $row["user_group"];

            }

        } else {
            $error = "Please Try Again";
        }
    }
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

            <?php if(!empty($error)){ ?>
                <p class="warning-banner"><?php echo $error ?></p>
            <?php } ?>

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


