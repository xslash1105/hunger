<?php
include("connection.php");
session_start();

$user = $_POST["user"];
$password = $_POST["password"];
$select = "SELECT * FROM user WHERE (phone = '$user' OR email = '$user') AND password = '$password' ";
$selectQuery = mysqli_query($con, $select);
if(mysqli_num_rows($selectQuery)>0){
  $userArray = mysqli_fetch_array($selectQuery);
  $_SESSION["name"] = $userArray["name"];
  header("location: ../Logedin/main.php");
}else{
  header("location: ../main.php");

}

 ?>
