<?php
  include_once ('config.php');
  include_once('sidebarconnect.php');
  $query = "select * from ticket_system";
  $result = mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="eng">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width-device-width, initial-scale=1.0">
  <meta  http-equiv="X-UA-Compatible" content="ie-edge">
  <title>Ticket System Records</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col m-auto">
        <div class="card mt-5">
          <table class="table table-bordered">
            <tr>
              <td> ID </td>
              <td> Date </td>
              <td> Time </td>
              <td> Subtotal </td>
              <td> Total </td>
              <td> Tax </td>
              <td> Tax Rate </td>
              <td> Employee ID </td>
              <td> Inventory Sales ID </td>
            </tr>

            <?php
              while($row=mysqli_fetch_assoc($result))
              {
                $ID = $row['ticket_id'];
                $Date = $row['date'];
                $Time = $row['time'];
                $Subtotal = $row['subtotal'];
                $Total = $row['total'];
                $Tax = $row['tax'];
                $TaxRate = $row['tax_rate'];
                $EmployeeID = $row['employee_id'];
               // $InventorySalesID = = $row['ISID'];

            ?>
              <tr>
                <td><?php echo $ID ?></td>
                <td><?php echo $Date ?></td>
                <td><?php echo $Time ?></td>
                <td><?php echo $Subtotal ?></td>
                <td><?php echo $Total ?></td>
                <td><?php echo $Tax ?></td>
                <td><?php echo $TaxRate ?></td>
                <td><?php echo $EmployeeID ?></td>
                <td><?php echo $InventorySalesID ?></td>
                <td><a href ="ticketdelete.php?Del=<?php echo $ID ?>">Delete</a></td>
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
