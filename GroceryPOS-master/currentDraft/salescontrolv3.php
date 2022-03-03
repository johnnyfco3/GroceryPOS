<?php
session_start();
$name = $_SESSION['first_name'];
$format = '%s %s'."<br>";
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
  <link rel="stylesheet" href="userStyle.css">
  <!--Scrollbar Custom css -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">

  <!--font awesome js -->
  <script defer src="js/solid.js"></script>
  <script defer src="js/fontawesome.js"></script>

</head>

<body>



  <!--nav sidebar-->
  <nav id="sidebar">
    <div class="sidebar-header">
      <h1><a class="navbar-brand relative-top" href="indexDraft.php" id="navcard"><svg width="1.5em" height="1.5em"
            viewBox="0 0 16 16" class="bi bi-basket2-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M5.929 1.757a.5.5 0 1 0-.858-.514L2.217 6H.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h.623l1.844 6.456A.75.75 0 0 0 3.69 15h8.622a.75.75 0 0 0 .722-.544L14.877 8h.623a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1.717L10.93 1.243a.5.5 0 1 0-.858.514L12.617 6H3.383L5.93 1.757zM4 10a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm4-1a1 1 0 0 0-1 1v2a1 1 0 1 0 2 0v-2a1 1 0 0 0-1-1z" />
          </svg>
          MarketPOS</a></h1>
    </div>
    <ul class="list-unstyled components">
      <div class="card" id="navcard">
        <h5 class="text-center"> <?php echo $name ?> <svg width=".6em" height=".6em" viewBox="0 0 16 16"
            class="bi bi-caret-down-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
          </svg></h5>
      </div>
      <li class="active">
      <li>
        <a href="accounthomeDraft.php"><svg width=".8em" height=".8em" viewBox="0 0 16 16" class="bi bi-house-fill" fill="currentColor"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
            <path fill-rule="evenodd"
              d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
          </svg> Home</a>
      </li>
      </li>
      <li>
        <a href="salescontrolv3.php"><svg width=".8em" height=".8em" viewBox="0 0 16 16"
            class="bi bi-credit-card-2-back" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M14 3H2a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z" />
            <path
              d="M11 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1zM1 9h14v2H1V9z" />
          </svg> Sales</a>
      </li>
      <li>
        <a href="inventorycontrol.php"><svg width=".8em" height=".8em" viewBox="0 0 16 16" class="bi bi-inbox-fill"
            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M4.98 4a.5.5 0 0 0-.39.188L1.54 8H6a.5.5 0 0 1 .5.5 1.5 1.5 0 1 0 3 0A.5.5 0 0 1 10 8h4.46l-3.05-3.812A.5.5 0 0 0 11.02 4H4.98zm-1.17-.437A1.5 1.5 0 0 1 4.98 3h6.04a1.5 1.5 0 0 1 1.17.563l3.7 4.625a.5.5 0 0 1 .106.374l-.39 3.124A1.5 1.5 0 0 1 14.117 13H1.883a1.5 1.5 0 0 1-1.489-1.314l-.39-3.124a.5.5 0 0 1 .106-.374l3.7-4.625z" />
          </svg> Inventory</a>
      </li>
      <li>
        <a href="customercontrol.php"><svg width=".8em" height=".8em" viewBox="0 0 16 16" class="bi bi-people-fill"
            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
          </svg> Customers</a>
      </li>
      <li>
        <a href="#"><svg width=".8em" height=".8em" viewBox="0 0 16 16" class="bi bi-clipboard-data" fill="currentColor"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
            <path fill-rule="evenodd"
              d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
            <path
              d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z" />
          </svg> Reports</a>
      </li>

    </ul>
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
            <a class="navbar-brand" href="salescontrolv3.html"><svg width=".8em" height=".8em" viewBox="0 0 16 16"
                class="bi bi-credit-card-2-back" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M14 3H2a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z" />
                <path
                  d="M11 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1zM1 9h14v2H1V9z" />
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
        <a href="sale.html">
          <div class="card" id="pagecard">
            <div class="card-body text-center">
              <h5 class="card-title"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-cart-plus-fill"
                  fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM4 14a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm7 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                </svg></h5>
              <p class="card-text">New Sale</p>
            </div>
          </div>
        </a>

        <a href="#">
          <div class="card" id="pagecard">
            <div class="card-body text-center">
              <h5 class="card-title"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-reply"
                  fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M9.502 5.013a.144.144 0 0 0-.202.134V6.3a.5.5 0 0 1-.5.5c-.667 0-2.013.005-3.3.822-.984.624-1.99 1.76-2.595 3.876C3.925 10.515 5.09 9.982 6.11 9.7a8.741 8.741 0 0 1 1.921-.306 7.403 7.403 0 0 1 .798.008h.013l.005.001h.001L8.8 9.9l.05-.498a.5.5 0 0 1 .45.498v1.153c0 .108.11.176.202.134l3.984-2.933a.494.494 0 0 1 .042-.028.147.147 0 0 0 0-.252.494.494 0 0 1-.042-.028L9.502 5.013zM8.3 10.386a7.745 7.745 0 0 0-1.923.277c-1.326.368-2.896 1.201-3.94 3.08a.5.5 0 0 1-.933-.305c.464-3.71 1.886-5.662 3.46-6.66 1.245-.79 2.527-.942 3.336-.971v-.66a1.144 1.144 0 0 1 1.767-.96l3.994 2.94a1.147 1.147 0 0 1 0 1.946l-3.994 2.94a1.144 1.144 0 0 1-1.767-.96v-.667z" />
                </svg></h5>
              <p class="card-text">Continue Sale</p>
            </div>
          </div>
        </a>

        <a href="#">
          <div class="card" id="pagecard">
            <div class="card-body text-center">
              <h5 class="card-title"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-bag-x-fill"
                  fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M5.5 3.5a2.5 2.5 0 0 1 5 0V4h-5v-.5zm6 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM6.854 8.146a.5.5 0 1 0-.708.708L7.293 10l-1.147 1.146a.5.5 0 0 0 .708.708L8 10.707l1.146 1.147a.5.5 0 0 0 .708-.708L8.707 10l1.147-1.146a.5.5 0 0 0-.708-.708L8 9.293 6.854 8.146z" />
                </svg></h5>
              <p class="card-text">Return</p>
            </div>
          </div>
        </a>

      </div>


      <div class="card-deck">
        <p></p>
        <p>Register Controls</p>
        <div class="line"></div>
        <a href="#">
          <div class="card" id="pagecard">
            <div class="card-body text-center">
              <h5 class="card-title"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-caret-up-square"
                  fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                  <path fill-rule="evenodd"
                    d="M3.544 10.705A.5.5 0 0 0 4 11h8a.5.5 0 0 0 .374-.832l-4-4.5a.5.5 0 0 0-.748 0l-4 4.5a.5.5 0 0 0-.082.537z" />
                </svg></h5>
              <p class="card-text">Open Register</p>
            </div>
          </div>
        </a>

        <a href="#">
          <div class="card" id="pagecard">
            <div class="card-body text-center">
              <h5 class="card-title"><svg width="2em" height="2em" viewBox="0 0 16 16"
                  class="bi bi-caret-down-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm4 4a.5.5 0 0 0-.374.832l4 4.5a.5.5 0 0 0 .748 0l4-4.5A.5.5 0 0 0 12 6H4z" />
                </svg></h5>
              <p class="card-text">Close Register</p>
            </div>
          </div>
        </a>

        <a href="#">
          <div class="card" id="pagecard">
            <div class="card-body text-center">
              <h5 class="card-title"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-left-right"
                  fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5zm14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5z" />
                </svg></h5>
              <p class="card-text">Switch Register</p>
            </div>
          </div>
        </a>

        <a href="#">
          <div class="card" id="pagecard">
            <div class="card-body text-center">
              <h5 class="card-title"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-cash-stack"
                  fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M14 3H1a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1h-1z" />
                  <path fill-rule="evenodd"
                    d="M15 5H1v8h14V5zM1 4a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H1z" />
                  <path
                    d="M13 5a2 2 0 0 0 2 2V5h-2zM3 5a2 2 0 0 1-2 2V5h2zm10 8a2 2 0 0 1 2-2v2h-2zM3 13a2 2 0 0 0-2-2v2h2zm7-4a2 2 0 1 1-4 0 2 2 0 0 1 4 0z" />
                </svg></h5>
              <p class="card-text">Drop Cash</p>
            </div>
          </div>
        </a>

      </div>

      <p></p>

      <div class="card-deck">
        <p>Recent Activity</p>
        <div class="line"></div>
        <a href="#">
          <div class="card" id="pagecard">
            <div class="card-body text-center">
              <h5 class="card-title"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-clock-history"
                  fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z" />
                  <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z" />
                  <path fill-rule="evenodd"
                    d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
                </svg></h5>
              <p class="card-text">Sales History</p>
            </div>
          </div>
        </a>

      </div>
    </div>
  </div>

  <!--END page content-->

  <!-- bootstrap popper js-->
  <script src="js/popper.min.js"></script>
  <!-- bootstrap ja -->
  <script src="js/bootstrap.min.js"></script>
  <!--jquery -->
  <script src="js/jquery-3.3.1.slim.min.js"></script>
  <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function () {
      $("#sidebar").mCustomScrollbar({
        theme: "minimal"
      });

      $('#sidebarCollapse').on('click', function () {
        $('#sidebar, #content').toggleClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
      });
    });
  </script>
</body>

</html>