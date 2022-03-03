<?php
  include_once('config.php');

  if(isset($_POST['submit']))
  {
      $Promo = $_POST['promo'];
      $Balance = $_POST['balance'];

      $query = "INSERT into gift_card (promo_number, card_balance)
              values ('$Promo', '$Balance')";
      $result = mysqli_query($conn, $query);

      if($result)
      {
        header("location:giftcardspage.php");
      }
      else
      {
        header("location:newgiftcard.php");
      }
  }

?>