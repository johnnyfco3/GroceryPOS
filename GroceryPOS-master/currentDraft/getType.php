<?php
    echo('debug');
    // connect to DB
    include_once('config.php');
     // initialize the output for the sub categories
     $output = '';
    // POST trigger for when selection gets chosen
    if(isset($_POST["action"])) {

        // triggered when a product type is selected
        if($_POST["action"] == "productType") {

            // query to the database to grab sub categories from chosen product type
            $query = "SELECT DISTINCT productSubType FROM product_inventory WHERE productType = '".$_POST["query"]."' GROUP BY productSubType";
            $result = mysqli_query($conn, $query);
            //$output .= '<option value="">Select Product Subtype</option>';
            
            // assign selection options from sub categories
            while($row = mysqli_fetch_array($result)) {
                $output .= '<option value="'.$row["productSubType"].'">'.$row["productSubType"].'</option>';
                echo $output;
                echo('debug');
            }
        }
    echo('debug two');
        // output sub categories
        //echo $output;
    }
        // POST trigger when a sub category gets chosen
        if($_POST["action"] == "productSubType") {

            // query to get all products from chosen sub category
            $query = "SELECT DISTINCT FROM product_inventory WHERE productSubType = '".$_POST["action"]."' AND in_stock != 0 ORDER BY productName";
            $result = mysqli_query($conn, $query) or die("Execution Failed");

            // table to display products
            $tableCode = "<table border='1' name='product'>";
            $tableCode .= "<tr> <th>Product Name</th> <th>Product Type</th> <th>Product Sub Type</th> <th>Price</th> <th>Add to Cart</th> </tr>";

            // display query in table
            while($row = mysqli_fetch_assoc($result)) {
                $tableCode .= "<tr> <th>".$row['productName']."</th> <th>".$row['productType']."</th> <th>".$row['productSubType']."</th><th>".$row['unit_price']."</th><th><input type='submit' name='submit' value='Add'></th> </tr>";
            }
        
            // output table
            $tableCode .= "</table>";
            echo ($tableCode);

        }
        echo('debug3');
    //}
?>
