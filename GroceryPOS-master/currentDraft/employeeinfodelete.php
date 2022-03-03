<?php
include_once ('config.php');

  if(isset($_GET['Del']))
  {
    $ID = $_GET['Del'];
    $query = " delete from employee_info where employee_id = '".$ID."'";
    $result = mysqli_query($conn,$query);

    if($result)
    {
      header("location:employeeview.php");
    }
    else
    {
      echo ' Please Check Your Query ';
    }
  }
  else
  {
    header("location:employeeview.php");
  }

 ?>
