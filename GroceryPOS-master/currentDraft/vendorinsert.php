<?php
  include_once('config.php');
  include_once('sidebarconnect.php');


  if(isset($_POST['submit']))
  {
      $Company = $_POST['name'];
      $Dept = $_POST['department'];
      $StreetAddress = $_POST['street'];
      $City = $_POST['city'];
      $State = $_POST['state'];
      $Zip = $_POST['zip'];
      $Phone = $_POST['phone'];
      $Fax = $_POST['fax'];
      $Email = $_POST['email'];

      $query = "INSERT into vendorinfo (company_name, department, street_address, city, state, zip_code, phone_number, fax_number, email)
              values ('$Company', '$Dept', '$StreetAddress', '$City', '$State', '$Zip', '$Phone', '$Fax', '$Email')";
      $result = mysqli_query($conn, $query);

      if($result)
      {
        header("location:vendorview.php");
      }
      else
      {
        echo ' Please Check Your Query ';
      }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>

   <!--bootstrap css -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
  <!--our css -->
  <link rel="stylesheet" href="userStyle2.css">
  <!--jquery scrollbar css -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">

  <!--font awesome js -->
  <script defer src="js/solid.js"></script>
  <script defer src="js/fontawesome.js"></script>

  <!--jquery -->
  <script src="js/jquery-3.5.1.min.js"></script>
  <!-- bootstrap popper js-->
  <script src="js/popper.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
  
</body>
</html>