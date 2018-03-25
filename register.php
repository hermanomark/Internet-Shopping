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
		<form action="reg.php" method="post">
			<h2>Create Customer Account</h2>
				<div class="imgcontainer">
	        <img src="images/img_avatar5.png" alt="Avatar" class="avatar">
	      </div>
				<label>Username: </label>
				<input type="text" name="txtUsername" class="text" placeholder="Enter Username" required><br>
				<label>Password: </label>
				<input type="password" name="txtPassword" class="text" placeholder="Enter Password" required><br>
				<label>First name: </label>
				<input type="text" name="txtFirstname" class="text" placeholder="Enter Firstname" required><br>
				<label>Last name: </label>
				<input type="text" name="txtLastname" class="text" placeholder="Enter Lastname" required><br>
				<label> Email: </label>
				<input type="text" name="txtEmail" class="text" placeholder="Enter Email" required><br>
				<label>Age: </label><br>
				<select name="cmbAge" class="combobox" >
				<?php
					$x =1;
					while ($x <= 100)
					{
					echo "<option value='".$x."'>".$x."</option>";
					$x++;
					}
				?>
				</select>
				<br>
				<br>
				<label>Gender: </label><br>
				<input type="radio" name="rbtGender" value="Male" class="radio" required> Male
				<input type="radio" name="rbtGender" value="Female" class="radio" required> Female
				<!-- hidden text for role -->
				<input type="hidden" name="txtRole" value="user"><br><br>
				<input type="submit" value="Sign up" id="btnReg" class="button">
				<p align="center">Go back to <a href="index.php"> Sign in </a> page.</p>
			</form>
		</div>
		<footer>
			© Mark Hermano
		</footer>
</body>
</html>
