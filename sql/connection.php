<?php
$con = mysqli_connect("localhost", "root", "localroot");
if(!$con){
  die("falid to connect");
}
mysqli_select_db($con, "hunger");
 ?>
