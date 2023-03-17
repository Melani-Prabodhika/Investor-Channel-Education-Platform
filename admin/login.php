<?php
require ('../db.php');
$msg='';
if(isset($_POST['submit'])){
	$username=mysqli_real_escape_string($con,$_POST['username']);
	$password=mysqli_real_escape_string($con,$_POST['password']);
	$sql="select * from admin where username='$username'";
	$res=mysqli_query($con,$sql);
	$count=mysqli_num_rows($res);
	if($count>0){
      $row=mysqli_fetch_assoc($res);
      $enc_pass = $row['password'];
      if(password_verify($password, $enc_pass)){
        $_SESSION['ADMIN_LOGIN']='yes';
         $_SESSION['ADMIN_USERNAME']=$username;
         ?>
                            <script>
                            window.location.href='home.php';
                            </script>
                            <?php
         die();
	}else{
		$msg="Please enter correct login details";	
	}
   }else{
		$msg="Please enter correct login details";	   
}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investor Channel</title>

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="../css/bootstrap.css">

<!-- Responsive -->
<link rel="stylesheet" type="text/css"  href="../css/responsive.css">

</head>

<style>
    video{
        position: fixed;
        z-index: -1;
        right: 0;
        bottom: 0;
        top: 25px;
    }

    .container {
        position: fixed;
        width: 100%;
        height: 732.5px;
        margin-top: 100px;
        left: 0;
        background-color: rgba(0, 0, 0, 0.272);
    }

    .header h4 {
        color: rgb(201, 198, 198);
        font-size: 40px;
        margin-bottom: 60px;
        margin-top: 60px;
        text-align: center;
        letter-spacing: 2px;
        font-weight: bolder;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    .main {
        text-align: center;
    }

    .main input {
        width: 700px;
        height: 50px;
        border-radius: 10px;
        background-color: rgba(0, 0, 0, 0.387);
        border: none;
        outline: none;
        padding-left: 38px;
        margin-top: 30px;
        box-sizing: border-box;
        color: #fff;
        font-size: 17px;
        margin-bottom: 20px;
    }

    .main input:hover{
        box-shadow: 2px 2px 5px #fff;
        border-radius: 10px;
        font-size: 18.5px;
    }

    .main button {
        padding-left: 0;
        width: 700px;
        height: 58px;
        margin-top: 90px;
        border-color: rgb(64, 64, 150);
        background-color: rgba(0, 0, 0, 0.578);
        letter-spacing: 1.5px;
        font-weight: 700;
        margin-bottom: 70px;
        font-size: 25px;
        outline: none;
        border-radius: 5px;
        color: rgb(187, 190, 198);
    }

   .main button:hover{
        box-shadow: 2px 2px 5px rgb(173, 173, 228);
        border-radius: 5px;
        color: rgb(11, 57, 194);
        background-color: rgb(5, 5, 56);
        border: none;
        font-weight: 900;
    }

    .main span{
        position: relative;
    }

    .main i {
        position: absolute;
        left: 15px;
        color: #fff;
        font-size: 16px;
        top: 2px;
    }

    .col{
        color: #fff;
    }
    .main label {
        font: 20px sans-serif;
        font-weight: bolder;
        color: rgb(202, 203, 204);
        padding-right: 350px;
        padding-top: 10px;
        padding-bottom: 70px;
    }

    .main label:hover{
        color: #fff;
        font-size: 20.5px;
    }
     
    .header {
    padding-top: 0.3rem;
    }

    .header span {
        font: 1em sans-serif;
        color: #fff;
        padding-left: 20px;
        padding-top: 0.5rem;
    }

    .header span:hover {
        color: rgb(3, 3, 3);
    }

    .header .logo-area {
        padding-left: 535px;
    }
</style>
<header>
    <div class="col-12">
        <div class="header" style="width: 100%; height: 100px; background-color: rgb(5, 5, 56); position: fixed; top: 0; left: 0;">
            <div class="logo-area"><img class="img-responsive" src="../img/Blue_logo.png" alt="logo" width="440px" height="94.5px"></div>
        </div>
    </div>
</header>

<body>
    <div class="col-12">
    <div class="container">
        <div class="header">
            <h4>Admin Panel</h4>
          </div>
      <div class="main">
        <form method="post"> 
          <span>
            <input type="text" placeholder="username" name="username" required>
          </span><br>
          <span>
            <input type="password" placeholder="Password" name="password" required>
          </span><br>
          <button class="col" name="submit" type="submit">LOGIN</button>
        </form>
      </div></div>

      <video autoplay muted loop>
        <source src="../video/digital-currency-transaction-4k-H9439G7 (1).mp4" type="Video/mp4">
      </video>
      </div>
</body>
</html>


