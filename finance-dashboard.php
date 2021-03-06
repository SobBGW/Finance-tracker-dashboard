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
        <!-- Daily Recon Tile-->
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

            <!-- Daily Recon Buttons -->
            <div class="daily-recon-buttons">
                <a href="http://localhost/finance-tracker-dashboard/api.php?set_approval_daily_recon=1"><button class="daily-recon-button" value="create-recon" id="create-recon-button">Create Recon</button></a>
                <a href="http://localhost/finance-tracker-dashboard/api.php?set_approval_daily_recon=2"><button class="daily-recon-button" value="finance1-review" id="finance-1-button">Finance 1 Review</button></a>
                <a href="http://localhost/finance-tracker-dashboard/api.php?set_approval_daily_recon=3"><button class="daily-recon-button" value="finance2-review" id="finance-2-button">Finance 2 Review</button></a>
                <a href="http://localhost/finance-tracker-dashboard/api.php?set_approval_daily_recon=4"><button class="daily-recon-button" value="director-approval" id="director-button">Director Review</button></a>
            </div>
        </div>

        
        <!-- Outstanding Invoices - Tile -->
        <div class="item item2">

            <p class="widget-heading">
                Outstanding Invoices
            </p>
            
            <!-- div containing uk table -->
            <div class="uk-table">
                <table class="outstanding-invoices-table">
                    <thead class="outstanding-invoices-head">
                        <tr>
                            <th>Entity</th>
                            <th>Name</th>
                            <th>Amount</th>
                            <th>Date Due</th>
                            <th>Urgency</th>
                            <!-- <th>PDF</th> -->
                            <th> </th>
                        </tr>

                    </thead>
                    <tbody class="outstanding-invoices-body invoice-uk">

                    <!-- <tr>
                        <td>UK</td>
                        <td>TFG</td>
                        <td>788241</td>
                        <td>2022-01-21</td>
                        <td>High</td>
                        <td>view</td>
                        <td><button>Paid</button></td>

                    </tr> -->
    

                    </tbody>
                </table>
            </div>

            <!-- div containing cy table -->
            <div class="cy-table">
            <table class="outstanding-invoices-table">
                    <thead class="outstanding-invoices-head">
                        <tr>
                            <th>Entity</th>
                            <th>Name</th>
                            <th>Amount</th>
                            <th>Date Due</th>
                            <th>Urgency</th>
                            <!-- <th>PDF</th> -->
                            <th> </th>
                        </tr>

                    </thead>
                    <tbody class="outstanding-invoices-body invoice-cy">

                    <!-- <tr>
                        <td>CY</td>
                        <td>TFG</td>
                        <td>788241</td>
                        <td>2022-01-21</td>
                        <td>High</td>
                        <td>view</td>
                        <td><button>Paid</button></td>

                    </tr> -->

                    </tbody>
                </table>
            </div>

            <!-- Add a new invoice  -->

            <div class="add-invoice-box">
                <form action="api.php" method="post">
                    
                    <select name="entity-selection" id="entity-selection">
                        <option value="UK">UK</option>
                        <option value="CY">CY</option>
                    </select>

                    <input type="text" name="name-input" id="name-input" placeholder="Name of invoice">

                    <input type="number" name="amount-input" id="amount-input" placeholder="1000">

                    <input type="text" name="date-input" id="date-input" placeholder="YYYY-MM-DD">

                    <select name="urgency-selection" id="urgency-selection">
                        <option value="Low">Low</option>
                        <option value="Medium">Medium</option>
                        <option value="High">High</option>
                    </select>

                    <!-- Come Back To At A Later Date -->
                    <!-- <input type="file" name="PDF-upload" id="PDF-upload"> -->

                    <button type="submit">Submit</button>

                </form>


            </div>

        </div>

        <div class="item item3">
            <p class="widget-heading">
                Outbound Bank Payments
            </p>

            <div class="uk-payments">
                <table class="outbound-payments">
                    <thead class="outbound-payments-head">
                        <th>Entity</th>
                        <th>Transaction Type</th>
                        <th>Amount</th>
                        <th>Datetime Submitted</th>
                        <!-- <th>Time</th> -->
                        <th>Authorised</th>
                        <th> </th>
                    </thead>
                    <tbody class="outbound-payments-body outbound-uk">

                        <!-- <tr>
                            <td>UK</td>
                            <td>Withdrawal</td>
                            <td>1388</td>
                            <td>2022-06-21</td>
                            <td>10:31:20</td>
                            <td>Not Authorised</td>
                            <td> <button>Authorise</button> </td>
                        </tr> -->
                        
                    </tbody>
                </table>
            </div>

            <div class="cy-payments">
            <table class="outbound-payments">
                    <thead class="outbound-payments-head">
                        <th>Entity</th>
                        <th>Transaction Type</th>
                        <th>Amount</th>
                        <th>Datetime Submitted</th>
                        <th>Authorised</th>
                        <th> </th>
                    </thead>
                    <tbody class="outbound-payments-body outbound-cy">

                        <!-- <tr>
                            <td>CY</td>
                            <td>Withdrawal</td>
                            <td>1388</td>
                            <td>2022-06-21</td>
                            <td>10:31:20</td>
                            <td>Not Authorised</td>
                            <td> <button>Authorise</button> </td>
                        </tr> -->
                    </tbody>
                </table>
            </div>

            <div class="add-outbound-payment-box">

                <form action="api.php" method="post">

                    <select name="entity-selection-outbound" id="entity-selection-outbound">
                        <option value="UK">UK</option>
                        <option value="BHS">BHS</option>
                    </select>
                    
                    <input type="text" name="transaction-type-input" id="transaction-type-input" placeholder="Transaction Type">

                    <input type="number" name="amount-input-outbound" id="amount-input-outbound" placeholder="10000">

                    <!-- <input type="text" name="date-input-outbound" id="date-input-outbound" placeholder="2022-09-01"> -->

                    <!-- <input type="text" name="time-input-outbound" id="time-input-outbound" placeholder="13:08:00"> -->

                    <button type="submit">Submit</button>

                </form>

            </div>

        </div>

        <div class="item item4">
            <p class="widget-heading">
                Tasks Completed
            </p>
            <div class="tasks-table">
                <table class="daily-tasks-table">
                    <thead class="daily-tasks-head">
                        <tr>
                            <th>Task</th>
                            <th>Assigned to</th>
                            <th>Due Date</th>
                            <th>Completed</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody class="daily-tasks-body">

                        <!-- <tr>
                            <td>Xero Entries</td>
                            <td>Brian Tran</td>
                            <td>2022-09-02</td>
                            <td>Not</td>
                            
                        </tr> -->

                    </tbody>
                </table>
            </div>

            <div class="add-task-box">

                <form action="api.php" method="post">
                    <input type="text" name="task-input" id="task-input" placeholder="Task Name">

                    <select name="assignedto-selection" id="assignedto-selection">
                        <option value="Brian">Brian</option>
                        <option value="Antony">Antony</option>
                        <option value="Monika">Monika</option>
                    </select>

                    <button type="submit">Submit</button>

                </form>

                

            </div>
        </div>

        <div class="item item5">
            <p class="widget-heading">
                Funds Held with LPs
            </p>
        </div>
    </div>
    
</div>

<?php './includes/footer' ?>