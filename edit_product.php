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
    <h2> Edit Product </h2>
<?php
	//edit.php is used tp enter new record to our database
	//create a function for the form in order to use in multiple times
	function editFormProd($product_code, $product_name, $product_category, $product_price, $product_description, $error) {
?>
<?php
	if ($error != "") {
		echo "<div style='padding:4px; border:1px solid red; color: red;'>".$error."</div>";
	}
?>
  <form action="" method="post" enctype="multipart/form-data">
    <label>Product Code:</label><br>
      <input type="text" name="txtProductcode" value="<?php echo $product_code; ?>" class="text" required><br>
    <label>Product Name:</label><br>
      <input type="text" name="txtProductname" value="<?php echo $product_name; ?>" class="text" required><br>
    <label>Product Category:</label><br>
      <input type="text" name="txtProductcategory" value="<?php echo $product_category; ?>" class="text" required><br>
    <label>Product Price:</label><br>
      <input type="text" name="txtProductprice" value="Php <?php echo number_format($product_price, 2); ?>" class="text" required><br>
    <label>Product Description:</label><br>
      <input type="text" name="txtProductdescription" value="<?php echo $product_description; ?>" class="text" required><br>
      <!-- <input type="hidden" name="size" value="1000000">
      <input type="file" name="image"><br><br> -->
    <input type="submit" name="sbtEdit" value="Confirm" class="button">
  </form>
  <a href="view_product.php" class="no_underline"><input type="submit" name="back" value="Back" class="button"></a>
  </div>
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
    $product_code = mysql_real_escape_string(htmlspecialchars($_POST["txtProductcode"]));
		$product_name =  mysql_real_escape_string(htmlspecialchars($_POST["txtProductname"]));
		$product_category =  mysql_real_escape_string(htmlspecialchars($_POST["txtProductcategory"]));
		$product_price =   mysql_real_escape_string(htmlspecialchars($_POST["txtProductprice"]));
		$product_description =  mysql_real_escape_string(htmlspecialchars($_POST["txtProductdescription"]));

		if ($product_code == "" || $product_name == "" || $product_category == "" || $product_price == "" || $product_description == "") {
			//code if there is a missing requirement

			//display error
			$err = "ERROR! Please complete all the required field";
			editFormProd($product_code, $product_name, $product_category, $product_price, $product_description, $product_image, $error);
		}

		else {
			//code if there are no missing requirements
			//set the value pf again just to make sure all value of the fields are populated
      $product_code = mysql_real_escape_string(htmlspecialchars($_POST["txtProductcode"]));
  		$product_name =  mysql_real_escape_string(htmlspecialchars($_POST["txtProductname"]));
  		$product_category =  mysql_real_escape_string(htmlspecialchars($_POST["txtProductcategory"]));
  		$product_price =   mysql_real_escape_string(htmlspecialchars($_POST["txtProductprice"]));
  		$product_description =  mysql_real_escape_string(htmlspecialchars($_POST["txtProductdescription"]));

			//create a sql update statement
			mysql_query("UPDATE tblproducts SET product_code='$product_code', product_name='$product_name', product_category='$product_category', product_price='$product_price', product_description='$product_description' where product_code = '$product_code'")
				or die (mysql_error());

      //mysql_query("INSERT INTO tblproducts VALUES ('$image')")
          //or die (mysql_error());

			//return to mainadmin.php
			header("Location: view_product.php");
		}
	}
	else {
		//code if button is not clicked

		//Get the valud of id
		if (isset($_GET["id"])) {

			$edit_id = $_GET["id"];

			$result = mysql_query("SELECT * FROM tblproducts where product_code ='$edit_id'")
				or die (mysql_error());

			$row = mysql_fetch_array($result);

			if($row) {
				$product_code = $row["product_code"];
				$product_name = $row["product_name"];
				$product_category = $row["product_category"];
				$product_price = $row["product_price"];
				$product_description = $row["product_description"];

				//pass the value to the form
				editFormProd($product_code, $product_name, $product_category, $product_price, $product_description, "");
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
<p><a href="view_product.php">Back</a> </p>
</body>
</html>
