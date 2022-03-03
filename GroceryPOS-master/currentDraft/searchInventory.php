<?php 
    // connection to database
    include_once('config.php');
    

    class Product {
        public $qrCode;
        public $serialNumber;
        public $make;
        public $modelNumber;
        public $modelName;
        public $description;
        public $linkSupplierData;
        public $cost;
        public $sellingPrice;
        public $msrp;
        public $inStock;
        public $reOrder;
        public $baseStock;

        function __construct($qrCode,$serialNumber,$make,$modelNumber,$modelName,
                             $description,$linkSupplierData,$cost,$sellingPrice,
                             $msrp,$inStock,$reOrder,$baseStock) {
           
        }

        function set_modelname($modelName) {
            $this->modelName = $modelName; 
        }

        function get_modelname() {
            return $this->modelName;
        }
    }


    //global variables
    $search = "";
    $model_name = "";

    // Form calls on the current page
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Run this php if Search button is pushed
        if(isset($_GET['Search'])) {
            // Grabs input from the "Search Products" text field
            $searchQuery = $_GET['searchProducts'];
            // Searches database for names like the input
            $query = mysqli_query($conn, "SELECT model_name FROM product_inventory WHERE model_name = '$search' ");
            // Get number of matches
            $queryResult = mysqli_num_rows($query);
            // Makes sure the number of matches is greater then 0
            if($queryResult != 0) {
                // Search through table for match
                while($queryResult = mysqli_fetch_assoc($query)){
                    $model_name = $queryResult['model_name'];
                    $model_name = mysqli_real_escape_string($conn,$model_name);
                    // Output the match from the database
                    echo "<div> <p>" .$queryResult['model_name']. "</p> </div>";
                }
                $_SESSION["model_name"] = $model_name;
            } else {
                // Let us know if no matches
                echo "no matching results";
            }}

           /* // Output amount of results
            echo "There are " .$queryResult. " results.";
            // Output the match from the database
            echo "<div> <p>" .$row['model_name']. "</p> </div>";*/
    }    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Search Function for POS</title>
    </head>
    <body>
    <div align="center">
        <form action="searchInventory.php" method="post">
            <input type="text" name="searchProducts" placeholder="Search Products"/>
            <input type="submit" name="Search"/> 
        </form>
        <p> <?php echo $model_name  ?> </p>
    </div>
    </body>
</html>