<?php
include_once ('config.php');

  if(isset($_GET['Del']))
  {
    $ID = $_GET['Del'];
    $query = " delete from ticket_system where ticket_id = '".$ID."'";
    $result = mysqli_query($conn,$query);

    if($result)
    {
      header("location:ticketview.php");
    }
    else
    {
      echo ' Please Check Your Query ';
    }
  }
  else
  {
    header("location:ticketview.php");
  }

 ?>
