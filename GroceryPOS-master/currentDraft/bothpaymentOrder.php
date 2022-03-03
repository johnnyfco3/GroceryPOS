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
        $cash=0;
        $credit=0;
        
        echo("Total Amount: $");
        echo($total);
?>
<form method="post" type="button">
<br>
    <br>Cash Amount: <input type="text" name="cash">
    <input type='submit' name='amount' value="Submit Cash"/><br>

    <?php
        // trigger to get back change
        if(isset($_POST['amount']))
        {
            $cash = $_POST['cash'];
            $amount = $total - $cash;
            $credit = number_format($amount, 2);

            ?>
            <br>
            <?php
            // output change
            echo('Total: $');
            echo($credit);

            $OTID = $_SESSION['OTID'];

            $query = "UPDATE orders_ticket SET  cash = '$cash', credit = '$credit' WHERE OTID = '$OTID'";
            $result = mysqli_query($conn, $query) or die("Order Ticket cash and credit insert Failed");

            ?>
            Name on Card <input type="text" placeholder=" Full name " name="name">
            Card Number <input type="text" placeholder=" Card Number " name="cnumber">
            Expiration Date <input type="text" pattern = "mm/yyyy" placeholder=" mm/yyyy " name="date">
            CVV Code <input name="code">
            Billing Address <input type="text" placeholder=" Street Address " name="addy">
            Suite or APT.# <input placeholder=" Suite or apt.# " name="apt">
            Country <input type="text" placeholder=" Country " name="country">
            City <input type="text" placeholder=" City " name="city">
            State <input type="text" placeholder=" -- " name="state">
            Zip Code <input type="text" placeholder=" Zip Code " name="zip">
        <?php
    }
    ?>
        
    <input type='submit' name='final' value="Complete Order"/>
    <?php
        
        if(isset($_POST['final']))
        {
            $OTID = $_SESSION['OTID'];

            $query = "UPDATE orders_ticket SET date = CURRENT_DATE(), time = CURRENT_TIME(), quantity = '$qtyTotal', subtotal = '$subTotal', 
                    total = '$total', tax = '$tax', tax_rate = '$taxrate', status = '0', employee_id = '".$_SESSION['emp_id']."' WHERE OTID = '$OTID'";
            $result = mysqli_query($conn, $query) or die("Order Ticket Failed");

            if($result)
            {
                header("location:purchaseorders.php");
            }  
        }  
             
    ?>
</form>