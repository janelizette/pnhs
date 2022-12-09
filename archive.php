<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="styles/archive.css">
  <link rel="icon" href="img/pnhs.png">
  <title>Archive</title>
</head>

<?php
include("php/display.php");
include("php/displayWelcome.php");
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

      <a href="staff-admin.php" class="tab">Home</a>
      <a href="pending-orders.php" class="tab">Pending Orders</a>
      <a href="ready-orders.php" class="tab">Ready Orders</a>
      <a href="completed-orders.php" class="tab">Completed Orders</a>
      <a href="add-item.php" class="tab">Add Item</a>
      <a href="terms.php" class="tab">Terms and Conditions</a>

    </div>

    <div class="content-archive">
      <div class="back-menu">
        <a href="detail.php"><img src="img/left.png" class="back-menu-icon"></a>
        <p> Archive <img src="img/archive.png" class="back-menu-icon cart"></p>
        <a href="detail.php"><img src="img/left.png" class="back-menu-icon invisible"></a>
      </div>

      <div class="message">
        <h1>
          Press Restore and Select to bring back to Menu.
        </h1>
      </div>

      <div class="item">
        <form action="" class="form">
          <div class="option">
            <input type="radio" name="item" id="coffee1">
            <label for="coffee1">
              <img src="uploads/coffee.png" class="coffee-img">
              <h1>Coffee</h1>
              <h1>Php 80.00</h1>
            </label>
          </div>

          <div class="option">
            <input type="radio" name="item" id="coffee2">
            <label for="coffee2">
              <img src="uploads/coffee.png" class="coffee-img">
              <h1>Coffee</h1>
              <h1>Php 80.00</h1>
            </label>
          </div>

          <div class="option">
            <input type="radio" name="item" id="coffee3">
            <label for="coffee3">
              <img src="uploads/coffee.png" class="coffee-img">
              <h1>Coffee</h1>
              <h1>Php 80.00</h1>
            </label>
          </div>

          <div class="option">
            <input type="radio" name="item" id="coffee4">
            <label for="coffee4">
              <img src="uploads/coffee.png" class="coffee-img">
              <h1>Coffee</h1>
              <h1>Php 80.00</h1>
            </label>
          </div>
        </form>


        <div class="btn">
          <button class="restore">RESTORE</button>
        </div>
      </div>

    </div>

  </div>
  </div>
  <script src="scripts/index.js"></script>
</body>

</html>