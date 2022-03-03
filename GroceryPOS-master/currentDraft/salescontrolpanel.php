<?php
include_once('config.php');
include_once('sidebarconnect.php');
//this can reset the auto increment when all registers are cleared out
//mysqli_query($conn, "ALTER TABLE registers_table AUTO_INCREMENT = 1");

//if open reg submit is pushed
if (isset($_POST['submitcount'])) {
  $opentotal = $_POST['opensum'];
  $employeeid = $_SESSION['emp_id'];
  $regRadio = $_POST['reg_radio'];

  $query = "INSERT into registers_table (open_time, open_total, open_emp_id, register_num)
          values (now(), $opentotal, (SELECT employee_id from employee_info where employee_id = $employeeid), $regRadio)";

  $result = mysqli_query($conn, $query);

  if ($result) {
    $register = $regRadio;
    $_SESSION['register'] = $register;
  } else {
    echo "$query, Please Check Your Query";
    echo $result ? 'true' : 'false';
  }
}

//if close reg submit is pushed
if (isset($_POST['submitclose'])) {
  $closesum = $_POST['closesum'];
  $closeRegId = $_POST['closeRegId'];
  $dropNote = $_POST['dropNote'];
  $employeeid = $_SESSION['emp_id'];

  $closequery = "UPDATE registers_table SET close_total = '$closesum', close_emp_id = (SELECT employee_id from employee_info where employee_id = $employeeid), close_time = now(), note = '$dropNote' WHERE register_id = '$closeRegId' ";

  $result = mysqli_query($conn, $closequery);

  if ($result) {

    unset($_SESSION['register']);
  } else {
    echo "Please Check Your Query";
  }
}

//if switch reg is pushed
if (isset($_POST['selectreg'])) {
  $register = $_POST['register'];
  $_SESSION['register'] = $register;
}

//if drop cash submit is pushed
if (isset($_POST['submitdrop'])) {
  $dropsum = $_POST['dropsum'];
  $dropRegId = $_POST['dropRegId'];
  $dropNote = $_POST['dropNote'];
  $employeeid = $_SESSION['emp_id'];

  $closequery = "UPDATE registers_table SET drop_total = '$dropsum', drop_emp_id = (SELECT employee_id from employee_info where employee_id = $employeeid), drop_time = now(), note = '$dropNote' WHERE register_id = '$dropRegId' ";

  $result = mysqli_query($conn, $closequery);

  if ($result) {

  } else {
    echo "Please Check Your Query";
  }
}
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Sales | MarketPOS</title>

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
          <a href="" style="font-size: 1em;"  data-toggle="modal" data-target="#switchreg"><?php if ((isset($_SESSION['emp_id'])) ) echo $row['company_name']; else  echo 'Company Name'; ?></br>
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

    <div class="wrapper" id="controlscreen">
      <!--control buttons-->
      <div class="card-deck">
        <p>Sales Controls</p>
        <div class="line"></div>
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

        <a class="btn" href="employeePinLogin.php">
          <div class="card" id="pagecard">
            <div class="card-body text-center">
              <span class="card-text">
                <h5 class="card-title"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-reply" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M9.502 5.013a.144.144 0 0 0-.202.134V6.3a.5.5 0 0 1-.5.5c-.667 0-2.013.005-3.3.822-.984.624-1.99 1.76-2.595 3.876C3.925 10.515 5.09 9.982 6.11 9.7a8.741 8.741 0 0 1 1.921-.306 7.403 7.403 0 0 1 .798.008h.013l.005.001h.001L8.8 9.9l.05-.498a.5.5 0 0 1 .45.498v1.153c0 .108.11.176.202.134l3.984-2.933a.494.494 0 0 1 .042-.028.147.147 0 0 0 0-.252.494.494 0 0 1-.042-.028L9.502 5.013zM8.3 10.386a7.745 7.745 0 0 0-1.923.277c-1.326.368-2.896 1.201-3.94 3.08a.5.5 0 0 1-.933-.305c.464-3.71 1.886-5.662 3.46-6.66 1.245-.79 2.527-.942 3.336-.971v-.66a1.144 1.144 0 0 1 1.767-.96l3.994 2.94a1.147 1.147 0 0 1 0 1.946l-3.994 2.94a1.144 1.144 0 0 1-1.767-.96v-.667z" />
                  </svg></h5>
                Continue Sale
              </span>
            </div>
          </div>
        </a>

        <a class="btn" href="return.php">
          <div class="card" id="pagecard">
            <div class="card-body text-center">
              <span class="card-text">
                <h5 class="card-title"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-bag-x-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M5.5 3.5a2.5 2.5 0 0 1 5 0V4h-5v-.5zm6 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM6.854 8.146a.5.5 0 1 0-.708.708L7.293 10l-1.147 1.146a.5.5 0 0 0 .708.708L8 10.707l1.146 1.147a.5.5 0 0 0 .708-.708L8.707 10l1.147-1.146a.5.5 0 0 0-.708-.708L8 9.293 6.854 8.146z" />
                  </svg></h5>
                Return
              </span>
            </div>
          </div>
        </a>

        <a class="btn" href="saleshistory.php">
          <div class="card" id="pagecard">
            <div class="card-body text-center">
              <span class="card-text">
                <h5 class="card-title"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-clock-history" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z" />
                    <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z" />
                    <path fill-rule="evenodd" d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
                  </svg></h5>
                Sales History
              </span>
            </div>
          </div>
        </a>

      </div>


      <div class="card-deck">
        <p></p>
        <p>Register Controls</p>
        <div class="line"></div>
        <a class="btn" href="#" data-toggle="modal" data-target="#openreg">
          <div class="card" id="pagecard">
            <div class="card-body text-center">
              <span class="card-text">
                <h5 class="card-title"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-caret-up-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                    <path fill-rule="evenodd" d="M3.544 10.705A.5.5 0 0 0 4 11h8a.5.5 0 0 0 .374-.832l-4-4.5a.5.5 0 0 0-.748 0l-4 4.5a.5.5 0 0 0-.082.537z" />
                  </svg></h5>
                Open Register
              </span>
            </div>
          </div>
        </a>

        <a class="btn" href="#" data-toggle="modal" data-target="#closereg">
          <div class="card" id="pagecard">
            <div class="card-body text-center">
              <span class="card-text">
                <h5 class="card-title"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-caret-down-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm4 4a.5.5 0 0 0-.374.832l4 4.5a.5.5 0 0 0 .748 0l4-4.5A.5.5 0 0 0 12 6H4z" />
                  </svg></h5>
                Close Register
              </span>
            </div>
          </div>
        </a>

        <a class="btn" href="#" data-toggle="modal" data-target="#switchreg">
          <div class="card" id="pagecard">
            <div class="card-body text-center">
              <span class="card-text">
                <h5 class="card-title"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-left-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5zm14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5z" />
                  </svg></h5>
                Switch Register
              </span>
            </div>
          </div>
        </a>

        <a class="btn" href="#" data-toggle="modal" data-target="#dropcash">
          <div class="card" id="pagecard">
            <div class="card-body text-center">
              <span class="card-text align-middle">
                <h5 class="card-title"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-cash-stack" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14 3H1a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1h-1z" />
                    <path fill-rule="evenodd" d="M15 5H1v8h14V5zM1 4a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H1z" />
                    <path d="M13 5a2 2 0 0 0 2 2V5h-2zM3 5a2 2 0 0 1-2 2V5h2zm10 8a2 2 0 0 1 2-2v2h-2zM3 13a2 2 0 0 0-2-2v2h2zm7-4a2 2 0 1 1-4 0 2 2 0 0 1 4 0z" />
                  </svg></h5>
                Drop Cash
              </span>
            </div>
          </div>
        </a>

      </div>
    </div>
  </div>

  <!-- Modals -->

  <!-- Open Register Modal -->
  <div class="modal fade" id="openreg" tabindex="-1" role="dialog" aria-labelledby="openreg" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title" id="exampleModalLongTitle">Open Register</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container text-center">
            <h6 class="pb-3">Opening Count</h6>
            <div class="row">
              <div class="col-sm">
                <form method="post" action="salescontrolpanel.php">
                  <?php
                  $select = "SELECT register_num FROM registers_table WHERE close_total is NULL";
                  $result = mysqli_query($conn, $select);
                  $regArray = array(
                    1 => 1,
                    2 => 2,
                    3 => 3
                  );
                  $numrows = mysqli_num_rows($result);
                  if ($numrows != 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                      $needle = (int) $row['register_num'];
                      $opencheck = in_array($needle, $regArray);
                      if ($opencheck)
                        unset($regArray[$needle]);
                    }
                    if (!empty($regArray)) {
                      echo '
                      <h5 class="" style="margin-top: 200px">Open which register?</h5>
                        <div class="col-sm-10">';
                      foreach ($regArray as $i => $reg) {
                        echo '
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="reg_radio" value="' . $reg . '">
                              <label class="form-check-label">
                                Register ' . $reg . '
                              </label>
                            </div>';
                      }
                      echo '</div>';
                    } else
                      echo '<h3 class="pb-5"> All Registers are Open</h3>';
                  } else {
                    echo '
                      <h5 class=" mt-5 pt-5">Open which register?</h5>
                        <div class="col-sm-10">';
                    foreach ($regArray as $i => $reg) {
                      echo '
                            <div class="form-check py-1">
                              <input class="form-check-input" type="radio" name="reg_radio" value="' . $reg . '">
                              <label class="form-check-label">
                                Register ' . $reg . '
                              </label>
                            </div>';
                    }
                    echo '</div>';
                  }
                  ?>
              </div>

              <?php
              if (!empty($regArray)) {
                echo '
                <div id="bills" class="col-5 float-right">
                  <div class="form-inline ml-4">
                    <div class="col">
                      <div class="input-group mb-2">
                        <label class="control-label border bg-light" style="width:55px"><span class="input-group-addon px-2"> $100 </span></label>
                        <input type="text" maxlength="3" onblur="findTotal()" name="bills" class="form-control" placeholder="">
                      </div>
                      <div class="input-group mb-2">
                        <label class="control-label border bg-light" style="width:55px"><span class="input-group-addon px-2"> $50 </span></label>
                        <input type="text" maxlength="3" onblur="findTotal()" name="bills" class="form-control" placeholder="">
                      </div>
                      <div class="input-group mb-2">
                        <label class="control-label border bg-light" style="width:55px"><span class="input-group-addon px-2"> $20 </span></label>
                        <input type="text" maxlength="3" onblur="findTotal()" name="bills" class="form-control" placeholder="">
                      </div>
                      <div class="input-group mb-2">
                        <label class="control-label border bg-light" style="width:55px"><span class="input-group-addon px-2"> $10 </span></label>
                        <input type="text" maxlength="3" onblur="findTotal()" name="bills" class="form-control" placeholder="">
                      </div>
                      <div class="input-group mb-2">
                        <label class="control-label border bg-light" style="width:55px"><span class="input-group-addon px-2"> $5 </span></label>
                        <input type="text" maxlength="3" onblur="findTotal()" name="bills" class="form-control" placeholder="">
                      </div>
                      <div class="input-group mb-2">
                        <label class="control-label border bg-light" style="width:55px"><span class="input-group-addon px-2"> $1 </span></label>
                        <input type="text" maxlength="3" onblur="findTotal()" name="bills" class="form-control" placeholder="">
                      </div>
                      <div class="input-group mb-2">
                        <label class="control-label border bg-light" style="width:55px"><span class="input-group-addon px-2"> 25¢ </span></label>
                        <input type="text" maxlength="3" onblur="findTotal()" name="bills" class="form-control" placeholder="">
                      </div>
                      <div class="input-group mb-2">
                        <label class="control-label border bg-light" style="width:55px"><span class="input-group-addon px-2"> 10¢ </span></label>
                        <input type="text" maxlength="3" onblur="findTotal()" name="bills" class="form-control" placeholder="">
                      </div>
                      <div class="input-group mb-2">
                        <label class="control-label border bg-light" style="width:55px"><span class="input-group-addon px-2"> 5¢ </span></label>
                        <input type="text" maxlength="3" onblur="findTotal()" name="bills" class="form-control" placeholder="">
                      </div>
                      <div class="input-group mb-2">
                        <label class="control-label border bg-light" style="width:55px"><span class="input-group-addon px-2"> 1¢ </span></label>
                        <input type="text" maxlength="3" onblur="findTotal()" name="bills" class="form-control " placeholder="">
                      </div>
                      <div class="input-group mb-2">
                        <label class="control-label border bg-white" style="font-size: 13px; width:40px"><span class="input-group-addon px-2"> Total </span></label>
                        <input name="opensum" id="total" type="text" maxlength="10" class="form-control w-50" value="0.00" readonly>
                      </div>
                    </div>
                  </div>
                </div>
                ';
              }
              ?>


            </div>

          </div>


        </div>
        <div class="modal-footer">
          <?php
          if (!empty($regArray)) {
            echo '<button type="submit" name="submitcount" class="btn btn-success">Submit Count</button>';
          }
          ?>

          <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button>
          </form>
        </div>
      </div>
    </div>
  </div>


  <!-- Close Register Modal -->
  <div class="modal fade" id="closereg" tabindex="-1" role="dialog" aria-labelledby="closereg" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title" id="exampleModalLongTitle">Close Register</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
          <?php
                  if (!isset($_SESSION['register'])){
                    echo '<h3 class="pb-5 text-center">Cannot Close<br> No Register Selected</h3>';
                  }else{
                  $regToClose = $_SESSION['register'];
            echo '<div class="col text-right"><h5 class"pb-3">Register '. $regToClose .'</h5></div> 
              <div class="row">';
              
                

                  $closeQuery = "SELECT register_id, open_total FROM registers_table WHERE close_total is NULL AND register_num = $regToClose";
                  $result = mysqli_query($conn, $closeQuery);
                  $numrows = mysqli_num_rows($result);
                  if ($numrows != 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                    echo '
                    <table class="table table-sm table-bordered" style="font-size:80%;">
                    <thead class="thead-light text-center">
                      <tr>
                        <th scope="col-2">Type</th>
                        <th scope="col-2">Starting</th>
                        <th scope="col-2">Payments</th>
                        <th scope="col-2">Withdraws</th>
                        <th scope="col-2">Total Remaining</th>
                        <th scope="col-2">Closing Count</th>
                      </tr>
                    </thead>
                    <tbody class="text-right">
                    <form method="post" action="salescontrolpanel.php">
                      <tr>
                        <th scope="row" class="text-left">Cash</th>
                        <td>$'. number_format((float)$row['open_total'], 2, '.', '') .'</td>
                        <td>$0.00</td>
                        <td>$0.00</td>
                        <td>$'. number_format((float)$row['open_total'], 2, '.', '').'</td>
                        <td>

                          <div id="bills" class="col-5 mx-auto">
                            <div class="form-inline">
                              <div class="">
                                <div class="input-group mb-2">
                                  <label class="control-label border bg-light" style="width:55px"><span class="input-group-addon px-2"> $100 </span></label>
                                  <input type="text" maxlength="3" onblur="closeTotal()" name="bills2" class="form-control w-25" placeholder="">
                                </div>
                                <div class="input-group mb-2">
                                  <label class="control-label border bg-light" style="width:55px"><span class="input-group-addon px-2"> $50 </span></label>
                                  <input type="text" maxlength="3" onblur="closeTotal()" name="bills2" class="form-control w-25" placeholder="">
                                </div>
                                <div class="input-group mb-2">
                                  <label class="control-label border bg-light" style="width:55px"><span class="input-group-addon px-2"> $20 </span></label>
                                  <input type="text" maxlength="3" onblur="closeTotal()" name="bills2" class="form-control w-25" placeholder="">
                                </div>
                                <div class="input-group mb-2">
                                  <label class="control-label border bg-light" style="width:55px"><span class="input-group-addon px-2"> $10 </span></label>
                                  <input type="text" maxlength="3" onblur="closeTotal()" name="bills2" class="form-control w-25" placeholder="">
                                </div>
                                <div class="input-group mb-2">
                                  <label class="control-label border bg-light" style="width:55px"><span class="input-group-addon px-2"> $5 </span></label>
                                  <input type="text" maxlength="3" onblur="closeTotal()" name="bills2" class="form-control w-25" placeholder="">
                                </div>
                                <div class="input-group mb-2">
                                  <label class="control-label border bg-light" style="width:55px"><span class="input-group-addon px-2"> $1 </span></label>
                                  <input type="text" maxlength="3" onblur="closeTotal()" name="bills2" class="form-control w-25" placeholder="">
                                </div>
                                <div class="input-group mb-2">
                                  <label class="control-label border bg-light" style="width:55px"><span class="input-group-addon px-2"> 25¢ </span></label>
                                  <input type="text" maxlength="3" onblur="closeTotal()" name="bills2" class="form-control w-25" placeholder="">
                                </div>
                                <div class="input-group mb-2">
                                  <label class="control-label border bg-light" style="width:55px"><span class="input-group-addon px-2"> 10¢ </span></label>
                                  <input type="text" maxlength="3" onblur="closeTotal()" name="bills2" class="form-control w-25" placeholder="">
                                </div>
                                <div class="input-group mb-2">
                                  <label class="control-label border bg-light" style="width:55px"><span class="input-group-addon px-2"> 5¢ </span></label>
                                  <input type="text" maxlength="3" onblur="closeTotal()" name="bills2" class="form-control w-25" placeholder="">
                                </div>
                                <div class="input-group mb-2">
                                  <label class="control-label border bg-light" style="width:55px"><span class="input-group-addon px-2"> 1¢ </span></label>
                                  <input type="text" maxlength="3" onblur="closeTotal()" name="bills2" class="form-control w-25" placeholder="">
                                </div>
                                <div class="input-group mb-2">
                                  <input style="font-weight: 500" name="closesum" id="closetotal" type="text" maxlength="10" class="form-control text-right" value="0.00" readonly>
                                </div>
                              </div>
                            </div>
                          </div>
                        
                        </td>
                      </tr>
                      <tr>
                        <th scope="row" class="text-left">Credit</th>
                        <td>$0.00</td>
                        <td>$0.00</td>
                        <td>$0.00</td>
                        <td>$0.00</td>
                        <td>
                          <div class="">
                                <div class="col-5 float-right">
                                  <div class="input-group mb-2">
                                    <input type="text" maxlength="10" class="form-control w-25" placeholder="">
                                  </div>
                                </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row" class="text-left">Gift Card</th>
                        <td>$0.00</td>
                        <td>$0.00</td>
                        <td>$0.00</td>
                        <td>$0.00</td>
                        <td>
                          <div class="col-5 float-right">
                            <div class="input-group mb-2">
                              <input type="text" maxlength="10" class="form-control w-25" placeholder="">
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                      
                      <div class="mx-auto"><input name="dropNote" placeholder="Note"/></div>
                  <input name="closeRegId" value="'.$row['register_id'].'" readonly hidden/>
                    ';
                    }
                  }else{
                    echo '<h3 class="pb-5">Cannot Close<br> No Registers are Open</h3>';
                  }
                }
              
              


              echo'
          </div>
        </div>
        <div class="modal-footer">';

              if ($numrows != 0) {
                echo '<button type="submit" name="submitclose" class="btn btn-success">Submit Count</button>';
              }
            ?>

            <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button>
          </form>
        </div>
      </div>
    </div>
  </div>


    <!-- Switch Registers Modal -->
    <div class="modal fade" id="switchreg" tabindex="-1" role="dialog" aria-labelledby="switchreg" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header h-25">
            <h5>Switch Register</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="container text-center">
              <h6>Choose A Register</h6>
              <div class="form-inline justify-content-center">

                <?php
                $query = "SELECT register_num FROM registers_table WHERE close_total is NULL";
                $result = mysqli_query($conn, $query);

                $numrows = mysqli_num_rows($result);
                if ($numrows != 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo
                      '<form class="p-3" method="post" action="salescontrolpanel.php">
                    <button name="selectreg" class="btn">
                    <div class="card" id="pagecard">
                      <div class="card-body text-center">
                        <span class="card-text">
                          <h5 class="card-title"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-archive-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z" />
                            </svg></h5>
                          Register ' . $row['register_num'] . '
                        </span>
                      </div>
                    </div>
                  </button>
                  <input name="register" size="1" value="' . $row['register_num'] . '" hidden readonly/>
                  </form>';
                  }
                } else {
                  echo '<h3 class="py-5">Please Open A Register</h3>';
                }
                ?>
              </div>
            </div>
          </div>



        </div>
      </div>
    </div>

  <!-- Drop Cash Register Modal -->
  <div class="modal fade" id="dropcash" tabindex="-1" role="dialog" aria-labelledby="dropcash" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        
        <div class="modal-header">
          <h6 class="modal-title" id="exampleModalLongTitle">Payout</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container text-center">
          <?php
         if (!isset($_SESSION['register'])){
          echo '<h3 class="pb-5 text-center">Cannot Drop<br> No Register Selected</h3>';
        }else{
        $regToClose = $_SESSION['register'];
        $dropQuery = "SELECT register_id, drop_total, open_total FROM registers_table WHERE close_total is NULL AND register_num = $regToClose";
        $result = mysqli_query($conn, $dropQuery);
        $numrows = mysqli_num_rows($result);
        if ($numrows != 0) {
          while ($row = mysqli_fetch_assoc($result)) {
          echo '<div class="col text-center"><h5 class"pb-2">Drop Cash</h5><h6 class"pb-2 pr-1"> Opening Total: $'.$row['open_total'].'</h6></div>';
          


        echo '<div class="row">';

            


              echo'<div class="col mt-2">

                  
              </div>';

                echo '
                <form method="post" action="salescontrolpanel.php">
                <div id="bills" class=" col-5 float-right">';
                echo '<div class="col text-center"><h5 class"pb-3">Register '. $regToClose .'</h5></div>
                  <div class="form-inline ml-4">
                    <div>
                      <div class="input-group mb-1 mr-4">
                        <label class="control-label border bg-light" style="width:55px"><span class="input-group-addon px-2"> $100 </span></label>
                        <input type="text" maxlength="3" onblur="dropTotal()" name="bills3" class="form-control w-25" placeholder="">
                      </div>
                      <div class="input-group mb-1 mr-4">
                        <label class="control-label border bg-light" style="width:55px"><span class="input-group-addon px-2"> $50 </span></label>
                        <input type="text" maxlength="3" onblur="dropTotal()" name="bills3" class="form-control w-25" placeholder="">
                      </div>
                      <div class="input-group mb-1 mr-4">
                        <label class="control-label border bg-light" style="width:55px"><span class="input-group-addon px-2"> $20 </span></label>
                        <input type="text" maxlength="3" onblur="dropTotal()" name="bills3" class="form-control w-25" placeholder="">
                      </div>
                      <div class="input-group mb-1 mr-4">
                        <label class="control-label border bg-light" style="width:55px"><span class="input-group-addon px-2"> $10 </span></label>
                        <input type="text" maxlength="3" onblur="dropTotal()" name="bills3" class="form-control w-25" placeholder="">
                      </div>
                      <div class="input-group mb-1 mr-4">
                        <label class="control-label border bg-light" style="width:55px"><span class="input-group-addon px-2"> $5 </span></label>
                        <input type="text" maxlength="3" onblur="dropTotal()" name="bills3" class="form-control w-25" placeholder="">
                      </div>
                      <div class="input-group mb-1 mr-4">
                        <label class="control-label border bg-light" style="width:55px"><span class="input-group-addon px-2"> $1 </span></label>
                        <input type="text" maxlength="3" onblur="dropTotal()" name="bills3" class="form-control w-25" placeholder="">
                      </div>
                      <div class="input-group mb-1 mr-4">
                        <label class="control-label border bg-light" style="width:55px"><span class="input-group-addon px-2"> 25¢ </span></label>
                        <input type="text" maxlength="3" onblur="dropTotal()" name="bills3" class="form-control w-25" placeholder="">
                      </div>
                      <div class="input-group mb-1 mr-4">
                        <label class="control-label border bg-light" style="width:55px"><span class="input-group-addon px-2"> 10¢ </span></label>
                        <input type="text" maxlength="3" onblur="dropTotal()" name="bills3" class="form-control w-25" placeholder="">
                      </div>
                      <div class="input-group mb-1 mr-4">
                        <label class="control-label border bg-light" style="width:55px"><span class="input-group-addon px-2"> 5¢ </span></label>
                        <input type="text" maxlength="3" onblur="dropTotal()" name="bills3" class="form-control w-25" placeholder="">
                      </div>
                      <div class="input-group mb-1 mr-4">
                        <label class="control-label border bg-light" style="width:55px"><span class="input-group-addon px-2"> 1¢ </span></label>
                        <input type="text" maxlength="3" onblur="dropTotal()" name="bills3" class="form-control w-25" placeholder="">
                      </div>
                      <div class="input-group mb-1">
                        <label class="control-label border bg-white" style="width:60px"><span class="input-group-addon px-2"> Total </span></label>
                        <input name="dropsum" id="totaldrop" type="text" maxlength="10" class="form-control w-50" value="0.00" readonly>
                      </div>
                      
                    </div>
                    
                  </div>
                  
                </div>

                  <div class="input-group ml-5 pl-5">
                    <input class="ml-5" name="dropNote" placeholder="Note"/>
                  </div>
              </div>

              <input name="dropRegId" value="'.$row['register_id'].'" readonly hidden/>';
              
            }
          }

            

        echo '</div>


        </div>
        <div class="modal-footer">';

            echo '<button type="submit" name="submitdrop" class="btn btn-success">Submit Count</button>';
      } 
    ?>

           <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  </div> 
    

  </div>

  <!--END page content-->


  <script type="text/javascript">
    //scrollbar
    $(document).ready(function() {
      $("#sidebar").mCustomScrollbar({
        theme: "minimal"
      });

      $('#sidebarCollapse').on('click', function() {
        $('#sidebar, #content').toggleClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
      });

      //open modals
      $('#openreg', '#pickreg', '#switchreg').on('shown.bs.modal', function() {
        $('#myInput').trigger('focus')
      });
    });


    //clear openreg modal input fields on close
    $('#openreg').on('hidden.bs.modal', function() {
      $(this)
        .find("input,textarea,select")
        .val('')
        .end();
    })

    $('#closereg').on('hidden.bs.modal', function() {
      $(this)
        .find("input,textarea,select")
        .val('')
        .end();
    })

    $('#dropcash').on('hidden.bs.modal', function() {
      $(this)
        .find("input,textarea,select")
        .val('')
        .end();
    })

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


    function regswitch() {
      var request = new XMLHttpRequest();
      request.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          alert(this.responseText);
        }
      };
      request.open("GET", "ajax_request.php", true);
      request.send();
    }

    //method to open switch reg modal from other pages
    (function() {
      'use strict';

      function remoteModal(idModal) {
        var vm = this;
        vm.modal = $(idModal);

        if (vm.modal.length == 0) {
          return false;
        }

        if (window.location.hash == idModal) {
          openModal();
        }

        var services = {
          open: openModal,
          close: closeModal
        };

        return services;

        // method to open modal
        function openModal() {
          vm.modal.modal('show');
        }

        // method to close modal
        function closeModal() {
          vm.modal.modal('hide');
        }
      }
      Window.prototype.remoteModal = remoteModal;
    })();

    $(function() {
      window.remoteModal('#switchreg');
    });

    //add up input fields in open register
    function findTotal() {
      var arr = document.getElementsByName('bills');
      var tot = 0;
      for (var i = 0; i < arr.length; i++) {
        var subtot = 0;
        if (parseInt(arr[i].value)) {
          var item = parseInt(arr[i].value);
          switch (i) {
            case 0:
              subtot = item * 100;
              break;

            case 1:
              subtot = item * 50;
              break;

            case 2:
              subtot = item * 20;
              break;

            case 3:
              subtot = item * 10;
              break;

            case 4:
              subtot = item * 5;
              break;

            case 5:
              subtot = item * 1;
              break;

            case 6:
              subtot = item * .25;
              break;

            case 7:
              subtot = item * .10;
              break;

            case 8:
              subtot = item * .05;
              break;

            case 9:
              subtot = item * .01;
              break;
          }
        }
        tot += subtot;
      }
      document.getElementById('total').value = (Math.round(tot * 100) / 100).toFixed(2);
    }

    //add up input fields in close register // Didn't work with above method due to multiple forms with the same name
      function closeTotal() {
      var arr = document.getElementsByName('bills2');
      var tot = 0;
      for (var i = 0; i < arr.length; i++) {
        var subtot = 0;
        if (parseInt(arr[i].value)) {
          var item = parseInt(arr[i].value);
          switch (i) {
            case 0:
              subtot = item * 100;
              break;

            case 1:
              subtot = item * 50;
              break;

            case 2:
              subtot = item * 20;
              break;

            case 3:
              subtot = item * 10;
              break;

            case 4:
              subtot = item * 5;
              break;

            case 5:
              subtot = item * 1;
              break;

            case 6:
              subtot = item * .25;
              break;

            case 7:
              subtot = item * .10;
              break;

            case 8:
              subtot = item * .05;
              break;

            case 9:
              subtot = item * .01;
              break;
          }
        }
        tot += subtot;
      }
      document.getElementById('closetotal').value = (Math.round(tot * 100) / 100).toFixed(2);
    }

        //add up input fields in close register // Didn't work with above method due to multiple forms with the same name
        function dropTotal() {
      var arr = document.getElementsByName('bills3');
      var tot = 0;
      for (var i = 0; i < arr.length; i++) {
        var subtot = 0;
        if (parseInt(arr[i].value)) {
          var item = parseInt(arr[i].value);
          switch (i) {
            case 0:
              subtot = item * 100;
              break;

            case 1:
              subtot = item * 50;
              break;

            case 2:
              subtot = item * 20;
              break;

            case 3:
              subtot = item * 10;
              break;

            case 4:
              subtot = item * 5;
              break;

            case 5:
              subtot = item * 1;
              break;

            case 6:
              subtot = item * .25;
              break;

            case 7:
              subtot = item * .10;
              break;

            case 8:
              subtot = item * .05;
              break;

            case 9:
              subtot = item * .01;
              break;
          }
        }
        tot += subtot;
      }
      document.getElementById('totaldrop').value = (Math.round(tot * 100) / 100).toFixed(2);
    }
  </script>
</body>

</html>