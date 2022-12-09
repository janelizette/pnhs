<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="styles/detail.css">
  <link rel="icon" href="img/pnhs.png">
  <title>Coffee</title>
</head>

<?php
include("php/display.php");
include("php/displayWelcome.php");

if (isset($_GET['item_no'])) {
  $item_no = $_GET['item_no'];
  $query = "SELECT * FROM tbl_item WHERE item_no = '$item_no';";
  $result = mysqli_query($con, $query);
  $title_rows = mysqli_num_rows($result);
  if ($title_rows != 0) {
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
      $item_no = $row['item_no'];
      $item_name = $row['item_name'];
      $item_prc = $row['item_prc'];
      $item_img = $row['item_img'];
    }
  }
} else {
  header("location:menu.php");
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

      <!-- FOR STUDENT -->
      <a href="index.php" class="tab <?php echo $stud_visibility; ?>">Home</a>
      <a href="signin.php" class="tab <?php echo $stud_visibility; ?>">Login</a>
      <a href="signup.php" class="tab <?php echo $stud_visibility; ?>">Sign up</a>
      <a href="terms.php" class="tab <?php echo $stud_visibility; ?>">Terms and Conditions</a>
      <!-- END OF STUDENT -->

      <!-- FOR STAFF -->
      <a href="staff-admin.php" class="tab <?php echo $staff_visibility; ?>">Home</a>
      <a href="pending-orders.php" class="tab <?php echo $staff_visibility; ?>">Pending Orders</a>
      <a href="ready-orders.php" class="tab <?php echo $staff_visibility; ?>">Ready Orders</a>
      <a href="completed-orders.php" class="tab <?php echo $staff_visibility; ?>">Completed Orders</a>
      <a href="add-item.php" class="tab <?php echo $staff_visibility; ?>">Add Item</a>
      <a href="terms.php" class="tab <?php echo $staff_visibility; ?>">Terms and Conditions</a>
      <!-- END OF STAFF -->

    </div>

    <div class="back-menu">
      <a href="menu.php"><img src="img/left.png" class="back-menu-icon"> Back to menu </a>
      <a href="archive.php"> Archive <img src="img/archive.png" class="back-menu-icon arch"></a>
    </div>

    <div class="item-cont">
      <div class="archive">
        <button class="archive-btn"><img src="img/minus.png" class="archive-icon"></button>
      </div>

      <div class="item">
        <?php
        print "
              <img src='uploads/$item_img'>
              <span>$item_name</span>
              <span>PHP $item_prc.00</span>
              <input type='hidden' id='prc' value='$item_prc'>
              ";
        ?>
      </div>
    </div>


    <div class="form">
      <div class="caption">Customize your order</div>

      <form class="variation-quantity" action="order.php" method="post">
        <div class="variation">
          <div class="hot-cold">
            <div class="temp">
              <div class="name">
                <label for="hot">Hot</label>
              </div>
              <img src="img/sb.png" class="cup">
              <input type="radio" name="temp" id="hot">
            </div>

            <div class="temp">
              <div class="name">
                <label for="cold">Cold</label>
              </div>
              <img src="img/sb.png" class="cup">
              <input type="radio" name="temp" id="cold">
            </div>
          </div>

          <div class="size">
            <div class="temp">
              <div class="name">
                <label for="medium">Medium</label>
              </div>
              <img src="img/sb.png" class="cup">
              <input type="radio" name="size" id="medium">
            </div>

            <div class="temp">
              <div class="name">
                <label for="large">Large</label>
              </div>
              <img src="img/sb.png" class="cup">
              <input type="radio" name="size" id="large">
            </div>
          </div>
        </div>

        <div class="quantity">
          <div class="qty">
            Add to my cart <BR>
            <div class="quantity-div">
              <button class="minus-btn" onclick="minus()" type="button"><img src="img/minus.png" class="minus-icon"></button>
              <input type="number" id="quantity" value="1" step="1" min="1">
              <button class="plus-btn" onclick="plus()" type="button"><img src="img/plus.png" class="plus-icon"></button>
            </div>
            <?php
            print "
                  <span id='total'>PHP $item_prc</span>
                  ";
            ?>
          </div>
          <button type="submit" id="submit" name="add_itemorder">CONFIRM</button>
        </div>
      </form>
    </div>



  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="scripts/index.js"></script>
  <script src="scripts/order.js"></script>
</body>

</html>