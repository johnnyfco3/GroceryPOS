<br>
<?php

    include_once('config.php');
    // Joins product_inventory and cart tables in order to pull names and prices
    $query = "SELECT product_inventory.*, cart.qty FROM product_inventory 
              INNER JOIN cart ON product_inventory.product_id=cart.product_id";
    $result = mysqli_query($conn, $query) or die("Execution Failed");
	
    // completed cart is initialized
    $cartCode = "<table class='table' name='product'>";
    $cartCode .= "<tr> <th>Product Name</th> <th>Quantity</th> <th>Product Price</th> <th>Remove From Cart</th> </tr>";
    // initializing total and quantity
    $total = 0.00;
    $qtyTotal = 0;

    // Total cost is calculated and as well as quantity
    while($row = mysqli_fetch_assoc($result)) {
        $newCost = $row['qty'] * $row['unit_price'];
        $format = number_format($newCost, 2);
        $total = $total + $format;
        $qtyTotal = $qtyTotal + $row['qty'];
        $cartCode .= "<tr> <th>".$row['productName']."</th> <th>".$row['qty']."</th> <th>".$format."</th>
                      <th> <input type='submit' name='removeCart' value=".$row['product_id']."> </th> </tr>";
        $newCost = 0.00;
    }

    // completed cart is displayed as well as total cost
    echo($cartCode);
    echo("Total Amount: $");
    echo($total);
?>
<br>