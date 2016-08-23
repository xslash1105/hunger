<?php
$menu = $_GET["menu"];
$menuArray = explode("_", $menu);
static $numOfMeal = 1;
?>
<div class="modalMenu">
  <div id="closeMenu" class="closeButton">
    <i class="glyphicon glyphicon-remove"></i>
  </div>
  <h3 class="title"><?php echo $menuArray[1] ?></h3>
  <table>
    <thead>
      <th>
        No.
      </th>
      <th>
        Menu name
      </th>
      <th>
        No. of Order
      </th>
      <th>
        Price
      </th>
      <td>
      </td>
    </thead>
    <tbody>
      <?php
      for($a=0; $a<=10; $a++){
        ?>
        <tr>
          <td>
            <?php
            echo $numOfMeal;
            $numOfMeal++;
             ?>
          </td>
          <td>
            Pasta
          </td>
          <td>
            <select>
              <?php
              for($i=0; $i<=10; $i++){
                ?>
                <option><?php echo $i ?></option>
                <?php
              } ?>
            </select>
          </td>
          <td>
            &yen;1000
          </td>
          <td>
            <button class="addButton blueButton">ADD</button>
          </td>
        </tr>
        <?php
      }
       ?>
    </tbody>
  </table>
<?php
 ?>
