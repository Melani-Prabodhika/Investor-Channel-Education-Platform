<?php
require('db.php');
date_default_timezone_set("Asia/Colombo");
$name=mysqli_real_escape_string($con,$_POST['name']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$msg=mysqli_real_escape_string($con,$_POST['message']);
$date= date('Y-m-d h:i:s');
mysqli_query($con,"insert into message(name,email,msg,date) values('$name','$email','$msg','$date')");
echo "Thank you";
?>