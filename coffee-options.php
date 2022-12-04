<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="styles/coffee-options.css">
  <link rel="icon" href="img/pnhs.png">
  <title>Coffee</title>
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

    <div class="back-menu">
      <a href="menu.php"><img src="img/left.png" class="back-menu-icon"> Back to menu </a>
      <a href="order.php"> View Cart <img src="img/cart.png" class="back-menu-icon cart"></a>
    </div>

    <div class="cart">
      <h1 class="title">Say "YES" to your craving and tap to order now!</h1>
    </div>

    <div class="options">
      <a class="option" href="detail.php"><img src="img/coffee-cup.png"><span>Cappuccino</span></a>
      <a class="option" href="detail.php"><img src="img/coffee-cup.png"><span>Mocha</span></a>
      <a class="option" href="detail.php"><img src="img/coffee-cup.png"><span>Vanilla</span></a>
      <a class="option" href="detail.php"><img src="img/coffee-cup.png"><span>Choco</span></a>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="scripts/index.js"></script>
  <script src="scripts/order.js"></script>
</body>

</html>