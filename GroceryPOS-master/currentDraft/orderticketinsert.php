<?php
    if(isset($_POST['addToOrder'])) {
    }
    else{
    $query = "INSERT INTO orders_ticket (employee_id, vendor_id) VALUES (NULL, '".$_POST['vendorid']."')";
    $result = mysqli_query($conn, $query) or die(" Execution Failed inprog");
    
    
        $query = "SELECT OTID, vendor_id FROM orders_ticket WHERE employee_id IS NULL";
        $result = mysqli_query($conn, $query) or die(" Execution Failed null address in orderticketinsert");

    while($row = mysqli_fetch_assoc($result)) {
        $OTID = $row['OTID'];
        $_SESSION = $OTID;
        $vendor = $row['vendor_id'];
        $_SESSION1 = $vendor;
    }
    
    //$query = "INSERT INTO orders (OTID) VALUES ('$OTID')";
    //$result = mysqli_query($conn, $query) or die("Order Ticket insert Failed");
}


?>