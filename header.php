<?php require ('db.php'); ?>

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

<!-- Fonts -->
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/Simple-Line-Icons-Webfont/simple-line-icons.css" media="screen" />
<link rel="stylesheet" href="css/et-line-font/et-line-font.css">

<!-- Main Menu CSS -->
<link rel="stylesheet" href="css/meanmenu.min.css">

<!-- Main CSS -->
<link rel="stylesheet" href="css/main.css">

<!-- FONT AWESOME -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<!-- Prettyphoto-->
<link rel="stylesheet" href="css/prettyphoto.css">

<!--Master slider-->
<link href="master-slider/style/masterslider.css" rel="stylesheet">
<link href="master-slider/skins/default/style.css" rel="stylesheet">

<!-- OWL STYLE CSS -->
<link rel="stylesheet" type="text/css"  href="css/owl.css">

<!-- Stylesheet -->
<link rel="stylesheet" type="text/css"  href="css/style.css">

<!-- Responsive -->
<link rel="stylesheet" type="text/css"  href="css/responsive.css">

<!-- Cubeportfolio -->
<link rel="stylesheet" type="text/css" href="css/cubeportfolio.min.css">
</head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<body>

<!-- Nav Bar-->

<header>
  <div class="header-one">
    <div class="header-top-area" id="sticker">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="logo-area" style="background-color: transparent;"> <a href="index.html"><img class="img-responsive" src="img/Investor Academy Transparent Background.png" alt="logo"></a> </div>
          </div>
          <div class="col-lg-7 col-md-7 col-sm-9 col-xs-12">
            <div class="main-menu">
              <nav>
                <ul>
                  <li class="active"><a href="home.html"></a>
                    <li><a href="index.php">Home</a></li>
                  </li>
                  <li><a href="#">About</a>
                    <ul class="menu-dropdown">
                      <li><a href="company_history.php">Company History</a></li>
                      <li><a href="services.php">Our Services </a></li>
                    </ul>
                  </li>
                  <li><a href="#"> Plans & Pricing</a>
                    <ul class="menu-dropdown">
                      <li><a href="frx_academy.php">FRX Academy</a></li>
                      <li><a href="personal_development.php">Personal Development</a></li>
                      <li><a href="vip_service.php">VIP Signal Service</a></li>
                      <li><a href="other_courses.php">Other</a></li>
                    </ul>
                  </li>
                  <?php 
                  if(isset($_SESSION['USER_LOGIN'])=='yes'){
                  ?>
                  <li><a href="logout.php">Logout</a>
                  
                  <?php }else{ ?>
                    <li><a href="getting_started.php">Getting Started</a> 
                  </li>
                  <li><a href="login.php">Login</a>
                  </li>
                  <?php } ?>  
                  <li><a href="#">More</a>
                    <ul class="menu-dropdown">
                      <li><a href="contact.php">Contact</a> </li>
                      <li><a href="appointment.php"> Book an appointment</a></li>
                      <li><a href="testimonial.php"> Testimonials</a></li>
                      <li><a href="blog.php"> Blog</a></li>
                    </ul>
                  </li> 
                </ul>
              </nav>
            </div>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
            <div class="header-top-right">
              <ul>
                <li>
                  <div class="header-top-search search-box">
                    <form>
                      <input class="search-text" type="text"  placeholder="Search Here..." >
                      <a class="search-button" href="index3.html#"> <i class="fa fa-search" aria-hidden="true"></i> </a>
                    </form>
                  </div>
                </li>
                <li>
                  <div class="additional-menu-area" id="additional-menu-area">
                    <div id="mySidenav" class="sidenav"> <a href="index3.html#" class="closebtn">×</a>
                      <div id="contact-innerr" class="text-center low-back-footer-w">
                        <div class="low-back-up">
                          <div class="col-md-10 col-sm-offset-1 c-2">
                            <div class="section-title center">
                              <h2>Leave<strong> message</strong></h2>
                            </div>
                            <form>
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <input type="text" id="name" class="form-control" placeholder="Name" required>
                                    <p class="help-block text-danger"></p>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <input type="email" id="email" class="form-control" placeholder="Email" required>
                                    <p class="help-block text-danger"></p>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
                                <p class="help-block text-danger"></p>
                              </div>
                              <div id="empyty"></div>
                              <button onclick="send_message()" class="btn-download-send">Send Message</button>
                            </form>
                          </div>
                        </div>
                      </div>
                      <!-- times--> 
                    </div>
                    <span class="side-menu-open side-menu-trigger"><i class="fa fa-bars" aria-hidden="true"></i></span> </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<script>
  function send_message(){
	var name=jQuery("#name").val();
	var email=jQuery("#email").val();
	var message=jQuery("#message").val();
	
	if(name=="" || email=="" || message==""){
		$('#empyty').html('<span class="text-danger">Cannot Be Empty!</span>');
	}else{
		jQuery.ajax({
			url:'send_message.php',
			type:'post',
			data:'name='+name+'&email='+email+'&message='+message,
			success:function(result){
				alert(result);
			}	
		});
  }
}
</script>