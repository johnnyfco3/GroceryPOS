<?php
include_once('config.php');
include_once('sidebarconnect.php');

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>New Sale | MarketPOS</title>

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

    <!--nav sidebar-->
    <nav id="sidebar">
        <div class="sidebar-header bg-dark">
            <h1 id="brand"><span><a class="navbar-brand relative-top" href="indexDraft.php"><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-basket2-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M5.929 1.757a.5.5 0 1 0-.858-.514L2.217 6H.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h.623l1.844 6.456A.75.75 0 0 0 3.69 15h8.622a.75.75 0 0 0 .722-.544L14.877 8h.623a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1.717L10.93 1.243a.5.5 0 1 0-.858.514L12.617 6H3.383L5.93 1.757zM4 10a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm4-1a1 1 0 0 0-1 1v2a1 1 0 1 0 2 0v-2a1 1 0 0 0-1-1z" />
                        </svg>
                        <span style="color: #00b300"> Market</span>POS</a></h1>
        </div>

        <ul class="list-unstyled components">
            <li>
                <div id="usercard">
                    <a href="salescontrolpanel.php#switchreg" style="font-size: 1em;"><?php if ((isset($_SESSION['emp_id']))) echo $row['company_name'];
                                                                                        else  echo 'Company Name'; ?></br>
                        <?php if (isset($_SESSION['register'])) echo "Register " . $_SESSION['register'];
                        else  echo 'Choose Register'; ?> <svg width=".6em" height=".6em" viewBox="0 0 16 16" class="bi bi-caret-down-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                        </svg></a>
                </div>
            </li>
            <li>
                <a href="employeePinLogin.php" style="font-size: 1em;"><?php if ((isset($_SESSION['emp_id']))) echo "" . $row['first_name'] . " " . $row['last_name'] . " ";
                                                                        else echo "Current User"; ?><svg width=".6em" height=".6em" viewBox="0 0 16 16" class="bi bi-caret-down-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                    </svg></a>
            </li>
            <div class="justify-content-center" id="navline"></div>

            <li>
                <a href="accounthomeDraft.php">
                    <span style="padding:5px;">
                        <svg width=".8em" height=".8em" viewBox="0 0 16 16" class="bi bi-house-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                        </svg></span> Home</a>
            </li>
            <li class="active">
                <a href="salescontrolpanel.php">
                    <span style="padding:5px;">
                        <svg width=".8em" height=".8em" viewBox="0 0 16 16" class="bi bi-credit-card-2-back" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M14 3H2a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z" />
                            <path d="M11 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1zM1 9h14v2H1V9z" /></svg>
                    </span> Sales</a>
            </li>
            <li>
                <a href="inventorycontrol.php">
                    <span style="padding:5px;">
                        <svg width=".8em" height=".8em" viewBox="0 0 16 16" class="bi bi-inbox-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.98 4a.5.5 0 0 0-.39.188L1.54 8H6a.5.5 0 0 1 .5.5 1.5 1.5 0 1 0 3 0A.5.5 0 0 1 10 8h4.46l-3.05-3.812A.5.5 0 0 0 11.02 4H4.98zm-1.17-.437A1.5 1.5 0 0 1 4.98 3h6.04a1.5 1.5 0 0 1 1.17.563l3.7 4.625a.5.5 0 0 1 .106.374l-.39 3.124A1.5 1.5 0 0 1 14.117 13H1.883a1.5 1.5 0 0 1-1.489-1.314l-.39-3.124a.5.5 0 0 1 .106-.374l3.7-4.625z" />
                        </svg></span> Inventory</a>
            </li>
            <li>
                <a href="customercontrol.php">
                    <span style="padding:5px;">
                        <svg width=".8em" height=".8em" viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                        </svg></span> Customers</a>
            </li>
            <?php
            if (isset($_SESSION['emp_id']))
                if ($row['user_type'] == 1) {

                    echo "
          <li>
          <a href='employeecontrol.php'>
            <span style='padding:5px;'>
            <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-file-person-fill' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
            <path fill-rule='evenodd' d='M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11z'/>
          </svg></span> Employees</a>
        </li>
          <li>
            <a href='reportsControlPanel.php'>
              <span style='padding:5px;'>
                <svg width='.8em' height='.8em' viewBox='0 0 16 16' class='bi bi-clipboard-data' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
                  <path fill-rule='evenodd' d='M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z' />
                  <path fill-rule='evenodd' d='M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z' />
                  <path d='M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z' />
                </svg></span> Reports</a>
          </li>";
                }

            ?>


            </br></br></br></br>
            <li class="sidebar-footer">
                <div class="text-center" id="usercard">
                    <a role="button" href="<?php $_SESSION['url'] = "salescontrolpanel.php" ?> employeePinLogin.php"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-down-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z" />
                        </svg> Switch User</a>

                </div>

            </li>
            <li>
                <div class="card text-center" id="footerbtn" style="background: #016923;">
                    <a role="button" href="logout.php"> Logout</a>


                </div>
            </li>
        </ul>
        </div>
    </nav>

    <!--page content-->
    <div id="content">

        <!--
        <nav id="paymentbar">
            <div class="container-fluid">
                <ul class="list-unstyled components">
                    <li class="active">
                    <li>
                        Subtotal
                    </li>
                    </li>
                    <li>
                        Discounts
                    </li>
                    <li>
                        Tax
                    </li>
                    <div id="payline"></div>
                    <div class="sidebar-header">
                        <h5>Total <div id="total" style="float: right;"></div></h5>
                    </div>
                    <div id="payline"></div>
                    <div class="container text-center">
                
                        <button class="btn-lg btn-success navbar-btn" id="paybtn"> Payment</button></div>
                </ul>
            </div>
        </nav>
-->
        <!--location navbar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" id="locnav">
            <button type="button" id="sidebarCollapse" class="btn btn-success">
                <i class="fas fa-align-left"></i>
            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav mr-auto">
                    <a class="navbar-brand" href="salescontrolpanel.php"><svg width=".8em" height=".8em" viewBox="0 0 16 16" class="bi bi-credit-card-2-back" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M14 3H2a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z" />
                            <path d="M11 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1zM1 9h14v2H1V9z" />
                        </svg> Sales</a>
                </ul>
            </div>
        </nav>

        <nav class="navbar bg-dark" id="salespanel">
            <?php
            if (isset($_SESSION['custfirst'])) {
                echo "<form class='form-inline' method='post' action ='removecust.php'> <div 
				class='card ml-2' style='padding: 8px'>" . $_SESSION['custfirst'] . " " . $_SESSION['custlast'] . "</div>
                <div class='nav-item'><button action='index.php' class='btn navbar-btn'> Remove</button></div></form>";
		}else{
                    if (isset($_POST['scustomer'])) {
                        $ID = $_POST['scustomer'];
                        $cQuery = "SELECT * FROM customer_info WHERE customer_id LIKE '%$ID%'";
                        $cResult = mysqli_query($conn, $cQuery);
                        $cQueryRes= mysqli_num_rows($cResult);
                        if ($cQueryRes > 0) {
                            while ($crow = mysqli_fetch_assoc($cResult)) {
                                $first = $crow['first_name'];
								$first = mysqli_real_escape_string($conn,$first);
                                $last = $crow['last_name'];
								$last = mysqli_real_escape_string($conn,$last);
								$custID = $crow['customer_id'];
								$custID = mysqli_real_escape_string($conn,$custID);
								echo "<form class='form-inline'><div 
								class='card' style='padding: 8px'>" . $first . " " . $last . "</div>
                                <div class='nav-item'><button href='index.php' class='btn navbar-btn'> Remove</button></div></form>";
								$_SESSION['custfirst'] = $first;
								$_SESSION['custlast'] = $last;
								$_SESSION['CustID'] = $custID;

                            }
                        } 
                    }else {
                        echo "<form class='form-inline' method='post' action='customerview.php'><div class='card ml-2' style='padding: 8px'>No Customer Selected</div>
                        <div class='nav-item'>
                        <input class='form-control col-5' name='customer' placeholder='Search Customers' aria-label='Search'>
                        <button class='btn btn-light navbar-btn' name='sale-search'> Search</button></form>
                        <a href='customerindex.php' class='btn navbar-btn btn-success'> New</a></div>";
                }
            }
            ?>




        </nav>


        <nav class="navbar navbar-light" style="background-color: #e2e2e2;">
            <form class="form-inline" method="post" action="sale.php">
            <div class="nav-item">
                <input class="form-control" name="isearch" placeholder="Item Search" aria-label="Search">
                <button class="btn btn-dark navbar-btn" name="item-search"> Search</button>
            </form>
            
                <a href="newgiftcard.php" role="button" class="btn btn-light navbar-btn"> Gift Card</a>
            </div>


        </nav>

        <div class="mt-3">


            <table class="table table-striped table-responsive" id="salescontent">
                <thead>
                    <tr>
                        <th class="col-5 ml-auto">Description</th>
                        <th class="col-2">Price</th>
                        <th class="col-1 text-center">Quantity</th>
                        <th class="col-2 text-center">Tax</th>
                        <th class="col-2 text-center">Subtotal</th>
                    </tr>
                </thead>
                <tbody>

                    
                    <?php include('productForm.php') ?>

                    <?php
                    //if ($row['in_stock'] > 0){}
                    //}else{
                    //echo "<div>The item you searched for is not in stock</div>";

                    if (isset($_POST['additem'])) {
                        $search = $_POST['sproduct'];
                        $query = "SELECT * FROM product_inventory WHERE product_id LIKE '%$search%'";
                        $taxquery = "SELECT tax_rate FROM tax_table";
                        $result = mysqli_query($conn, $query);
                        $taxres = mysqli_query($conn, $taxquery);
                        $tax = mysqli_fetch_assoc($taxres);
                        $queryResults = mysqli_num_rows($result);
                        if ($queryResults > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr><td>" . $row['productName'] . "</td><td>" . $row['unit_price'] . "</td><td class='text-center'> 1 </td><td class='text-center'>"
                                    . number_format($row['unit_price'] * $tax['tax_rate'], 2) . "</td><td class='text-center'>" . number_format($row['unit_price'] * (1 + $tax['tax_rate']), 2)  . "</td></tr>";
                            }
                        } else {
                            echo "Problem adding item via Product ID";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <!--#e2e2e2-->


    </div>





    <!--END page content-->

    <script type="text/javascript">
        $(document).ready(function() {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });


            // event begins when the user releases the key
            $('#search').keyup(function() {

                // creates null result field
                $('#result').html('');
                // variable to hold search input
                var searchField = $('#search').val();
                // function that creates a variable which matches the search as a regular expression
                var expression = new RegExp(searchField, "i");
                // loads JSON file 
                $.getJSON('products.json', function(data) {
                    $.each(data, function(key, value) {
                        // .search to see if the string matches the expression
                        if (value.name.search(expression) != -1 || value.price.search(expression) != -1) {
                            // creates the list items which are the results from the search
                            $('#result').append('<li class="list-group-item link-class"> ' + value.name + ' | <span class="text-muted">' + value.price + '</span></li>');
                        }
                    });
                });
            });
            // event which replaces the search area with chosen result
            $('#result').on('click', 'li', function() {
                // seperates price with a vertical bar
                var click_text = $(this).text().split('|');
                // attatch bar
                $('#search').val($.trim(click_text[0]));
                // creates null result field
                $("#result").html('');
            });
        });

        //global variables for both the sum and table
        var totalSum = 0;

        var table = document.getElementById("salestable");
        //loop through table to add together the costs
        for (var i = 1; i < table.rows.length; i++) {
            totalSum = totalSum + parseFloat(table.rows[i].cells[1].innerHTML);
        }
        //function to display total price onclick
        function total() {
            document.getElementById("total").innerHTML = Math.round((totalSum + Number.EPSILON) * 100) / 100;
        }
    </script>
</body>

</html>