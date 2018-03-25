<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Internet Shopping</title>
<link href="css/style.css" rel="stylesheet" type="text/css" >
</head>
<body>
	<h1>Internet Shopping</h1>
    <div class="container_main_admin">
    <div align="right">
      <?php
        session_start();
        echo "<b>Username: </b>".@$_SESSION ["user_name"];
      ?>
      <a href="logout.php" class="no_underline"><input type="submit" name="logout" class="button2" value="Log out"></a>
    </div>
    <div class="container_main_admin_background">
      <h2>Administrator</h2>
    	<a href="view_user.php" class="no_underline"><input type="submit" value="Manage User's Account" class="button"></a>
    	<a href="view_product.php" class="no_underline"><input type="submit" value="Manage Products" class="button"></a>
    </div>
    </div>
  <footer>
    © Mark Hermano
  </footer>
</body>
</html>
