
<?php
    $dsn = 'mysql:host=.us-east-1.rds.amazonaws.com;dbname=social_db';
	$user = 'root';
	$pass = '12345678';
	$option = array(
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
	);
	try
	{
		$conn = new PDO($dsn,$user,$pass,$option);
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//echo 'Good Very Good !';
	}
	catch(PDOException $ex)
	{
		echo "Failed to connect with database ! ".$ex->getMessage();
		die();
	}
?>