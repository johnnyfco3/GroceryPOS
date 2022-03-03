<?php
  include_once('config.php');

  if(isset($_POST['submit']))
  {
      $Email = $_POST['email'];
      $Password = $_POST['password'];
      $FirstName = $_POST['fname'];
      $LastName = $_POST['lname'];
      $PhoneNumber = $_POST['phone'];
      $SSN = $_POST['social'];
      $StreetAddress = $_POST['street'];
      $City = $_POST['city'];
      $State = $_POST['state'];
      $ZipCode = $_POST['zip'];
      $Company = $_POST['company'];
      $User = 2;

      $query = "INSERT into employee_info (email, password, first_name, last_name, phone_number, SSN, street_address, city, state, zip_code, company_name, user_type)
              values ('$Email', '$Password', '$FirstName', '$LastName', '$PhoneNumber', '$SSN', '$StreetAddress', '$City', '$State', '$ZipCode', '$Company', '$User')";

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
