<?php
include_once('config.php');
// Initialize the session
ob_start();
// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
  header("Location: salescontrolpanel.php");
  exit;
}

// Define variables and initialize with empty values
$email = $password = "";
$emsg = $msg = "";

// Processing form data when form is submitted
if (isset($_POST["login"])) {

  // Check if email is empty
  if (empty(trim($_POST["email"]))) {
    $emsg = "Please enter email.";
  } else {
    $email = trim($_POST["email"]);
    $email = mysqli_real_escape_string($conn, $email);
  }

  // Check if password is empty
  if (empty(trim($_POST["password"]))) {
    $msg = "Please enter your password.";
  } else {
    $mypassword = trim($_POST["password"]);
    $mypassword = mysqli_real_escape_string($conn, $mypassword);
  }

  // Validate credentials
  if (empty($emsg) && empty($msg)) {
    $query = "SELECT email, password, employee_id, user_type FROM employee_info WHERE email = '$email' AND password = '$mypassword'";
    $result = mysqli_query($conn, $query);
    $numrows = mysqli_num_rows($result);
    if ($numrows != 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        $emp_id = $row['employee_id'];
      }


      $_SESSION["emp_id"] = $emp_id;
      $_SESSION["loggedin"] = true;
      $_SESSION["init"] = 0;
      $_SESSION['timeout'] = time();
      if (!empty($_POST["remember"])) {
        setcookie("user_login", $_POST["email"], time() + (10 * 365 * 24 * 60 * 60));
        setcookie("user_password", $_POST["password"], time() + (10 * 365 * 24 * 60 * 60));
      } else {
        if (isset($_COOKIE["user_login"])) {
          setcookie("user_login", "");
        }
        if (isset($_COOKIE["user_password"])) {
          setcookie("user_password", "");
        }
      }
      header("Location: salescontrolpanel.php");
      ob_end_flush();
    } else {
      $msg = "Invalid Email or Password.";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Login | MarketPOS</title>

  <!--bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!--our css -->
  <link rel="stylesheet" href="styleDraft.css">
  <!--Scrollbar Custom css -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">

  <!--font awesome js -->
  <script defer src="js/solid.js"></script>
  <script defer src="js/fontawesome.js"></script>

  <!--jquery -->
  <script src="js/jquery-3.5.1.js"></script>
  <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
  <!-- bootstrap popper js-->
  <script src="js/popper.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.min.js"></script>

</head>

<body class="bg-light">


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
          <li class="nav-item ml-auto">
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
          <li class="nav-item ml-auto active">
            <a class="nav-link" href="loginDraft.php">Login</a>
          </li>

          <li class="nav-item ml-auto">
            <a class="nav-link" href="AdminsignupDraft.php">Sign Up</a>
          </li>

        </ul>

      </div>
    </div>
  </nav>
  <!-- End of Navigation Bar -->


  <div class="container-fluid text-center">
    <div class="row content">
      <div class="col-sm-4">
      </div>


      <div class="col-sm-4 text-left">



        <div class="card bg-white" id="loginitems" style="margin-top: 50px;">
          <div class="card-header">
            <h6>MarketPOS Retail</h6>
          </div><br>
          <div class="card-title text-center">
            <h1 id="brand"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-basket2-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.929 1.757a.5.5 0 1 0-.858-.514L2.217 6H.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h.623l1.844 6.456A.75.75 0 0 0 3.69 15h8.622a.75.75 0 0 0 .722-.544L14.877 8h.623a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1.717L10.93 1.243a.5.5 0 1 0-.858.514L12.617 6H3.383L5.93 1.757zM4 10a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm4-1a1 1 0 0 0-1 1v2a1 1 0 1 0 2 0v-2a1 1 0 0 0-1-1z" /></svg>
              <span style="color: #00b300">Market</span>POS</h1>

          </div><br>

          <div class="card-body">
            <form class="form-horizontal" action="loginDraft.php" method="post">
              <div class="form-group <?php echo (!empty($emsg)) ? 'has-error' : ''; ?>">
                <label style="font-weight:500;" for="email">Email</label>
                <input type="email" class="form-control" placeholder="email@address.com" name="email" value="<?php if (isset($_COOKIE["user_login"])) {
                                                                                                                echo $_COOKIE["user_login"];
                                                                                                              } ?>">
                <span class="help-block"><?php echo $emsg; ?></span>
              </div>
              <div class="form-group" <?php echo (!empty($msg)) ? 'has-error' : ''; ?>>
                <div class="form-row">
                  <div class="col-8"> <label style="font-weight:500;" for="password">Password</label></div>
                  <div class="col"><a style="font-size:.8em;" class="text-right" href="">Forgot Password?</a></div>
                </div>
                <input type="password" class="form-control" placeholder="********" name="password" value="<?php if (isset($_COOKIE["user_password"])) {
                                                                                                            echo $_COOKIE["user_password"];
                                                                                                          } ?>">
                <span class="help-block"><?php echo $msg; ?></span>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="remember" <?php if (isset($_COOKIE["user_login"])) { ?> checked <?php } ?>>
                <label class="form-check-label" name="remember">Remember me</label>
              </div>

              <div class="text-center">
                <button name="login" type="submit" style="padding: 10px" class="btn-lg btn-success"> Log In</button></div><br>
              <p>Don't have an account? <a href="AdminsignupDraft.php">Sign up now</a>.</p>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>

  <footer class="container-fluid fixed-bottom">
  </footer>

</body>

</html>