<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Internet shopping</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1> Internet Shopping </h1>
<?php
	//new.php is used to enter new record to our database
	//create a function for the form in order to use it multiple times
	function addFormProd($product_code, $product_name, $product_category, $product_price, $product_description, $product_image, $error) {
?>
<?php
	if ($error != "") {
		echo "<div style='padding:4px; border:1px solid red; color: red;'>".$error."</div>";
	}
?>
	<div class="container">
		<h2>Add a New Product</h2>
		<form action="" method="post" enctype="multipart/form-data">
			<label>Product Code:</label><br>
				<input type="text" name="txtProductcode" value="<?php echo $product_code; ?>" class="text" required><br>
			<label>Product Name:</label><br>
				<input type="text" name="txtProductname" value="<?php echo $product_name; ?>" class="text" required><br>
			<label>Product Category:</label><br>
				<input type="text" name="txtProductcategory" value="<?php echo $product_category; ?>" class="text" required><br>
			<label>Product Price:</label><br>
				<input type="text" name="txtProductprice" value="<?php echo $product_price; ?>" class="text" required><br>
			<label>Product Description:</label><br>
				<input type="text" name="txtProductdescription" value="<?php echo $product_description; ?>" class="text" required><br><br>
				<input type="hidden" name="size" value="1000000" >
				<label class="text" >
					Upload a picture
				<input type="file" name="image">
				</label><br><br>
			<input type="submit" name="sbtNew" value="Confirm" class="button">
		</form>
			<a href="view_product.php" class="no_underline"><input type="submit" name="back" value="Back" class="button"></a>
	</div>
	<footer>
	    © Mark Hermano
	</footer>
<?php
}
	//connect to database
	include("connectDB.php");

	//check if the submit button is clicked
	if (isset($_POST["sbtNew"])) {

		//codes if the submit button is clicked
		$n_product_code = mysql_real_escape_string(htmlspecialchars($_POST["txtProductcode"]));
		$n_product_name =  mysql_real_escape_string(htmlspecialchars($_POST["txtProductname"]));
		$n_product_category =  mysql_real_escape_string(htmlspecialchars($_POST["txtProductcategory"]));
		$n_product_price =   mysql_real_escape_string(htmlspecialchars($_POST["txtProductprice"]));
		$n_product_description =  mysql_real_escape_string(htmlspecialchars($_POST["txtProductdescription"]));

		$image = $_FILES['image']['name'];
		$target = "images/".basename($image);

		if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}

		//checked if all the fields are populated
		if ($n_product_code == "" || $n_product_name == "" || $n_product_category == "" || $n_product_price == "" || $n_product_description == "") {
			//codes if there is a missing requirement
			//set a value for the error
			$err = "ERROR! Please complete all the required field";
			addFormProd($n_product_code, $n_product_name, $n_product_category, $n_product_price, $n_product_description, $err);
		}
		else {

			//codes the required record is completed
			//set the value pf again just to make sure all value of the fields are populated
			$n_product_code = mysql_real_escape_string(htmlspecialchars($_POST["txtProductcode"]));
			$n_product_name =  mysql_real_escape_string(htmlspecialchars($_POST["txtProductname"]));
			$n_product_category =  mysql_real_escape_string(htmlspecialchars($_POST["txtProductcategory"]));
			$n_product_price =   mysql_real_escape_string(htmlspecialchars($_POST["txtProductprice"]));
			$n_product_description =  mysql_real_escape_string(htmlspecialchars($_POST["txtProductdescription"]));

			$image = $_FILES['image']['name'];
			$target = "images/".basename($image);

			if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
	  		$msg = "Image uploaded successfully";
	  	}else{
	  		$msg = "Failed to upload image";
	  	}

			//create a sql insert statement and save it to the database
			mysql_query("INSERT INTO tblproducts VALUES('$n_product_code', '$n_product_name', '$n_product_category', '$n_product_price', '$n_product_description', '$image')")
				or die(mysql_error());

			//redirect to view.php if the record is saved
			header("Location: view_product.php");
		}
	}
	else {
		//codes if the submit button is not clicked
		//call the form that passes blank value to its parameter
		addFormProd("", "", "", "", "", "", "");
	}
?>
<p> <a href="view_product.php">Back<a></p>
</body>
</html>
