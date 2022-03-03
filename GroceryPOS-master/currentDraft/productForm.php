<!-- Form which calls upon itself to refresh page -->
<form method="post" type="button" action="<?php echo $_SERVER['PHP_SELF'];?>">

    <!-- Page to decide which main category to be chosen -->
    Choose a Product Type:<?php include 'getProductByType.php'; ?>
    <br>

    <?php 
        // Triggered when a main category gets selected
        if(isset($_POST['submit'])){
            // Holds the value of the main category
            $productType = $_POST['productType'];
    ?>

    <!-- Page to decide which sub category to be chosen -->
    Choose a Product Sub Type <?php include 'getSubType.php'; } ?>
    <!-- Input button which generates specific table -->
    <input type="submit" name="submit" value="Submit Form">
    <br>
    
    <!-- Page that hold info for generation of table -->
    <?php include 'productTypeWithTable.php'; ?>
    <brb>

</form>

<!-- Functionality for adding items to a cart -->
<?php include('addCart2.php'); ?>
<?php include('removeCart.php'); ?>
<!-- Button which takes user to final sale page -->
<form action="finalSaleFront.php">
    <input type="submit" name="submit" value="Finalize Sale" />
</form>