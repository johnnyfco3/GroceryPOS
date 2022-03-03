<form method="get" type="button" action="<?php echo $_SERVER['PHP_SELF'];?>">

    <?php //include 'productview.php'; ?>   

    <?php include 'getProductByType.php'; ?>

    <input type="submit" name="submit" value="Get This Category">

    <br>

    <?php 
        if(isset($_GET['submit'])){
            //$productType = $_GET['productType'];
            include 'getSubType.php';
        }
    ?>

    <input type="submit" name="submitsub" value="Get This Sub Category">

    <?php 
        if(isset($_GET['submitsub'])){
            include 'productTypeWithTable.php';
        }
    ?>

</form>