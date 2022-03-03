<?php
include_once ('config.php');

  if(isset($_GET['Del']))
  {
    $ID = $_GET['Del'];
    $query = " delete from tax_table where TTID = '".$ID."'";
    $result = mysqli_query($conn,$query);

    if($result)
    {
      header("location:taxview.php");
    }
    else
    {
      echo ' Please Check Your Query ';
    }
  }
  else
  {
    header("location:taxview.php");
  }

 ?>
