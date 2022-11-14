<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="styles/index.css">
  <link rel="icon" href="img/pnhs.png">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <title>Home</title>
</head>

<body>
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
    <div class="message">How can I help you today</div>
    <div class="message welcome">Welcome back, User!</div>
    <div class="options">
      <a class="option" href="menu.php"><img src="img/menu.png"><span>MENU</span></a>
      <a class="option" href="order.php"><img src="img/cart.png"><span>ORDER</span></a>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="scripts/index.js"></script>
</body>

<script type="text/javascript">
  let nav = document.querySelector('.nav');
  let close = document.querySelector('.close')
  let navbar = document.querySelector('.showNavbar')

  nav.onclick = function() {
    nav.classList.add('hide')
    navbar.classList.add('show')
    close.classList.remove('hide')
  }

  close.onclick = function() {
    close.classList.add('hide')
    navbar.classList.remove('show')
    nav.classList.remove('hide')
  }
</script>

</html>