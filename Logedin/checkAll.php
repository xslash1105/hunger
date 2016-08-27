<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>HUNGER -check all</title>
  </head>
  <body>
    <?php include("menu.php") ?>
    <div class="mainContainer">
        <div id="checkallWrapper">
        <h2 class="title">Check All</h2>
        <?php
        for($i=0; $i<count($image); $i++){
          ?>
          <div class="eachCheckAll" style="background: url('img/<?php echo $image[$i] ?>')">
            <div class="eachCheckAllTitle">
              <h4>Resturant</h4>
              <p>
                information
              </p>
            </div>
          </div>
          <?php
        }
         ?>
      </div>
    </div>
    <?php include("footer.php") ?>

  </body>
</html>
