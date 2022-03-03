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

    <title>Reports | MarketPOS</title>

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
          <a href="salescontrolpanel.php#switchreg" style="font-size: 1em;"><?php if ((isset($_SESSION['emp_id'])) ) echo $row['company_name']; else  echo 'Company Name'; ?></br>
            <?php if (isset($_SESSION['register'])) echo "Register " .$_SESSION['register'];else  echo 'Choose Register'; ?> <svg width=".6em" height=".6em" viewBox="0 0 16 16" class="bi bi-caret-down-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
            </svg></a>
        </div>
      </li>
      <li>
        <a href="employeePinLogin.php" style="font-size: 1em;"><?php if ((isset($_SESSION['emp_id']))) echo "". $row['first_name']. " " . $row['last_name'] . " ";else echo "Current User";?><svg width=".6em" height=".6em" viewBox="0 0 16 16" class="bi bi-caret-down-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
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
            <li>
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
        </li>";
        }
      
      ?>

            <li class="active">
                <a href="reportsControlPanel.php">
                    <span style="padding:5px;">
                        <svg width=".8em" height=".8em" viewBox="0 0 16 16" class="bi bi-clipboard-data" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                            <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                            <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z" />
                        </svg></span> Reports</a>
            </li>

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
                        <a class="navbar-brand" href="reportscontrolpanel.php">
                            <svg width=".8em" height=".8em" viewBox="0 0 16 16" class="bi bi-clipboard-data" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                                <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                                <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z" />
                            </svg> Reports</a>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="wrapper" id="repscreen">

            <!--control buttons-->

            <div class="row mr-1">
                <div class="col mb-4">
                    <div class="card">
                        <div class="card-title bg-dark">
                            <h4 class="text-center text-light">Sales Reports</h4>
                        </div>

                        <div class="list-group">
                            <a href="reportsTotalTemplate.php" class="list-group-item list-group-item-action"><strong>Totals </strong> - Your basic sales report, lists all sales and totals them</a>
                            <a href="reportsLinesTemplate.php" class="list-group-item list-group-item-action"><strong>Lines </strong> - Lists all items and charges from sales</a>
                            <a href="reportsMarginTemplate.php" class="list-group-item list-group-item-action"><strong>Margin Per Line</strong> - Shows total, cost, profit, and margin for every sales line</a>
                            <a href="reportsSaleByCategoryTemplate.php" class="list-group-item list-group-item-action"><strong>Sales by Category</strong> - Compare categories, drill down to view subcategories</a>
                            <a href="reportsOverTimeTemplate.php" class="list-group-item list-group-item-action"><strong>Sales Over Time</strong> - Sales over time grouped by time period</a>
                        </div>
                    </div>
                </div>

                <div class="col mb-4">
                    <div class="card">
                        <div class="card-title bg-dark">
                            <h4 class="text-center text-light">Z-Reports</h4>
                        </div>

                        <div class="list-group">
                            <a href="eodDateNav.php" class="list-group-item list-group-item-action"><strong>End of Day </strong> - End of day summary report for each store location</a>
                            <a href="#" class="list-group-item list-group-item-action"><strong>Products </strong> - Roll-up reports on product sales</a>
                            <a href="#" class="list-group-item list-group-item-action"><strong>Customers</strong> - Roll-up reports on customers.</a>
                            <a href="#" class="list-group-item list-group-item-action"><strong>Employee Performance</strong> - View the performance of an employee(s) over a period of time</a>

                        </div>


                    </div>
                </div>
            </div>


            <div class="row mr-1">
                <div class="col mb-4">
                    <div class="card">
                        <div class="card-title bg-dark">
                            <h4 class="text-center text-light">Inventory Reports</h4>
                        </div>


                        <div class="list-group">
                            <a href="reportsAssets.php" class="list-group-item list-group-item-action"><strong>Assets </strong> - Your current inventory</a>
                            <a href="reportsReceived.php" class="list-group-item list-group-item-action"><strong>Received </strong> - All the inventory you've received during a time period</a>
                            <a href="#" class="list-group-item list-group-item-action"><strong>History </strong> - Look back in time and see how much inventory you had</a>
                            <a href="reportsInvbyCategory.php" class="list-group-item list-group-item-action"><strong>Inv. by Category </strong> - Asset reports that let you compare totals for each category</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>








    </div>
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
        });

        $(document).ready(function() {
            $(".card").hover(
                function() {
                    $(this).addClass('shadow-sm').css('cursor', 'pointer');
                },
                function() {
                    $(this).removeClass('shadow-sm');
                }
            );
        });
    </script>
</body>

</html>