<html>
<head>
<link rel="stylesheet" type="text/css" href="my style.css"/>
<title>QUIZ
</title>
<link rel="stylesheet" href="C:\Users\Dell\Desktop\Vaibhav\DBMS lab\Asignment2\design.css">
<link rel="icon" href="favicon.ico">
<style>
    .title{
        display: flex;
        margin-left: 10px;
    }
    .name{
        margin-right: 30px;
    }
h2{background-color:green;}
</style>
</head>
<body style="background -color: light blue;">

<?php
include('conn.php');
$name= $_POST['name'];
$age= $_POST['age'];
$mobile_no= $_POST['mobile_no'];
$email_id= $_POST['email_id'];
$address= $_POST['address'];
$password=$_POST['password'];
$sql = "INSERT INTO customer VALUES ('1','$name','$age','$mobile_no','$email_id','$address','$password')";
$sql1 = "INSERT INTO login VALUES ('$email_id','$password')";

$task=mysqli_query($conn,$sql);
$task1=mysqli_query($conn,$sql1);

header('location:success.html');

?>

</body>
</html>
