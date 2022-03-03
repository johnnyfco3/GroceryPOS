<?php
include_once ('config.php');
  $query = "select * from employee_id";
  $result = mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="eng">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width-device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <title>Employee Sign In Records</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col m-auto">
        <div class="card mt-5">
          <table class="table table-bordered">
            <tr>
              <td> ID </td>
              <td> Email </td>
              <td> Password </td>
              <td> Pin </td>
              <td> Employee ID </td>
            </tr>

            <?php
              while($row=mysqli_fetch_assoc($result))
              {
                $ID = $row['employee_id'];
                $Email = $row['email'];
                $Password = $row['password'];
                $PinNumber = $row['pin_number'];
                $EmployeeID = $row['employee_information'];

            ?>
              <tr>
                <td><?php echo $ID ?></td>
                <td><?php echo $Email ?></td>
                <td><?php echo $Password ?></td>
                <td><?php echo $PinNumber ?></td>
                <td><?php echo $EmployeeID ?></td>
                <td><a href ="employeesignindelete.php?Del=<?php echo $ID ?>">Delete</a></td>
              </tr>
            <?php
              }
            ?>

          </table>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
