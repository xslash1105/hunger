<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>HUNGER -detail of Delivery</title>
  </head>
  <body>
    <?php include("menu.php");
      static $menuname = "";
      $resturaunt = "umami burger";
      ?>
    <script type="text/javascript">
      $(document).ready(function(){
        $(".deliveryOpen").addClass("presentPage");
      })
    </script>

    <div class="mainContainer">
      <div id="detailDeliveryWrapper">
        <h2 class="title">Delivery shop's name</h2>
        <div class="leftWrapper">
          <h3 class="title">Menu</h3>
          <div id="detailDeliveryMenu">
            <?php
            for($a=0; $a<count($menu); $a++){
              ?>
              <button class="menuButton menuOpen"  value="<?php echo $resturaunt."_".$menu[$a] ?>"><?php echo $menu[$a] ?></button>
              <?php
            }
            ?>
          </div>
        </div>
        <div class="rightWrapper">
          <div id="detailOrderCheckWrapper">
            <h3 class="title">Your Order Sheet <small>Sheet No.<?php echo 1 ?></small></h3>
            <?php
            static $totalPrice = 0;
            static $numOfOrder = 0;
            static $numOfMeal = 1;
             ?>
            <form>
              <table>
                <thead>
                  <tr>
                    <th>
                      No.
                    </th>
                    <th>
                      Meal
                    </th>
                    <th>
                      No. of Orders
                    </th>
                    <th>
                      Price
                    </th>
                  </tr>
                </thead>

                  <tbody>
                    <?php
                    for($i=1; $i<=3; $i++){
                      ?>
                      <tr>
                        <td>
                          <?php
                          echo $numOfMeal;
                          $numOfMeal++;
                           ?>
                        </td>
                        <td>
                          Hotdog
                        </td>
                        <td>
                          <?php
                          $numOfOrder += 1;
                          echo 1; ?>
                        </td>
                        <td>
                          <?php $totalPrice += 300;
                          echo "&yen300" ?>
                        </td>
                        <td>
                          <i class='glyphicon glyphicon-remove'></i>
                        </td>
                      </tr>
                      <?php
                    } ?>
                  </tbody>

                <tfoot>
                  <tr>
                    <th colspan="2">
                      Total:
                    </th>
                    <td>
                      <?php
                      echo $numOfOrder;
                       ?>
                    </td>
                    <td>
                      <?php
                      echo "&yen".$totalPrice
                       ?>
                    </td>
                  </tr>
                </tfoot>
              </table>
                <button type="button" class="blueButton" value="<?php echo "1_resturauntname" ?>" id="orderButton">COMPLETE YOUR ORDER</button>
            </form>
          </div><!-- detailOrderCheckWrapper -->
        </div>
      </div><!-- detailDeliveryWrapper -->
      <div class="otherInfoWrapper">
        <h2 class="title">Same Categories Information <small><a href="">check all<i class="glyphicon glyphicon-chevron-right"></i></a></small></h2>
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
    </div>

    <div id="modalMenuWrapper">

    </div>
    <?php include("footer.php") ?>
  </body>
</html>
