<form method="post" type="button" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <?php    
        if(isset($_POST['removeCart'])) {   
            $query = "SELECT CID FROM cart_inprogress WHERE customer_id IS NULL";
            $result = mysqli_query($conn, $query) or die(" Execution Failed null address");
            $row = mysqli_num_rows($result);
            // initialize CID variable
            $CID = "";
            while($row = mysqli_fetch_assoc($result)) {
                $CID = $row['CID']; 
            } 
            $query = "DELETE FROM cart WHERE product_id = '".$_POST['removeCart']."'";
            $result = mysqli_query($conn,$query) or die("Remove Failed");
            
            $query = "DELETE FROM item_list WHERE product_id = '".$_POST['removeCart']."' AND CID = '$CID'";
            $result = mysqli_query($conn,$query) or die("Remove Failed");

            if($result)
            {
                echo "<script type='text/javascript'>document.location.href='sale.php';</script>";
            }
        }
    ?>
</form>