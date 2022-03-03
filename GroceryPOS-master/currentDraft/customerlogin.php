<?php
include_once('config.php');
include_once('sidebarconnect.php');
// Initialize the session
ob_start();
// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
  header("Location: accountHomeDraft.php");
  exit;
}



// Define variables and initialize with empty values
$email = $password = "";
$email_err = $password_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Check if email is empty
  if (empty(trim($_POST["email"]))) {
    $email_err = "Please enter email.";
  } else {
    $email = trim($_POST["email"]);
    $email = mysqli_real_escape_string($conn, $email);
  }

  // Check if password is empty
  if (empty(trim($_POST["password"]))) {
    $password_err = "Please enter your password.";
  } else {
    $mypassword = trim($_POST["password"]);
    $mypassword = mysqli_real_escape_string($conn, $mypassword);
  }

    // Validate credentials
    if (empty($email_err) && empty($password_err))
    {
    $query = mysqli_query($conn,"SELECT * FROM customer_info WHERE email = '$email' AND password = '$mypassword'");
        while($numrows = mysqli_fetch_assoc($query))
        {
			$first_name = $numrows["first_name"];
			$first_name = mysqli_real_escape_string($conn,$first_name);
    		$last_name =  $numrows["last_name"];
            $last_name = mysqli_real_escape_string($conn,$last_name);
    	}
		$_SESSION["email"] = $email;
		$_SESSION["first_name"] = $first_name;
  		$_SESSION["last_name"] = $last_name;
		header("Location: customerHome.php");
		ob_end_flush();		
	}    
}
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
            <a class="nav-link" href="AdminsignupDraft.php">Sign Up</a>
          </li>

        </ul>

      </div>
    </div>
  </nav>
  <!-- End of Navigation Bar -->


  <div class="container-fluid text-center">
    <div class="row content">
      <div class="col-sm-3">
      </div>


      <div class="col-sm-6 text-left">



        <div class="card text-white bg-dark" id="loginitems" style="margin-top: 50px;">
          <div class="card-header text-white bg-success">Customers Login</div><br>
          <div class="card-title text-center">
            <h1 id="brand"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-basket2-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.929 1.757a.5.5 0 1 0-.858-.514L2.217 6H.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h.623l1.844 6.456A.75.75 0 0 0 3.69 15h8.622a.75.75 0 0 0 .722-.544L14.877 8h.623a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1.717L10.93 1.243a.5.5 0 1 0-.858.514L12.617 6H3.383L5.93 1.757zM4 10a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm4-1a1 1 0 0 0-1 1v2a1 1 0 1 0 2 0v-2a1 1 0 0 0-1-1z" /></svg>
              <span style="color: #00b300">Market</span>POS</h1>

          </div><br>

          <div class="card-body">
            <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
              <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label style="font-weight:500;" for="email">Email</label>
                <input type="email" class="form-control" placeholder="Enter email address" name="email" value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $email_err; ?></span>
              </div>
              <div class="form-group" <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>>
                <div class="form-row">
                 <div class="col-8"> <label style="font-weight:500;" for="password">Password</label></div>
                 <div class="col"><a style="font-size:.8em;" class="text-right" href="">Forgot Password?</a></div></div> 
                <input type="password" class="form-control" placeholder="Password" name="password">
                <span class="help-block"><?php echo $password_err; ?></span>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="remember">
                <label class="form-check-label" name="remember">Remember me</label>
              </div>

              <div class="text-center">
                <button type="submit" style="padding: 10px" class="btn-lg btn-success"> Log In</button></div><br>
              <p>Don't have an account? <a href="customersignup.php">Sign up now</a>.</p>
            </form>
          </div>
        </div>
      </div>

  <footer class="container-fluid fixed-bottom">
  </footer>

</body>

</html>