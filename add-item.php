<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="styles/add-item.css">
  <link rel="icon" href="img/pnhs.png">
  <title>Add item</title>
</head>

<?php
include("php/display.php");
include("php/displayWelcome.php");

if (isset($_POST['add-item']) && isset($_FILES['item_img'])) {
	$item_name = $_POST['item_name'];
	$item_prc = $_POST['item_prc'];
	$item_cat = $_POST['item_cat'];

	$name = $_FILES['item_img']['name'];
	$tmp_name = $_FILES['item_img']['tmp_name']; //path

	$img_ex = pathinfo($name, PATHINFO_EXTENSION);
	$img_ex_lc = strtolower($img_ex);

	$allowed_exs = array("jpg", "jpeg", "png"); 

	if (in_array($img_ex_lc, $allowed_exs)) {
		$new_name = "img-".$name;
		$img_upload_path = 'uploads/'.$new_name;
		move_uploaded_file($tmp_name, $img_upload_path);

		// insert into database
		$insert = "INSERT INTO tbl_item value ('', '$item_name', '$item_prc', '$new_name', '$item_cat')";
		mysqli_query($con, $insert);
	}
}
?>

<body>
  <!-- Search abr-->
  <div class="bar-div" id="bar-div">
    <div class="bar">
      <button class="back"><img src="img/back.png" class="back-icon" id="back"></button>
      <input type="text" placeholder="Search this site" class="searchbar">
    </div>
  </div>

  <div class="header">
    PARAÑAQUE NATIONAL HIGH SCHOOL - MAIN - Home of the Gentle Warriors
  </div>
  <div class="content">
    <div class="navbar">
      <img src="img/navigation.png" class="nav-icon nav">
      <img src="img/close.png" class="nav-icon close hide">
      <img src="img/pnhs.png" class="nav-pnhs">

      <div class="search">
        <button type="submit" id="search-toggle">
          <img src="img/search.png" alt="search" class="nav-search">
        </button>
      </div>
    </div>
    <div class="showNavbar">
      <div class="tab"></div>
      <a href="staff-admin.php" class="tab">Home</a>
      <a href="pending-orders.php" class="tab">Pending Orders</a>
      <a href="ready-orders.php" class="tab">Ready Orders</a>
      <a href="completed-orders.php" class="tab">Completed Orders</a>
      <a href="add-item.php" class="tab">Add Item</a>
      <a href="terms.php" class="tab">Terms and Conditions</a>
    </div>

    <form class="container" method="post" action="add-item.php" enctype="multipart/form-data">
    	<label for="item_name">Name: </label>
    	<input type="text" name="item_name" maxlength="128" required>
    	<label for="item_prc">Price: </label>
    	<input type="number" name="item_prc" required>
    	<label for="item_img">Image: </label>
    	<input type="file" name="item_img" required>
    	<label for="item_cat">Category: </label>
    	<select name="item_cat">
    		<option value="Drinks">Drinks</option>
    		<option value="Coffee">Coffee</option>
    		<option value="Rice Meals">Rice Meals</option>
    		<option value="Snacks">Snacks</option>
    		<option value="Burger">Burger</option>
    		<option value="Dessert">Dessert</option>
    	</select>

    	<input type="submit" name="add-item" value="Save">
    </form>
  </div>
  <script src="scripts/index.js"></script>
</body>

</html>