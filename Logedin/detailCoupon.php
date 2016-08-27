<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>HUNGER -Details for Coupon-</title>
  </head>
  <body>
    <?php include("menu.php") ?>
    <script type="text/javascript">
      $(document).ready(function(){
        $(".couponOpen").addClass("presentPage");
      })
    </script>

    <div class="mainContainer">
      <div id="detailWrapper">
        <h2 class="title">Coupon Name <span class="companyColor1">[50%OFF]</span> <small>coupon No. 123456</small></h2>
        <div class="detailLeftWrapper">
          <img src="img/japanese.jpeg" class="detailImg">
        </div>
        <div class="detailRightWrapper">
          <table>
            <tr>
              <th>
                Normal Price:
              </th>
              <td>
                <?php echo "&yen2000" ?>
              </td>
            </tr>
            <tr>
              <th>
                Discount Price:
              </th>
              <td>
                <span class="discountPrice"><?php echo "&yen1000" ?></span>
              </td>
            </tr>
            <tr>
              <th>
                Place:
              </th>
              <td>
                <?php echo "1402, gurgaon, misao, India" ?>
              </td>
            </tr>
            <tr>
              <th>
                Tel:
              </th>
              <td>
                231-3232-3231
              </td>
            </tr>
            <tr>
              <th>
                HP:
              </th>
              <td>
                <a href=""><?php echo "Coupon name" ?></a>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <small>※please show this screen to the staff of the resturaunt</small>
              </td>
            </tr>
          </table>
          <h3 class="title">Same Resturaunt's Coupon's <small><a href="">check all<i class="glyphicon glyphicon-chevron-right"></i></a></small></h3>
          <?php
          for($i=1; $i<=2; $i++){
            ?>
            <div class="otherImg" style="background: url('img/<?php echo $image[$i] ?>')">
              <h4><?php echo $i*10 ?>%Off</h4>
            </div>
            <?php
          }
           ?>
        </div>
      </div><!-- detailWrapper -->
      <div class="otherInfoWrapper">
        <h2 class="title">Same Categories Recommendation <small><a href="">check all<i class="glyphicon glyphicon-chevron-right"></i></a></small></h2>
        <?php
        for($img=count($image)-1; $img>count($image)-5; $img--){
            ?>
            <div class="eachSelection" >
              <div style="background: url('img/<?php echo $image[$img]?>'); background-size:cover;" class="infoImg">
                <h4><?php echo $img*10 ?>%OFF!</h4>
              </div>
            </div>
            <?php
        }
         ?>
      </div><!-- otherInfoWrapper -->
      <div class="otherInfoWrapper">
        <h2 class="title">Coupon's near ... <small><a href="">check all<i class="glyphicon glyphicon-chevron-right"></i></a></small></h2>
        <?php
        for($img=1; $img<5; $img++){
            ?>
            <div class="eachSelection">
              <div style="background: url('img/<?php echo $image[$img]?>'); background-size:cover;" class="infoImg">
                <h4><?php echo $img*10 ?>%OFF!</h4>
              </div>
            </div>
            <?php
        }
         ?>
      </div><!-- otherInfoWrapper -->
    </div>
    <?php include("footer.php") ?>
  </body>
</html>
