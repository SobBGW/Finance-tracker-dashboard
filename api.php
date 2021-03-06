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

// Set timezone to Europe
date_default_timezone_set('Europe/London');


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
// ENDPOINT 2 - SET APPROVAL TO TRUE(1)
elseif(isset($_GET["set_approval_daily_recon"]) && ($_GET["set_approval_daily_recon"] !== "")){
    // Run Update query to set relevent 
    if($_GET["set_approval_daily_recon"] == "1"){

        // Get Time
        $time = date("h:i:s");
        // Construct sql query
        $sql = "UPDATE daily_recon SET created = '1', created_time = '$time' WHERE id = 2";
        // Run Query
        $result = $conn -> query($sql);

        header("location: finance-dashboard.php");

    }elseif($_GET["set_approval_daily_recon"] == "2"){

        // Get Time
        $time = date("h:i:s");
        // Construct sql query
        $sql = "UPDATE daily_recon SET reviewed_1 = '1', reviewed_1_time = '$time' WHERE id = 2";
        // Run Query
        $result = $conn -> query($sql);

        header("location: finance-dashboard.php");

    }elseif($_GET["set_approval_daily_recon"] == "3"){

        // Get Time
        $time = date("h:i:s");
        // Construct sql query
        $sql = "UPDATE daily_recon SET reviewed_2 = '1', reviewed_2_time = '$time' WHERE id = 2";
         // Run Query
        $result = $conn -> query($sql);

        header("location: finance-dashboard.php");

    }elseif($_GET["set_approval_daily_recon"] == "4"){

        // Get Time
        $time = date("h:i:s");
        // Construct sql query
        $sql = "UPDATE daily_recon SET aprroved = '1', approved_time = '$time' WHERE id = 2";
        // Run Query
        $result = $conn -> query($sql);

        header("location: finance-dashboard.php");

    }else{
        header("location: finance-dashboard.php");
    }
    // header("location: finance-dashboard.php");
}

// ENPOINT 3 - GET OUTSTANDING INVOICES - COME BACK TO
elseif(isset($_GET["outstanding_invoices"]) && $_GET["outstanding_invoices"] !== ""){
    // Run Query to get the items in outstanding invoices table

    // Return UK Table
    if($_GET["outstanding_invoices"] === "1"){

        $sql = "SELECT * FROM `outstanding_invoices` WHERE entity = 'UK' AND approved = 0;";
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
    // Return CY Table
    elseif($_GET["outstanding_invoices"] === "2"){

        $sql = "SELECT * FROM `outstanding_invoices` WHERE entity = 'CY' AND approved = 0;";
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
    else{
        header("location: finance-dashboard.php");
    }

}
// ENPOINT - APPROVE OUTSTANDING INVOICE
elseif(isset($_GET["approve_outstanding_invoice"]) && $_GET["approve_outstanding_invoice"] !== ""){
    $id = $_GET["approve_outstanding_invoice"];
    $sql = "UPDATE outstanding_invoices SET approved = '1' WHERE id = '$id'";

    if ($conn->query($sql) === TRUE) {
        header("location: finance-dashboard.php");
    } else {
        header("location: finance-dashboard.php");
    }

}

// ENDPOINT 4 - ADD OUTSTANDING INVOICE - COME BACK TO
elseif(isset($_POST["entity-selection"]) && $_POST["entity-selection"] !== "" && isset($_POST["name-input"]) && $_POST["name-input"] !== "" && isset($_POST["amount-input"]) && $_POST["amount-input"] !== "" && isset($_POST["date-input"]) && $_POST["date-input"] !== "" && isset($_POST["urgency-selection"]) && $_POST["urgency-selection"] !== ""){
    
    $entity = $_POST["entity-selection"];
    $name = $_POST["name-input"];
    $amount = $_POST["amount-input"];
    $date = $_POST["date-input"];
    $urgency = $_POST["urgency-selection"];

    $sql = "INSERT INTO outstanding_invoices (`id`, `entity`, `name`, `amount`, `date_due`, `urgency`, `PDF`, `approved`) VALUES (NULL, '$entity', '$name', '$amount', '$date', '$urgency', NULL, '0')";

    if ($conn->query($sql) === TRUE) {
        header("location: finance-dashboard.php");
    } else {
        header("location: finance-dashboard.php");
    }
}

// ENDPOINT 5 - GET OUTBOUND BANK PAYMENTS
elseif(isset($_GET["outbound_bank_payments"]) && $_GET["outbound_bank_payments"] !== ""){
    // Run Query to get the items in outbound bank payments table

    // UK TABLE
    if($_GET["outbound_bank_payments"] === "1"){

        $sql = "SELECT * FROM `outbound_payments` WHERE entity = 'UK';";
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
    // CY TABLE
    elseif($_GET["outbound_bank_payments"] === "2"){
        $sql = "SELECT * FROM `outbound_payments` WHERE entity = 'BHS';";
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
    else{
        header("location: fianance-dashboard.php");
    } 
}

// ENPOINT 6 - APPROVE OUTBOUND BANK PAYMENT
elseif(isset($_GET["set_approval_outbound_bank_payment"]) && $_GET["set_approval_outbound_bank_payment"] !== ""){
    // Run Update query to set relevent 
    $id = $_GET["set_approval_outbound_bank_payment"];
    $sql = "UPDATE outbound_payments SET approved = '1' WHERE id = $id";
    $result = $conn -> query($sql);
    
    if($result -> num_rows > 0){
        while($row = $result -> fetch_assoc()){
            $rows[] = $row;
        }
    }
    else {
        header("HTTP/1.1 500 Some Went Wrong");
    }

    header("location: finance-dashboard.php");
    // echo json_encode($id);
    

}
// ENDPOINT 7 POST - ADD OUTBOUND BANK PAYMENTS
elseif(isset($_POST["entity-selection-outbound"]) && $_POST["entity-selection-outbound"] !== "" && isset($_POST["transaction-type-input"]) && $_POST["transaction-type-input"] !== "" && isset($_POST["amount-input-outbound"]) && $_POST["amount-input-outbound"] !== "" ){
    // Run Query to add items in outstanding outbound bank payments table
    $entity = $_POST["entity-selection-outbound"];
    $transaction_type = $_POST["transaction-type-input"];
    $amount = $_POST["amount-input-outbound"];

    $sql = "INSERT INTO `outbound_payments` (`id`, `entity`, `transaction_type`, `amount`, `date_submitted`, `time_submitted`, `approved`) VALUES (NULL, '$entity', '$transaction_type', '$amount', current_timestamp(), current_timestamp(), '0')";

    if ($conn->query($sql) === TRUE) {
        header("location: finance-dashboard.php");
    } else {
        // header("location: finance-dashboard.php");
        header("location: finance-dashboard.php");
    }

}

// ENDPOINT 7 - ADD OUTBOUND BANK PAYMENT - COME BACK TO 
// elseif(isset($_GET["add_outbound_bank_payment"]) && $_GET["add_outbound_bank_payment"] !== ""){
//     // Run Query to add items in outstanding outbound bank payments table
// }

// ENDPOINT 8 - GET TASKS
elseif(isset($_GET["tasks"]) && $_GET["tasks"] !== ""){

    $sql = "SELECT * FROM `daily_tasks` WHERE due_date = CURRENT_DATE;";
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
// ENDPOINT 9 FINISH TASK
elseif(isset($_GET["complete_task"]) && $_GET["complete_task"] !== ""){

    $id = $_GET["complete_task"];
    $sql = "UPDATE daily_tasks SET completed = '1' WHERE id = $id";
    $result = $conn -> query($sql);
    
    if ($conn->query($sql) === TRUE) {
        header("location: finance-dashboard.php");
    } else {
        // header("location: finance-dashboard.php");
        header("location: finance-dashboard.php");
    }

    
}

// ENDPOINT 10 - ADD TASKS - COME BACK TO
elseif(isset($_POST["task-input"]) && $_POST["task-input"] !== "" && isset($_POST["assignedto-selection"]) && $_POST["assignedto-selection"] !== "" ){
    // Run Query to add task to task list

    $task = $_POST["task-input"];
    $assigned_to = $_POST["assignedto-selection"];

    $sql = "INSERT INTO `daily_tasks` (`id`, `task`, `assigned_to`, `due_date`, `completed`) VALUES (NULL, '$task', '$assigned_to', current_timestamp(), '0')";

    if ($conn->query($sql) === TRUE) {
        header("location: finance-dashboard.php");
    } else {
        header("location: finance-dashboard.php");
    }
}

else {
    echo "Correct param was not passed";
}


?>