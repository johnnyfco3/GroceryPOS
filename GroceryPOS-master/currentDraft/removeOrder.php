<form method="post" type="button" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <?php    
        if(isset($_POST['removeOrder'])) {  
            echo 'here1'; 
            $query = "SELECT OTID FROM orders_ticket WHERE employee_id IS NULL";
            $result = mysqli_query($conn, $query) or die(" Execution Failed null address");
            $row = mysqli_num_rows($result);
            $OTID = "";
            while($row = mysqli_fetch_assoc($result))
            {
                $OTID = $row['OTID']; 
            }
            $query = "DELETE FROM orders WHERE product_id = '".$_POST['removeOrder']."' AND OTID = '$OTID'";
            $result = mysqli_query($conn,$query) or die("Remove Failed");

            if($result)
            {
                echo 'here';
                echo "<script type='text/javascript'>document.location.href='emptyOrder.php';</script>";
            }
        }
    ?>
</form>