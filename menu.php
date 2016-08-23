<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <!-- <link rel="stylesheet" media="mediatype and|not|only (media feature)" href="mystylesheet.css"> -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="/js/jquery.bxslider.min.js"></script>
    <link href="/css/jquery.bxslider.css" rel="stylesheet" />
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
      <!-- <div id="menuSearch">
        <form action="" method="get">
          <input type="text" placeholder="search your meal" name="search">
        </form>
      </div> -->
      <div id="headerTitle">
        <h3><a href="main.php">HUNGER</a></h3>
      </div>
      <div id="menuWrapper">
        <ul id="menuList">
          <li class="resturauntOpen">Resturaunt</li>
          <li class="deliveryOpen">Delivery</li>
          <li class="couponOpen">Coupon</li>
          <li class="signupOpen">Sign up</li>
          <li class="loginOpen">Log in</li>
        </ul>
      </div>
        <i id="openMenubar" class="glyphicon glyphicon-menu-hamburger"></i>
        <div id="menuToggle">
          <ul>
            <li class="resturauntOpen">Resturaunt</li>
            <li class="deliveryOpen">Delivery</li>
            <li class="couponOpen">Coupon</li>
            <li class="signupOpen">Sign up</li>
            <li class="loginOpen">Log in</li>
          </ul>
        </div>
    </header>

    <div id="signupModelWrapper">
      <div id="signupModel">
        <dl>
          <div id="closeSignup" class="closeButton">
            <i class="glyphicon glyphicon-remove"></i>
          </div>
          <h2>Sign Up</h2>
            <dt>Username:<span id="signupUserCheck" class="userCheck"></span></dt>
            <dd><input type="text" name="username" placeholder="username" id="signupUser"></dd>
            <dt>Email:<span class="emailCheck"></span></dt>
            <dd><input type="email" name="email" placeholder="Email" id="signupEmail"></dd>
            <dt>Password:</dt>
            <dd><input type="password" name="password" placeholder="passoword" id="signupPass"><span class="passCheck"></span></dd>
            <dt><button type="submit" id="signupButton">Sign Up</button></dt>
        </dl>
      </div>
    </div>

    <div id="loginModelWrapper">
      <div id="loginModel">
        <dl>
          <div id="closeLogin" class="closeButton">
            <i class="glyphicon glyphicon-remove"></i>
          </div>
          <h2>Login</h2>
            <dt>Username or Email:<span id="loginUserCheck" class="userCheck"></span></dt>
            <dd><input type="text" name="user" placeholder="username or email" id="loginUser"></dd>
            <dt>Password:</dt>
            <dd><input type="password" name="password" placeholder="passoword" id="loginPass"><span class="passCheck"></span></dd>
            <dd><input type="checkbox" name="cookie" id="cookie"> Save?</dd>
            <dt><button type="submit" id="loginButton">Login</button></dt>
        </dl>
      </div>
    </div>
  </body>
</html>
