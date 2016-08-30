<?php
function getDiscount($price1, $price2){
  $discount = $price1/$price2*100;
  return $discount;
}

function getOrderByDesc($table, $col){
  include("sql/connection.php");
  $select = "SELECT * FROM $table ORDER BY $col DESC limit 4";
  $selectQuery = mysqli_query($con, $select);
  return $selectQuery;
}

function getSelected($table, $row, $category){
  include("sql/connection.php");
  $select = "SELECT * FROM $table WHERE $row = '$category' ";
  $selectQuery = mysqli_query($con, $select);
  return $selectQuery;
}

function selectTable($table){
  include("sql/connection.php");
  $select = "SELECT * FROM $table";
  $query = mysqli_query($con, $select);
  return $query;
}

function showEachDiscount($query){
    static $num = 0;
    while($array = mysqli_fetch_array($query)){
      $name = $array["name"];
      $img = $array["img"];
      $price = mysqli_fetch_array($array["price"]);
      $discount = getDiscount($price[1], $price[2]);
      ?>
      <div class="eachSelection">
        <div style="background: url('<?php echo $img ?>'); background-size:cover;" class="infoImg" alt="<?php echo $name ?>">
          <h4><?php echo $discount ?>%OFF!</h4>
        </div>
      </div>
      <?php
      $num++;
      if($num>=3){
        break;
      }
    }
  }

function showEachName($query){
  static $num = 0;
  while($array = mysqli_fetch_array($query)){
    $name = $array["name"];
    $img = $array["img"];
    ?>
    <div class="eachSelection">
      <div style="background: url('<?php echo $img ?>'); background-size:cover;" class="infoImg" alt="<?php echo $name ?>">
        <h4><?php echo $name ?></h4>
      </div>
    </div>
    <?php
    $num++;
    if($num>=3){
      break;
    }
  }
}

function showEachLarge($query){
  static $num = 0;
  while($array = mysqli_fetch_array($query)){
    $name = $array["name"];
    $img = $array["img"];
    ?>
    <div class="eachRecommend">
      <div style="background: url('<?php echo $img ?>'); background-size:cover;" class="infoImg" alt="<?php echo $name ?>">
        <h4><?php echo $name ?></h4>
      </div>
    </div>
    <?php
    $num++;
    if($num>=3){
      break;
    }
  }
}
 ?>
