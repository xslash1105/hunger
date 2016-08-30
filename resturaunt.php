<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>HUNGER -Resturaunt-</title>
  </head>
  <body>
    <?php include("menu.php"); ?>
    <script type="text/javascript">
      $(document).ready(function(){
        $(".resturauntOpen").addClass("presentPage");
      })
    </script>

    <div class="mainContainer">
      <div id="mediumSearchResturauntWrapper">
        <h2 class="title">Where do you want to go?</h2>
        <form>
          <div class="leftWrapper">
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
          </div>
          <div class="rightWrapper">
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
                    <option value="<?php echo $ii ?>"><?php echo "Higher than &yen".$ii ?></option>
                    <?php
                  }
                }
                 ?>
              </select>
            </dd>
            <dt>Meal Time:</dt>
            <dd>
                <input type="radio" name="mealtime" value="breakfast">Before 10am&nbsp;
                <input type="radio" name="mealtime" value="lunch">11:30am-2pm&nbsp;
                <input type="radio" name="mealtime" value="dinner">After 5pm&nbsp;
            </dd>
          </div>
            <dt><button name="resturauntSearch" class="blueButton">Search Resturaunt</button></dt>
          </dl>
        </form>
      </div>

      <div id="smallSearchResturauntWrapper">
        <h2 class="title">Where do you want to go?</h2>
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
                    <option value="<?php echo $ii ?>"><?php echo "Higher than &yen".$ii ?></option>
                    <?php
                  }
                }
                 ?>
              </select>
            </dd>
            <dt>Meal Time:</dt>
            <dd>
                <input type="radio" name="mealtime" value="breakfast">Before 10am&nbsp;
                <input type="radio" name="mealtime" value="lunch">11:30am-2pm&nbsp;
                <input type="radio" name="mealtime" value="dinner">After 5pm&nbsp;
            </dd>
            <dt><button name="resturauntSearch" class="blueButton">Search Resturaunt</button></dt>
          </dl>
        </form>
      </div>

      <div id="resturauntRecommend">
        <div id="eachResturauntRecommend">
          <h2 class="title"><span class="companyColor1">H</span><span class="companyColor2">UNGU</span><span class="companyColor1">R</span>'s Recommendation's <small><a href="">check all<i class="glyphicon glyphicon-chevron-right"></i></a></small></h2>
          <?php
          $resturauntRec = getOrderByDesc("resturaunt", "recommend");
          showEachLarge($resturauntRec);
           ?>
        </div><!-- eachResturauntRecommend -->
        <div id="searchResturauntWrapper">
          <h2 class="title">Where do you want to go?</h2>
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
                      <option value="<?php echo $ii ?>"><?php echo "Higher than &yen".$ii ?></option>
                      <?php
                    }
                  }
                   ?>
                </select>
              </dd>
              <dt>Meal Time:</dt>
              <dd>
                  <input type="radio" name="mealtime" value="breakfast">Before 10am&nbsp;
                  <input type="radio" name="mealtime" value="lunch">11:30am-2pm&nbsp;
                  <input type="radio" name="mealtime" value="dinner">After 5pm&nbsp;
              </dd>
              <dt><button name="resturauntSearch" class="blueButton">Search Resturaunt</button></dt>
            </dl>
          </form>
        </div>
      </div><!-- resturauntRecommend -->
      <div id="resturauntCategoryWrapper">
        <h2 class="title">Categories</h2>
        <div class="allEachWrapper">
          <h3 class="title">Italian <small><a href="">check all<i class="glyphicon glyphicon-chevron-right"></i></a></small></h3>
          <?php
          $resturauntCat = getSelected("resturaunt", "category", "italian");
          showEachName($resturauntCat);
           ?>
         </div><!-- eachresturauntCategory -->
         <div class="allEachWrapper">
           <h3 class="title">Japanese <small><a href="">check all<i class="glyphicon glyphicon-chevron-right"></i></a></small></h3>
           <?php
           $resturauntCat = getSelected("resturaunt", "category", "italian");
           showEachName($resturauntCat);
            ?>
          </div><!-- eachresturauntCategory -->
      </div><!-- resturauntCategory -->
    </div>
    <?php include("footer.php") ?>
  </body>
</html>
