<?php
  include_once('config.php');

  if(isset($_POST['submit']))
  {
      $Email = $_POST['email'];
      $Password = $_POST['password'];
      $FirstName = $_POST['fname'];
      $LastName = $_POST['lname'];
      $PhoneNumber = $_POST['number'];
      $StreetAddress = $_POST['street'];
      $City = $_POST['city'];
      $State = $_POST['state'];
      $ZipCode = $_POST['zip'];

      $query = "insert into customer_info (email, password, first_name, last_name, phone_number, street_address, city, state, zip_code)
              values ('$Email', '$Password', '$FirstName', '$LastName', '$PhoneNumber', '$StreetAddress', '$City', '$State', '$ZipCode')";
      $result = mysqli_query($conn, $query);

      if($result)
      {
        header("location:accountHomeDraft.php");
      }
      else
      {
        echo ' Please Check Your Query ';
      }
  }

?>