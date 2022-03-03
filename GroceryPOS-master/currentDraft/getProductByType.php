<?php
    // connects to our db
    include_once('config.php');
    // distinct allows it so that each category option, only appears once
    $query = "SELECT DISTINCT productType FROM product_inventory ORDER BY productType";
    $result = mysqli_query($conn, $query) or die("Execution failed");
    // begins the generation of options of categories to choose from
    $tableCode = "<select name='productType'>";
    while($row = mysqli_fetch_assoc($result)) {
        // initializes a variable for the chosen option 
        $isSelected = "";
        // if an option gets clicked(isset), as well as that option matching a category in the db
        // then that category gets chosen.
        if(isset($_POST['productType']) && $_POST['productType'] == $row['productType']) {
            $isSelected = "selected";
        }
        // select bar now displays category chosen
        $tableCode .= "<option value= ".$row['productType']." ".$isSelected.">".$row['productType']. "</option> \n ";
    }
    $tableCode .= "</select>";
    // display select bar with chosen option
    echo($tableCode);
?>