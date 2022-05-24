<?php 

include "../config.php";

// establish a connection with the database
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn -> connect_error) {
    die("connection failed:" . $conn -> connect_error);
}

// SQL Statement
$sql = "CREATE TABLE outbound_payments (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	entity VARCHAR(10) NOT NULL,
	transaction_type VARCHAR(40) NOT NULL,
	amount INT(10) NOT NULL,
	date_submitted DATE NOT NULL DEFAULT CURRENT_TIMESTAMP,
	time_submitted TIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	authorised BOOLEAN NOT NULL DEFAULT FALSE

);";

if ($conn -> query($sql) === TRUE){
    echo "Table outbound_payments has been successfully created";
} else {
    echo "Error Creating Table: " . $conn -> error;
}



?>

<!-- 
	CREATE TABLE `finance_test`.`outbound_payments` ( `id` INT NOT NULL AUTO_INCREMENT , `entity` VARCHAR(10) NOT NULL , `transaction_type` VARCHAR(25) NOT NULL , `amount` INT(10) NOT NULL , `date_submitted` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP , `time_submitted` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , `approved` BOOLEAN NOT NULL DEFAULT FALSE , PRIMARY KEY (`id`)) ENGINE = InnoDB;
CREATE TABLE `finance_test`.`outbound_bank_payments` ( `id` INT NOT NULL AUTO_INCREMENT , `entity` VARCHAR(20) NOT NULL , `transaction_type` VARCHAR(40) NOT NULL , `amount` INT(10) NOT NULL , `date_submitted` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP , `time_submitted` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB;

INSERT INTO `outbound_payments` (`id`, `entity`, `transaction_type`, `amount`, `date_submitted`, `time_submitted`, `approved`) VALUES (NULL, 'uk', 'lol', '1000', current_timestamp(), current_timestamp(), '0');
 -->

<!-- //sql statement to use
 SELECT * FROM outbound_payments WHERE (approved = 0) OR ( approved = 1 AND date_submitted >= DATE_SUB(CURDATE(), INTERVAL 3 DAY)) ORDER BY date_submitted; -->


 <!-- CY query -->
 <!-- SELECT * FROM outbound_payments WHERE (entity = 'CY') AND ((approved = 0) OR ( approved = 1 AND date_submitted >= DATE_SUB(CURDATE(), INTERVAL 3 DAY))) ORDER BY approved; -->

 <!-- UK Query -->
 <!-- SELECT * FROM outbound_payments WHERE (entity = 'UK') AND ((approved = 0) OR ( approved = 1 AND date_submitted >= DATE_SUB(CURDATE(), INTERVAL 3 DAY))) ORDER BY approved; -->