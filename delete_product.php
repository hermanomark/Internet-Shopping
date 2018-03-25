<!DOCTYPE html>
<html>
<head>
<title>Internet Shopping</title>
</head>
<body align="center">
<?php
	//delete.php is used to remove records from our database

	//connectDB to database
	include("connectDB.php");

	if(isset($_GET["id"])) {
		//codes if there is something to delete
		$delete_id = $_GET["id"];

		//create a sql delete statement
		mysql_query("DELETE FROM tblproducts where product_code ='$delete_id'")
			or die(mysql_error());
			header("Location: view_product.php");
	}
	else {
		//codes if there is nothing to delete
		header("Location: view_product.php");
	}
?>
</body>
</html>
