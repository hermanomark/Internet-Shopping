<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Internet shopping</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1> Internet Shopping </h1>
<?php
	//new.php is used to enter new record to our database
	//create a function for the form in order to use it multiple times
	function addForm($user_name, $password, $first_name, $last_name, $email, $age, $gender, $role, $error) {
?>
<?php
	if ($error != "") {
		echo "<div style='padding:4px; border:1px solid red; color: red;'>".$error."</div>";
	}
?>

	<div class="container">
		<form action="" method="post">
			<h2> Add New User Account </h2>
			<div class="imgcontainer">
	        <img src="images/img_avatar5.png" alt="Avatar" class="avatar">
	     </div>
		<label>Username:</label><br>
			<input type="text" name="txtUsername" value="<?php echo $user_name; ?>" class="text" required><br>
		<label>Password:</label><br>
			<input type="password" name="txtPassword" value="<?php echo $password; ?>" class="text" required><br>
		<label>First name:</label><br>
			<input type="text" name="txtFirstname" value="<?php echo $first_name; ?>" class="text" required><br>
		<label>Last name:</label><br>
			<input type="text" name="txtLastname" value="<?php echo $last_name; ?>" class="text" required><br>
		<label>Email:</label><br>
			<input type="text" name="txtEmail" value="<?php echo $email; ?>" class="text" required><br>
		<label>Age:</label><br>
			<select name="cmbAge" class="combobox">
				<?php
				$x = 1;
				while ($x <= 100) {
					if ($x == $age) {
						echo "<option value='".$x."' selected>".$x."</option>";
					}
					else {
						echo "<option value'".$x."'>".$x."</option>";
					}
					$x++;
				}
				?>
			</select><br><br>
		<label>Gender:</label><br>
			<?php
			if ($gender == "Female") {
				echo "<input type='radio' name='rbtGender' value='Male' class='radio'> Male";
				echo "<input type='radio' name='rbtGender' value='Female' checked='checked' class='radio'> Female";
			}
			else {
				echo "<input type='radio' name='rbtGender' value='Male' checked='checked' class='radio'> Male";
				echo "<input type='radio' name='rbtGender' value='Female' class='radio'> Female";
			}
			?><br><br>
		<label>Role:</label><br>
		<select name="cmbRole" class="combobox2">
			<option value="user">User</option>
			<option value="admin">Admin</option>
		</select><br><br>
		<input type="submit" name="sbtNew" value="Confirm" class="button">
	</form>
	<a href="view_user.php" class="no_underline"><input type="submit" name="back" value="Back" class="button"></a>
</div>
	<footer>
	    © Mark Hermano
	 </footer>
<?php
}
	//connect to database
	include("connectDB.php");

	//check if the submit button is clicked
	if (isset($_POST["sbtNew"])) {
		//codes if the submit button is clicked
		$n_user_name = mysql_real_escape_string(htmlspecialchars($_POST["txtUsername"]));
		$n_password =  mysql_real_escape_string(htmlspecialchars($_POST["txtPassword"]));
		$n_first_name =  mysql_real_escape_string(htmlspecialchars($_POST["txtFirstname"]));
		$n_last_name =   mysql_real_escape_string(htmlspecialchars($_POST["txtLastname"]));
		$n_email =  mysql_real_escape_string(htmlspecialchars($_POST["txtEmail"]));
		$n_age = mysql_real_escape_string(htmlspecialchars($_POST["cmbAge"]));
		$n_gender = mysql_real_escape_string(htmlspecialchars($_POST["rbtGender"]));
		$n_role = mysql_real_escape_string(htmlspecialchars($_POST["cmbRole"]));

		//checked if all the fields are populated
		if ($n_user_name == "" || $n_password == "" || $n_first_name == "" || $n_last_name == "" || $n_email == "" || $n_age == "" || $n_gender == "" || $n_role == "") {
			//codes if there is a missing requirement
			//set a value for the error
			$err = "ERROR! Please complete all the required field";
			addForm($n_user_name, $n_password, $n_first_name, $n_last_name, $n_email, $n_age ,$n_gender ,$n_role ,$err);
		}
		else {

			//codes the required record is completed
			//set the value pf again just to make sure all value of the fields are populated
			$n_user_name = mysql_real_escape_string(htmlspecialchars($_POST["txtUsername"]));
			$n_password =  mysql_real_escape_string(htmlspecialchars($_POST["txtPassword"]));
			$n_first_name =  mysql_real_escape_string(htmlspecialchars($_POST["txtFirstname"]));
			$n_last_name =   mysql_real_escape_string(htmlspecialchars($_POST["txtLastname"]));
			$n_email =  mysql_real_escape_string(htmlspecialchars($_POST["txtEmail"]));
			$n_age = mysql_real_escape_string(htmlspecialchars($_POST["cmbAge"]));
			$n_gender = mysql_real_escape_string(htmlspecialchars($_POST["rbtGender"]));
			$n_role = mysql_real_escape_string(htmlspecialchars($_POST["cmbRole"]));

			//create a sql insert statement and save it to the database
			mysql_query("INSERT INTO tblaccount VALUES('$n_user_name', '$n_password', '$n_first_name', '$n_last_name', '$n_email', '$n_age', '$n_gender', '$n_role')")
				or die(mysql_error());

			//redirect to view.php if the record is saved
			header("Location: view_user.php");
		}
	}
	else {
		//codes if the submit button is not clicked
		//call the form that passes blank value to its parameter
		addForm("", "", "", "", "", "", "", "", "");
	}
?>

</body>
</html>
