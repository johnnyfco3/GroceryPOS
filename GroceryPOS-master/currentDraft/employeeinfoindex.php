<!DOCTYPE html>
<html>
<head>
  <title>Employee Information</title>
</head>
<body>
  <?php date_default_timezone_set("America/New_York"); ?>
            <h3> Employee Information </h3>
            <form action="employeeinfoinsert.php" method="post">
              <input type="text" placeholder=" First Name " name="fname">
              <input type="text" placeholder=" Middle Iniial " name="mi">
              <input type="text" placeholder=" Last Name " name="lname">
              <input type="number" placeholder=" User ID " name="id">
              <input type="number" placeholder=" Phone Number " name="number">
              <input type="number" placeholder=" SSN " name="ssn">
              <input type="text" placeholder=" Street Address " name="street">
              <input type="text" placeholder=" City " name="city">
              <input type="text" placeholder=" State " name="state">
              <input type="number" placeholder=" Zip Code " name="zip">
              Start Date <input type="date" placeholder=" dd-mm-yyyy " name="start">
              End Date <input type="date" placeholder=" dd-mm-yyyy " name="end">
              <button name="submit">Submit</button>
            </form>
</body>
</html>
