<?php 
require ('header.php');
require_once ('controller.php');
?>

<!-- END Nav Bar --> 

<!-- Header Top-->
<div class="header1-area header-two">
    <div class="header-top-area" id="sticker">
      <div class="container" style="background-color: #000000; width: 100%;">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="logo-area"></div>
          </div>
        </div>
      </div>
    </div>
</div>
<!-- END Header Top --> 
 
<!-- Header -->
<div id="home" class="bg-inner low-back-gradient-inner">
  <div class="text-con-inner low-back-up">
    <div class="container">
      <div class="row">
        <div class="lead col-lg-12 col-xm-12 text-center">
          <h1><span class="top-heading-inner">Academy Login</span> </h1>
          <div class="list-o-i white">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ENd Header -->

<!-- pagenation  -->
<div class="pagenation-holder">
  <div class="container">
    <div class="row">
      <div class="col-md-6 text-left">
        <div class="pagenation_links"><a href="home.html">Home</a><i> / </i>Login</div>
      </div>
      <div class="col-md-6"> </div>
    </div>
  </div>
</div>
<!-- END pagenation  -->

<!-- Login  -->
<div class="login_page login_solid_bg">
  <div class="container">
    <div class="log_in_logo text-center"> <img src="images/logo.png" alt=""> </div>
      <div class="log_in_box">
        <!-- Form Section -->
        <div class="frms">
          <div class="login_title" style="padding-bottom: 25px; padding-top:20px;">
            <h2>LOGIN</h2>
          </div>
            <form action="" method="post" class="sifrm" style="padding-bottom: 40px;">
              <?php
                if(count($errors) > 0){
              ?>
                <div class="alert alert-danger text-center">
                  <?php
                    foreach($errors as $showerror){
                      echo $showerror;
                    }
                  ?>
                </div>
              <?php
                }
              ?>
              <div class="ui">
                  <input name="username" type="username" class="form-control" id="username"placeholder="Enter Username" required style="width: 550px; height: 52px; outline: none; border-radius: 5px; padding-left: 40px; font-size: 1rem; border: none; background:rgba(219, 218, 217, 0.26); color: black;">
              </div><br>
              <div class="ui">
                  <input name="password" type="password" class="form-control" id="password" placeholder="Enter Password" required style="width: 550px; height: 52px; outline: none; border-radius: 5px; padding-left: 40px; font-size: 1rem; border: none; background:rgba(219, 218, 217, 0.26); color: black;">
              </div>
              <label for="" class="forgot">
                  <a href="forgot_password.php" style="margin: 5px 10px; text-align: center; font-size: 1.2rem;">forgot username or password?</a>
              </label>
              <label for="" class="investor" style="text-align: center; margin: 30px 30px; font-size: 1.9rem; font-weight: 800;">INVESTOR ACADEMY</label><br>
              <button type="submit" href="#" name="login" class="fbtns" style="font-size: 25px;">LOGIN</button>
            </form>
         </div>
        </div>
        <!-- End Form Section -->
      </div>
    </div>
  </div>
</div>
<!-- End Login  --> 

<?php include "footer.php"; ?>