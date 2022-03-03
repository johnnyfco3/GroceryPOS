<?php
include_once ('config.php');

  if(!$con)
  {
    echo 'Not Connected To Server';
  }

  if(!mysqli_select_db($con, 'GroceryStore'))
  {
    echo 'Database Not Selected';
  }

  if(isset($_POST['submit']))
  {
    if(empty($_POST['year']) || empty($_POST['state']) || empty($_POST['county']) || empty($_POST['city']) || empty($_POST['tax']))
    {
      echo ' Please Fill in the Blanks ';
    }
    else
    {
      $TaxYear = $_POST['year'];
      $StateRate = $_POST['state'];
      $CountyRate = $_POST['county'];
      $CityRate = $_POST['city'];
      $TaxRate = $_POST['tax'];

      $query = "insert into tax_table (tax_year, state_rate, county_rate, city_rate, tax_rate)
              values ('$TaxYear', '$StateRate', '$CountyRate', '$CityRate', '$TaxRate')";

      $result = mysqli_query($conn, $query);

      if($result)
      {
        header("location:taxview.php");
      }
      else
      {
        echo ' Please Check Your Query ';
      }
    }
  }
?>
