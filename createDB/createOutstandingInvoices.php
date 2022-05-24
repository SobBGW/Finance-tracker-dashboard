<!-- CREATE TABLE `finance_test`.`outstanding_invoices` ( `id` INT NOT NULL AUTO_INCREMENT , `entity` VARCHAR(20) NOT NULL , `name` VARCHAR(100) NOT NULL , `amount` INT(100000) NOT NULL , `due_date` DATE NOT NULL , `urgency` VARCHAR(25) NOT NULL , `PDF` MEDIUMBLOB NULL DEFAULT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB; -->

<!-- FINAL TABLE -->
<!-- CREATE TABLE `finance_test`.`outstanding_invoices` ( `id` INT NOT NULL AUTO_INCREMENT , `entity` VARCHAR(20) NOT NULL , `name` VARCHAR(100) NOT NULL , `amount` INT(100) NOT NULL , `date_due` DATE NOT NULL , `urgency` VARCHAR(25) NOT NULL , `PDF` MEDIUMBLOB NULL DEFAULT NULL , `approved` BOOLEAN NOT NULL DEFAULT FALSE , PRIMARY KEY (`id`)) ENGINE = InnoDB; -->

<!-- Query -->
<!-- SELECT * FROM daily_tasks WHERE (completed = 0) OR ( completed = 1 AND due_date >= DATE_SUB(CURDATE(), INTERVAL 3 DAY)) ORDER BY due_date; -->