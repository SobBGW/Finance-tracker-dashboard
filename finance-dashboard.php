<?php include './includes/header.php' ?>

<?php 
// If user NOT LOGGED IN redirect them to the Login Page
if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true){
    // CHANGE LOCATION OF REDIRECT
    header("location: index.php");
    exit;
}

?>


<div class="content">
    <p class="dashboard-heading"><?php echo $_SESSION["name"] ?> - <?php echo $_SESSION["role"] ?></p>

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
                <div>Status</div>
                <div>Time</div>

            </div>

            <!-- Recon Created -->
            <div class="recon-list">

                <div class="rec-created">Reconciliation Created</div>
                <div class="rec-approved">Approval</div>
                <div class="rec-approve-date">Date</div>

            </div>

            <!-- Finance 1 Reviewed -->
            <div class="recon-list">

                <div class="fin1">Finance 1 Reviewed</div>
                <div class="fin1-approved">Approval</div>
                <div class="fin1-date">Date</div>

            </div>

            <!-- Finance 2 Reviewed -->
            <div class="recon-list">

                <div class="fin2">Finance 2 Reviewed</div>
                <div class="fin2-approved">Approval</div>
                <div class="fin2-date">Date</div>

            </div>

            <!-- Director Approval -->
            <div class="recon-list">

                <div class="director">Director Approval</div>
                <div class="director-approval">Approval</div>
                <div class="director-date">Date</div>

            </div>

            <div class="daily-recon-buttons">
                <a href="http://localhost/finance-tracker-dashboard/api.php?set_approval_daily_recon=1"><button class="daily-recon-button" value="create-recon" id="create-recon-button">Create Recon</button></a>
                <a href="http://localhost/finance-tracker-dashboard/api.php?set_approval_daily_recon=2"><button class="daily-recon-button" value="finance1-review" id="finance-1-button">Finance 1 Review</button></a>
                <a href="http://localhost/finance-tracker-dashboard/api.php?set_approval_daily_recon=3"><button class="daily-recon-button" value="finance2-review" id="finance-2-button">Finance 2 Review</button></a>
                <a href="http://localhost/finance-tracker-dashboard/api.php?set_approval_daily_recon=4"><button class="daily-recon-button" value="director-approval" id="director-button">Director Review</button></a>
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

        <div class="item item3">
            <p class="widget-heading">
                Outbound Bank Payments
            </p>

            <table class="outstanding-invoices">
                <thead class="outstanding-invoices-head">
                    <tr>
                        <th>Entity</th>
                        <th>Transaction Type</th>
                        <th>Amount</th>
                        <th>Date Submitted</th>
                        <th>Urgency</th>
                        <!-- <th>PDF</th> -->
                    </tr>
                </thead>
                <tbody class="outbound-bank-payments-body">
                    <!-- <tr>
                        <td>blackwell</td>
                        <td>blackwell</td>
                        <td>blackwell</td>
                        <td>blackwell</td>
                        <td>blackwell</td>
                        <td>blackwell</td>
                    </tr> -->
                </tbody>
            </table>

        </div>

        <div class="item item4">
            <p class="widget-heading">
                Tasks Completed
            </p>
        </div>

        <div class="item item5">
            <p class="widget-heading">
                Funds Held with LPs
            </p>
        </div>
    </div>
    
</div>

<?php './includes/footer' ?>