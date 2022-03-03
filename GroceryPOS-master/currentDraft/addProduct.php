<?php
if(isset($_POST['submit'])) {
    include_once('config.php');
    $query = "INSERT INTO products(productName, productType, productSubType, price, inStock)
              VALUES ('".$_POST['n']."','".$_POST['t']."', '".$_POST['b']."', '".$_POST['p']."', '".$_POST['s']."')";
    if($conn->query($query) === TRUE) {
        echo "Product added";
    } else {
        echo "Error " .$query. "<br>" .$conn->error;
    }                                                                                                  
} else {
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="n">Product Name</label><br>
    <input name="n" id="n" type="text"><br><br>
    <label for="t">Product Type</label><br>
    <input name="t" id="t" type="text"><br><br>
    <label for="b">Product Sub-Type</label><br>
    <input name="b" id="b" type="text"><br><br>
    <label for="p">Product Price</label><br>
    <input name="p" id="p" type="text"><br><br>
    <label for="s">Product Ammount</label><br>
    <input name="s" id="s" type="text"><br><br>
    <input type="submit" name="submit" value="Submit New Product">
</form>
<?php
}
?>