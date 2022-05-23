console.log($)

function getDailyRecon(){
    $.get("http://localhost/finance-tracker-dashboard/api.php?daily_recon=1", (data, status) => {
    //    console.log(data[0]);

        // Rec Created and Approved
        if(data[0]["created"] == "0"){
            console.log("Not Yet Created")

            $(".rec-approved").empty();
            $(".rec-approved").append("<div class='dot-red'></div>");

            $(".rec-approve-date").empty();
            $(".rec-approve-date").append("<div class='dot-red'></div>");

        }
        else {
            console.log("Created")

            $(".rec-approved").empty();
            $(".rec-approved").append("<div class='dot-green'></div>");

            $(".rec-approve-date").empty();
            $(".rec-approve-date").text(data[0]["created_time"]);

            $("#create-recon-button").prop("disabled", true);
        }


        // finance1 Reviewed and Time
        if(data[0]["reviewed_1"] == "0"){
            console.log("not yet reviewed by 1")

            $(".fin1-approved").empty();
            $(".fin1-approved").append("<div class='dot-red'></div>");

            $(".fin1-date").empty();
            $(".fin1-date").append("<div class='dot-red'></div>");

        }
        else{
            console.log("Reviwed by reviewer 1")

            $(".fin1-approved").empty();
            $(".fin1-approved").append("<div class='dot-green'></div>");

            $(".fin1-date").empty();
            $(".fin1-date").text(data[0]["reviewed_1_time"]);

            $("#finance-1-button").prop("disabled", true);
        }

        // finance2 Reviewed and Time
        if(data[0]["reviewed_2"] == "0"){
            console.log("Not Approved")

            $(".fin2-approved").empty();
            $(".fin2-approved").append("<div class='dot-red'></div>");

            $(".fin2-date").empty();
            $(".fin2-date").append("<div class='dot-red'></div>");

        }
        else{
            console.log("Approved")

            $(".fin2-approved").empty();
            $(".fin2-approved").append("<div class='dot-green'></div>");

            $(".fin2-date").empty();
            $(".fin2-date").text(data[0]["reviewed_2_time"]);

            $("#finance-2-button").prop("disabled", true);
        }

        // Director approval and time
        if(data[0]["aprroved"] == "0"){
            console.log("Not Approved");

            $(".director-approval").empty();
            $(".director-approval").append("<div class='dot-red'></div>");

            $(".director-date").empty();
            $(".director-date").append("<div class='dot-red'></div>");
            
        }
        else{
            $(".director-approval").empty();
            $(".director-approval").append("<div class='dot-green'></div>");

            $(".director-date").empty();
            $(".director-date").text(data[0]["approved_time"]);

            $("#director-button").prop("disabled", true);
        }

    })
}


function getOutstandingInvoices(){
    $.get("http://localhost/finance-tracker-dashboard/api.php?outstanding_invoices=1", (data, status) => {
        console.log(data[0])

        data.forEach(element => {
            console.log(element)
            $(".outstanding-invoices-body").append("");
        });
    })
}

function outboundBankPaymentsuk(){
    $.get("http://localhost/finance-tracker-dashboard/api.php?outbound_bank_payments=1", (data, status) => {
        console.log(data)
        $(".outbound-uk").empty()
        data.forEach(element => {

            if(element["approved"] == "0"){
                $(".outbound-uk").append(`<tr> <td>${element["entity"]}</td> <td>${element["transaction_type"]}</td> <td>${element["amount"]}</td> <td>${element["time_submitted"]}</td> <td> <div class='dot-red'></div> </td> <td><a href='http://localhost/finance-tracker-dashboard/api.php?set_approval_outbound_bank_payment=${element["id"]}'><button class='auth-button'>Authorise</button></a></td> </tr>`)
            } else{
                $(".outbound-uk").append(`<tr> <td>${element["entity"]}</td> <td>${element["transaction_type"]}</td> <td>${element["amount"]}</td> <td>${element["time_submitted"]}</td> <td> <div class='dot-green'></div> </td> </tr>`)
            }

        })
    })
}

function outboundBankPaymentscy(){
    $.get("http://localhost/finance-tracker-dashboard/api.php?outbound_bank_payments=2", (data, status) => {
        console.log(data)
        $(".outbound-cy").empty()
        data.forEach(element => {

            if(element["approved"] == "0"){
                $(".outbound-cy").append(`<tr> <td>${element["entity"]}</td> <td>${element["transaction_type"]}</td> <td>${element["amount"]}</td> <td>${element["time_submitted"]}</td> <td> <div class='dot-red'></div> </td> <td><a href='http://localhost/finance-tracker-dashboard/api.php?set_approval_outbound_bank_payment=${element["id"]}'><button class='auth-button'>Authorise</button></a></td> </tr>`)
            } else{
                $(".outbound-cy").append(`<tr> <td>${element["entity"]}</td> <td>${element["transaction_type"]}</td> <td>${element["amount"]}</td> <td>${element["time_submitted"]}</td> <td> <div class='dot-green'></div> </td> </tr>`)
            }

        })
    })
}

function dailyTasks(){
    $.get("http://localhost/finance-tracker-dashboard/api.php?tasks=1", (data, status) => {
        console.log(data)
        $(".daily-tasks-body").empty()
        data.forEach(element => {

            if(element["completed"] == "0"){
                $(".daily-tasks-body").append(`<tr> <td>${element["task"]}</td> <td>${element["assigned_to"]}</td> <td>${element["due_date"]}</td> <td><div class='dot-red'></div></td> <td><a href="http://localhost/finance-tracker-dashboard/api.php?complete_task=${element["id"]}"><button class='auth-button'>Complete</button></a></td> </tr>`)
            } else{
                $(".daily-tasks-body").append(`<tr> <td>${element["task"]}</td> <td>${element["assigned_to"]}</td> <td>${element["due_date"]}</td> <td><div class='dot-green'></div></td></tr>`)
            }

        })
    })
}


$(document).ready(function() {
    getDailyRecon();

    // getOutstandingInvoices()

    outboundBankPaymentsuk()

    outboundBankPaymentscy()

    dailyTasks()
})



