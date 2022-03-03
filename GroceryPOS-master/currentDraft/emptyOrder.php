<?php
    if(isset($_POST['addToOrder'])) {
            $query = "SELECT OTID, vendor_id FROM orders_ticket WHERE employee_id IS NULL";
            $result = mysqli_query($conn, $query) or die(" Execution Failed null address");
            $row = mysqli_num_rows($result);
            $OTID = "";
            $vendor = "";
            while($row = mysqli_fetch_assoc($result)) {
                $OTID = $row['OTID']; 
                $vendor = $row['vendor_id'];
            }
            $_SESSION['OTID'] = $OTID;
            $_SESSION1 = $vendor;
        }
    
?>