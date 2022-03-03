<?php
include_once ('config.php');

  if(!$con)
  {
    echo 'Not Connected To Server';
  }

  if(!mysqli_select_db($con, 'GroceryStore'))
  {
    echo 'Database Not Selected';
  }

  if(isset($_POST['submit']))
  {
    if(empty($_POST['total']) || empty($_POST['transactions']) || empty($_POST['customers']) || empty($_POST['open']) || empty($_POST['close']) || empty($_POST['short']) || empty($_POST['close']))
    {
      echo ' Please Fill in the Blanks ';
    }
    else
    {
      $TotalSales = $_POST['total'];
      $Transactions = $_POST['transactions'];
      $NumberofnewCustomers = $_POST['customers'];
      $OpeningAmount = $_POST['open'];
      $ClosingAmount = $_POST['close'];
      $Short = $_POST['short'];
      $CashSales = $_POST['cash'];
      $CashReturns = $_POST['returns'];
      $Drops = $_POST['drops'];
      $Payouts = $_POST['payouts'];
      $Payins = $_POST['payins'];
      $Purchases = $_POST['purchases'];

      $query = "insert into zreport_system (total_sales, transactions, new_customers, opening_amount, closing_amount, short, cash_sales, cash_returns, drops, payouts, pay_ins, purchases)
              values ('$TotalSales', '$Transactions', '$NumberofnewCustomers', '$OpeningAmount', '$ClosingAmount', '$Short', '$CashSales', '$CashReturns', '$Drops', '$Payouts', '$Payins', '$Purchases')";
      $result = mysqli_query($conn, $query);

      if($result)
      {
        header("location:zreportview.php");
      }
      else
      {
        echo ' Please Check Your Query ';
      }
    }
  }
?>
