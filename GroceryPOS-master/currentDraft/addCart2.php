<!-- Form to reload the page when a new item gets added to cart (Version 2) -->
<form method="post" type="button" action="<?php echo $_SERVER['PHP_SELF'];?>">

<?php 
    // display product info from chosen categories
    echo ($tableCode);
    // functionality for an initially empty cart
    include('emptyCart.php');

    // Trigger for when an item gets added to cart from tableCode
    if(isset($_POST['addToCart'])) {
        // Take current cart in progress id from cookie data
        $CID = $_SESSION['CID'];
        // Search for items that match the selected product
        $query = "SELECT * FROM cart WHERE product_id = '".$_POST['addToCart']."'";
        $result = mysqli_query($conn,$query);
        $rows = mysqli_num_rows($result);
        // if there are matched to the record
        if($rows > 0) {
            // update the database so now there is one more
            $update = "UPDATE cart SET qty = qty + 1 WHERE product_id = '".$_POST['addToCart']."'";
            $result = mysqli_query($conn,$update);
            // retrieve guantity and id's from cart and save to variables
            $selection = "SELECT cart.CID, cart.qty, cart.product_id FROM cart WHERE product_id = '".$_POST['addToCart']."'";
            $result = mysqli_query($conn,$selection);
            while ($row = mysqli_fetch_assoc($result)) {
                $CID1 = $row['CID'];
                $qty = $row['qty'];
                $product = $row['product_id'];
                }
            // items placed into item_list
            $sql = "INSERT INTO item_list (CID, qty, product_id) VALUES ('$CID1', '$qty','$product')";
            $result = mysqli_query($conn,$sql);
        // if there are no matching records
        } else {
            // insert new item into cart
            $query = "INSERT INTO cart (product_id, qty, CID) VALUE ('".$_POST['addToCart']."', '1', $CID)";
            $result = mysqli_query($conn, $query) or die(" Execution Failed addCart");
            // retrieve guantity and id's from cart and save to variables
            $selection = "SELECT cart.CID, cart.qty, cart.product_id FROM cart WHERE product_id = '".$_POST['addToCart']."'";
            $result = mysqli_query($conn,$selection);
            while ($row = mysqli_fetch_assoc($result)) {
                $CID1 = $row['CID'];
                $qty = $row['qty'];
                $product = $row['product_id'];
                }
            // items placed into item_list
            $sql = "INSERT INTO item_list (CID, qty, product_id) VALUES ('$CID1', '$qty','$product')";
            $result = mysqli_query($conn,$sql);
        }
    }
    // includes functionality to form the completed cart
    include('joinCart.php'); 
    ?>
</form>