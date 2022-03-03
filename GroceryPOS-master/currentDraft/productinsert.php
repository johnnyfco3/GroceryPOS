<?php
  include_once('config.php');

  if(isset($_POST['submit']))
  {
      $Brand = $_POST['brand'];
      $Description = $_POST['description'];
      $ProductName = $_POST['pname'];
      $ProductType = $_POST['ptype'];
      $ProductSubtype = $_POST['psub'];
      $UnitPrice = $_POST['unit'];
      $Cost = $_POST['cost'];
      $InStock = $_POST['stock'];
      $Vendor = $_POST['vendor'];

      $query = "insert into product_inventory (brand, description, productName, productType, productSubType, unit_price, cost, in_stock, vendor_id)
              values ('$Brand', '$Description', '$ProductName', '$ProductType', '$ProductSubtype', '$UnitPrice', '$Cost', '$InStock','$Vendor')";

      $result = mysqli_query($conn, $query);

      if($result)
      {
        header("location:productview.php");
      }
      else
	  {
		  echo 'Not Inserted';
      }
	  header("refresh:2; url=productindex.php");
    }
?>
