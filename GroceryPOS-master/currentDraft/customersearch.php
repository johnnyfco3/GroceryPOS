<?php
include_once ('config.php');
$query = "SELECT * FROM customer_info";
$result = mysqli_query($conn, $query);

                if(isset($_POST['submit-search'])){
                    $search = mysqli_real_escape_string($conn, $_POST['customer']);
                    $sql = "SELECT * FROM customer_info WHERE first_name LIKE '%$search%'AND last_name LIKE '%$search%' OR phone_number LIKE '%$search%' OR email LIKE '%$search%'";
                    $result = mysqli_query($conn, $sql);
                    $queryResults = mysqli_num_rows($result);

                    if ($queryResults > 0){
                      while ($row = mysqli_fetch_assoc($result)) {
                        echo "<div class='card mt-5 card-body bg-light'><tr><td>".$row['customer_id']."</td><td>"
                        .$row['first_name']."</td><td>".$row['last_name']."</td><td>".$row['phone_number']. "</td><td>"
                        .$row['email']."</td><td>".$row['password']."</td><td>".$row['rewards']."</td><td><a class='btn navbar-btn btn-dark' role='button' href='customerdelete.php?Del="
                        .$row['customer_id']."'>Delete</a></td></tr></div>";
                      }
                    
                    } else{
                        echo "There are no results matching your search";
                    }
                    echo $queryResults;
                }
?>
