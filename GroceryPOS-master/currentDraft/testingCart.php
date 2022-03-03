<?php

    include('config.php');


    $CID = $_POST['userID']; // session id goes here
    //$UID = $_POST['userID'];
    $PID = $_POST['itemID'];
    $QTY = $_POST['qty'];


    $query = "INSERT INTO cart_inprogress (customer_id) VALUES ('$CID')";


    if(mysqli_query($conn,$query)){
        echo "New record";
    } else {
        echo "error";
    }


    //$query = "INSERT INTO cart_inprogress (customer_id) VALUES ('$_POST['userID']')";

    //if(mysqli_query($conn,$query)){
    //    echo "new record";
    //} else {
    //    echo "error";
   // }

    include("testGetData.php");

    $query = "INSERT INTO cart (CID, qty, product_id) VALUES ('$CID', '".$_POST['quantity']."','".$_POST['itemID']."' )";

?>