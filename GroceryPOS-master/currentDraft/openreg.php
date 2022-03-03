<?php
  include_once('config.php');

  if(isset($_POST['submitcount'])){
      $opentotal = $_POST['open_total'];
      $employeeid = $_POST['employee_id'];


      $query = "INSERT into registers_table (open_total, employee_id)
              values ($opentotal', '$employeeid')";

      $result = mysqli_query($conn, $query);

      if($result)
      {
          header("location:salescontrolpanel.php");
      }
      else
      {
        echo ' Please Check Your Query ';
      }
  }
?>