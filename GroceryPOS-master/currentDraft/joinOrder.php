<br>
<?php

    include_once('config.php');
    
    $cartCode = "<table border='1' name='product'>";
    $cartCode .= "<tr> <th>Product Name</th> <th>Quantity</th> <th>Product Price</th> </tr>";
        
    $query = "SELECT * FROM orders WHERE OTID = '$OTID'";
    $result = mysqli_query($conn, $query) or die("Execution Failed");
    $rows = mysqli_num_rows($result);
    
    if($rows=0)
    {

        $total = 0.00;
        $qtyTotal = 0;

        echo($cartCode);
        //echo("Total Amount: $");
        //echo($total);
    }
    else
    {
        $query = "SELECT product_inventory.productName, product_inventory.cost, orders.stock_amount, product_inventory.product_id FROM product_inventory 
                  LEFT JOIN orders ON product_inventory.product_id=orders.product_id WHERE OTID='$OTID'";
        $result = mysqli_query($conn, $query) or die("Execution Failed");
        $total = 0.00;
        $qtyTotal = 0;

        while($row = mysqli_fetch_assoc($result)) {
            $newCost = $row['stock_amount'] * $row['cost'];
            $format = number_format($newCost, 2);
            $total = $total + $format;
            $qtyTotal = $qtyTotal + $row['stock_amount'];
            $cartCode .= "<tr> <th>".$row['productName']."</th> <th>".$row['stock_amount']."</th> <th>".$format."</th> </tr>";
            $newCost = 0.00;
        }

        echo($cartCode);
        //echo("Total Amount: $");
        //echo($total);
    }
    
?>
<br>