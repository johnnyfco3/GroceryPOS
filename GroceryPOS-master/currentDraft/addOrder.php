<form method="post" type="button" action="<?php echo $_SERVER['PHP_SELF'];?>">

    <?php 
    echo ($tableCode);
    include('emptyOrder.php');
    if(isset($_POST['addToOrder'])) {
        $OTID=$_SESSION['OTID'];

        $query = "SELECT * FROM orders WHERE OTID='$OTID' AND product_id = '".$_POST['addToOrder']."'";
        $result = mysqli_query($conn,$query);
        $rows = mysqli_num_rows($result);
        if($rows > 0) {
            $update = "UPDATE orders SET stock_amount = stock_amount + 1 WHERE product_id = '".$_POST['addToOrder']."' AND OTID='$OTID'";
            $result = mysqli_query($conn,$update);
        } else {
            $query = "INSERT INTO orders (OTID, stock_amount, product_id) VALUES ('$OTID', '1', '".$_POST['addToOrder']."')";
            $result = mysqli_query($conn, $query) or die(" Execution Failed addCart in addorder");
        }
    }
    include('joinOrder.php'); 

    ?>
</form>
<br>
<?php

?>