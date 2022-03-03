<?php
    include_once('config.php');

    $query = "SELECT productName FROM products WHERE inStock = 0 ORDER BY productName";

    $result = mysqli_query($conn, $query) or die("Execution failed");

    $tableCode = "<table border='1' name='products'>";
    $tableCode .= "<tr><th>Out of Stock</th></tr>";


    while($row = mysqli_fetch_assoc($result)) {
        $tableCode .= "<tr><th>". $row['productName'] . "</th> </tr>";
    }

    $tableCode .= "</table>";
    echo ($tableCode);
?>