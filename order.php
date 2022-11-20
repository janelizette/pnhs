<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="styles/order.css">
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

    <div class="back-menu">
      <a href="menu.php"><img src="img/left.png" class="back-menu-icon"> Back to menu </a>
    </div>

    <div class="cart">
      <h1 class="title">My cart</h1>

      <div class="items">
        <div class="action">
          <div class="delete">
            <button class="dlt-btn">
              <img src="img/trash.png" class="dlt-icon">
            </button>
          </div>

          <div class="quantity">
            <button class="minus-btn"><img src="img/minus.png" class="minus-icon"></button>
            <p>5</p>
            <button class="plus-btn"><img src="img/plus.png" class="plus-icon"></button>
          </div>
        </div>

        <div class="name">
          <h2 class="item-name">Cappuccino</h2>
          <p>2x Hot</p>
          <p>2x Cold</p>
        </div>

        <div class="price">
          <h2 class="item-price">
            1000 PHP
          </h2>
        </div>
      </div>

      <div class="total">
        <h2>Total</h2>
        <h2>1000 PHP</h2>
      </div>

      <div class="checkout-btn">
        <button class="checkout-btn" onclick="window.location.href='checkout.php'">Proceed to Checkout</button>
      </div>

    </div>
  </div>
  <script src="scripts/index.js"></script>
</body>

</html>