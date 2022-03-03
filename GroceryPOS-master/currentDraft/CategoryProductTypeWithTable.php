<?php
    include_once('config.php');

    $query;
    if(isset($_GET['productSubType'])) {
        $query = "SELECT * FROM product_inventory WHERE productSubType = '".$_GET['productSubType']."' AND in_stock != 0 ORDER BY productName";
    }
    else if(isset($_GET['productType'])) {
        $query = "SELECT * FROM product_inventory WHERE productType = '".$_GET['productType']."' AND in_stock != 0 ORDER BY productName";
    } else 
        $query = "SELECT * FROM product_inventory WHERE in_stock != 0 ORDER BY productName";
    

    $result = mysqli_query($conn, $query) or die("Execution Failed");

    $tableCode = "<table border='1' name='product'>";
    $tableCode .= "<tr><th>Product Name</th> <th>Product Type</th> <th>Product Sub Type</th> <th>Price</th>  </tr>";

    while($row = mysqli_fetch_assoc($result)) {
        $tableCode .= "<tr> <th>".$row['productName']."</th> <th>".$row['productType']."</th> <th>"
        .$row['productSubType']."</th><th>".$row['unit_price']."</th></tr>";
    }
    $tableCode .= "</table>";
    echo ($tableCode);
    //include('addCart.php');
?>