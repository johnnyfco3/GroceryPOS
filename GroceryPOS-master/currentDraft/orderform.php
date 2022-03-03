<form method="get" type="button" action="<?php echo $_SERVER['PHP_SELF'];?>">

    
    <?php include 'productTypeWithTable2.php'; ?>

</form>

<?php include('addOrder.php');?>

<form action="finalSaleOrder.php">
    <input type="submit" name="submit" value="Finalize Order" />
</form>