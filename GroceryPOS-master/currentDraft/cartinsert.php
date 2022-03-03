<?php
include_once ('config.php');

  if(isset($_POST['submit']))
  {
    $sale = 1;
      $query = "insert into ticket_system (sale_id)
            values ('$sale')";

      $result = mysqli_query($conn, $query);

 
      $qty = $_POST['qty'];
      $discount = $_POST['discount'];
      $cart = $_POST['cart'];
      $product = $_POST['product'];
  
      $query = "INSERT into cart_table (sale_id, qty, discount, cart_purchase, product_id)
              values ('$sale', '$qty', '$discount', '$cart', '$product')";
              
      $result = mysqli_query($conn, $query);

      if($result)
      {
        header("location:ticketedit.php");
        $sale = $sale+1;
      }
      else
      {
        echo ' Please Check Your Query ';
      }
    }
  
?>
