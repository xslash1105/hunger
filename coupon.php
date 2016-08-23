<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>HUNGER -coupon-</title>
  </head>
  <body>
    <?php include("menu.php") ?>
    <script type="text/javascript">
      $(document).ready(function(){
        $(".couponOpen").addClass("presentPage");
      })
    </script>

    <div class="mainContainer">
      <div id="couponRecommendInfoWrapper">
        <div id="couponRecommendInfo">
          <h2 class="title"><span class="companyColor1">H</span><span class="companyColor2">UNGE</span><span class="companyColor1">R</span>'s Recommendation's <small><a href="">check all<i class="glyphicon glyphicon-chevron-right"></i></a></small></h2>
          <?php
          for($img=1; $img<=4; $img++){
              ?>
              <div class="eachSelection">
                <div style="background: url('img/<?php echo $image[$img]?>'); background-size:cover;" class="infoImg">
                  <h4><?php echo $img*10 ?>%OFF!</h4>
                </div>
              </div>
              <?php
          }
           ?>
           <h2 class="title">Best Discount's <small><a href="">check all<i class="glyphicon glyphicon-chevron-right"></i></a></small></h2>
           <?php
           for($img=count($image)-1; $img>count($image)-5; $img--){
               ?>
               <div class="eachSelection">
                 <div style="background: url('img/<?php echo $image[$img]?>'); background-size:cover;" class="infoImg">
                   <h4><?php echo $img*10 ?>%OFF!</h4>
                 </div>
               </div>
               <?php
           }
            ?>
        </div><!-- couponRecommendInfo -->
        <div id="couponSearchWrapper">
          <h2 class="title">Search Your Coupon</h2>
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
              <dd>
                <select>
                  <?php
                  for($ii=1; $ii<=20000; $ii++){
                    if($ii<20000){
                        if($ii%1000==0){
                        ?>
                        <option value="<?php echo $ii ?>"><?php echo "lower than &yen".$ii ?></option>
                        <?php
                      }
                    }else{
                      ?>
                      <option value="<?php echo $ii ?>"><?php echo "Higher than ".$ii ?></option>
                      <?php
                    }
                  }
                   ?>
                </select>
              </dd>
              <dt><button name="resturauntSearch" class="blueButton">Search Coupon</button></dt>
            </dl>
          </form>
          <h3 class="title">OR</h3>
          <form>
            <ul>
              <li><input type="text" placeholder="Search By Keyword's" name="couponSearchKeyword" class="inputText"></li>
              <li><button class="orangeButton" name="couponSearchButton">SEARCH</button></li>
            </ul>
          </form>
        </div>
      </div><!-- couponRecommendInfoWrapper -->
      <div class="otherInfoWrapper">
        <h2 class="title">New Coupon Information <small><a href="">check all<i class="glyphicon glyphicon-chevron-right"></i></a></small></h2>
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
      </div>
      <div id="mediumCouponSearchWrapper">
        <h2 class="title">Search Your Coupon</h2>
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
            <dd>
              <select>
                <?php
                for($ii=1; $ii<=20000; $ii++){
                  if($ii<20000){
                      if($ii%1000==0){
                      ?>
                      <option value="<?php echo $ii ?>"><?php echo "lower than &yen".$ii ?></option>
                      <?php
                    }
                  }else{
                    ?>
                    <option value="<?php echo $ii ?>"><?php echo "Higher than ".$ii ?></option>
                    <?php
                  }
                }
                 ?>
              </select>
            </dd>
            <dt><button name="resturauntSearch" class="blueButton">Search Coupon</button></dt>
          </dl>
        </form>
        <h3 class="title">OR</h3>
        <form>
          <ul>
            <li><input type="text" placeholder="Search By Keyword's" name="couponSearchKeyword" class="inputText"></li>
            <li><button class="orangeButton" name="couponSearchButton">SEARCH</button></li>
          </ul>
        </form>
      </div>
    </div><!-- mainContainer -->
    <?php include("footer.php") ?>
  </body>
</html>
