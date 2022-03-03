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
      $Stores = $_POST['stores'];
      $User = '1';


      $query = "INSERT into employee_info (email, password, first_name, last_name, phone_number, SSN, street_address, city, state, zip_code, company_name, number_of_stores, user_type)
              values ('$Email', '$Password', '$FirstName', '$LastName', '$PhoneNumber', '$SSN', '$StreetAddress', '$City', '$State', '$ZipCode', '$Company', '$Stores', '$User')";
      $result = mysqli_query($conn, $query);

      echo $query;

      if($result)
      {
        $query = "INSERT into customer_info (email, password, first_name, last_name, phone_number, street_address, city, state, zip_code)
        VALUES ('$Email', '$Password', '$FirstName', '$LastName', '$PhoneNumber', '$StreetAddress', '$City', '$State', '$ZipCode')";

        $result = mysqli_query($conn, $query);
        header("location:salescontrolpanel.php");
      }
      else
      {
        echo ' Please Check Your Query ';
      }
  }
?>