<?php
  include_once ('config.php');

  if(isset($_POST['submit']))
  {  
      $sale = 1;
      $query = "insert into ticket_system (sale_id)
              values ('$sale')";

      $result = mysqli_query($conn, $query);

      if($result)
      {
        echo ' All good';
      }
      else
      {
        echo ' Please Check Your Query ';
      }
    }
  
?>
