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
  	<form action="login.php" method="post">
      <h2> Member Login </h2>  
      <div class="imgcontainer">
        <img src="images/img_avatar5.png" alt="Avatar" class="avatar">
      </div>
      <label> Username: </label>
  		<input type ="text" name="txtUsername" class="text" placeholder="Enter Username" required>
      <label> Password: </label>
  		<input type="password" name="txtPassword" class="text" placeholder="Enter Password" required>
  		<input type="submit" name="btnSubmit" value="Sign in" class="button">
          <span class="left"><input type="checkbox" checked="checked" name="remember"> Remember me</span>
          <span class="right"><a href= "index.php"> Forgot password? </a></span>
        <br>
        <br>
        <br>
      <p align="center"> Want to join? <a href = "register.php"> Sign up </a> in seconds. </p>
  	</form>
  </div>
  <footer>
      © Mark Hermano
  </footer>
</body>
</html>
