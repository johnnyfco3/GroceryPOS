<?php
include_once ('config.php');
  $query = "select * from inventory_sales";
  $result = mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="eng">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width-device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <title>Inventory Sales Records</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col m-auto">
        <div class="card mt-5">
          <table class="table table-bordered">
            <tr>
              <td> ID </td>
              <td> Ticket ID </td>
              <td> Product ID </td>
              <td> QTY </td>
              <td> Unit Price </td>
              <td> Discount </td>
            </tr>

            <?php
              while($row=mysqli_fetch_assoc($result))
              {
                $ID = $row['ISID'];
                $TicketID = $row['tid'];
                $ProductID = $row['pid'];
                $QTY = $row['qty'];
                $UnitPrice = $row['unit'];
                $Discount = $row['discount'];

            ?>
              <tr>
                <td><?php echo $ID ?></td>
                <td><?php echo $TicketID ?></td>
                <td><?php echo $ProductID ?></td>
                <td><?php echo $QTY ?></td>
                <td><?php echo $UnitPrice ?></td>
                <td><?php echo $Discount ?></td>
                <td><a href ="inventorysalesdelete.php?Del=<?php echo $ID ?>">Delete</a></td>
              </tr>
            <?php
              }
            ?>

          </table>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
