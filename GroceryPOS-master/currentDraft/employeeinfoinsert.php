<?php
include_once('config.php');

  if(isset($_POST['submit']))
  {
      $Email = $_POST['email'];
      $Password = $_POST['password'];
      $Pin = $_POST['pnum'];
      $FirstName = $_POST['fname'];
      $LastName = $_POST['lname'];
      $PhoneNumber = $_POST['phone'];
      $SSN = $_POST['ssn'];
      $StreetAddress = $_POST['street'];
      $City = $_POST['city'];
      $State = $_POST['state'];
      $ZipCode = $_POST['zip'];
      $Company = $_POST['code'];
      $UserID = $_POST['uid'];
      $Start = date('Y-m-d', strtotime($_POST['date']));
      $User = $_POST['type'];
      

      $query = "INSERT into employee_info (email, password, pin_number, first_name, last_name, user_id, phone_number, SSN, street_address, city, state, zip_code, start_date, company_name, user_type)
              VALUES ('$Email', '$Password', '$Pin', '$FirstName', '$LastName', '$UserID', '$PhoneNumber', '$SSN', '$StreetAddress', '$City', '$State', '$ZipCode', '$Start', '$Company', '$User')";
      $result = mysqli_query($conn, $query);

      $sql = "SELECT employee_id FROM employee_info WHERE email = '$Email'";
      $selection = mysqli_query($conn, $sql);

      while($row = mysqli_fetch_assoc($selection)) {
        $ID = $row['employee_id'];
      }

      if($result)
      {
        $query = "INSERT into customer_info (email, password, first_name, last_name, phone_number, street_address, city, state, zip_code)
              VALUES ('$Email', '$Password', '$FirstName', '$LastName', '$PhoneNumber', '$StreetAddress', '$City', '$State', '$ZipCode')";
        $result = mysqli_query($conn, $query);

        $sql1 = "SELECT customer_id FROM customer_info WHERE email = '$Email'";
        $selection1 = mysqli_query($conn, $sql1); 
        
        while($row = mysqli_fetch_assoc($selection1)) {
          $customer = $row['customer_id'];
        }

        $query = "UPDATE employee_info SET customer_id = '$customer' WHERE employee_id = '$ID'";
        $result = mysqli_query($conn, $query);
        
        header("location:employeeview.php");
      }
      else
      {
        echo " Please Check Your Query";
      }
    }
?>
