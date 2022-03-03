<?php
include_once('config.php');
include_once('sidebarconnect.php');
$date = date("Y-m-d", strtotime($_POST['date']));
?>
<!DOCTYPE html>
<html>

<head>
  <title>End of Day Reports | MarketPOS</title>


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
  <!-- bootstrap datepicker -->
  <script src="js/bootstrap-datepicker.min.js"></script>


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
  </div>
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
    <!--END location navbar-->
<div class="container">
    <div class="row pt-5 m-4">
      <div class="col text-center">
        <?php

        if(isset($_POST['submit'])){
            echo "<h4 class='pl-5'>End of Day - ". $_POST['date'] ."</h4>";
          }
          else{
            echo '<h4 class="pl-5">End of Day - No Date Added </h4>';
          }
        
        
        ?>
      </div>
                                             
      <button class="btn btn-dark" onclick="window.print()"><svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="bi bi-printer" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path d="M11 2H5a1 1 0 0 0-1 1v2H3V3a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v2h-1V3a1 1 0 0 0-1-1zm3 4H2a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h1v1H2a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1z" />
          <path fill-rule="evenodd" d="M11 9H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1zM5 8a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H5z" />
          <path d="M3 7.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
        </svg>
      </button>
      

    </div>
    </div>

    <div class="container justify-content-center">
      <div class="card bg-white" id="reportcard">
        <div class="card-header">
          <span style="font-weight:500;">Company Name - Location</span>
        </div>
        <div class="row px-4 justify-content-center">
          <div class="col">
            <table class="table mt-3" id="table" style="font-size:80%;">

              <tbody>

                <!-- Retrieved SQL Data Goes Here -->
                <tr>
                <?php
                    $sum=0;
                    $sql = "SELECT total FROM ticket_system WHERE date LIKE '$date'";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                    $sum += $row['total'];
                    }
                  
                  ?>
                  <th class="pr-5"> Sales Total</th>
                  <td class="text-right">$<?php echo $sum ?></td>
                </tr>
                <tr>
                <?php 
                  $sum=0;
                  $sql = "SELECT tax FROM ticket_system WHERE date LIKE '$date'";
                  $result = mysqli_query($conn, $sql);
                  while ($row = mysqli_fetch_assoc($result)) {
                  $sum += $row['tax'];
                  }
                  ?>
                  <th class="pr-5"> Tax Total</th>
                  <td class="text-right">$<?php echo $sum?></td>
                </tr>
                <tr>
                <?php 
                   $sum=0;
                   $sql = "SELECT cash FROM ticket_system WHERE date LIKE '$date'";
                   $result = mysqli_query($conn, $sql);
                   while ($row = mysqli_fetch_assoc($result)) {
                   $sum += $row['cash'];
                   }
                  ?>
                  <th class="pr-5"> Cash </th>
                  <td class="text-right">$<?php echo $sum?></td>
                </tr>
                <tr>
                <?php 
                   $sum=0;
                   $sql = "SELECT credit FROM ticket_system WHERE date LIKE '$date'";
                   $result = mysqli_query($conn, $sql);
                   while ($row = mysqli_fetch_assoc($result)) {
                   $sum += $row['credit'];
                   }
                  ?>
                  <th class="pr-5"> Credit </th>
                  <td class="text-right">$<?php echo $sum?></td>
                </tr>

              </tbody>
            </table>
          </div>
          <div class="col">
            <table class="table mt-3" id="table" style="font-size:80%;">

              <tbody>

                <!-- Retrieved SQL Data Goes Here -->
                <tr>
                <?php 
                   $sum=0;
                   $sql = "SELECT ticket_system.ticket_id, return_table.* FROM ticket_system 
                          LEFT JOIN return_table ON return_table.ticket_id=ticket_system.ticket_id WHERE return_table.date LIKE'$date'";
                   $result = mysqli_query($conn, $sql);
                   while ($row = mysqli_fetch_assoc($result)) {
                   $sum += $row['refunds'];
                   }
                  ?>
                  <th class="pr-5"> Refunds Total</th>
                  <td class="text-right">$<?php echo $sum; ?></td>
                </tr>
                <tr>
                <?php 
                   $sum=0;
                   $sql = "SELECT ticket_system.ticket_id, return_table.* FROM ticket_system 
                          LEFT JOIN return_table ON return_table.ticket_id=ticket_system.ticket_id 
                          WHERE return_table.date LIKE '$date'";
                   $result = mysqli_query($conn, $sql);
                   $rows = mysqli_num_rows($result);
                   $sum+= $rows;
                  ?>
                  <th class="pr-5"> Returns </th>
                  <td class="text-right"><?php echo $sum; ?></td>
                </tr>

              </tbody>
            </table>
          </div>
          <div class="col">
            <table class="table mt-3" id="table" style="font-size:80%;">

              <tbody>

                <!-- Retrieved SQL Data Goes Here -->

                <tr>
                <?php 
                  $qty=0;
                   $sql = "SELECT quantity FROM ticket_system WHERE date LIKE '$date'";
                   $result = mysqli_query($conn, $sql);
                   while ($row = mysqli_fetch_assoc($result)) {
                   $qty += $row['quantity'];
                   }
                  ?>
                  <th class="pr-5"> Products Sold </th>
                  <td class="text-right"><?php echo $qty?></td>
                </tr>
                <tr>
                  <th class="pr-5"> First Invoice </th>
                  <td class="text-right">0</td>
                </tr>
                <tr>
                  <th class="pr-5"> Last Invoice </th>
                  <td class="text-right">0</td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>

        <div id="contentline"></div>

        <div class="row px-4 mt-3 justify-content-center">
          <div class="col">
            <table class="table table-striped text-center" id="table" style="font-size:80%;">
              <thead>
                <tr>
                  <th class="pr-5 text-left"> Category </th>
                  <th> Quantity </th>
                  <th> Retail Total </th>
                  <th> Cost Total</th>
                  <th> Profit Total</th>
                </tr>
              </thead>
              <tbody>

                <!-- Retrieved SQL Data Goes Here Instead of empty tds -->
                <tr>
                <?php 
                  $sum=0;
                  $sql = "SELECT ticket_system.*, product_inventory.*, item_list.* FROM ticket_system 
                  LEFT JOIN cart_inprogress ON ticket_system.ticket_id=cart_inprogress.CID LEFT JOIN item_list ON 
                  cart_inprogress.CID=item_list.CID LEFT JOIN product_inventory ON item_list.product_id=product_inventory.product_id
                  WHERE ticket_system.date LIKE '$date' AND product_inventory.productType='Dairy'";
                  $result = mysqli_query($conn, $sql);
                   while ($row = mysqli_fetch_assoc($result)) {
                       $sum += $row['qty'];
                  }
                  ?>
                  <td class="text-left">Dairy</td>
                  <td><?php echo $sum; ?></td>
                  <?php 
                  $retail=0;
                  $sql = "SELECT ticket_system.*, product_inventory.*, item_list.* FROM ticket_system 
                  LEFT JOIN cart_inprogress ON ticket_system.ticket_id=cart_inprogress.CID LEFT JOIN item_list ON 
                  cart_inprogress.CID=item_list.CID LEFT JOIN product_inventory ON item_list.product_id=product_inventory.product_id
                  WHERE ticket_system.date LIKE '$date' AND product_inventory.productType='Dairy'";
                  $result = mysqli_query($conn, $sql);
                  while ($row = mysqli_fetch_assoc($result)) {
                    $limit = $row['qty'];
                    while($limit>0)
                    {
                      $retail += $row['unit_price'];
                      $limit--;
                    }
                  }
                  ?>
                  <td>$<?php echo $retail; ?></td>
                  <?php 
                  $cost=0;
                  $sql = "SELECT ticket_system.*, product_inventory.*, item_list.* FROM ticket_system 
                  LEFT JOIN cart_inprogress ON ticket_system.ticket_id=cart_inprogress.CID LEFT JOIN item_list ON 
                  cart_inprogress.CID=item_list.CID LEFT JOIN product_inventory ON item_list.product_id=product_inventory.product_id
                  WHERE ticket_system.date LIKE '$date' AND product_inventory.productType='Dairy'";
                  $result = mysqli_query($conn, $sql);
                  while ($row = mysqli_fetch_assoc($result)) {
                   $cost += $row['cost'] * $row['qty'];
                   }
                  ?>
                  <td>$<? echo $cost; ?></td>
                  <?php 
                  $profit = $retail - $cost;
                  ?>
                  <td>$<?php echo $profit ?></td>
                </tr>
                
                <!--Produce-->
                <tr>
                <?php 
                  $sum1=0;
                  $sql = "SELECT ticket_system.*, product_inventory.*, item_list.* FROM ticket_system 
                  LEFT JOIN cart_inprogress ON ticket_system.ticket_id=cart_inprogress.CID LEFT JOIN item_list ON 
                  cart_inprogress.CID=item_list.CID LEFT JOIN product_inventory ON item_list.product_id=product_inventory.product_id
                  WHERE ticket_system.date LIKE '$date' AND product_inventory.productType='Produce'";
                  $result = mysqli_query($conn, $sql);
                   while ($row = mysqli_fetch_assoc($result)) {
                       $sum1 += $row['qty'];
                  }
                  ?>
                  <td class="text-left">Produce</td>
                  <td><?php echo $sum1; ?></td>
                  <?php 
                  $retail1=0;
                  $sql = "SELECT ticket_system.*, product_inventory.*, item_list.* FROM ticket_system 
                  LEFT JOIN cart_inprogress ON ticket_system.ticket_id=cart_inprogress.CID LEFT JOIN item_list ON 
                  cart_inprogress.CID=item_list.CID LEFT JOIN product_inventory ON item_list.product_id=product_inventory.product_id
                  WHERE ticket_system.date LIKE '$date' AND product_inventory.productType='Produce'";
                  $result = mysqli_query($conn, $sql);
                  while ($row = mysqli_fetch_assoc($result)) {
                    $limit1 = $row['qty'];
                    while($limit1>0)
                    {
                      $retail1 += $row['unit_price'];
                      $limit1--;
                    }
                  }
                  ?>
                  <td>$<?php echo $retail1; ?></td>
                  <?php 
                  $cost1=0;
                  $sql = "SELECT ticket_system.*, product_inventory.*, item_list.* FROM ticket_system 
                  LEFT JOIN cart_inprogress ON ticket_system.ticket_id=cart_inprogress.CID LEFT JOIN item_list ON 
                  cart_inprogress.CID=item_list.CID LEFT JOIN product_inventory ON item_list.product_id=product_inventory.product_id
                  WHERE ticket_system.date LIKE '$date' AND product_inventory.productType='Produce'";
                  $result = mysqli_query($conn, $sql);
                  while ($row = mysqli_fetch_assoc($result)) {
                   $cost1 += $row['cost'] * $row['qty'];
                   }
                  ?>
                  <td>$<? echo $cost1; ?></td>
                  <?php 
                  $profit1 = $retail1 - $cost1;
                  ?>
                  <td>$<?php echo $profit1 ?></td>
                </tr>

                <!--Poultry-->
                <tr>
                <?php 
                  $sum2=0;
                  $sql = "SELECT ticket_system.*, product_inventory.*, item_list.* FROM ticket_system 
                  LEFT JOIN cart_inprogress ON ticket_system.ticket_id=cart_inprogress.CID LEFT JOIN item_list ON 
                  cart_inprogress.CID=item_list.CID LEFT JOIN product_inventory ON item_list.product_id=product_inventory.product_id
                  WHERE ticket_system.date LIKE '$date' AND product_inventory.productType='Poultry'";
                  $result = mysqli_query($conn, $sql);
                   while ($row = mysqli_fetch_assoc($result)) {
                       $sum2 += $row['qty'];
                  }
                  ?>
                  <td class="text-left">Poultry</td>
                  <td><?php echo $sum2; ?></td>
                  <?php 
                  $retail2=0;
                  $sql = "SELECT ticket_system.*, product_inventory.*, item_list.* FROM ticket_system 
                  LEFT JOIN cart_inprogress ON ticket_system.ticket_id=cart_inprogress.CID LEFT JOIN item_list ON 
                  cart_inprogress.CID=item_list.CID LEFT JOIN product_inventory ON item_list.product_id=product_inventory.product_id
                  WHERE ticket_system.date LIKE '$date' AND product_inventory.productType='Poultry'";
                  $result = mysqli_query($conn, $sql);
                  while ($row = mysqli_fetch_assoc($result)) {
                    $limit2 = $row['qty'];
                    while($limit2>0)
                    {
                      $retail2 += $row['unit_price'];
                      $limit2--;
                    }
                  }
                  ?>
                  <td>$<?php echo $retail2; ?></td>
                  <?php 
                  $cost2=0;
                  $sql = "SELECT ticket_system.*, product_inventory.*, item_list.* FROM ticket_system 
                  LEFT JOIN cart_inprogress ON ticket_system.ticket_id=cart_inprogress.CID LEFT JOIN item_list ON 
                  cart_inprogress.CID=item_list.CID LEFT JOIN product_inventory ON item_list.product_id=product_inventory.product_id
                  WHERE ticket_system.date LIKE '$date' AND product_inventory.productType='Poultry'";
                  $result = mysqli_query($conn, $sql);
                  while ($row = mysqli_fetch_assoc($result)) {
                   $cost2 += $row['cost'] * $row['qty'];
                   }
                  ?>
                  <td>$<? echo $cost2; ?></td>
                  <?php 
                  $profit2 = $retail2 - $cost2;
                  ?>
                  <td>$<?php echo $profit2 ?></td>
                </tr>

                <!--Beef-->
                <tr>
                <?php 
                  $sum=0;
                  $sql = "SELECT ticket_system.*, product_inventory.*, item_list.* FROM ticket_system 
                  LEFT JOIN cart_inprogress ON ticket_system.ticket_id=cart_inprogress.CID LEFT JOIN item_list ON 
                  cart_inprogress.CID=item_list.CID LEFT JOIN product_inventory ON item_list.product_id=product_inventory.product_id
                  WHERE ticket_system.date LIKE '$date' AND product_inventory.productType='Beef'";
                  $result = mysqli_query($conn, $sql);
                   while ($row = mysqli_fetch_assoc($result)) {
                       $sum += $row['qty'];
                  }
                  ?>
                  <td class="text-left">Beef</td>
                  <td><?php echo $sum; ?></td>
                  <?php 
                  $retail=0;
                  $sql = "SELECT ticket_system.*, product_inventory.*, item_list.* FROM ticket_system 
                  LEFT JOIN cart_inprogress ON ticket_system.ticket_id=cart_inprogress.CID LEFT JOIN item_list ON 
                  cart_inprogress.CID=item_list.CID LEFT JOIN product_inventory ON item_list.product_id=product_inventory.product_id
                  WHERE ticket_system.date LIKE '$date' AND product_inventory.productType='Beef'";
                  $result = mysqli_query($conn, $sql);
                  while ($row = mysqli_fetch_assoc($result)) {
                    $limit = $row['qty'];
                    while($limit>0)
                    {
                      $retail += $row['unit_price'];
                      $limit--;
                    }
                  }
                  ?>
                  <td>$<?php echo $retail; ?></td>
                  <?php 
                  $cost=0;
                  $sql = "SELECT ticket_system.*, product_inventory.*, item_list.* FROM ticket_system 
                  LEFT JOIN cart_inprogress ON ticket_system.ticket_id=cart_inprogress.CID LEFT JOIN item_list ON 
                  cart_inprogress.CID=item_list.CID LEFT JOIN product_inventory ON item_list.product_id=product_inventory.product_id
                  WHERE ticket_system.date LIKE '$date' AND product_inventory.productType='Beef'";
                  $result = mysqli_query($conn, $sql);
                  while ($row = mysqli_fetch_assoc($result)) {
                   $cost += $row['cost'] * $row['qty'];
                   }
                  ?>
                  <td>$<? echo $cost; ?></td>
                  <?php 
                  $profit = $retail - $cost;
                  ?>
                  <td>$<?php echo $profit ?></td>
                </tr>

                <!--Dry Goods-->
                <tr>
                <?php 
                  $sum=0;
                  $sql = "SELECT ticket_system.*, product_inventory.*, item_list.* FROM ticket_system 
                  LEFT JOIN cart_inprogress ON ticket_system.ticket_id=cart_inprogress.CID LEFT JOIN item_list ON 
                  cart_inprogress.CID=item_list.CID LEFT JOIN product_inventory ON item_list.product_id=product_inventory.product_id
                  WHERE ticket_system.date LIKE '$date' AND product_inventory.productType='DryGoods'";
                  $result = mysqli_query($conn, $sql);
                   while ($row = mysqli_fetch_assoc($result)) {
                       $sum += $row['qty'];
                  }
                  ?>
                  <td class="text-left">Dry Goods</td>
                  <td><?php echo $sum; ?></td>
                  <?php 
                  $retail=0;
                  $sql = "SELECT ticket_system.*, product_inventory.*, item_list.* FROM ticket_system 
                  LEFT JOIN cart_inprogress ON ticket_system.ticket_id=cart_inprogress.CID LEFT JOIN item_list ON 
                  cart_inprogress.CID=item_list.CID LEFT JOIN product_inventory ON item_list.product_id=product_inventory.product_id
                  WHERE ticket_system.date LIKE '$date' AND product_inventory.productType='DryGoods'";
                  $result = mysqli_query($conn, $sql);
                  while ($row = mysqli_fetch_assoc($result)) {
                    $limit = $row['qty'];
                    while($limit>0)
                    {
                      $retail += $row['unit_price'];
                      $limit--;
                    }
                  }
                  ?>
                  <td>$<?php echo $retail; ?></td>
                  <?php 
                  $cost=0;
                  $sql = "SELECT ticket_system.*, product_inventory.*, item_list.* FROM ticket_system 
                  LEFT JOIN cart_inprogress ON ticket_system.ticket_id=cart_inprogress.CID LEFT JOIN item_list ON 
                  cart_inprogress.CID=item_list.CID LEFT JOIN product_inventory ON item_list.product_id=product_inventory.product_id
                  WHERE ticket_system.date LIKE '$date' AND product_inventory.productType='DryGoods'";
                  $result = mysqli_query($conn, $sql);
                  while ($row = mysqli_fetch_assoc($result)) {
                   $cost += $row['cost'] * $row['qty'];
                   }
                  ?>
                  <td>$<? echo $cost; ?></td>
                  <?php 
                  $profit = $retail - $cost;
                  ?>
                  <td>$<?php echo $profit ?></td>
                </tr>

                <!--Pet Food-->
                <tr>
                <?php 
                  $sum=0;
                  $sql = "SELECT ticket_system.*, product_inventory.*, item_list.* FROM ticket_system 
                  LEFT JOIN cart_inprogress ON ticket_system.ticket_id=cart_inprogress.CID LEFT JOIN item_list ON 
                  cart_inprogress.CID=item_list.CID LEFT JOIN product_inventory ON item_list.product_id=product_inventory.product_id
                  WHERE ticket_system.date LIKE '$date' AND product_inventory.productType='PetFood'";
                  $result = mysqli_query($conn, $sql);
                   while ($row = mysqli_fetch_assoc($result)) {
                       $sum += $row['qty'];
                  }
                  ?>
                  <td class="text-left">Pet Food</td>
                  <td><?php echo $sum; ?></td>
                  <?php 
                  $retail=0;
                  $sql = "SELECT ticket_system.*, product_inventory.*, item_list.* FROM ticket_system 
                  LEFT JOIN cart_inprogress ON ticket_system.ticket_id=cart_inprogress.CID LEFT JOIN item_list ON 
                  cart_inprogress.CID=item_list.CID LEFT JOIN product_inventory ON item_list.product_id=product_inventory.product_id
                  WHERE ticket_system.date LIKE '$date' AND product_inventory.productType='PetFood'";
                  $result = mysqli_query($conn, $sql);
                  while ($row = mysqli_fetch_assoc($result)) {
                    $limit = $row['qty'];
                    while($limit>0)
                    {
                      $retail += $row['unit_price'];
                      $limit--;
                    }
                  }
                  ?>
                  <td>$<?php echo $retail; ?></td>
                  <?php 
                  $cost=0;
                  $sql = "SELECT ticket_system.*, product_inventory.*, item_list.* FROM ticket_system 
                  LEFT JOIN cart_inprogress ON ticket_system.ticket_id=cart_inprogress.CID LEFT JOIN item_list ON 
                  cart_inprogress.CID=item_list.CID LEFT JOIN product_inventory ON item_list.product_id=product_inventory.product_id
                  WHERE ticket_system.date LIKE '$date' AND product_inventory.productType='PetFood'";
                  $result = mysqli_query($conn, $sql);
                  while ($row = mysqli_fetch_assoc($result)) {
                   $cost += $row['cost'] * $row['qty'];
                   }
                  ?>
                  <td>$<? echo $cost; ?></td>
                  <?php 
                  $profit = $retail - $cost;
                  ?>
                  <td>$<?php echo $profit ?></td>
                </tr>

                <!--Pasta-->
                <tr>
                <?php 
                  $sum=0;
                  $sql = "SELECT ticket_system.*, product_inventory.*, item_list.* FROM ticket_system 
                  LEFT JOIN cart_inprogress ON ticket_system.ticket_id=cart_inprogress.CID LEFT JOIN item_list ON 
                  cart_inprogress.CID=item_list.CID LEFT JOIN product_inventory ON item_list.product_id=product_inventory.product_id
                  WHERE ticket_system.date LIKE '$date' AND product_inventory.productType='Pasta'";
                  $result = mysqli_query($conn, $sql);
                   while ($row = mysqli_fetch_assoc($result)) {
                       $sum += $row['qty'];
                  }
                  ?>
                  <td class="text-left">Pasta</td>
                  <td><?php echo $sum; ?></td>
                  <?php 
                  $retail=0;
                  $sql = "SELECT ticket_system.*, product_inventory.*, item_list.* FROM ticket_system 
                  LEFT JOIN cart_inprogress ON ticket_system.ticket_id=cart_inprogress.CID LEFT JOIN item_list ON 
                  cart_inprogress.CID=item_list.CID LEFT JOIN product_inventory ON item_list.product_id=product_inventory.product_id
                  WHERE ticket_system.date LIKE '$date' AND product_inventory.productType='Pasta'";
                  $result = mysqli_query($conn, $sql);
                  while ($row = mysqli_fetch_assoc($result)) {
                    $limit = $row['qty'];
                    while($limit>0)
                    {
                      $retail += $row['unit_price'];
                      $limit--;
                    }
                  }
                  ?>
                  <td>$<?php echo $retail; ?></td>
                  <?php 
                  $cost=0;
                  $sql = "SELECT ticket_system.*, product_inventory.*, item_list.* FROM ticket_system 
                  LEFT JOIN cart_inprogress ON ticket_system.ticket_id=cart_inprogress.CID LEFT JOIN item_list ON 
                  cart_inprogress.CID=item_list.CID LEFT JOIN product_inventory ON item_list.product_id=product_inventory.product_id
                  WHERE ticket_system.date LIKE '$date' AND product_inventory.productType='Pasta'";
                  $result = mysqli_query($conn, $sql);
                  while ($row = mysqli_fetch_assoc($result)) {
                   $cost += $row['cost'] * $row['qty'];
                   }
                  ?>
                  <td>$<? echo $cost; ?></td>
                  <?php 
                  $profit = $retail - $cost;
                  ?>
                  <td>$<?php echo $profit ?></td>
                </tr>

                <!--Bathroom-->
                <tr>
                <?php 
                  $sum=0;
                  $sql = "SELECT ticket_system.*, product_inventory.*, item_list.* FROM ticket_system 
                  LEFT JOIN cart_inprogress ON ticket_system.ticket_id=cart_inprogress.CID LEFT JOIN item_list ON 
                  cart_inprogress.CID=item_list.CID LEFT JOIN product_inventory ON item_list.product_id=product_inventory.product_id
                  WHERE ticket_system.date LIKE '$date' AND product_inventory.productType='Bathroom'";
                  $result = mysqli_query($conn, $sql);
                   while ($row = mysqli_fetch_assoc($result)) {
                       $sum += $row['qty'];
                  }
                  ?>
                  <td class="text-left">Toiletries</td>
                  <td><?php echo $sum; ?></td>
                  <?php 
                  $retail=0;
                  $sql = "SELECT ticket_system.*, product_inventory.*, item_list.* FROM ticket_system 
                  LEFT JOIN cart_inprogress ON ticket_system.ticket_id=cart_inprogress.CID LEFT JOIN item_list ON 
                  cart_inprogress.CID=item_list.CID LEFT JOIN product_inventory ON item_list.product_id=product_inventory.product_id
                  WHERE ticket_system.date LIKE '$date' AND product_inventory.productType='Bathroom'";
                  $result = mysqli_query($conn, $sql);
                  while ($row = mysqli_fetch_assoc($result)) {
                    $limit = $row['qty'];
                    while($limit>0)
                    {
                      $retail += $row['unit_price'];
                      $limit--;
                    }
                  }
                  ?>
                  <td>$<?php echo $retail; ?></td>
                  <?php 
                  $cost=0;
                  $sql = "SELECT ticket_system.*, product_inventory.*, item_list.* FROM ticket_system 
                  LEFT JOIN cart_inprogress ON ticket_system.ticket_id=cart_inprogress.CID LEFT JOIN item_list ON 
                  cart_inprogress.CID=item_list.CID LEFT JOIN product_inventory ON item_list.product_id=product_inventory.product_id
                  WHERE ticket_system.date LIKE '$date' AND product_inventory.productType='Bathroom'";
                  $result = mysqli_query($conn, $sql);
                  while ($row = mysqli_fetch_assoc($result)) {
                   $cost += $row['cost'] * $row['qty'];
                   }
                  ?>
                  <td>$<? echo $cost; ?></td>
                  <?php 
                  $profit = $retail - $cost;
                  ?>
                  <td>$<?php echo $profit ?></td>
                </tr>
              </tbody>
              <tfoot class="bg-white">
                <tr>
                  <th class="pr-5 text-left"> Total: </th>
                  <th><?php $total = $sum + $sum1 + $sum2; echo $total;?></th>
                  <th> $<?php $totalR = $retail + $retail1 + $retail2; echo $totalR;?></th>
                  <th> $<?php $totalC = $cost + $cost1 + $cost2; echo $totalC;?></th>
                  <th> $<?php $totalP = $profit + $profit1 + $profit2; echo $totalP;?></th>
                </tr>
              </tfoot>

            </table>
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

</script>

</html>