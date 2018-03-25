<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Internet Shopping </title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/main_table.css" rel="stylesheet" type="text/css">
</head>
<body>
  <h1>Internet Shopping</h1>
  <div class="container_main_view_user">
    <h2>Manage User's Accounts</h2>
      <div align="center">
        <a href="main_admin.php" class="no_underline"><input type="submit" name="home" class="button4" value="Home"></a>
        <a href="new_user.php" class='no_underline'><input type='submit' value="Add a new user accouunt" class="button4"></a>
      <div>
  	<?php
  	//mainadmin.php is used to display the accounts for all the users

  	//Connect to our database
  	include("connectDB.php");

  	//get the result from the database
  	$result = mysql_query("SELECT * from tblaccount")
  		or die (mysql_error());

  	//create our web table
  	echo "<table>
      <thead>
  		<tr>
  			<th>Username</th>
  			<th>Password</th>
  			<th>First Name</th>
  			<th>Last Name</th>
  			<th>Email</th>
  			<th>Age</th>
  			<th>Gender</th>
  			<th>Role</th>
  			<th>Edit</th>
  			<th>Delete</th>
      </thead>
  		</tr>";

  	//loop for displaying the records from our table
  	while ($row = mysql_fetch_array($result)) {
  		echo "<tr>
  			<td>".$row['aUsername']."</td>
  			<td>".$row['aPassword']."</td>
  			<td>".$row['aFirstname']."</td>
  			<td>".$row['aLastname']."</td>
  			<td>".$row['aEmail']."</td>
  			<td>".$row['aAge']."</td>
  			<td>".$row['aGender']."</td>
  			<td>".$row['aRole']."</td>";
  			echo "<td><a href='edit_user.php? id=".$row['aUsername']."' class='no_underline'> <input type='submit' value='Edit' class='button'> </a></td>";
  			echo "<td><a href='delete_user.php? id=".$row['aUsername']."' class='no_underline'><input type='submit' value='Delete' class='button'> </a></td>
  			</tr>";
  		}
  		echo "</table>";
    ?>
   
  </div>
  <footer>
     © Mark Hermano
  </footer>
</body> 
</html>
