<br>
<?php
    // display completed cart with saved variables
     include('joinCart.php');
?>

<br>
<!-- form to reload page with correct change -->
<form method="post" type="button" action="<?php echo $_SERVER['PHP_SELF'];?>">


    <?php include('payType.php') ?>
		
        <!-- Input for money recieved -->
        <br>Cash Amount: <input type="text" name="cash">
        <input type='submit' name='change' value="Get Change"/><br>
		
    <?php
            // initializing tax and discount data
            $tax = 0;
            $discount = 0;
            // tax selected for our region
            $query = "SELECT tax_rate FROM tax_table WHERE TTID='1'";
            $result = mysqli_query($conn, $query) or die("Execution Failed");
            while($row = mysqli_fetch_assoc($result)) {
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
            $credit = 0;
            $cash = 0;
            // trigger to get back change
            if(isset($_POST['change'])) {
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
    <br><br>

    <?php include('chooseCustomer.php')  ?>
    
    <br><br>
    <!-- Finalize Sale -->
    <input type='submit' name='final' value="Complete Sale"/>
    <br><bR>
</form>

<?php
    // triggered when finalize sale button is clicked
    if(isset($_POST['final'])) {
        // cart ID retrieved from cookie data
        $CID = $_SESSION['CID'];
		$empID = $_SESSION['emp_id'];
		$key = $_SESSION['custfirst'];
		$cquery = "SELECT customer_id FROM customer_info WHERE first_name LIKE '%$key%'";
		$cresult = mysqli_query($conn,$cquery);
		while($crow = mysqli_fetch_assoc($cresult)){
			$CustID = $crow['customer_id'];
			$CustID = mysqli_real_escape_string($conn,$CustID);
		}
        // create new ticket for sale
        $query = "INSERT INTO ticket_system (ticket_id, date, time, quantity, subtotal, total, cost, tax, tax_rate, cash, credit, cart_purchase, customer_id, employee_id)
                    VALUES ('$CID', CURRENT_DATE(), CURRENT_TIME(), '$qtyTotal', '$subTotal', '$total', '0', '$tax', '$taxrate', '$total', '$credit', '0','$CustID','$empID')";
        $result = mysqli_query($conn, $query) or die("Ticket Failed");
        
        // link new ticket to our cart in progress
        $update = "UPDATE cart_inprogress SET ticket_id = '$CID' WHERE CID='$CID'";
        $result = mysqli_query($conn, $update) or die("Insert Failed");

        $sql = "SELECT item_list.*, product_inventory.cost FROM item_list LEFT JOIN cart_inprogress ON
                    item_list.CID=cart_inprogress.CID LEFT JOIN ticket_system ON cart_inprogress.ticket_id=ticket_system.ticket_id 
                    LEFT JOIN product_inventory ON item_list.product_id=product_inventory.product_id WHERE item_list.CID='$CID'";
        $result = mysqli_query($conn, $sql) or die("Execution Failed cost");
        $cost = 0;
        while($row = mysqli_fetch_assoc($result)) {
            $cost += $row['cost'];
            $formatted = number_format($cost, 2);
            $cost = $formatted;
        }

        $update = "UPDATE ticket_system SET cost = '$cost' WHERE ticket_id='$CID'";
        $result = mysqli_query($conn, $update) or die("cost Failed");

        // send user back to the sale page
        if($result) 
        {
            $sql = "DELETE FROM cart";
            $result = mysqli_query($conn, $sql) or die("Insert Failed");
            echo "<script type='text/javascript'>document.location.href='receipts.php?Tic=".$CID."'</script>";
        }
    }             
?>