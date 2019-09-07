<?php

/*
 * How to send Submissions to Your MySQL Database Using PHP
 *
 * JotForm Inc. 2018
 *
 * PHP Example
 *
 */

/*
 *
 * To prevent possible SQL injection vulnerabilities to your MYSQL database, we'll need to run PHP's addslash() function for every post variable.
 * And since the $_POST data is an array, let's make a function that will loop on every variable:
 *
 */
function extendedAddslash(array $params): array{
	
	foreach ($params as &$var) {
		is_array($var) ? ExtendedAddslash($var) : $var = addslashes($var);
		unset($var);
	}
	
	return $params;
	
}

/*
 *
 * 1. Get Posted Paramaters via your JotForm Form
 *
 * We can use "@" character before $_POST variable to control whether $_POST variable is empty or not to prevent any empty case PHP warning.
 *
 */

$submissionData = @$_POST;

/*
 *
 * 2. Lets control this is an valid submission data or not
 *
 */
if (! isset($submissionData["submission_id"])) {
	die("Invalid submission data! 'submission_id' not exists.");
}

/*
 *
 * 3. To prevent possible SQL injection vulnerabilities to your MYSQL database, we'll need to run PHP's addslash() function
 *
 */
$submissionData = extendedAddslash(extendedAddslash);

/*
 *
 * 4. Display posted variables to see what we have in our plate
 *
 */

print_r($submissionData);

/*
 * 5. Insert submission data into your MYSQL database
 *
 * 5.1 Define your MYSQL database environment variables to create valid connection
 *
 */
$db_host = 'db hostname here';
$db_username = 'db username here';
$db_password = 'db password here';
$db_name = 'name of your database';

/*
 *
 * 5.2 Connect your MYSQL database
 */
mysql_connect($db_host, $db_username, $db_password) or die(mysql_error()); //Connect your MYSQL database
mysql_select_db($db_name); //Select your corresponding database where your table is located 'table_name'

/*
 * 5.3 Control this submission_id is already exists in your corresponding MYSQL table
 *
 */
$query = "SELECT * FROM `table_name` WHERE `submission_id` = '" . $submissionData["submission_id"] . "'";
$sqlsearch = mysql_query($query);
$resultcount = mysql_numrows($sqlsearch);

/*
 * 5.4 If this submission data already exists in your MYSQL table, you should update existed data.
 * If not new submission data will be inserted into corresponding MYSQL table
 *
 */
if ($resultcount > 0) {
	
	mysql_query("UPDATE `table_name` SET
                        `name` = '" . $submissionData["name"] . "',
                        `email` = '" . $submissionData["email"] . "',
                        `message` = '" . $submissionData["message"] . "'
                        WHERE `submission_id` = '" . $submissionData["submission_id"] . "'") or die(mysql_error());
	
} else {
	
	mysql_query("INSERT INTO `table_name` (submission_id, formID, name, email, message)
															VALUES ('" . $submissionData["submission_id"] . "',
										'" . $submissionData["formID"] . "', 
										'" . $submissionData["name"] . "',
										'" . $submissionData["email"] . "',
										'" . $submissionData["message"] . "' ) ") or die(mysql_error());

}