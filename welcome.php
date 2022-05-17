<?php include './includes/header.php' ?>

<?php 
// session_start();
// If user NOT LOGGED IN redirect them to the Login Page
if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true){
    // CHANGE LOCATION OF REDIRECT
    header("location: index.php");
    exit;
}

?>


<div class="content">
    <p class="welcome-heading">Welcome back <?php echo $_SESSION["name"] ?> - <?php echo $_SESSION["role"] ?></p>
    <p>Click on one of the tabs in the navigation panel to get started</p>

    
</div>

<?php './includes/footer' ?>