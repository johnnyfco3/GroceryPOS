<?php
    // check if there are any product id's in cart
    $query = "SELECT product_id FROM cart";
    $result = mysqli_query($conn, $query) or die(" Execution Failed add2Cart");
    $rows = mysqli_num_rows($result);
    // if records exist, do nothing
    if($rows > 0){
    // if no records exist (empty cart)
    } else {
        // triggered when an item gets added to cart
        if(isset($_POST['addToCart'])) {
            // initialize a new cart in progress by inserting a null customer to be updated later
            $query = "INSERT INTO cart_inprogress (customer_id, ticket_id) VALUES (NULL, NULL)";
            $result = mysqli_query($conn, $query) or die(" Execution Failed inprog");
            // save CID as a local variable
            $query = "SELECT CID FROM cart_inprogress WHERE customer_id IS NULL";
            $result = mysqli_query($conn, $query) or die(" Execution Failed null address");
            $row = mysqli_num_rows($result);
            // initialize CID variable
            $CID = "";
            while($row = mysqli_fetch_assoc($result)) {
                $CID = $row['CID']; 
            }
            // save stored CID value to session data
            $_SESSION['CID'] = $CID;
        }
    }
?>