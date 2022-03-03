<?php
include_once('config.php');
include_once('sidebarconnect.php');
if (isset($_GET['Tic'])) {
    $findID = $_GET['Tic'];
    $append = "WHERE ticket_system.ticket_id = $findID";
}
else{
    $append = "";
}
$sql = "SELECT ticket_system.*, product_inventory.productName, product_inventory.unit_price, product_inventory.productType, item_list.qty, employee_info.first_name FROM ticket_system
      LEFT JOIN cart_inprogress ON ticket_system.ticket_id=cart_inprogress.CID LEFT JOIN item_list ON cart_inprogress.CID=item_list.CID
      LEFT JOIN product_inventory ON item_list.product_id=product_inventory.product_id LEFT JOIN employee_info ON ticket_system.employee_id=employee_info.employee_id $append";
$q_result = mysqli_query($conn, $sql);
$num_rows = mysqli_num_rows($q_result);
if ($num_rows){
    $t_row = mysqli_fetch_assoc($q_result);
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Reports | MarketPOS</title>


    <!--bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--our css -->
    <link rel="stylesheet" href="userStyle2.css">
    <!--Scrollbar Custom css -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!--bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap-datepicker3.css">


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
                    <a href="salescontrolpanel.php#switchreg" style="font-size: 1em;" data-toggle="modal" data-target="#switchreg"><?php if ((isset($_SESSION['emp_id']))) echo $row['company_name'];
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
    <!--END nav sidebar-->

    <!--page content-->
    <div id="content">


        <!--location navbar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" id="locnav">
            <div class="container-fluid">

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
            </div>
        </nav>
        <!--END location navbar-->

        <div class="container">
            <!--control buttons-->
      <div class="card-deck ml-3 mt-5 pt-3">

        <a class="btn" href="" onclick="window.print()">
          <div class="card" id="pagecard">
            <div class="card-body text-center">
              <span class="card-text">
                <h5 class="card-title"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-printer-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5z"/>
                <path fill-rule="evenodd" d="M11 9H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"/>
                <path fill-rule="evenodd" d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                </svg></h5>
                Print Receipt
              </span>
            </div>
          </div>
        </a>

        <a class="btn" href="mailto:customer@email.com" target="_blank">
          <div class="card" id="pagecard">
            <div class="card-body text-center">
              <span class="card-text">
                <h5 class="card-title"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-reply" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M9.502 5.013a.144.144 0 0 0-.202.134V6.3a.5.5 0 0 1-.5.5c-.667 0-2.013.005-3.3.822-.984.624-1.99 1.76-2.595 3.876C3.925 10.515 5.09 9.982 6.11 9.7a8.741 8.741 0 0 1 1.921-.306 7.403 7.403 0 0 1 .798.008h.013l.005.001h.001L8.8 9.9l.05-.498a.5.5 0 0 1 .45.498v1.153c0 .108.11.176.202.134l3.984-2.933a.494.494 0 0 1 .042-.028.147.147 0 0 0 0-.252.494.494 0 0 1-.042-.028L9.502 5.013zM8.3 10.386a7.745 7.745 0 0 0-1.923.277c-1.326.368-2.896 1.201-3.94 3.08a.5.5 0 0 1-.933-.305c.464-3.71 1.886-5.662 3.46-6.66 1.245-.79 2.527-.942 3.336-.971v-.66a1.144 1.144 0 0 1 1.767-.96l3.994 2.94a1.147 1.147 0 0 1 0 1.946l-3.994 2.94a1.144 1.144 0 0 1-1.767-.96v-.667z" />
                  </svg></h5>
                Email Receipt
              </span>
            </div>
          </div>
        </a>

        <a class="btn" href="<?php $_SESSION['url'] = "sale.php" ?> employeePinLogin.php">
          <div class="card" id="pagecard">
            <div class="card-body text-center">
              <span class="card-text">
                <h5 class="card-title"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-cart-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM4 14a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm7 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                  </svg></h5>
                New Sale
              </span>
            </div>
          </div>
        </a>
      </div>
            <div class="row content">
                <div class="col-4 text-left">
                    <div class="print card bg-white pt-5" style="width: 500px; margin-left: 75px ;margin-top: 50px;">
                        <div class="card-title text-center pt-2">
                            <h1 id="brand"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-basket2-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.929 1.757a.5.5 0 1 0-.858-.514L2.217 6H.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h.623l1.844 6.456A.75.75 0 0 0 3.69 15h8.622a.75.75 0 0 0 .722-.544L14.877 8h.623a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1.717L10.93 1.243a.5.5 0 1 0-.858.514L12.617 6H3.383L5.93 1.757zM4 10a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm4-1a1 1 0 0 0-1 1v2a1 1 0 1 0 2 0v-2a1 1 0 0 0-1-1z" /></svg>
                                <span style="color: #00b300">Market</span>POS</h1>
                            <div class="col text-center" style="font-size: 90%">
                                <span>123 Main St<br> New Paltz, NY 12561<br><span>
                                        <span>555-555-5555</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <span class="text-center">
                                <h5>Sales Receipt</h5>
                                <p style="font-size: 85%"><?php if ($num_rows) echo $t_row['date']. ' '.$t_row['time']  ?></p> 
                            </span>
                            <div class="col mt-3" style="font-size: 90%">
                                <span>Ticket: <?php if ($num_rows)  echo $t_row['ticket_id'] ?></span><br>
                                <span>Register: <?php if (isset($_SESSION['register'])) echo $_SESSION['register'] ?></span><br>
                                <span>Employee: <?php if ($num_rows)  echo $t_row['first_name'] ?></span><br>
                            </div>
                            <div class="container">
                                <table class="table table-sm table-borderless mt-2" style="font-size: 90%">
                                    <thead class="border-bottom">
                                        <th class="col-10">Items</th>
                                        <th class="col-1">Qty</th>
                                        <th class="col-1">Price</th>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        while ($q_row = mysqli_fetch_assoc($q_result)){
                                        echo '
                                        <tr>
                                            <td>'. $q_row['productName'] .'<td>
                                            <td>'. $q_row['qty'] .'<td>
                                            <td>$'. $q_row['unit_price'] .'<td>
                                        </tr>';
                                        }
                                    echo'
                                    <tr class="border-bottom"></tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td><td>
                                            <td>Subtotal<td>
                                            <td>$'. $t_row['subtotal'] .'<td>
                                        </tr>
                                        <tr>
                                            <td><td>
                                            <td>Tax @ '. $t_row['tax_rate'] . '<td>
                                            <td>$'. $t_row['tax'] .'<td>
                                        </tr>
                                        <tr>
                                            <td><td>
                                            <th>Total<th>
                                            <th>$'. $t_row['total'] .'<th>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td>Payments<td>
                                            <th><th>
                                            <th><th>
                                        </tr>
                                        <tr>
                                            <td><td>
                                            <th>Cash<th>
                                            <th>$'. $t_row['cash'] .'<th>
                                        </tr>
                                        <tr>
                                        <td><td>
                                        <th>Credit<th>
                                        <th>$'. $t_row['credit'] .'<th>
                                        </tr>';
                                                
                                        ?>
                                    </tfoot>
                                </table>
                                <div class="text-center" style="font-size: 90%"><span>Return policy for the business is outlined here.</span></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    </div>

</body>

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
    });

        //control panel buttons hoverable shadow
        $(document).ready(function() {
      $(".card").hover(
        function() {
          $(this).addClass('shadow').css('cursor', 'pointer');
        },
        function() {
          $(this).removeClass('shadow');
        }
      );
    });
</script>
<style>@media print {
    .print {
        background-color: white;
        height: 100%;
        width: 100%;
        position: fixed;
        top: 0;
        left: 0;
        margin: 0;
        padding: 15px;
        font-size: 14px;
        line-height: 18px;
    }
}
</style>

</html>