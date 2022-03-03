<?php
  include_once ('config.php');
  include_once('sidebarconnect.php');
  $query = "select * from zreport_system";
  $result = mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="eng">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width-device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <title>View Zreport Records</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col m-auto">
        <div class="card mt-5">
          <table class="table table-bordered">
            <tr>
              <td> ID </td>
              <td> Total Sales </td>
              <td> Transactions </td>
              <td> New Customers </td>
              <td> Opening Amount </td>
              <td> Closing Amount </td>
              <td> Short </td>
              <td> Cash Sales </td>
              <td> Cash Returns </td>
              <td> Drops </td>
              <td> Payouts </td>
              <td> Payins </td>
              <td> Purchases </td>
            </tr>

            <?php
              while($row=mysqli_fetch_assoc($result))
              {
                $ID = $row['zreport_id'];
                $TotalSales = $row['total_sales'];
                $Transactions = $row['transactions'];
                $NumberofnewCustomers = $row['new_customers'];
                $OpeningAmount = $row['opening_amount'];
                $ClosingAmount = $row['closing_amount'];
                $Short = $row['short'];
                $CashSales = $row['cash_sales'];
                $CashReturns = $row['cash_returns'];
                $Drops = $row['drops'];
                $Payouts = $row['payouts'];
                $Payins = $row['pay_ins'];
                $Purchases = $row['purchases'];
            ?>
              <tr>
                <td><?php echo $ID ?></td>
                <td><?php echo $TotalSales ?></td>
                <td><?php echo $Transactions ?></td>
                <td><?php echo $NumberofnewCustomers ?></td>
                <td><?php echo $OpeningAmount ?></td>
                <td><?php echo $ClosingAmount ?></td>
                <td><?php echo $Short ?></td>
                <td><?php echo $CashSales ?></td>
                <td><?php echo $CashReturns ?></td>
                <td><?php echo $Drops ?></td>
                <td><?php echo $Payouts ?></td>
                <td><?php echo $Payins ?></td>
                <td><?php echo $Purchases ?></td>
                <td><a href ="zreportdelete.php?Del=<?php echo $ID ?>">Delete</a></td>
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
