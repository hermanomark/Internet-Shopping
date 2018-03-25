<!DOCTYPE html>
<html>
<head> 
<title>Internet Shopping></title>
</head>
<body>
<?php
	//maintain session
	session_start();
	
	//get details
	$user_name = $_POST ["txtUsername"];
	$password = $_POST ["txtPassword"];
	
	//database connection
	$conDB = new mysqli("localhost", "root", "", "internet_shopping_db");
	
	//sql select statement
	
	$sql = "select * from tblaccount where ausername='".$user_name."' and apassword='".$password."'";
	
	//send select statement to database and colect results
	$result = $conDB -> query($sql);
	
	//get number of result
	$val = mysqli_num_rows($result);
	
	//check if there is a result
	if($val == 1)
	{
		//transfer results
		$sres = mysqli_fetch_array($result);
		$_SESSION["user_name"] = $sres["aUsername"];
		$_SESSION["password"] = $sres["aPassword"];
		$_SESSION["first_name"] = $sres["aFirstname"];
		$_SESSION["last_name"] = $sres["aLastname"];
		$_SESSION["age"] = $sres["aAge"];
		$_SESSION["gender"] = $sres["aGender"];
		$_SESSION["role"] = $sres["aRole"];
		mysql_close($conDB);
		//if role is admin redirect to admin page
		if ($_SESSION["role"] == "admin")
			header("location: main_admin.php");
		else
			header("location: main.php");
	}
	else
	{	
		//if credentials are wrong redirect to same page
		mysql_close($conDB);
		header("location: index.php" ); 
	}
?>
</body>
</head>
</html>