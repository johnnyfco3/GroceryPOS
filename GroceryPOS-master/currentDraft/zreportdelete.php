<?php
include_once ('config.php');

  if(isset($_GET['Del']))
  {
    $ID = $_GET['Del'];
    $query = " delete from zreport_system where zreport_id = '".$ID."'";
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
  else
  {
    header("location:zreportview.php");
  }

 ?>
