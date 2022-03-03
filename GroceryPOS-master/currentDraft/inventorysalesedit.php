<html>
<head>
  <title>Document</title>
</head>
<body>
  <h3 > Update Form in PHP </h3>
    <form action="" method="post">
      <input type="number" placeholder=" Enter Inventory Sales ID " name="id" step="1"/>
      <input type="number" placeholder=" Enter Ticket ID " name="tid" step="1"/>
      <input type="number" placeholder=" Enter Product ID " name="pid" step="1"/>
      <input type="number" placeholder=" QTY " name="qty" step="1"/>
      <input type="number" placeholder=" Unit Price " name="unit" step="0.01"/>
      <input type="text" placeholder=" Discount " name="discount"/>
      <input type="submit" name="update" value="UPDATE"/>
    </form>
</body>
</html>
<?php
include_once ('config.php');

if(isset($_POST['update']))
{
  $id = $_POST['id'];

  $query = "update inventory_sales set ticket_id = '$_POST[tid]', product_id = '$_POST[pid]', qty = '$_POST[qty]', unit_price = '$_POST[unit]', discount = '$_POST[discount]' where ISID ='$_POST[id]'";
  $result = mysqli_query($conn,$query);

  if($result)
  {
    header("location:inventorysalesview.php");
  }
  else
  {
    echo ' Please Check Your Query ';
  }
}
?>
