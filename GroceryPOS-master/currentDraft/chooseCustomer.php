
Choose a Customer: 
<?php

    include_once('config.php');

    $query = "SELECT DISTINCT email FROM customer_info ORDER BY email";
    $result = mysqli_query($conn, $query) or die("Execution failed");
   
    $tableCode = "<select name='custEM'>";
    while($row = mysqli_fetch_assoc($result)) {
   
        $isSelected = "";
        if(isset($_POST['email']) && $_POST['email'] == $row['email']) {
            $isSelected = "selected";
        }
        
        $tableCode .= "<option value= ".$row['email']." ".$isSelected.">".$row['email']. "</option> \n ";
    }
    $tableCode .= "</select>";
    
    echo($tableCode);
?>
<br>
<?php
    if(isset($_POST['submit'])){
        $name = $_POST['custEM'];
        echo($name);
    }

?>
    
<br>