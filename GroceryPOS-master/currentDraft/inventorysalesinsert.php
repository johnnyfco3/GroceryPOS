<?php
include_once ('config.php');


  if(isset($_POST['submit']))
  {
    if(empty($_POST['tid']) || empty($_POST['pid']) || empty($_POST['qty']) || empty($_POST['unit']) || empty($_POST['discount']))
    {
      echo ' Please Fill in the Blanks ';
    }
    else
    {
      $TicketID = $_POST['tid'];
      $ProductID = $_POST['pid'];
      $QTY = $_POST['qty'];
      $UnitPrice = $_POST['unit'];
      $Discount = $_POST['discount'];

      $query = "insert into inventory_sales (ticket_id, product_id, qty, unit_price, discount)
              values ('$TicketID', '$ProductID', '$QTY', '$UnitPrice', '$Discount')";

      $result = mysqli_query($conn, $query);

      if($result)
      {
        header("location:inventorysalesview.php");
      }
      else
      {
        echo ' Please Check Your Query ';
      }
    }
  }
?>
