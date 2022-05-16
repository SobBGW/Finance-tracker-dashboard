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
    <p class="dashboard-heading">John Ham - Director </p>

    <!-- Check user role and load relevent html -->
    <div class="wrapper">
        <!-- title 1 -->
        <div class="item item1">
            <p class="widget-heading">
                Daily Reconciliation
            </p>
            <!-- Heading for recons boxes -->
            <div class="recon-box">
            <div>Stage</div>
            <div>Approval</div>
            <div>Date</div>
            </div>

            <!-- Recon Created -->
            <div class="recon-list">
            <div>Reconciliation Created</div>
            <div>Approval</div>
            <div>Date</div>
            </div>

            <!-- Finance 1 Reviewed -->
            <div class="recon-list">
            <div>Finance 1 Reviewed</div>
            <div>Approval</div>
            <div>Date</div>
            </div>

            <!-- Finance 2 Reviewed -->
            <div class="recon-list">
            <div>Finance 2 Reviewed</div>
            <div>Approval</div>
            <div>Date</div>
            </div>

            <!-- Director Approval -->
            <div class="recon-list">
            <div>Director Approval</div>
            <div>Approval</div>
            <div>Date</div>
            </div>
        </div>

        
        <!-- title 2 -->
        <div class="item item2">
            <p class="widget-heading">
                Outstanding Invoices
            </p>
            <table class="outstanding-invoices">
                <thead class="outstanding-invoices-head">
                    <tr>
                        <th>Entity</th>
                        <th>Name</th>
                        <th>Amount</th>
                        <th>Date Due</th>
                        <th>Urgency</th>
                        <th>PDF</th>
                    </tr>
                </thead>
                <tbody class="outstanding-invoices-body">
                    <tr>
                        <td>blackwell</td>
                        <td>blackwell</td>
                        <td>blackwell</td>
                        <td>blackwell</td>
                        <td>blackwell</td>
                        <td>blackwell</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="item item3"></div>
        <div class="item item4"></div>
    </div>
    
</div>

<?php './includes/footer' ?>