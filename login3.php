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
    body{
        display: grid;
        place-items: center;
    }
    h1{
        margin-top:50px;
        font-weight: 700;
        font-size:60px;
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    
</style>
</head>
<body style="background -color: light blue;">
<?php
include('conn.php');
$appliance= $_POST['appointment_for'];
$description=$_POST['appointment_description'];
$date= $_POST['date'];
$time= $_POST['time'];

$sql = "INSERT INTO appointment VALUES ('1','$appliance','$description','$date','$time')";

$task=mysqli_query($conn,$sql);

echo "<h1>APPOINTMENT BOOKED SUCCESSFULLY!</h1>";

echo "<h3>Details of Appointed Technacian:</h3> ";

$sql1="SELECT * FROM technacian WHERE speciality='$appliance' ";
$res=mysqli_query($conn,$sql1);
$result=mysqli_fetch_assoc($res);
    echo "Name: ".$result['name']." <br>";
    echo "Mobile NO: ".$result['mobile']." <br>  ";
    echo "Email Id: ".$result['email'];

?>
    <a href=abhay.html >Click to go to home page!</a>


</body>
</html>
