<!DOCTYPE html>
<?php
session_start();
$user = $_SESSION["name"];
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">

    <!-- <link rel="stylesheet" media="mediatype and|not|only (media feature)" href="mystylesheet.css"> -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="../js/jquery.js"></script>
    <script src="../js/main.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  </head>
  <body>
    <?php
    $image = array("background1.jpeg", "burgershop1.jpeg", "french.jpeg", "japanese.jpeg", "meatshop1.jpg", "pasta.jpeg");
    $orderKeyword = array("italian", "pizza", "cheap", "fast", "japanese", "chinese", "delicious", "tokyo");
    $menu = array("pasta", "pizza", "noodle", "rice", "curry", "desert", "drink");
    $category = array("american", "italian", "french", "japanese", "chinese", "korean", "tailand", "india");
    $type = array("resturaunt", "coupon", "delivery");
    $time = array("breakfast", "lunch", "dinner");
    $place = array("tokyo", "osaka", "kyoto", "fukuoka", "aichi", "hokkaido");
     ?>
    <header>
      <div id="headerUser">
        <h3><?php echo "WELCOME ".$user?></h3>
      </div>
      <div id="headerTitle">
        <h3><a href="main.php">HUNGER</a></h3>
      </div>
      <div id="menuWrapper">
        <ul id="menuList">
          <li class="resturauntOpen">Resturaunt</li>
          <li class="deliveryOpen">Delivery</li>
          <li class="couponOpen">Coupon</li>
          <li class="signupOpen">Settings</li>
          <li class="signout">Log out</li>
        </ul>
      </div>
        <i id="openMenubar" class="glyphicon glyphicon-menu-hamburger"></i>
        <div id="menuToggle">
          <ul>
            <li><?php echo "WELCOME MASA"?></li>
            <li class="resturauntOpen">Resturaunt</li>
            <li class="deliveryOpen">Delivery</li>
            <li class="couponOpen">Coupon</li>
            <li class="signupOpen">Settings</li>
            <li class="signupOpen">Log out</li>
          </ul>
        </div>
    </header>

  </body>
</html>
