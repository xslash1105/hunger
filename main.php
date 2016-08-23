<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>HUNGER -Fill your Hunger-</title>
  </head>
  <body>
    <?php include("menu.php") ?>
    <div class="mainBackgrondContainer">
      <div id="mainBackground">
      </div>
      <div id="mainSearch">
        <h1>Hugry? Fill your <span class="companyColor2">H</span><span class="companyColor1">UNGE</span><span class="companyColor2">R</span></h1>
        <input type="search" placeholder="Search your meal" name="search">
        <div id="mainButtonContainer">
          <button id="mainSearchButton">SEARCH</button>
          <button id="mainSearchDetail">SEARCH BY DETAILS</button>
        </div>
      </div><!--mainBackground-->
      <div id="mainInfo">
        <div id="newInfo">
          <h3>New Information</h3>
          <div class="infoImg">
            <h4>Buger Point</h4>
          </div>
          <p>
            <a href="">see more</a>
          </p>
        </div>
        <div id="popularInfo">
          <h3>Popular Meals</h3>
          <div class="infoImg">
            <h4>Saizeria</h4>
          </div>
          <div class="infoImg" style="background-image: url('img/burgershop1.jpeg')">
            <h4>Umami Burger</h4>
          </div>
          <p>
            <a href="">see more</a>
          </p>
        </div>
        <div id="recommendInfo">
          <h3>Recomendation's</h3>
          <div class="infoImg">
            <h4>Meet Meat</h4>
          </div>
          <p>
            <a href="">see more</a>
          </p>
        </div>
      </div><!-- mainInfo -->
      <div>
    </div><!--mainContainer-->

    <div id="searchDetailModalWrapper">
      <div id="searchDetailModal">
        <div id="closeSearchDetailModal" class="closeButton">
          <i class="glyphicon glyphicon-remove"></i>
        </div>
        <h3 class="title">Search By Detail</h3>
        <form>
          <dl>
            <dt>Type:</dt>
            <dd>
            <?php
            for($i=0; $i<count($type); $i++){
              ?>
              <input type="checkbox" name="type" value="<?php echo $i ?>"><?php echo $type[$i]."&nbsp" ?>
              <?php
            } ?>
            </dd>
            <dt>Time:</dt>
            <dd>
              <?php
              for($i=0; $i<count($time); $i++){
                ?>
                <input type="checkbox" name="time" value="<?php echo $time[$i] ?>"><?php echo $time[$i]."&nbsp" ?>
                <?php
              } ?>
            </dd>
            <dt>Price:</dt>
            <dd>
              <select name="pirce">
                <?php
                for($i=1; $i<=20000; $i++){
                  if($i%1000==0){
                    ?>
                    <option value="<?php echo $i ?>">Less than <?php echo $i ?></option>
                    <?php
                  }
                } ?>
              </select>
            </dd>
            <dt>Category:</dt>
            <dd>
              <?php
              for($a=0; $a<count($category); $a++){
                ?>
                <input type="checkbox" name="category" value="<?php echo $category[$a] ?>"><?php echo $category[$a]."&nbsp" ?>
                <?php
              }
              ?>
            </dd>
            <dt>Place:</dt>
            <dd>
              <!-- <?php
              for($i=0; $i<count($place); $i++){
                ?>
                <input type="checkbox" name="place" value="<?php echo $place[$i] ?>"><?php echo $place[$i]."&nbsp" ?>
                <?php
              }
              ?> -->
              <?php
              foreach ($place as $value) {
                ?>
                <input type="checkbox" name="place" value="<?php echo $value ?>"><?php echo $value."&nbsp" ?>
                <?php
              } ?>
            </dd>
          </dl>
          <button type="button" class="blueButton">SEARCH</button>
        </form>
      </div>
    </div>
    <?php include("footer.php") ?>

  </body>
</html>
