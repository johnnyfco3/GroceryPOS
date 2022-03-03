<?php
   /* include_once('config.php');
    $query = "SELECT * FROM inventory_sales ORDER BY product_id";

    $result = mysqli_query($conn, $query) or die("Execution Failed");

    $id = array();
    $qty = array(); 

    while($row = mysqli_fetch_assoc($result)) {
        if($row['product_id'])
            $id[] = $row['product_id'];
        if($row['qty'])
            $qty[] = $row['qty'];
    }

    var_dump($id);
?><br><?php var_dump($qty); ?><br>

<?php
    $name = array();
    foreach($id as $value){
        $assoc = "SELECT DISTINCT productName FROM product_inventory WHERE product_id = '".$value."' ";
        $result = mysqli_query($conn, $assoc) or die("Execution failed");
        $row = mysqli_fetch_assoc($result);
        //$name[] = $row;

        while($row = mysqli_fetch_assoc($result)) {
            echo($row['productName']);
        }
    }
    //foreach($name as $value){
        //echo($value);
    //}


    //var_dump($name);
    //print_r($name);*/


    include_once('config.php');
    $query = "SELECT product_inventory.productName FROM product_inventory";
?>