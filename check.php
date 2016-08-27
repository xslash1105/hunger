<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    #container{
      height: auto;
      width: 600px;
      background: #ffffff;
      margin: 20px auto 0;
      padding: 15px 30px 10px;
      border-radius: 5px;
      font-size: 20px;
      position: relative;
    }
    </style>
  </head>
  <body>
    <?php include("menu.php") ?>
    <div style="height: 100px">
    </div>
    <div id="container">
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
          <button type="submit" class="blueButton">Sign up</button>
        </div>
        <div class="rightWrapper">
          <button type="button" class="orangeButton">Change</button>
        </div>
      </div>
    </div>
  </div>
  </body>
</html>
