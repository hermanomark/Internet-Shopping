<!DOCTYPE html>
<html>
<head> 
<title>Internet Shopping></title>
</head>
<body>
  <?php
    session_start();
    $user_name = $_SESSION['aUsername'];

    session_destroy();

    header("location: index.php");
  ?>
</body>
</html>
