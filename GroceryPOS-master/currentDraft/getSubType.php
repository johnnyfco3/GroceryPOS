<?php
    include_once('config.php');
    // selects only distince sub categories from database
    $query = "SELECT DISTINCT productSubType FROM product_inventory WHERE productType = '".$productType."' ORDER BY productSubType";
    $result = mysqli_query($conn, $query) or die("Execution failed");
    // generates select table for sub categories
    $tableCode = "<select name='productSubType'>";
    while($row = mysqli_fetch_assoc($result)) {
        $isSelected = "";
        if(isset($_POST['productSubType']) && $_POST['productSubType'] == $row['productSubType']) {
            $isSelected = "selected";
        }
        $tableCode .= "<option value= ".$row['productSubType']." ".$isSelected.">".$row['productSubType']. "</option> \n ";
    }
    $tableCode .= "</select>";
    // Displays select bar with chosen sub category
    echo($tableCode);    
?>