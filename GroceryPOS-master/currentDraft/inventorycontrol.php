<!DOCTYPE html>
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

  <title>Inventory | MarketPOS</title>

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
      <li class="active">
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


    <!--location navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" id="locnav">
      <div class="container-fluid">

        <button type="button" id="sidebarCollapse" class="btn btn-success">
          <i class="fas fa-align-left"></i>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="nav navbar-nav mr-auto">
            <a class="navbar-brand" href="inventorycontrol.php"><svg width=".8em" height=".8em" viewBox="0 0 16 16" class="bi bi-inbox-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4.98 4a.5.5 0 0 0-.39.188L1.54 8H6a.5.5 0 0 1 .5.5 1.5 1.5 0 1 0 3 0A.5.5 0 0 1 10 8h4.46l-3.05-3.812A.5.5 0 0 0 11.02 4H4.98zm-1.17-.437A1.5 1.5 0 0 1 4.98 3h6.04a1.5 1.5 0 0 1 1.17.563l3.7 4.625a.5.5 0 0 1 .106.374l-.39 3.124A1.5 1.5 0 0 1 14.117 13H1.883a1.5 1.5 0 0 1-1.489-1.314l-.39-3.124a.5.5 0 0 1 .106-.374l3.7-4.625z" />
              </svg> Inventory</a>
          </ul>
        </div>
      </div>
    </nav>


    <!--control buttons-->
    <div class="wrapper" id="controlscreen">
      <div class="card-deck">
        <p>Inventory Items</p>
        <div class="line"></div>
        <a class="btn" href="productview.php">
          <div class="card" id="pagecard">
            <div class="card-body text-center">
              <h5 class="card-title"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                  <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                </svg></h5>
              <span class="card-text">Search Item</span>
            </div>
          </div>
        </a>

        <a class="btn" href="productindex.php">
          <div class="card" id="pagecard">
            <div class="card-body text-center">
              <h5 class="card-title"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-plus-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                </svg></h5>
              <span class="card-text">New Item</span>
            </div>
          </div>
        </a>
        <a class="btn" href="categoryview.php">
          <div class="card" id="pagecard">
            <div class="card-body text-center">
              <h5 class="card-title"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-layout-three-columns" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M0 2.5A1.5 1.5 0 0 1 1.5 1h13A1.5 1.5 0 0 1 16 2.5v11a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-11zM1.5 2a.5.5 0 0 0-.5.5v11a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-11a.5.5 0 0 0-.5-.5h-13z" />
                  <path fill-rule="evenodd" d="M5 15V1h1v14H5zm5 0V1h1v14h-1z" />
                </svg></h5>
              <span class="card-text">Categories</span>
            </div>
          </div>
        </a>

        <a class="btn" href="brandsview.php">
          <div class="card" id="pagecard">
            <div class="card-body text-center">
              <h5 class="card-title"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-globe2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855-.143.268-.276.56-.395.872.705.157 1.472.257 2.282.287V1.077zM4.249 3.539a8.372 8.372 0 0 1-1.198-.49 7.01 7.01 0 0 1 2.276-1.52 6.7 6.7 0 0 0-.597.932 8.854 8.854 0 0 0-.48 1.079zM3.509 7.5H1.017A6.964 6.964 0 0 1 2.38 3.825c.47.258.995.482 1.565.667A13.4 13.4 0 0 0 3.508 7.5zm1.4-2.741c.808.187 1.681.301 2.591.332V7.5H4.51c.035-.987.176-1.914.399-2.741zM8.5 5.09V7.5h2.99a12.342 12.342 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5H7.5v2.409c-.91.03-1.783.145-2.591.332a12.343 12.343 0 0 1-.4-2.741zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741H8.5zm-3.282 3.696A12.63 12.63 0 0 1 7.5 11.91v3.014c-.67-.204-1.335-.82-1.887-1.855a7.776 7.776 0 0 1-.395-.872zm.11 2.276a6.696 6.696 0 0 1-.598-.933 8.853 8.853 0 0 1-.481-1.079 8.38 8.38 0 0 0-1.198.49 7.01 7.01 0 0 0 2.276 1.522zm-1.383-2.964a9.083 9.083 0 0 0-1.565.667A6.963 6.963 0 0 1 1.018 8.5h2.49a13.36 13.36 0 0 0 .437 3.008zm6.728 2.964a7.009 7.009 0 0 0 2.275-1.521 8.376 8.376 0 0 0-1.197-.49 8.853 8.853 0 0 1-.481 1.078 6.688 6.688 0 0 1-.597.933zM8.5 11.909c.81.03 1.577.13 2.282.287-.12.312-.252.604-.395.872-.552 1.035-1.218 1.65-1.887 1.855V11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.963 6.963 0 0 0 14.982 8.5h-2.49a13.36 13.36 0 0 1-.437 3.008zM14.982 7.5h-2.49a13.361 13.361 0 0 0-.437-3.008 9.123 9.123 0 0 0 1.565-.667A6.963 6.963 0 0 1 14.982 7.5zM11.27 2.461c.177.334.339.694.482 1.078a8.368 8.368 0 0 0 1.196-.49 7.01 7.01 0 0 0-2.275-1.52c.218.283.418.597.597.932zm-.488 1.343c-.705.157-1.473.257-2.282.287V1.077c.67.204 1.335.82 1.887 1.855.143.268.276.56.395.872z" />
                </svg></h5>
              <span class="card-text">Brands</span>
            </div>
          </div>
        </a>


      </div>


      <div class="card-deck">
        <p></p>
        <p>Vendor Controls</p>
        <div class="line"></div>
        <a class="btn" href="purchaseorders.php">
          <div class="card" id="pagecard">
            <div class="card-body text-center">
              <h5 class="card-title"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-cart-check-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM4 14a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm7 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm.354-7.646a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                </svg></h5>
              <span class="card-text">Purchase Orders</span>
            </div>
          </div>
        </a>

        <a class="btn" href="pickvendor.php">
          <div class="card" id="pagecard">
            <div class="card-body text-center">
              <h5 class="card-title"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-clipboard-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                  <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3zM8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z" />
                </svg></h5>
              <span class="card-text">New Order</span>
            </div>
          </div>
        </a>

        <a class="btn" href="vendorview.php">
          <div class="card" id="pagecard">
            <div class="card-body text-center">
              <h5 class="card-title"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-list-stars" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5z" />
                  <path d="M2.242 2.194a.27.27 0 0 1 .516 0l.162.53c.035.115.14.194.258.194h.551c.259 0 .37.333.164.493l-.468.363a.277.277 0 0 0-.094.3l.173.569c.078.256-.213.462-.423.3l-.417-.324a.267.267 0 0 0-.328 0l-.417.323c-.21.163-.5-.043-.423-.299l.173-.57a.277.277 0 0 0-.094-.299l-.468-.363c-.206-.16-.095-.493.164-.493h.55a.271.271 0 0 0 .259-.194l.162-.53zm0 4a.27.27 0 0 1 .516 0l.162.53c.035.115.14.194.258.194h.551c.259 0 .37.333.164.493l-.468.363a.277.277 0 0 0-.094.3l.173.569c.078.255-.213.462-.423.3l-.417-.324a.267.267 0 0 0-.328 0l-.417.323c-.21.163-.5-.043-.423-.299l.173-.57a.277.277 0 0 0-.094-.299l-.468-.363c-.206-.16-.095-.493.164-.493h.55a.271.271 0 0 0 .259-.194l.162-.53zm0 4a.27.27 0 0 1 .516 0l.162.53c.035.115.14.194.258.194h.551c.259 0 .37.333.164.493l-.468.363a.277.277 0 0 0-.094.3l.173.569c.078.255-.213.462-.423.3l-.417-.324a.267.267 0 0 0-.328 0l-.417.323c-.21.163-.5-.043-.423-.299l.173-.57a.277.277 0 0 0-.094-.299l-.468-.363c-.206-.16-.095-.493.164-.493h.55a.271.271 0 0 0 .259-.194l.162-.53z" />
                </svg></h5>
              <span class="card-text">Vendor List</span>
            </div>
          </div>
        </a>

        <a class="btn" href="vendorindex.php">
          <div class="card" id="pagecard">
            <div class="card-body text-center">
              <h5 class="card-title"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-plus-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                </svg></h5>
              <span class="card-text">New Vendor</span>
            </div>
          </div>
        </a>

<!--         <a class="btn" href="#">
          <div class="card" id="pagecard">
            <div class="card-body text-center">
              <h5 class="card-title"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-book-half" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M8.5 2.687v9.746c.935-.53 2.12-.603 3.213-.493 1.18.12 2.37.461 3.287.811V2.828c-.885-.37-2.154-.769-3.388-.893-1.33-.134-2.458.063-3.112.752zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                </svg></h5>
              <span class="card-text">Vendor Catalogs</span>
            </div>
          </div>
        </a> -->

      </div>
<!-- 
      <p></p>

      <div class="card-deck">
        <p>Settings</p>
        <div class="line"></div> -->

<!--         <a class="btn" href="#">
          <div class="card" id="pagecard">
            <div class="card-body text-center">
              <h5 class="card-title"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-upc" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M3 4.5a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-7zm3 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7z" />
                </svg></h5>
              <span class="card-text">Labels</span>
            </div>
          </div>
        </a> -->
<!--         <a class="btn" href="#">
          <div class="card" id="pagecard">
            <div class="card-body text-center">
              <h5 class="card-title"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-tags-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M3 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 7.586 1H3zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                  <path d="M1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1v5.086z" />
                </svg></h5>
              <span class="card-text">Tags</span>
            </div>
          </div>
        </a> -->
<!-- 
      </div> -->
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
          $(this).addClass('shadow').css('cursor', 'pointer');
        },
        function() {
          $(this).removeClass('shadow');
        }
      );
    });
  </script>
</body>

</html>