<html>
<head>
  <title>Document</title>
</head>
<body>
  <h3 > Update Form in PHP </h3>
    <form action="" method="post">
      <input type="text" placeholder=" Enter Zreport ID " name="id"/>
      <input type="text" placeholder=" Total Sales " name="total"/>
      <input type="text" placeholder=" Transactions " name="transactions"/>
      <input type="text" placeholder=" Number of new Customers " name="customers"/>
      <input type="text" placeholder=" Opening Amount " name="open"/>
      <input type="text" placeholder=" Closing Amount " name="close"/>
      <input type="text" placeholder=" Short " name="short"/>
      <input type="text" placeholder=" Cash Sales " name="cash"/>
      <input type="text" placeholder=" Cash Returns " name="returns"/>
      <input type="text" placeholder=" Drops " name="drops"/>
      <input type="text" placeholder=" Payouts " name="payouts"/>
      <input type="text" placeholder=" Payins " name="payins"/>
      <input type="text" placeholder=" Purchases " name="purchases"/>
      <input type="text" placeholder=" Ticket ID" name="tid"/>
      <input type="text" placeholder=" Product ID " name="pid"/>
      <input type="submit" name="update" value="UPDATE"/>
    </form>
</body>
</html>
<?php
include_once ('config.php');

if(isset($_POST['update']))
{
  $id = $_POST['id'];

  $query = "update zreport_system set total_sales = '$_POST[total]', transactions = '$_POST[transactions]', new_customers = '$_POST[customers]', opening_amount = '$_POST[open]', closing_amount = '$_POST[close]', short = '$_POST[short]', cash_sales = '$_POST[cash]', cash_returns = '$_POST[returns]', drops = '$_POST[drops]', payouts = '$_POST[payouts]', pay_ins = '$_POST[payins]', purchases = '$_POST[purchases]', ticket_id = '$_POST[tid]', product_id = '$_POST[pid]' where zreport_id='$_POST[id]'";
  $result = mysqli_query($conn,$query);

  if($result)
  {
    header("location:zreportview.php");
  }
  else
  {
    echo ' Please Check Your Query ';
  }
}
?>
