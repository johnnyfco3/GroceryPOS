<!--This file does not need any PHP since its the home page, unless we want to load something from database-->

<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Sales | MarketPOS</title>

  <!--bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!--our css -->
  <link rel="stylesheet" href="styleDraft.css">
  <!--jquery scrollbar css -->
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

<body id="fixedBckg">


 
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


  <!-- Image Carousal -->
  <div id="upPad">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <!--Information needed to where the javascript should take the slide in what order-->
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <!--Actual item list that contains the album art along with alt tags in case the images don't load-->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="media/credit.jpg" width="500" height="500" class="d-block mx-auto" alt="music">
          <div class="carousel-caption d-none d-md-block">
            <h5>Secure Payments</h5>
            <p>be able to pay online using credit card!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="media/coding.jpg" width="1000" height="500" class="d-block mx-auto" alt="decor">
          <div class="carousel-caption d-none d-md-block">
            <h5>Clound Based Software</h5>
            <p>log in from anywhere around your store, from any device! </p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="media/desk.jpg" width="1000" height="500" class="d-block mx-auto" alt="food">
          <div class="carousel-caption d-none d-md-block">
            <h5>Portable</h5>
            <p>plan your business and get started today!</p>
          </div>
        </div>
      </div>
      <!--Buttons added to the carousel to go forward and backward in the order specified-->
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <!-- End of Image Carousal -->

  <!--Jumbotron showing mission assignment-->
  <div id="centerPad">
    <div class="jumbotron">
      <h1 class="display-4">Market Place Point of Sales System</h1>
      <p class="lead">a convinient, cloud based, pos system</p>
      <hr class="my-4">
      <p>With our design techniques, you'll be able to store the make, model, and description of all the items in your inventory. You'll also be able to store employee data and assign to each employee with a secure account. To ensure that your business is running smoothly, daily ZResports are printed at the closing of every shift while also getting the chance to review profits and losses, and you'll get the choice to allow grouping of reports to match sales to a tax calendar of payments. You don't even have to worry about security, our built in system runs in accordance with the Financial Regulatory Compliance, with the ability to connect to on line credit card checking and handling,
        Safe guarding any customer data stored for marketing, and provide the safety of a secure login. Just give us a try to find out! </p>
      <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </div>
  </div>
  <!--End of Jumbotron-->

  <!--Short Description of Software-->
  <div id="upPad" class="container-fluid padding">
    <div class="row welcome text-center">
      <div class="col-12">
        <h1 class="display-4">E-Vendor</h1>
      </div>
      <hr>
      <div class="col-12">
        <p class="lead">A Point of Sales system with the ability to keep track of data sales,
          store vendor account information,</br> and even monitor employee activity. </p>
      </div>
    </div>
  </div>
  <!--End of Short Description-->

  <!--Technology infromation-->
  <div id="upPad" class="container-fluid padding">
    <div class="row text-center padding">
      <div class="col-xs-12 col-sm-6 col-md-4">
        <i class="fas fa-server"></i>
        <h4>PHP</h4>
        <p>Server Side requests to online </br>database ran by PHP</p>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <i class="fas fa-bold"></i>
        <h4>BootStrap</h4>
        <p>Front End designed with Bootstrap </br>CSS library</p>
      </div>
      <div class="col-sm-12 col-md-4">
        <i class="fas fa-database"></i>
        <h4>MySQL</h4>
        <p>Data held and securely stored</br> in the MySQL Database</p>
      </div>
    </div>
    <hr class="my-4">
  </div>
  <!--end of tech info-->

  <!--Team Credentials-->
  <div id="upPad" class="container-fluid padding">
    <div class="row text-center padding">
      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="..." class="card-img" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Alex Carlson</h5>
                <p class="card-text">Providing first hand experience with Point of Sale Systems, Backend aswell as Frontend Web Development. </p>
                <p class="card-text"><small class="text-muted"></small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="..." class="card-img" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Cameron Dyas</h5>
                <p class="card-text">Supplying the connection between our database and our online system using the latest coding techniques with PHP</p>
                <p class="card-text"><small class="text-muted"></small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="..." class="card-img" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Johnny Tejada</h5>
                <p class="card-text">Having created the database design, letting us pull and update a plethora of information from it through SQL</p>
                <p class="card-text"><small class="text-muted"></small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="..." class="card-img" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Charles Agudelo</h5>
                <p class="card-text">Creating dynamic frontend websites, aswell as providing it with functionality using Javascript</p>
                <p class="card-text"><small class="text-muted"></small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr class="my-4">
  </div>
  <!--End of Credentials-->

  <!--<script src="" async defer></script>-->

</body>

</html>