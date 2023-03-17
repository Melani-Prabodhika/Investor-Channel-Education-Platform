<?php 
    session_start();
    $con=mysqli_connect("localhost","root","","investoracademydb");
    define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/MyProject/');
    define('SITE_PATH','http://localhost/myproject/');
?>