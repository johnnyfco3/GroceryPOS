<?php
include_once('config.php');
include_once('sidebarconnect.php');
$productType = '';
$query = "SELECT productType FROM product_inventory GROUP BY productType ORDER BY productType ASC";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($result)) {
    $productType .= '<option value="' . $row["productType"] . '">' . $row["productType"] . '</option>';
}
?>
<!DOCTYPE html>
<html>

<head>
    <!--bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--our css -->
    <link rel="stylesheet" href="userStyle2.css">
    <!--Scrollbar Custom css -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">

    <!--font awesome js -->
    <script defer src="js/solid.js"></script>
    <script defer src="js/fontawesome.js"></script>

    <!--jquery -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- bootstrap popper js-->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <br /><br />
    <div class="container" style="width:600px;">
        <select name="productType" id="productType" class="form-control action">
            <option value="">Select Product Type</option>
            <?php echo $productType; ?>
        </select>
        <br />
        <select name="productSubType" id="productSubType" class="form-control action">
            <option value="">Select Product Sub Type</option>
        </select>





    </div>
</body>

</html>

<script>
    $(document).ready(function() {
        $('.action').change(function() {
            if ($(this).val() != '') {
                var action = $(this).attr("id");
                var query = $(this).val();
                var result = '';
                if (action == "productType") {
                    result = 'productSubType';
                }
                $.ajax({
                    url: "getType.php",
                    method: "POST",
                    data: {
                        action: action,
                        query: query
                    },
                    success: function(data) {
                        $('#' + result).html(data);
                    }
                })
            }
        });
    });
</script>