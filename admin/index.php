<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Investor Channel</title>
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="../css/bootstrap.css">

<!-- FONT AWESOME -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<!-- Fonts -->
<link rel="stylesheet" type="text/css" href="../fonts/font-awesome/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="../css/Simple-Line-Icons-Webfont/simple-line-icons.css" media="screen" />
<link rel="stylesheet" href="../css/et-line-font/et-line-font.css">

<!-- Stylesheet -->


<!-- Admin Styling -->
<link rel="stylesheet" type="text/css"  href="../css/admin.css">
<script src="https://www.koolchart.com/demo/LicenseKey/codepen/KoolChartLicense.js"></script>
<script src="https://www.koolchart.com/demo/KoolChart/JS/KoolChart.js"></script>
<link rel="stylesheet" href="https://www.koolchart.com/demo/KoolChart/Assets/Css/KoolChart.css"/>

<!-- Admin Styling 2 -->
<link rel="stylesheet" type="text/css"  href="../css/admin.css">
<link rel="stylesheet" type="text/css"  href="../css/admintable.css">
<link rel="stylesheet" type="text/css"  href="../css/adminform.css">

</head>

<body>

 <!-- Sidebar Menu -->
  <div class="sidebar">
    <div class="logo-area"><img class="img-responsive" src="../img/Blue_logo.png" alt="logo" width="600px" height="600px"></div>
    <div class="sidebar-menu">
      <ul>
          <li>
            <a href="#" class="active"><span class="fa fa-dashboard" style="font-size: 2rem;"></span>&nbsp;&nbsp;
            <span>Dashboard</span></a>
          </li>
        <li>
          <a href="home.php"><span class="fa fa-home"></span>
          <span>Home</span></a>
        </li>
        <li>
          <a href="user.php"><span class="fa fa-users"></span>
          <span>Users</span></a>
        </li>
        <li>
          <a href="course.php"><span class="fa fa-clipboard"></span>
          <span>Courses</span></a>
        </li>
        <li>
          <a href="#"><span class="fa fa-book"></span>
          <span>Course Materials</span>&nbsp;&nbsp;&nbsp;
          <i class="fa fa-chevron-down" style="font-size: 1em;"></i>
          <ul class="menu-dropdown">
            <li><a href="video.php">Video Series</a> </li>
            <li><a href="book.php">Library</a></li>
            <li><a href="question.php">Questionaries</a></li>
          </ul>
          </a>
        </li>
        <li>
          <a href="session.php"><span class="fa fa-table"></span>
          <span>Live Shedule</span></a>
        </li>
        <li>
          <a href="#"><span class="fa fa-user"></span>
          <span>Admin</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <i class="fa fa-chevron-down" style="font-size: 1em;"></i>
          <ul class="menu-dropdown">
            <li><a href="">Add New Admin</a> </li>
            <li><a href="">Update Admins</a></li>
          </ul>
          </a>
        </li>
        <li>
          <a href="payment.php"><span class="fa fa-cc-visa"></span>
          <span>Payments</span></a>
        </li>
        <li>
          <a href="appointment.php"><span class="fa fa-pencil"></span>
          <span>Appointment</span></a>
        </li>
        <li>
          <a href="msg.php"><span class="fa fa-paper-plane"></span>
          <span>Messages</span></a>
        </li>
      </ul>
    </div>
  </div>
<!-- End Sidebar Menu-->

<!-- Main-content -->
<div class="main-content">
  <header>
    <h3>
      <label for="">
      <span class="fa fa-bars" style="font-size: 20px;"></span>
      </label>Dashboard
    </h3>
    <div class="search-wrapper">
      <span class="fa fa-search"></span>
      <input type="search" placeholder="Search here"/>
    </div>
    <div class="nortifications" style="font-size: 20px; color: rgb(30, 4, 92);">
      <span class="fa fa-bell"></span>
    </div>
    <div class="user-wrapper">
      <img src="../img/testimonials/Screenshot_20211211_131256.jpg" width="35px" height="35px" alt="">
      <div class="admin">
        <h5>Shamindrika Silva</h5>
        <small>Administrater</small>
        <ul class="logout">
          <li><a href="#" class="fa fa-arrow-right">&nbsp;&nbsp;<span>Logout</span></a></li>
        </ul>
      </div>
    </div>
  </header>
  </div>