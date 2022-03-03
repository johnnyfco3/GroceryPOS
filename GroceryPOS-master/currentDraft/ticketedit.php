<html>
<head>
  <title>Document</title>
</head>
<body>
  <h3 > Update Form in PHP </h3>
    <form action="" method="post">
      <input type="number" placeholder=" Enter Ticket ID " name="id" step="1"/>
      <input type="date" placeholder=" Date " name="date">
      <input type="text" placeholder=" Time " name="time">
      <input type="text" placeholder=" Company Name " name="comp">
      <input type="text" placeholder=" qty " name="qty">
      <input type="number" placeholder=" Subtotal " name="sub" step="0.01">
      <input type="number" placeholder=" Total " name="total" step="0.01">
      <input type="number" placeholder=" Discount " name="total" step="0.01">
      <input type="number" placeholder=" Tax " name="tax" step="0.01">
      <input type="number" placeholder=" Tax Rate " name="rate" step="0.01">
      <input type="number" placeholder=" Employee ID " name="eid" step="1">
      <input type="number" placeholder=" Customer ID " name="isid" step="1">
      <input type="submit" name="update" value="UPDATE"/>
    </form>
</body>
</html>
<?php
include_once ('config.php');

if(isset($_POST['update']))
{
  $id = $_POST['id'];

  $query = "update ticket_system set date = '$_POST[date]', company_name = '$_POST[comp]', time = '$_POST[time]', quantity = '$_POST[qty]', 
  subtotal = '$_POST[sub]', total = '$_POST[total]', tax = '$_POST[tax]', tax_rate = '$_POST[rate]', employee_id = '$_POST[eid]', customer_id = '$_POST[isid]' where ticket_id ='$_POST[id]'";
  $result = mysqli_query($conn,$query);

  if($result)
  {
    echo ' All good ';
  }
  else
  {
    echo ' Please Check Your Query ';
  }
}
?>
