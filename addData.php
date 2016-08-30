<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table>
      <tr>
        <th>
          table name
        </th>
        <td>
          <select>
            <?php
            $table = array("resturaunt", "delivery", "coupon");
            for($a=0; $a<$table.length; $a++){
              ?>
              <option value="<?php echo $table[$a] ?>"><?php echo $table[$a] ?></option>
              <?php
            } ?>
          </select>
        </td>
      </tr>
      <tr>
        <th>
          name:
        </th>
        <td>
          <input type="text" name="name">
        </td>
      </tr>
      <tr>
        <th>
          location:
        </th>
        <td>
          <input type="text" name="location">
        </td>
      </tr>
      <tr>
        <th>
          price:
        </th>
        <td>
          <input type="text" name="price">
        </td>
      </tr>
      <tr>
        <th>
          category:
        </th>
        <td>
          <select>
            <?php
            for($i=0; $i<=$category.lengthl $i++){
              ?>
              <option value="<?php echo $category[$i] ?>"><?php echo $category[$i] ?></option>
              <?php
            } ?>
          </select>
        </td>
      </tr>
      <tr>
        <th>
          tel:
        </th>
        <td>
          <input type="text" name="tel">
        </td>
      </tr>
      <tr>
        <th>
          hp
        </th>
        <td>
          <input type="text" name="hp">
        </td>
      </tr>
      <tr>
        <th>
          image
        </th>
        <td>
          <input type="file" name="img">
        </td>
      </tr>
      <tr>
        <th>
          recommend
        </th>
        <td>
          <select>
            <?php
            for($i=1; $i<=10; $i++){
              ?>
              <option value="<?php echo $i ?>"><?php echo $i ?></option>
              <?php
            } ?>
          </select>
        </td>
      </tr>
    </table>
  </body>
</html>
<?php
 ?>
