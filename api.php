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

// ENDPOINT 1 - DAILY RECON
// if(isset($_GET["daily_recon"])){
//     // if($_GET["daily_recon"] === )
//     echo "daily_Recon";
// }
// // ENPOINT 2 - OUTSTANDING INVOICES
// elseif(isset($_GET["outstanding_invoices"])){
//     echo "outstanding_invoices";
// }
// // ENPOINT 3 - OUTBOUND BANK PAYMENTS
// elseif(isset($_GET["outbound-bank-payments"])){

// }

// ENPOINT 1 - GET DAILY RECON
if(isset($_GET["daily_recon"]) && $_GET["daily_recon"] !== ""){
    // Run Query to get item in daily recon table
}
// ENDPOINT 2 - SET APPROVAL TO TRUE(1) - COME BACK TO
elseif(isset($_GET["set_approval_daily_recon"]) && ($_GET["set_approval_daily_recon"] !== "")){
    // Run Update query to set relevent 
}
// ENPOINT 3 - GET OUTSTANDING INVOICES
elseif(isset($_GET["outstanding_invoices"]) && $_GET["outstanding_invoices"] !== ""){
    // Run Query to get the items in outstanding invoices table
}
// ENDPOINT 4 - ADD OUTSTANDING INVOICE - COME BACK TO
elseif(isset($_GET["add_outstanding_invoice"])){
    // Run Query to add items in outstanding invoices table
}
// ENDPOINT 5 - GET OUTBOUND BANK PAYMENTS
elseif(isset($_GET["outbound_bank_payments"]) && $_GET["outbound_bank_payments"] !== ""){
    // Run Query to get the items in outbound bank payments table
}
// ENPOINT 6 - APPROVE OUTBOUND BANK PAYMENT - COME BACK TO
elseif(isset($_GET["set_approval_outbound_bank_payment"]) && $_GET["set_approval_outbound_bank_payment"] !== ""){
    // Run Update query to set relevent 
}
// ENDPOINT 7 - ADD OUTBOUND BANK PAYMENT - COME BACK TO 
elseif(isset($_GET["add_outbound_bank_payment"]) && $_GET["add_outbound_bank_payment"] !== ""){
    // Run Query to add items in outstanding outbound bank payments table
}
// ENDPOINT 8 - GET TASKS
elseif(isset($_GET["tasks"]) && $_GET["tasks"] !== ""){
    // Run Query to get all items in task list
}
// ENDPOINT 9 - ADD TASKS
elseif(isset($_GET["add_task"]) && $_GET["add_task"] !== ""){
    // Run Query to add task to task list
}


?>