<?php
    include_once('config.php');

    if(isset($_POST['addToOrder'])) {
        include('emptyorder.php');
        $vendor = $_SESSION1;
        
        $query = "SELECT * FROM product_inventory WHERE vendor_id = '$vendor'";
        $result = mysqli_query($conn, $query) or die("Execution Failed");
        $tableCode = "<table border='1' name='product'>";
        $tableCode .= "<tr> <th>Product Name</th> <th>Product Type</th> <th>Product Sub Type</th> <th>Price</th> <th>Add to Order</th> </tr>";

        while($row = mysqli_fetch_assoc($result)) {
            $tableCode .= "<tr> <th>".$row['productName']."</th> <th>".$row['productType']."</th> <th>"
            .$row['productSubType']."</th><th>".$row['cost']."</th><th><input type='submit' name='addToOrder' value=".$row['product_id']."
            ></th> </tr>";
        }
        $tableCode .= "</table>";
    }
    else
    {
        $query = "SELECT * FROM product_inventory WHERE vendor_id = '$_SESSION1'";
        $result = mysqli_query($conn, $query) or die("Execution Failed");
        $tableCode = "<table border='1' name='product'>";
        $tableCode .= "<tr> <th>Product Name</th> <th>Product Type</th> <th>Product Sub Type</th> <th>Price</th> <th>Add to Order</th> </tr>";

        while($row = mysqli_fetch_assoc($result)) {
            $tableCode .= "<tr> <th>".$row['productName']."</th> <th>".$row['productType']."</th> <th>"
            .$row['productSubType']."</th><th>".$row['cost']."</th><th><input type='submit' name='addToOrder' value=".$row['product_id']."
            ></th> </tr>";
        }
        $tableCode .= "</table>";
        //echo ($tableCode);
        //include('addCart.php');
    }
?>