<?php
include_once ('config.php');

  if(isset($_GET['Del']))
  {
    $ID = $_GET['Del'];
    $query = " delete from product_inventory where product_id = '".$ID."'";
    $result = mysqli_query($conn,$query);

    if($result)
    {
      header("location:productview.php");
    }
    else
    {
      echo ' Please Check Your Query ';
    }
  }
  else
  {
    header("location:productview.php");
  }

 ?>
