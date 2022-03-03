<?php
include_once ('config.php');

  if(isset($_POST['submit']))
  {
    if(empty($_POST['email']) || empty($_POST['password']) || empty($_POST['pin']) || empty($_POST['id']))
    {
      echo ' Please Fill in the Blanks ';
    }
    else
    {
      $Email = $_POST['email'];
      $Password = $_POST['password'];
      $PinNumber = $_POST['pin'];
      $EmployeeID = $_POST['id'];

      $query = "insert into employee_id (email, password, pin_number, employee_information)
              values ('$Email', '$Password', '$PinNumber', '$EmployeeID')";
      $result = mysqli_query($conn, $query);

      if($result)
      {
        header("location:employeesigninview.php");
      }
      else
      {
        echo ' Please Check Your Query ';
      }
    }
  }
?>
