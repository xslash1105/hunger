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
        <form action="" method="post">
          <tr>
            <td>
              Name:
            </td>
            <td>
              <input type="text" value="<?php echo $name ?>" name="signupNameFinal" disabled>
            </td>
          </tr>
          <tr>
            <td>
              Phone:
            </td>
            <td>
              <input type="text" value="<?php echo $phone ?>" name="signupPhoneFinal" disabled>
            </td>
          </tr>
          <tr>
            <td>
              Email:
            </td>
            <td>
              <input type="text" value="<?php echo $email ?>" name="signupEmailFinal" disabled>
            </td>
          </tr>
          <tr>
            <td>
              Password: <span onclick="alert('your password:  <?php echo $password ?>')" class="glyphicon glyphicon-search" style="cursor: pointer"></span>
            </td>
            <td>
              <input type="password" value="<?php echo $password ?>" name="signupPasswordFinal" disabled>
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
    echo "<span class='required'>this number already exist</span>";
  }else{
    echo "<span class='ok glyphicon glyphicon-ok'></span>";
  }
}

if(isset($_POST["emailCheck"])){
  $email = $_POST["email"];
  $select = "SELECT * FROM user WHERE email = '$email' ";
  $selectQuery = mysqli_query($con, $select);

  if(mysqli_num_rows($selectQuery)>0){
    echo "<span class='required'>this address already exist</span>";
  }else{
    echo "<span class='ok glyphicon glyphicon-ok'></span>";
  }
}

if(isset($_POST["signupButton"])){
  $fname = $_POST["signfname"];
  $lname = $_POST["signlname"];
  $name = $fname." ".$lname;
  $phone = $_POST["signphone"];
  $email = $_POST["signemail"];
  $password = $_POST["signPass"];

  $insert = "INSERT INTO user (name, phone, email, password) VALUES ('$name', '$phone', '$email', '$password') ";
  $insertQuery = mysqli_query($con, $insert);
  if($insertQuery){
    ?>
    <script>
    alert("signup complete");
    window.open("../main.php", "_self");
    </script>
    <?php
  }else{
    ?>
    <script>
    alert("signup faild");
    window.open("../main.php", "_self");
    </script>
    <?php
  }
}


 ?>
