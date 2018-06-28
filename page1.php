<?php
	session_start();
	require_once('includes_/mysql_connection.php');
	require_once('includes_/mysql_functions.php');
	require_once('includes_/general_functions.php');
	require_once('includes_/session_check.php');
$response['Name'] = 'Basil Satti';
$response['Message']= 'Hello World';

$json_response = json_encode($response);

echo $json_response;


?>