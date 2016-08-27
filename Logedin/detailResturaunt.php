<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>HUNGER -details of Resturaunt-</title>
  </head>
  <body>
    <?php include("menu.php") ?>
    <script type="text/javascript">
      $(document).ready(function(){
        $(".resturauntOpen").addClass("presentPage");
      })
    </script>

    <div class="mainContainer">
      <div id="detailResturauntWrapper">
        <h2 class="title">Resturaunt Name</h2>
        <div class="detailLeftWrapper">
          <img src="img/burgershop1.jpeg" class="detailImg">
        </div>
        <div class="detailRightWrapper">
          <h3 class="title">Information</h3>
          <table>
            <tr>
              <th>
                Average cost per person:
              </th>
              <td>
                <?php echo "&yen2000" ?>
              </td>
            </tr>
            <tr>
              <th>
                Open Time:
              </th>
              <td>
                11am - 2pm(Lunch time)<br>
                5pm - 11:30pm(Dinner time)
              </td>
            </tr>
            <tr>
              <th>
                Order Stop:
              </th>
              <td>
                1:30pm(Lunch time)<br>
                10:30pm(Dinner time)
              </td>
            </tr>
            <tr>
              <th>
                Location:
              </th>
              <td>
                <?php echo "1402, gurgaon, India" ?>
              </td>
            </tr>
            <tr>
              <th>
                Tel:
              </th>
              <td>
                <?php echo "123-4567-8901" ?>
              </td>
            </tr>
            <tr>
              <th>
                HP:
              </th>
              <td>
                <a href=""><?php echo "resturaunt name" ?></a>
              </td>
            </tr>
          </table>
            <form>
              <button type="button" class="orangeButton" value="<?php echo "resturaunt name"?>" id="reservationOpen">Make a Reservation</button>
            </form>
        </div>
      </div><!-- detailResturauntWrapper -->
      <div class="otherInfoWrapper">
        <h2 class="title">Resturaunt's near <?php echo "resturaunt name" ?> <small><a href="">check all<i class="glyphicon glyphicon-chevron-right"></i></a></small></h2>
        <?php
        for($img=count($image)-1; $img>count($image)-5; $img--){
            ?>
            <div class="eachSelection" >
              <div style="background: url('img/<?php echo $image[$img]?>'); background-size:cover;" class="infoImg">
                <h4><?php echo "Resturaunt name" ?></h4>
              </div>
            </div>
            <?php
        }
         ?>
      </div><!-- otherInfoWrapper -->
      <div class="otherInfoWrapper">
        <h2 class="title">Same Categories Resturaunt's <small><a href="">check all<i class="glyphicon glyphicon-chevron-right"></i></a></small></h2>
        <?php
        for($img=count($image)-1; $img>count($image)-5; $img--){
            ?>
            <div class="eachSelection" >
              <div style="background: url('img/<?php echo $image[$img]?>'); background-size:cover;" class="infoImg">
                <h4><?php echo "Resturaunt name" ?></h4>
              </div>
            </div>
            <?php
        }
         ?>
      </div><!-- otherInfoWrapper -->
      <div class="otherInfoWrapper">
        <h2 class="title"><span class="companyColor1">H</span><span class="companyColor2">UNGE</span><span class="companyColor1">R</span>'s Recommendation's <small><a href="">check all<i class="glyphicon glyphicon-chevron-right"></i></a></small></h2>
        <?php
        for($img=count($image)-1; $img>count($image)-5; $img--){
            ?>
            <div class="eachSelection" >
              <div style="background: url('img/<?php echo $image[$img]?>'); background-size:cover;" class="infoImg">
                <h4><?php echo "Resturaunt name" ?></h4>
              </div>
            </div>
            <?php
        }
         ?>
      </div><!-- otherInfoWrapper -->
    </div><!-- mainContainer -->
    <div id="modalReserveWrapper">
      <div id="modalReserve">
        <div id="closeReservation" class="closeButton">
          <i class="glyphicon glyphicon-remove"></i>
        </div>
        <h3 class="title">Resturaunt name</h3>
        <form>
          <dl>
            <dt>Name:</dt>
            <dd><input type="text" name="name" placeholder="Name" class="inputText"></dd>
            <dt>Email:</dt>
            <dd><input type="email" name="email" placeholder="Email" class="inputText"></dd>
            <dt>Phone:</dt>
            <dd><input type="text" name="phone" placeholder="Phone number" class="inputText"></dd>
          </dl>
          <table>
            <tr>
              <th>
                Number of People:
              </th>
              <td>
                <select>
                  <?php
                  for($i=1; $i<=10; $i++){
                  ?>
                  <option value="<?php echo $i ?>"><?php echo $i ?></option>
                  <?php
                  }
                  ?>
                </select>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <small>※if more than 10 people, please call the resturaunt</small>
              </td>
            </tr>
            <tr>
              <th>
                Coming Time:
              </th>
              <td>
                <select>
                  <?php
                  for($i=11; $i<=12; $i++){
                    ?>
                    <option value="<?php echo $i ?>"><?php echo $i."am" ?></option>
                    <?php
                    if($i==12){
                      for($a=1; $a<=10; $a++){
                        if($a<=2 || $a>=5){
                          ?>
                          <option value="<?php echo $a ?>"><?php echo $a."pm" ?></option>
                          <?php
                        }
                      }
                    }
                  } ?>
                </select>
              </td>
            </tr>
          </table>
          <button type="submit" value="<?php echo "resturauntname "?>" class="blueButton">Reserve</button>
        </form>
      </div>
    </div>
    <?php include("footer.php") ?>

  </body>
</html>
