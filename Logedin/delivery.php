<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>HUNGER -delivery-</title>
  </head>
  <body>
    <?php include("menu.php") ?>
    <script type="text/javascript">
      $(document).ready(function(){
        $(".deliveryOpen").addClass("presentPage");
      })
    </script>

    <div class="mainBackgrondContainer">
      <div id="deliveryBackground">
      </div>
      <div id="deliveryTitle">
        <h2>Delivery Average Time... </h2>
        <h1><span class="companyColor1">20</span> min</h1>
        <h2>HUNGER's Delivery Member's</h2>
        <h1><span class="companyColor1">1502</span> res</h1>
      </div>
      <div id="deliveryFormWrapper">
        <h2 class="title">Order Your Meal</h2>
        <div class="leftWrapper">
          <dl>
            <dt>Name:</dt>
            <dd><input type="text" name="name" placeholder="Name" class="inputText"></dd>
            <dt>Phone:</dt>
            <dd><input type="text" name="phone" placeholder="Phone" class="inputText"></dd>
            <dt>Email:</dt>
            <dd><input type="email" name="email" placeholder="Email" class="inputText"></dd>
            <dt>Address:</dt>
            <dd><input type="text" name="address" placeholder="Address" class="inputText"></dd>
          </dl>
        </div>
        <div class="rightWrapper">
          <dl>

            <dt>Category:</dt>
            <dd>
              <dd>
                <select class="select">
                  <?php
                  for($i=1; $i<=6; $i++){
                    ?>
                    <option>select category<?php echo $i ?></option>
                    <?php
                  } ?>
                </select>
              </dd>
              <dt>Resturaunt:</dt>
              <dd>
                <select class="select">
                  <?php
                  for($a=1; $a<=10; $a++){
                    ?>
                    <option>select resturaunt<?php echo $a ?></open>
                    <?php
                  }
                   ?>
                </select>
              </dd>
              <dt>Menu:</dt>
              <dd>
                <select class="select">
                  <?php
                  for($a=1; $a<=10; $a++){
                    ?>
                    <option>select menu<?php echo $a ?></open>
                    <?php
                  }
                   ?>
                </select>
              </dd>
              <dt>Amount:</dt>
              <dd>
                <select>
                  <?php
                  for($b=1; $b<=10; $b++){
                    ?>
                    <option><?php echo $b ?></option>
                    <?php
                  } ?>
                </select>
              </dd>
        </dl>
        </div>
        <button name="order" class="orangeButton">ORDER</button>
      </div><!-- deliveryFormWrapper -->
      <div class="mainContainer">
        <div id="deliverySearchWrapper">
          <h2 class="title">Search Your Delivery</h2>
          <div class="allEachWrapper">
            <div class="leftWrapper">
              <h3 class="title">Search By Details</h3>
              <form>
                <dl>
                  <dt>Place:</dt>
                  <dd>
                    <input type="checkbox" name="place" value="aichi">Aichi&nbsp;
                    <input type="checkbox" name="place" value="tokyo">Tokyo&nbsp;
                    <input type="checkbox" name="place" value="osaka">Osaka&nbsp;
                    <input type="checkbox" name="place" value="kyoto">Kyoto&nbsp;
                    <input type="checkbox" name="place" value="others">Others&nbsp;
                  </dd>
                  <dt>Category:</dt>
                  <dd>
                    <input type="checkbox" name="category" value="italian">Italian&nbsp;
                    <input type="checkbox" name="category" value="french">French&nbsp;
                    <input type="checkbox" name="category" value="japanese">Japanese&nbsp;
                    <input type="checkbox" name="category" value="chinese">Chinese&nbsp;
                    <input type="checkbox" name="category" value="korean">Korean&nbsp;
                    <input type="checkbox" name="category" value="others">Others&nbsp;
                  </dd>
                  <dt>Price:</dt>
                    <dd><select class="select">
                      <?php
                      for($ii=500; $ii<=10000; $ii++){
                          if($ii%100==0){
                          ?>
                          <option value="<?php echo $ii ?>"><?php echo "lower than ".$ii ?></option>
                          <?php
                        }
                      }
                       ?>
                    </select>
                  </dd>
                  <dt>Delivery Time:</dt>
                  <dd>
                    <?php
                    static $a = 0;
                    for($i=1; $i<=50; $i++){
                      if($i%10==0){
                        ?>
                        <input type="radio" name="deliverytime" value="<?php echo $i ?>"> Deliver in <?php echo $i ?> min&nbsp;
                        <?php
                        $a++;
                      }
                      if($a==3){
                        echo "<br>";
                        $a=0;
                      }
                    } ?>
                    <input type="radio" name="deliverytime" value="noRequest"> No Request
                  </dd>
                  <dt><button name="resturauntSearch" class="blueButton">Search Resturaunt</button></dt>
                </dl>
              </form>
            </div>
            <div class="rightWrapper">
              <h3 class="title">Search By Keyword</h3>
              <div id="deliverySeachKeyword">
                <form>
                  <ul>
                    <li>
                      <h4 class="title">Popular Keywords</h4>
                      <?php
                      static $aa=0;
                      for($i=0; $i<count($orderKeyword); $i++){
                        if($i<count($orderKeyword)-1){
                          echo $orderKeyword[$i].", ";
                          $aa++;
                        }else if($i==count($orderKeyword)-1){
                          echo $orderKeyword[$i];
                        }
                      } ?>
                    </li>
                    <li>
                      <input type="text" name="deliveryKeyword" placeholder="Search By Keyword" class="inputText">
                    </li>
                    <li>
                      <button class="orangeButton">SEARCH</button>
                    </li>
                  </ul>
                </form>
              </div>
            </div>
          </div>
        </div><!-- deliverySearchWrapper -->
        <div class="otherInfoWrapper">
          <h2 class="title"><span class="companyColor1">H</span><span class="companyColor2">UNGE</span><span class="companyColor1">R</span>'s Recommendation's <small><a href="">check all<i class="glyphicon glyphicon-chevron-right"></i></a></small></h2>
          <?php
          for($img=0; $img<4; $img++){

            ?>
            <div class="eachSelection">
              <div style="background: url('img/<?php echo $image[$img]?>'); background-size:cover;" class="infoImg">
                <h4><?php echo $img ?>!</h4>
              </div>
            </div>
            <?php
          }
           ?>
        </div><!-- otherInfoWrapper -->
        <div class="otherInfoWrapper">
          <h2 class="title">Popular Delivery Information <small><a href="">check all<i class="glyphicon glyphicon-chevron-right"></i></a></small></h2>
          <?php
          for($img=count($image)-1; $img>count($image)-5; $img--){

            ?>
            <div class="eachSelection">
              <div style="background: url('img/<?php echo $image[$img]?>'); background-size:cover;" class="infoImg">
                <h4><?php echo $img ?>!</h4>
              </div>
            </div>
            <?php
          }
           ?>
        </div><!-- otherInfoWrapper -->
      </div><!-- mainContainer -->
    </div><!-- mainBackgrondContainer -->
    <?php include("footer.php") ?>

  </body>
</html>
