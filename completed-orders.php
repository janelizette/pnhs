<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="styles/pending-orders.css">
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
    <p>
      PARAÑAQUE NATIONAL HIGH SCHOOL - MAIN - Home of the Gentle Warriors
    </p>
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
      <h1 class="title">Ready Orders</h1>

      <div class="items">
        <div class="name">
          <h2 class="item-name">Cappuccino</h2>
          <p>2x Hot</p>
          <p>2x Large</p>
        </div>

        <div class="status">
          <div class="custom-select">
            <select name="status" id="status" onchange="getComboA(this)">
              <option value="confirm">CONFIRM</option>
              <option value="ready">READY</option>
              <option selected value="served">SERVED</option>
            </select>
          </div>
        </div>
      </div>

      <div class="details">
        <h4>Username: Hiromi Garcia</h4>
        <h4>Email: hiromi.garcia@depedparanaquecity.com</h4>
        <h4>D and T : 11-06-2022 / 9:06 am</h4>
      </div>

      <div class="total">
        <h2>Sub Total</h2>
        <h2>60 PHP</h2>
      </div>

      <div class="items">
        <div class="name">
          <h2 class="item-name">Latte</h2>
          <p>1x Cold</p>
          <p>1x Medium</p>
        </div>

        <div class="status">
          <div class="custom-select">
            <select name="status" id="status" onchange="getComboB(this)" onclick="getValue(this)">
              <option value="confirm">CONFIRM</option>
              <option value="ready">READY</option>
              <option selected value="served">SERVED</option>
            </select>
          </div>
        </div>
      </div>

      <div class="details">
        <h4>Username: Shane Tecson</h4>
        <h4>Email: shane.tecson@depedparanaquecity.com</h4>
        <h4>D and T : 11-06-2022 / 9:20 am</h4>
      </div>

      <div class="total">
        <h2>Sub Total</h2>
        <h2>30 PHP</h2>
      </div>
    </div>

    <div class="save">
      <button>Save</button>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script type="text/javascript" src="scripts/index.js"></script>
  <script type="text/javascript" src="scripts/order.js"></script>
  <script type="text/javascript" src="scripts/selected.js"></script>
</body>

</html>