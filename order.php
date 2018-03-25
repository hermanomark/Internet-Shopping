<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Internet Shopping</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/order_table.css" rel="stylesheet" type="text/css">
</head>
<body>
  <h1>Internet Shopping</h1>
    <div class="container_order">
      <h2> Order Summary </h2>
        <div align="left">
          Want to cancel order? <a href="main.php" class="no_underline"> <input type="submit" name="logout" class="button3" value="Resume shopping"> </a>
        </div>
        <?php
        	include("connectDB.php");
          	if (isset($_GET["id"])) {

              	$add_to_cart = $_GET["id"];

                $result = mysql_query("SELECT * FROM tblproducts where product_code ='$add_to_cart'")
          				or die (mysql_error());

                echo "<table>
                  <thead>
                  <tr>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Image</th>
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
                          echo "</tr>";
                  }
                         
                  }
              else {
                    echo "No product selected";
                  }


        ?>
    <tr>
      <td colspan="6" class="checkout">
    <label>Price:</label><?php
    if (isset($_GET["id"])) {

        $order = $_GET["id"];
        $result = mysql_query("SELECT * FROM tblproducts where product_code ='$order'")
          or die (mysql_error());
        $row = mysql_fetch_array($result);
            echo "<b style='color:crimson;'> ₱ ".number_format($row['product_price'], 2)."</b>";
          }
      ?>
      <form action="" method="post">
      <label>Quantity:</label>
      <input type="number" name="quantity" min="1" max="100" placeholder="1-100" class="combobox_checkout"><br>
      <input type="submit" name="submitQuantity" value="Compute" class="button_checkout">
      </form>
      <?php
      @$quantity = $_POST["quantity"];
      $total_price = $row['product_price'] * $quantity;
      echo "<label>Total Price:</label><b style='color:crimson;'> ₱ ".number_format($total_price, 2)."</b><br>";
      ?>
      <a href="checkout.php" class="no_underline"><input type="submit" name="submitCheckout" value="Proceed to checkout" class="button_checkout"></a>
    </td>
      </tr>
    </table>
  </div>
  <footer>
     © Mark Hermano
  </footer>
</body>
</html>
