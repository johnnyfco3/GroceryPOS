<?php
include_once ('config.php');

  if(isset($_GET['Del']))
  {
    $ID = $_GET['Del'];
    $query = " delete from customer_info where customer_id = '".$ID."'";
    $result = mysqli_query($conn,$query);

    if($result)
    {
      header("location:customerview.php");
    }
    else
    {
      echo ' Please Check Your Query ';
    }
  }
  else
  {
    header("location:customerview.php");
  }

 ?>
