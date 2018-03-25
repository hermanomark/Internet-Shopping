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
  <div class="container_main">
    <h2> Manage Products </h2>
     <div align="center">
        <a href="main_admin.php" class="no_underline"><input type="submit" name="home" class="button4" value="Home"></a>
        <a href="new_product.php" class='no_underline'><input type='submit' value="Add a new product" class="button4"></a>
      <div>
  <?php
  //mainadmin.php is used to display the accounts for all the users

  //Connect to our database
  include("connectDB.php");

  //get the result from the database
  $result = mysql_query("SELECT * from tblproducts")
    or die (mysql_error());

  //create our web table
  echo "<table>
    <thead>
    <tr>
      <th>Code</th>
      <th>Name</th>
      <th>Category</th>
      <th>Price</th>
      <th>Description</th>
      <th>Image</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
    </thead>";
  //loop for displaying the records from our table
  while ($row = mysql_fetch_array($result)) {
    echo "<tr>
            <td>".$row['product_code']."</td>
            <td>".$row['product_name']."</td>
            <td>".$row['product_category']."</td>
            <td>₱".number_format($row['product_price'], 2)."</td>
            <td>".$row['product_description']."</td>";
            echo "<td><img src='images/".$row['product_image']."' class='prodimage'></td>";
            echo "<td><a href='edit_product.php? id=".$row['product_code']."' class='no_underline'>  <input type='submit' value='Edit' class='button'> </a></td>";
            echo "<td><a href='delete_product.php? id=".$row['product_code']."' class='no_underline'>  <input type='submit' value='Delete' class='button'> </a></td>";
            echo "</tr>";

    }
            echo "</table>";
  ?>
  </div>
   <footer>
      © Mark Hermano
  </footer>
</body>
</html>
