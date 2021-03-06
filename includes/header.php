<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finance Tracker Dashboard</title>
    <!-- stylesheet -->
    <link rel="stylesheet" href="./public/style.css">
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./public/script.js"></script>

    <!-- Show only if logged in -->
    <!-- Side Navigation Bar -->
  <?php session_start(); ?>
  <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true){ ?>

    <div class="sidebar">
      <!-- Blackwell Logo - REPLACE LINK WITH FILE PATH -->
      <img class="logo" src="./public/bwg.png" width="150px">
      <a href="/Risk/dashboard.php">Risk BHS</a>
      <a href="./finance-dashboard.php">Finance Dashboard</a>
      <a href="#contact">Dashboard 3</a>
      <a href="#about">Dashboard 4</a>
      <a href="./logout.php">Logout</a>
    </div>
    
  <?php } ?>


    
</head>
<body>
