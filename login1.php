<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page in HTML with CSS Code Example</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="box-form">
    <div class="left">
        <div class="overlay">
        <h2>Technoviz</h2>
        <h3>Your one stop solution for all household problems</h3>
        
        </div>
    </div>
    
    
<?php
include('conn.php');
$userid=$_POST['username'];
$pass=$_POST['password'];
$sql="select * from login where username='$userid' and password='$pass' ";
$res=mysqli_query($conn,$sql);


if($result=mysqli_fetch_assoc($res))
{
header('location:appointment.html');
}
else {
    echo "hello123";
header('location:index.html');
}

?>


            
            <br><br>
            
        <div class="remember-me--forget-password">
                <!-- Angular -->
   
   
            
    </div>
    
</div>
<!-- partial -->
  
</body>
</html>
