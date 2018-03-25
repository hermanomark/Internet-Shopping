<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Internet Shopping</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
  <h1>Internet Shopping</h1>
  <div class="container">
    <h2> Edit Account </h2>
    <div class="imgcontainer">
	    	<img src="images/img_avatar5.png" alt="Avatar" class="avatar">
	   </div>
<?php
	//edit.php is used tp enter new record to our database
	//create a function for the form in order to use in multiple times
	function editForm($user_name, $password, $first_name, $last_name, $email, $age, $gender, $role, $error) {
?>
<?php
	if ($error != "") {
		echo "<div style='padding:4px; border:1px solid red; color: red;'>".$error."</div>";
	}
?>
	<form action="" method="post">
		<label>Username:</label><br>
			<input type="text" name="txtUsername" value="<?php echo $user_name; ?>" class="text" required ><br>
		<label>Password:</label><br>
			<input type="password" name="txtPassword" value="<?php echo $password; ?>" class="text" required><br>
		<label>First name:</label><br>
			<input type="text" name="txtFirstname" value="<?php echo $first_name; ?>" class="text" required><br>
		<label>Last name:</label><br>
			<input type="text" name="txtLastname" value="<?php echo $last_name; ?>" class="text" required><br>
		<label>Email:</label><br>
			<input type="text" name="txtEmail" value="<?php echo $email; ?>" class="text" required><br>
		<label>Age:</label>
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
			</select><br>
		<label>Gender:</label><br>
			<?php
			if ($gender == "Female") {
				echo "<input type='radio' name='rbtGender' value='Male' class='radio' required> Male";
				echo "<input type='radio' name='rbtGender' value='Female' checked='checked' class='radio' required> Female";
			}
			else {
				echo "<input type='radio' name='rbtGender' value='Male' checked='checked' class='radio' required> Male";
				echo "<input type='radio' name='rbtGender' value='Female' class='radio' required> Female";
			}
			?><br>
		<label>Role:</label><br>
		<select name="cmbRole" class="combobox2" required>
			<option value="user">User</option>
			<option value="admin">Admin</option>
		</select><br><br>
		<input type="submit" name="sbtEdit" value="Confirm" class="button">
	</form>
	<a href="view_user.php" class="no_underline"><input type="submit" name="back" value="Back" class="button"></a>
</div>
	<footer>
    © Mark Hermano
  </footer>
<?php
}
	//Connect to our database
	include("connectDB.php");

	if(isset($_POST["sbtEdit"])) {

		//code if button is clicked

		//get value from our fields
		$user_name = mysql_real_escape_string(htmlspecialchars($_POST["txtUsername"]));
		$password =  mysql_real_escape_string(htmlspecialchars($_POST["txtPassword"]));
		$first_name =  mysql_real_escape_string(htmlspecialchars($_POST["txtFirstname"]));
		$last_name =   mysql_real_escape_string(htmlspecialchars($_POST["txtLastname"]));
		$email =  mysql_real_escape_string(htmlspecialchars($_POST["txtEmail"]));
		$age = mysql_real_escape_string(htmlspecialchars($_POST["cmbAge"]));
		$gender = mysql_real_escape_string(htmlspecialchars($_POST["rbtGender"]));
		$role = mysql_real_escape_string(htmlspecialchars($_POST["cmbRole"]));

		if ($user_name == "" || $password == "" || $first_name == "" || $last_name == "" || $email == "" || $age == "" || $gender == "" || $role == "") {
			//code if there is a missing requirement

			//display error
			$err = "ERROR! Please complete all the required field";
			editForm($user_name, $password, $first_name, $last_name, $email, $age, $gender, $role, $err);
		}

		else {
			//code if there are no missing requirements
			//set the value pf again just to make sure all value of the fields are populated
			$user_name = mysql_real_escape_string(htmlspecialchars($_POST["txtUsername"]));
			$password =  mysql_real_escape_string(htmlspecialchars($_POST["txtPassword"]));
			$first_name =  mysql_real_escape_string(htmlspecialchars($_POST["txtFirstname"]));
			$last_name =   mysql_real_escape_string(htmlspecialchars($_POST["txtLastname"]));
			$email =  mysql_real_escape_string(htmlspecialchars($_POST["txtEmail"]));
			$age = mysql_real_escape_string(htmlspecialchars($_POST["cmbAge"]));
			$gender = mysql_real_escape_string(htmlspecialchars($_POST["rbtGender"]));
			$role = mysql_real_escape_string(htmlspecialchars($_POST["cmbRole"]));

			//create a sql update statement
			mysql_query("UPDATE tblaccount SET aUsername='$user_name', aPassword='$password', aFirstname='$first_name', aLastname='$last_name', aEmail='$email', aAge='$age', aGender='$gender', aRole='$role' where aUsername = '$user_name'")
				or die (mysql_error());

			//return to mainadmin.php
			header("Location: view_user.php");
		}
	}
	else {
		//code if button is not clicked


		//Get the valud of id
		if (isset($_GET["id"])) {

			$edit_id = $_GET["id"];

			$result = mysql_query("SELECT * FROM tblaccount where aUsername='$edit_id'")
				or die (mysql_error());

			$row = mysql_fetch_array($result);

			if($row) {
				$user_name = $row["aUsername"];
				$password = $row["aPassword"];
				$first_name = $row["aFirstname"];
				$last_name = $row["aLastname"];
				$email = $row["aEmail"];
				$age = $row["aAge"];
				$gender = $row["aGender"];
				$role = $row["aRole"];

				//pass the value to the form
				editForm($user_name, $password, $first_name, $last_name, $email, $age, $gender, $role, "");
			}
			else {
				echo "No user account record";
			}
		}
		else {
			echo "No username selected";
		}
	}
?>
</body>
</html>
