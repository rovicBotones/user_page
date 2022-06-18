<?php 
  require('settings.php');

  session_start();

  /* Functions */
  function pathTo($destination) {
    echo "<script>window.location.href = '$destination.php'</script>";
  }

  if ($_SESSION['status'] == 'invalid' || empty($_SESSION['status'])) {
    /* Set Default Invalid */
    $_SESSION['status'] = 'invalid';
  }

  if ($_SESSION['status'] == 'valid') {
    pathTo('login');
  }
  
  if (isset($_POST['submit'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (empty($username) || empty($password)) {
      echo "Enter Your Credentials";
    } else {
      $queryValidate = "SELECT * FROM tbl_admin WHERE admin_username = '$username' AND admin_password = '$password'";
      $sqlValidate = mysqli_query($variable, $queryValidate);
      $rowValidate = mysqli_fetch_array($sqlValidate);

      if (mysqli_num_rows($sqlValidate) > 0) {
        $_SESSION['status'] = 'valid';
        $_SESSION['username'] = //$rowValidate['username'];
        
        pathTo('login');
       
      } else {
        $_SESSION['status'] = 'invalid';

        echo 'Invalid Credential';
      }
    }
  }
?>
<html>
    <head>
    <link rel="stylesheet" href="style.css">
    
    <title>Admin Login</title>
   
    
</head>
<body>
    
    
    <form action="index.php" method="post">
    
        <div>
            <table class="form">
                <tr>
                    <td>
                       <input type="text" placeholder="Username" name="username">
                    </td>
                </tr>
                <tr>
                        <td>
                           <input type="password" placeholder="Password" name="password">
                        </td>
                </tr>
                <tr>
                    <td>
                        <input name="submit" type="submit" value="Submit" id="submit" onClick="clearform()"> 
                    </td> 
                </tr>

                <br><br>

                <tr>
                    <td>
                       <!-- <p>
                            <a href="register.php">Register Here</a>
                        </p> -->
                    </td>
                </tr>
                </div>


            </table>
        
    
    </form>
    </table>
  




  <?php
  
 //include 'checkLogin.php';
  ?>
   
   
</body>

</html>
