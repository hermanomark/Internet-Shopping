<!DOCTYPE html>
<html>
<head>
<title>Internet Shopping</title>
</head>
<body align="center">
<?php
	//get registration values
	$user_name = $_POST["txtUsername"];
	$password = $_POST["txtPassword"];
	$first_name = $_POST["txtFirstname"];
	$last_name = $_POST["txtLastname"];
	$email = $_POST["txtEmail"];
	$age = $_POST["cmbAge"];
	$gender = $_POST["rbtGender"];
	$role = $_POST["txtRole"];
	
	//database connection
	$conDB = new mysqli("localhost", "root","","internet_shopping_db"); //new mysqli is a function like a command, localhost is ip address, root as is, password for root for this example none so declare " ", aclcdb is your database name
	
	//sql insert statement
	$sql = "Insert into tblaccount values('".$user_name."','".$password."','".$first_name."','".$last_name."','".$email."',".$age.",'".$gender."','".$role."')"; //quotations maybe sensitive
	
	//send sql insert statement
	$result = $conDB -> query($sql);
	
	//redirect to login page
	header("location: index.php" ); 
?>
</body>
</html