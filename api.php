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


// ENPOINT 1 - GET DAILY RECON
if(isset($_GET["daily_recon"]) && $_GET["daily_recon"] !== ""){
    $sql = "SELECT * FROM `daily_recon`;";
    $result = $conn -> query($sql);
    
    if($result -> num_rows > 0){
        while($row = $result -> fetch_assoc()){
            $rows[] = $row;
        }
    }
    else {
        header("HTTP/1.1 500 Some Went Wrong");
    }

    echo json_encode($rows);
}
// ENDPOINT 2 - SET APPROVAL TO TRUE(1) - COME BACK TO
elseif(isset($_GET["set_approval_daily_recon"]) && ($_GET["set_approval_daily_recon"] !== "")){
    // Run Update query to set relevent 
    if($_GET["set_approval_daily_recon"] == "1"){

        // Get Time
        $time = date("h:i:s");
        // Construct sql query
        $sql = "UPDATE daily_recon SET created = '1', created_time = '$time' WHERE id = 1";
        // Run Query
        $result = $conn -> query($sql);

        header("location:fiance-dashboard.php");

        // echo $time;
        // echo $sql;

        

    }elseif($_GET["set_approval_daily_recon"] == "2"){

    }elseif($_GET["set_approval_daily_recon"] == "3"){

    }elseif($_GET["set_approval_daily_recon"] == "4"){

    }else{

    }
    // header("location: finance-dashboard.php");
}

// ENPOINT 3 - GET OUTSTANDING INVOICES
elseif(isset($_GET["outstanding_invoices"]) && $_GET["outstanding_invoices"] !== ""){
    // Run Query to get the items in outstanding invoices table

    $sql = "SELECT * FROM `outbound_payments`;";
    $result = $conn -> query($sql);
    
    if($result -> num_rows > 0){
        while($row = $result -> fetch_assoc()){
            $rows[] = $row;
        }
    }
    else {
        header("HTTP/1.1 500 Some Went Wrong");
    }

    echo json_encode($rows);


}
// ENDPOINT 4 - ADD OUTSTANDING INVOICE - COME BACK TO
elseif(isset($_GET["add_outstanding_invoice"])){
    // Run Query to add items in outstanding invoices table
}

// ENDPOINT 5 - GET OUTBOUND BANK PAYMENTS
elseif(isset($_GET["outbound_bank_payments"]) && $_GET["outbound_bank_payments"] !== ""){
    // Run Query to get the items in outbound bank payments table
    $sql = "SELECT * FROM `outbound_payments`;";
    $result = $conn -> query($sql);
    
    if($result -> num_rows > 0){
        while($row = $result -> fetch_assoc()){
            $rows[] = $row;
        }
    }
    else {
        header("HTTP/1.1 500 Some Went Wrong");
    }

    echo json_encode($rows);
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
// ENDPOINT 9 - ADD TASKS - COME BACK TO
elseif(isset($_GET["add_task"]) && $_GET["add_task"] !== ""){
    // Run Query to add task to task list
}

else {
    echo "Correct param was not passed";
}


?>