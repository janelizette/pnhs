<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="styles/menu.css">
  <link rel="icon" href="img/pnhs.png">
  <title>Menu</title>
</head>

<?php
include("php/display.php");
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
      <a href="index.php" class="tab">Home</a>
      <a href="signin.php" class="tab">Login</a>
      <a href="signup.php" class="tab">Sign up</a>
      <a href="terms.php" class="tab">Terms and Conditions</a>
    </div>
    <div class="message">There's something for everyone!</div>

    <div class="options">
      <a class="option" href="coffee-options.php"><img src="img/coffee-cup.png"><span>Coffee</span></a>
      <a class="option" href="detail.php"><img src="img/burger.png"><span>Burgers</span></a>
      <a class="option" href="detail.php"><img src="img/drinks.png"><span>Drinks</span></a>
      <a class="option" href="detail.php"><img src="img/rice.png"><span>Rice Meals</span></a>
      <a class="option" href="detail.php"><img src="img/snack.png"><span>Snacks</span></a>
      <a class="option" href="detail.php"><img src="img/dessert.png"><span>Dessert</span></a>
    </div>
  </div>
  <script src="scripts/index.js"></script>
</body>

</html>