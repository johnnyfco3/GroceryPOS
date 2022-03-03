<?php
  //Load connecter
  include_once('connect-mysql.php');

  if(isset($_POST['submit']))  {
    $myemailName = $_POST['userEmail'];
    $myPassword = $_POST['userPassword'];
    
    $sql = "SELECT 'customer_id' FROM customer_id WHERE 'username' = '$myemailName' and 'password' = '$myPassword'";
    $result = mysql_query($dbconn,$sql);
    $row = mysqli_fetch_array($result,MYSQL_ASSOC);

    $count = mysql_num_rows($result);
    function redirect($url){
      ob_start();
      header('Location: '.$url);
      ob_end_flush();
      die();
    }
    if($count == 1)
    {
      session_register("myemailName");
      $_SESSION['myemailnName'] = $myemailName;
      redirect('http://localhost/grocerysite/currentDraft/accountHomeDraft.php');
    }else{
      $error = "Your Login Name or Password is invalid";
    }
  }
?>
 