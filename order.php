<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="styles/order.css">
  <link rel="icon" href="img/pnhs.png">
  <title>My Cart</title>
</head>

<?php
include("php/display.php");
include("php/displayWelcome.php");

if (isset($_POST['add_itemorder'])) {
  $email = $_SESSION['email'];
  $item_no = $_POST['item_no'];
  $item_qty = $_POST['item_qty'];
  $item_prc = $_POST['item_prc'];
  $item_subtotal = $item_qty * $item_prc;
  if (isset($_POST['temp']) or isset($_POST['size'])) {
    $item_temp = $_POST['temp'];
    $item_size = $_POST['size'];
  }else{
    $item_temp = "";
    $item_size = "";    
  }
  
  $insert = "INSERT INTO tbl_cart VALUES ('$email', '$item_no', '$item_qty', '$item_prc', '$item_temp', '$item_size', '$item_subtotal')";
  mysqli_query($con, $insert);
  header("location:order.php");
}
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

    <form class="cart" action="order.php" method="post">
      <h1 class="title">My cart</h1>

      <?php
      $query = "SELECT tbl_cart.email, tbl_cart.item_no, tbl_item.item_name, tbl_cart.item_qty, tbl_cart.item_prc, tbl_cart.item_temp, tbl_cart.item_size, tbl_cart.item_subtotal FROM tbl_cart LEFT JOIN tbl_item ON tbl_cart.item_no = tbl_item.item_no WHERE tbl_cart.email = '$email';";
      $result = mysqli_query($con, $query);
      $title_rows = mysqli_num_rows($result);
      if ($title_rows != 0) {
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
          $email = $row['email'];
          $item_no = $row['item_no'];
          $item_name = $row['item_name'];
          $item_qty = $row['item_qty'];
          $item_prc = $row['item_prc'];
          $item_temp = $row['item_temp'];
          $item_size = $row['item_size'];
          $item_subtotal = $row['item_subtotal'];

          //Getting the total of subtotal
          $query1 = "SELECT SUM(item_subtotal) AS item_total FROM tbl_cart WHERE email = '$email';";
          $result1 = mysqli_query($con, $query1);
          $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
          $item_total = $row1['item_total'];

          print 
            "<div class='items'>
              <div class='action'>
                <div class='delete'>
                  <button type='submit' name='item_delete' class='dlt-btn'>
                    <img src='img/trash.png' class='dlt-icon'>
                    <input type='hidden' id='prc' value='$item_total'>
                  </button>
                </div>
      
                <div class='quantity-div'>
                  <button type='button' class='minus-btn' onclick='minus()'><img src='img/minus.png' class='minus-icon'></button>
                  <p>
                    <input type='number' id='quantity' name='item_qty' value='$item_qty' step='1' min='1'>
                  </p>
                  <button type='button' class='plus-btn' onclick='plus()'><img src='img/plus.png' class='plus-icon'></button>
                </div>
              </div>
      
              <div class='name'>
                <h2 class='item-name'>$item_name</h2>
                <p>$item_qty x $item_temp $item_size</p>
              </div>
      
              <div class='price'>
                <h2 class='item-price'>
                  PHP $item_prc
                </h2>
              </div>
            </div>";
        }
      }
          
      ?>

      <div class="total">
        <h2>Total</h2>
        <h2 id="total">PHP <?php echo $item_total; ?></h2>
      </div>

      <div class="checkout-btn">
        <button type="submit" class="checkout-btn" onclick="window.location.href='checkout.php'">Proceed to Checkout</button>
      </div>

    </form>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="scripts/index.js"></script>
  <script src="scripts/order.js"></script>
</body>

</html>