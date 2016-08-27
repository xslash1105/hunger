<?php

include("connection.php");

if(isset($_POST["register"])){
  $name = $_POST["fname"]." ".$_POST["lname"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  $select = "SELECT * FROM user WHERE phone = '$phone' AND email = '$email' ";
  $selectQuery = mysqli_query($con, $select);
  if(mysqli_num_rows($selectQuery)==0){
    ?>
    <div id="registerSuccessContainer">
      <div id="closeSignup" class="closeButton">
        <i class="glyphicon glyphicon-remove"></i>
      </div>
      <table>
        <thead>
          <tr>
            <th colspan="2" class="title">
              <h3>Your Information</h3>
            </th>
          </tr>
        </thead>
        <form action="signupSQL.php" method="post">
          <tr>
            <td>
              Name:
            </td>
            <td>
              <input type="text" value="<?php echo $name ?>" name="name" disabled>
            </td>
          </tr>
          <tr>
            <td>
              Phone:
            </td>
            <td>
              <input type="text" value="<?php echo $phone ?>" name="phone" disabled>
            </td>
          </tr>
          <tr>
            <td>
              Email:
            </td>
            <td>
              <input type="text" value="<?php echo $email ?>" name="email" disabled>
            </td>
          </tr>
          <tr>
            <td>
              Password: <span onclick="alert('your password:  <?php echo $password ?>')" class="glyphicon glyphicon-search"></span>
            </td>
            <td>
              <input type="password" value="<?php echo $password ?>" name="password" disabled>
            </td>
          </tr>
        </table>
        <div id="signupCheckButtonContainer">
          <div class="leftWrapper">
            <button type="submit" class="blueButton" name="signupButton">Sign up</button>
          </div>
          <div class="rightWrapper">
            <button type="button" class="orangeButton">Change</button>
          </div>
        </form>
      </div>
    </div>
    <?php
  }
}

if(isset($_POST["phoneCheck"])){
  $phone = $_POST["phone"];
  $select = "SELECT * FROM user WHERE phone = '$phone' ";
  $selectQuery = mysqli_query($con, $select);

  if(mysqli_num_rows($selectQuery)>0){
    echo "this number already exist";
  }else{
    echo "<span class='ok glyphicon glyphicon-ok'></span>";
  }
}

if(isset($_POST["emailCheck"])){
  $email = $_POST["email"];
  $select = "SELECT * FROM user WHERE email = '$email' ";
  $selectQuery = mysqli_query($con, $select);

  if(mysqli_num_rows($selectQuery)>0){
    echo "this address already exist";
  }else{
    echo "<span class='ok glyphicon glyphicon-ok'></span>";
  }
}

if(isset($_POST["signupButton"])){
  $name = $_POST["name"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  $insert = "INSERT INTO user (name, phone, email, password) VALUES ('$name', '$phone', '$email', '$password') ";
  $insertQuery = mysqli_query($con, $insert);
  if($insertQuery){
    ?>
    <script>
    alert("signed up succeed");
    </script>
    <?php
    header("main.php");
  }else{
    ?>
    <script>
    alert("faild to signup. Please try again");
    </script>
    <?php
    header("main.php");
  }
}


 ?>
