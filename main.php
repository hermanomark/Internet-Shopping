<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Internet Shopping</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/main_table.css" rel="stylesheet" type="text/css" >
</head>
<body>
	<!-- this page is what's a normal user would see. -->
	<h1> Internet Shopping </h1>
  <div class="container_main">
    <h2>Order a Product</h2>
      <div align="right">
        <?php
          session_start();
          echo "<b>Username:</b> ".@$_SESSION ["user_name"];
          ?>
        <a href="logout.php" class="no_underline"><input type="submit" name="logout" class="button2" value="Log out"></a>
     </div>
  <?php
  //mainadmin.php is used to display the accounts for all the users

  //Connect to our database
  include("connectDB.php");

  //get the result from the database
  $result = mysql_query("SELECT * from tblproducts")
    or die (mysql_error());

  //create our web table
  echo "<table>
    <col width='10%' />
    <col width='14%' />
    <col width='14%' />
    <col width='12%' />
    <col width='18%' />
    <col width='18%' />
    <col width='14%' />
    <thead>
    <tr>
      <th>Code</th>
      <th>Name</th>
      <th>Category</th>
      <th>Price</th>
      <th>Description</th>
      <th>Image</th>
			<th>Order</th>
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
           /* <td>".$row['product_quantity']."</td>"; */
            echo "<td><img src='images/".$row['product_image']."' class='prodimage'></td>";
						echo "<td><a href='order.php? id=".$row['product_code']."' class='no_underline'> <input type='submit' value='Order' class='button'> </a></td>";
            /* echo "<td><a href='edit_product.php? id=".$row['product_code']."'> Edit </a></td>";
            echo "<td><a href='delete_product.php? id=".$row['product_code']."'> Delete </a></td>"; */
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
