<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="styles/add-item.css">
  <link rel="icon" href="img/pnhs.png">
  <title>Home</title>
</head>

<?php
include("php/display.php");
?>

<body>
  <!-- Search bar-->
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
      <a href="index.php" class="tab">Home</a>
      <a href="signin.php" class="tab">Login</a>
      <a href="signup.php" class="tab">Sign up</a>
      <a href="terms.php" class="tab">Terms and Conditions</a>
    </div>

    <div class="back-home">
      <a href="index.php"><img src="img/left.png" class="back-home-icon"> Home </a>
    </div>

    <div class="cart">
      <h1 class="title">Add Item</h1>

      <div class="upload">
        <form action="" class="form">
          <div class="name">
            <label for="name" class="label-name">Name</label>
            <input type="text" name="name" id="name">
          </div>

          <div class="price">
            <label for="price" class="label-price">Price</label>
            <input type="number" name="price" id="price">
          </div>

          <div class="file">
            <label for="img">Add Image</label>
            <input type="file" id="img" name="img" accept="image/*">
          </div>

          <div class="category">
            <h2>Item Type</h2>
            <div class="custom-select">
              <select name="category" id="category">
                <option value="drinks">Drinks</option>
                <option value="coffee">Coffee</option>
                <option value="rice-meal">Rice Meal</option>
                <option value="snacks">Snacks</option>
                <option value="burger">Burger</option>
                <option value="desserts">Desserts</option>
                <option value="others">Others</option>
              </select>
            </div>
          </div>

          <div class="btns">
            <button type="button" class="cancel">Cancel</button>
            <button class="save">Save</button>
          </div>
        </form>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script type="text/javascript" src="scripts/index.js"></script>
    <script type="text/javascript" src="scripts/order.js"></script>
    <script type="text/javascript" src="scripts/selected.js"></script>
</body>

</html>