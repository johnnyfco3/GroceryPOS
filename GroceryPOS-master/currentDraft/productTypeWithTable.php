<?php
    include_once('config.php');
    // initializes query variable
    $query;
    // If a sub category gets selected
    if(isset($_POST['productSubType'])) {
        // select info that matches the sub category option and in stock
        $query = "SELECT * FROM product_inventory WHERE productSubType = '".$_POST['productSubType']."' AND in_stock != 0 ORDER BY productName";
    }
    // If a main category gets selected
    else if(isset($_POST['productType'])) {
        // select info that matches the main category option and in stock
        $query = "SELECT * FROM product_inventory WHERE productType = '".$_POST['productType']."' AND in_stock != 0 ORDER BY productName";
    // If no option gets chosen
    } else 
        // select every product to display thats in stock
        $query = "SELECT * FROM product_inventory WHERE in_stock != 0 ORDER BY productName";
    $result = mysqli_query($conn, $query) or die("Execution Failed");

    // generation of table code
    $tableCode = "<table class='table table-sm' name='product'>";
    // generation of table headers
    $tableCode .= "<tr> <th>Product Name</th> <th>Product Sub Type</th> <th>Price</th> <th>Add to Cart</th> </tr>";

    // loop throguh collected results and append corresponding information
    while($row = mysqli_fetch_assoc($result)) {
        $tableCode .= "<tr> <th>".$row['productName']."</th>  <th>"
        .$row['productSubType']."</th><th>".$row['unit_price']."</th><th><input type='submit' name='addToCart' value=".$row['product_id']."
        ></th> </tr>";
    }
    // close table code
    $tableCode .= "</table>";
?>