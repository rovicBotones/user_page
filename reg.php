
<head>
   
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include ("settings.php");
$username=$_POST['username'];
$password=$_POST['password'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];

$sql = "INSERT INTO`tbl_monitoringauto` (`username`, `password`, `firstname`, `lastname`) VALUES ('$username','$password','$firstname','$lastname')";


if (empty($username) || empty($password) || empty($firstname) || empty($lastname)) {
    echo "<script type='text/javascript'>alert('You must Enter Your Details!');</script>";
  
}
else {
    $result=mysqli_query($variable, $sql);
    
    echo "<script type='text/javascript'>alert('Register succesfully');</script>";
}
   



?>
<a href="index.php">Back</a>
</body>
</html>

