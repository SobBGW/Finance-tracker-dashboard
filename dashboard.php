<?php include './includes/header.php' ?>

<?php 
// If user NOT LOGGED IN redirect them to the Login Page
// if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true){
//     // CHANGE LOCATION OF REDIRECT
//     header("location: index.php");
//     exit;
// }

?>


<div class="content">

    <?php if(1 !== 1) { ?>
        <h1>hello</h1>
    <?php } else { ?>
        <h1>bye</h1>
    <?php }?>
    
</div>

<?php './includes/footer' ?>