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

<br>

<form method="post" type="button">

    Choose a Payment Type:
    <select name="payment">
        <option value="Cash">Cash</option>
        <option value="Credit">Credit</option>
        <option value="Both">Cash and Credit</option>
    </select> <input type="submit" name ="submitPay" value="Payment Type"> <br><br>
    
    <?php
    
        if(isset($_POST['submitPay']))
        {
            $payType = $_POST['payment'];
            if($payType == "Cash")
            {
                header("location:cashpaymentOrder.php");
            }
            else if($payType == "Credit")
            {
                header("location:creditpaymentOrder.php");
            }
            else
            {
                header("location:bothpaymentOrder.php");
            }
        }
    ?>
            
<br>
</form>
