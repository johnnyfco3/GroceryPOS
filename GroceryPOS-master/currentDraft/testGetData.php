<?php

    include('config.php');

    $UID = $_POST['userID'];
    $CID;

    $query = "SELECT CID FROM cart_inprogress WHERE custormer_id=".$UID;


    $result = mysqli_query($conn, $query) or die("Execution failed");

    while($row = mysqli_fetch_assoc($result)){
        $CID = $row['CID'];
    }
?>