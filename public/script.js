console.log($)

function getDailyRecon(){
    $.get("http://localhost/finance-tracker-dashboard/api.php?daily_recon=1", (data, status) => {
       console.log(data[0]);

        // Rec Created and Approved
        if(data[0]["created"] == "0"){
            console.log("Not Yet Created")

            $(".rec-approved").empty();
            $(".rec-approved").text("Not Created");

            $(".rec-approve-date").empty();
            $(".rec-approve-date").text("Not Created");

        }
        else {
            console.log("Created")

            $(".rec-approved").empty();
            $(".rec-approved").text("Approved");

            $(".rec-approve-date").empty();
            $(".rec-approve-date").text(data[0]["created_time"]);

            $("#create-recon-button").prop("disabled", true);
        }


        // finance1 Reviewed and Time
        if(data[0]["reviewed_1"] == "0"){
            console.log("not yet reviewed by 1")

            $(".fin1-approved").empty();
            $(".fin1-approved").text("Not Approved");

            $(".fin1-date").empty();
            $(".fin1-date").text("Not Approved");

        }
        else{
            console.log("Reviwed by reviewer 1")

            $(".fin1-approved").empty();
            $(".fin1-approved").text("Approved");

            $(".fin1-date").empty();
            $(".fin1-date").text(data[0]["reviewed_1_time"]);

            $("#finance-1-button").prop("disabled", true);
        }

        // finance2 Reviewed and Time
        if(data[0]["reviewed_2"] == "0"){
            console.log("Not Approved")

            $(".fin2-approved").empty();
            $(".fin2-approved").text("Not Approved");

            $(".fin2-date").empty();
            $(".fin2-date").text("Not Approved");

        }
        else{
            console.log("Approved")

            $(".fin2-approved").empty();
            $(".fin2-approved").text("Approved");

            $(".fin2-date").empty();
            $(".fin2-date").text(data[0]["reviewed_2_time"]);

            $("#finance-2-button").prop("disabled", true);
        }

        // Director approval and time
        if(data[0]["aprroved"] == "0"){
            console.log("Not Approved");

            $(".director-approval").empty();
            $(".director-approval").text("Not Approved")

            $(".director-date").empty();
            $(".director-date").text("Not Approved")
            
        }
        else{
            $(".director-approval").empty();
            $(".director-approval").text("Approved")

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
        });
    })
}

getDailyRecon();
getOutstandingInvoices()