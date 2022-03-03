<?php
include_once ('config.php');


  $employee = $_POST['employeeid'];
  $username = $_POST['email'];
  $password = $_POST['password'];
  $pin_number = $_POST['pin'];
  $payroll = $_POST['payroll'];
  $daily_sales = $_POST['daily_sales'];
  $daily_returns = $_POST['daily_returns'];

  $sql = "INSERT INTO 'employee_id'(employee_id, username, password, pin_number, payroll, daily_sales, daily_returns) 
  VALUES ([$employee],[$username],[$password],[$pin_number],[$payroll],[$daily_sales],[$daily_returns])";


  
  if(!mysqli_query($conn, $sql))
  {
    echo 'Not Inserted';
  }
  else
  {
    echo 'Inserted';
  }

  header("refresh:2; url=test.html");

?>
