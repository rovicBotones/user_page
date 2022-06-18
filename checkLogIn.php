
<head>
    
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!--<button onclick="history.back()">Go Back</button>-->
<?php
include ('settings.php');
$username=$_POST['username'];
$password=$_POST['password'];
$sql=" SELECT * FROM `tbl_admin` where admin_username='$username' and admin_password='$password'";

$result = mysqli_query($variable,$sql);
$numRows = mysqli_num_rows($result);

if($numRows == 0){ 
    if($username == null && $password == null){
        echo "<script> alert('Please Enter Username or Password'); 
        window.open('index.php', '_self');
</script>";
    }else{
        echo "<script> alert('INVALID USERNAME AND PASSWORD'); 
        window.open('index.php', '_self');
</script>";
    }
    
   
   
   


}
else {
    
    echo " <script> alert('WELCOME ADMIN!');  
    window.open('login.php', '_self');			
</script>";		; 
   
    
}



?>

</body>
</html>
