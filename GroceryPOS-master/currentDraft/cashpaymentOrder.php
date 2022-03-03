<?php
    include('config.php');
    $query = "SELECT OTID FROM orders_ticket WHERE employee_id IS NULL";
    $result = mysqli_query($conn, $query) or die(" Execution Failed null address");
    $row = mysqli_num_rows($result);
    
    $OTID = "";
    while($row = mysqli_fetch_assoc($result))
    {
        $OTID = $row['OTID']; 
    }

    include('joinOrder.php');
        $tax = 0;
        $discount = 0;
        
        // tax selected for our region
        $query = "SELECT tax_rate FROM tax_table WHERE TTID='1'";
        $result = mysqli_query($conn, $query) or die("Execution Failed");
        
        while($row = mysqli_fetch_assoc($result))
        {
            $taxrate = $row['tax_rate'];
            $formatted = number_format($taxrate, 2);
            $taxrate = $formatted;
        }
        
        // subtotal saved
        $subTotal = $total;
        // new total is subtotal plus tax
        $total = $total + ($total * $taxrate);
        $total = number_format($total, 2);
        $tax = $total * $taxrate;
        $tax = number_format($tax, 2);
        
        echo("Total Amount: $");
        echo($total);
?>

<form method="post" type="button">
<br>
    <br>Cash Amount: <input type="text" name="cash">
    <input type='submit' name='change' value="Get Change"/><br>
        
        <?php
        // trigger to get back change
        if(isset($_POST['change']))
        {
            $change = $_POST['cash'] - $subTotal;
            $formatted = number_format($change, 2);
            ?>
            <br>
            <?php
            // output change
            echo('Change: $');
            echo($formatted);
        }
    ?>
        
    <input type='submit' name='final' value="Complete Order"/>
    <?php
        
        if(isset($_POST['final']))
        {
            $OTID = $_SESSION['OTID'];

            $query = "UPDATE orders_ticket SET date = CURRENT_DATE(), time = CURRENT_TIME(), quantity = '$qtyTotal', subtotal = '$subTotal', 
                    total = '$total', tax = '$tax', tax_rate = '$taxrate', cash = '$total', status = '0', employee_id = '".$_SESSION['emp_id']."' WHERE OTID = '$OTID'";
            $result = mysqli_query($conn, $query) or die("Order Ticket Failed");

            if($result)
            {
                header("location:purchaseorders.php");
            }   
        }       
    ?>