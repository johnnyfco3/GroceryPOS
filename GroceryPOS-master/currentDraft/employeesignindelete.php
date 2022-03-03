<?php
include_once ('config.php');

  if(isset($_GET['Del']))
  {
    $ID = $_GET['Del'];
    $query = " delete from employee_id where employee_id = '".$ID."'";
    $result = mysqli_query($conn,$query);

    if($result)
    {
      header("location:employeesigninview.php");
    }
    else
    {
      echo ' Please Check Your Query ';
    }
  }
  else
  {
    header("location:employeesigninview.php");
  }

 ?>
