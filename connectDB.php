<!DOCTYPE html>
<html>
<head>
<title>Internet shopping</title>
</head>
<body>
<?php
	//ConnectDB.php is used for database_connection

	//Set values for database connction_aborted

	$server  = "localhost";

	$user = "root";

	$password = "";

	$db = "internet_shopping_db";

	//Connect to server
	$connection = @mysql_connect($server, $user, $password)
		or die ("Could not connect to server .... \n".mysql_error());

	//Connect to database
	mysql_select_db($db)
		or die ("Could not connect to database.... \n)".mysql_error());
?>
</body>
</html>
