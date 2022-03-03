<?php
include_once('config.php');
include_once('sidebarconnect.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Customer Login| MarketPOS</title>

  <!--bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!--our css -->
  <link rel="stylesheet" href="styleDraft.css">
  <!--jquery scrollbar css -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">

  <!--font awesome js -->
  <script defer src="js/solid.js"></script>
  <script defer src="js/fontawesome.js"></script>

</head>

<body>

  <!-- bootstrap popper js-->
  <script src="js/popper.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.min.js"></script>
  <!--jquery -->
  <script src="js/jquery-3.3.1.slim.min.js"></script>
  <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- Navigation Bar -->

<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
    <div class="container-fluid">
      <h3 id="brand"><a class="navbar-brand" href="indexDraft.php"><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-basket2-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M5.929 1.757a.5.5 0 1 0-.858-.514L2.217 6H.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h.623l1.844 6.456A.75.75 0 0 0 3.69 15h8.622a.75.75 0 0 0 .722-.544L14.877 8h.623a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1.717L10.93 1.243a.5.5 0 1 0-.858.514L12.617 6H3.383L5.93 1.757zM4 10a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm4-1a1 1 0 0 0-1 1v2a1 1 0 1 0 2 0v-2a1 1 0 0 0-1-1z" /></svg>
          <span style="color: #00b300">Market</span>POS</a></h3>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <span class="navbar-text" style="margin-left: 30px;">
            Customers
          </span>
          <div class="col v-divider"></div>
          <li class="nav-item ml-auto active">
            <a class="nav-link" href="customerlogin.php">Login</a>
          </li>
          <li class="nav-item ml-auto">
            <a class="nav-link" href="customersignup.php">Sign Up</a>
          </li>

        </ul>
        <ul class="navbar-nav">
          <span class="navbar-text">
            Retail Services
          </span>
          <div class="col v-divider"></div>
          <li class="nav-item ml-auto">
            <a class="nav-link" href="loginDraft.php">Login</a>
          </li>

          <li class="nav-item ml-auto">
            <a class="nav-link" href="question.php">Sign Up</a>
          </li>

        </ul>

      </div>
    </div>
  </nav>
  <!-- End of Navigation Bar -->


  <div class="container-fluid text-center">
    <div class="row content">
      <div class="col-sm-3 sidenav">
      </div>


      <div class="col-sm-6 text-left">



        <div class="card text-white bg-dark" id="loginitems" style="margin-top: 10%;">
          <div class="card-header text-white bg-success">Customers Sign Up</div><br>
          <div class="card-title text-center">
            <h1 id="brand"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-basket2-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.929 1.757a.5.5 0 1 0-.858-.514L2.217 6H.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h.623l1.844 6.456A.75.75 0 0 0 3.69 15h8.622a.75.75 0 0 0 .722-.544L14.877 8h.623a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1.717L10.93 1.243a.5.5 0 1 0-.858.514L12.617 6H3.383L5.93 1.757zM4 10a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm4-1a1 1 0 0 0-1 1v2a1 1 0 1 0 2 0v-2a1 1 0 0 0-1-1z" /></svg>
              <span style="color: #00b300">Market</span>POS</h1>

          </div><br>

          <div class="form-group">
            <form class="form-horizontal" method="post" action="customersignupInsert.php">
              <div class="form-group">
                <input name="fname" class="form-control" placeholder="First Name">
              </div>
              <div class="form-group">
                <input name="lname" class="form-control" placeholder="Last Name">
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email Address">
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Create a Password">
              </div>
              <div class="form-group">
                <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="phone" class="form-control" placeholder="Phone Number">
              </div>
              <div class="form-group">
                <input name="street" class="form-control" placeholder="Street Address">
              </div>
              <div class="form-group">
                <input name="city" class="form-control" placeholder="City">
              </div>
              <div class="form-group">
                <input name="state" class="form-control" placeholder="State">
              </div>
              <div class="form-group">
                <input name="zip" class="form-control" placeholder="Zip Code">
              </div>
              <div class="col text-center">
                <button type="submit" class="btn-lg btn-success">Get Started</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <footer class="container-fluid fixed-bottom">
    </footer>

</body>

</html>