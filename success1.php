<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: grid;
            place-items: center;
        }
        h1{
            margin-top:200px;
            font-weight: 700;
            font-size:60px;
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
        }
        img{
            width: 60px;
            height: 60px;
            margin-left: 500px;
            position: absolute;
            top: 320px;
            left: 200px;
        }
    </style>
</head>
<body>
    <h1>APPOINTMENT BOOKED SUCCESSFULLY!</h1>
    
<?php
echo "<h3>Details of Appointed Technacian:</h3> ";
$appliance=$_POST['appointment_for'];
echo $appliance;

?>
        <a href=abhay.html >Click to go to home page!</a>
</body>
</html>
