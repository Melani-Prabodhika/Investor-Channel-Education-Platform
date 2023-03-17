<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Investor Channel</title>
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">

<!-- FONT AWESOME -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<!-- Fonts -->
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/Simple-Line-Icons-Webfont/simple-line-icons.css" media="screen" />
<link rel="stylesheet" href="css/et-line-font/et-line-font.css">

<!-- Stylesheet -->
<link rel="stylesheet" type="text/css"  href="css/style.css">

</head>

<body>

<!-- Header Start -->
<div class="col-12" style="width: 100%; padding-left: 0; margin-left: 0;">
  <header>
      <label for="">
      <span class="fa fa-bars" style="font-size: 20px;"></span>
      </label>
      <div class="logo">
        <div class="col-12">
          <div class="logo-area"><img class="img-responsive" src="img/Investor Academy Logo 2.png" alt="logo"></div>
        </div>
      </div>
  </header>
</div>

<style>
  *{
    margin: 0;
    padding: 0;
    outline: 0;
  }

  header {
    display: flex;
    height: 110px;
    box-shadow: 3px 3px 10px #000;
    width: 100%;
    background-color: #fff;
    top: 0;
  }

  header .logo{
    padding-left: 500px;
    padding-right: 10px;
    padding-bottom: 0.5rem;
    padding-top: 0;
    width: 65%;
    height: 45%;
  }

  header label span {
    padding-left: 2rem;
    padding-top: 20px;
    padding-right: 1.5rem;
  }

  .header h1{
    color:rgba(38, 54, 90, 0.864);
    font-size: 50px;
    text-align: center;
    letter-spacing: 4px;
    font-weight: 800;
    font-family: sans-serif;
    padding: 30px;
    padding-top: 60px;
  }

  body {
    margin-top: (100% -110px);
    background-color: rgba(0, 0, 0, 0.074);
    height: 632px;
  }

  .main span label{
    font-size: 4rem;
    font-weight: 700;
    color: rgb(104, 122, 137);
    margin-left: 42%;
    padding-bottom: 35px;
    padding-top: 20px;
  }

  .main ul li a{
    display: inline;
    color: rgba(104, 122, 137, 0.802);
    margin-left: 42%;
    font-size: 2.5rem;
    font-weight: 600;
  }

  .main ul li:not(:last-child){
    margin-bottom: 20px;
  }

  .main ul li a:before{
    content: "\2022";
    color: rgb(104, 122, 137);
  }

  .main ul li a:hover{
    color: rgb(44, 60, 71);
  }

</style>

<!-- Main Content -->
<div class="main-content">
    <div class="col-12">
      <div class="header">
        <h1> Quiz</h1>
      </div>
      <div class="main">
          <span>
            <label>Select Paper</label><br>
          </span>
          <div class="list">
          <ul>
            <li><a href="quiz/quiz1.php"> Forex Basics</a></li>
            <li><a href="quiz/quiz2.php"> Forex Intermediate</a></li>
            <li><a href="quiz/quiz3.php"> Forex Advanced</a></li>
          </ul>
          </div>
      </div>  
    </div>
</div>
<!-- End Main Content -->

</body>
</html>