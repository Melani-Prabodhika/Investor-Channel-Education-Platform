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
          <h1><span class="top-heading-inner">Getting Started</span> </h1>
          <div class="list-o-i white">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--END Header -->

<!-- Pagenation -->
<div class="pagenation-holder">
  <div class="container">
    <div class="row">
      <div class="col-md-6 text-left">
        <div class="pagenation_links"><a href="index.php">Home</a><i> / </i>Getting Started</div>
      </div>
      <div class="col-md-6"> </div>
    </div>
  </div>
</div>
<!-- END Pagenation -->

<!-- Register  -->
<div class="login_register_area">
  <div class="container">
    <div class="row">
      <div class="log-in-r text-center">
        <div class="tab_one"> 
          <div class="tab-content">
            <div class="tab-pane fade active in" id="t-one-first">
              <div class="tab_login_register">
                <form action="getting_started.php" method="POST" enctype='multipart/form-data'>
                  <div class="image">
                    <img src="img/smooth-hairstyle-girl-beautiful-skin-care-portrait-QKWA6UR.jpg" alt="">
                  </div><br>
                  <div class="h1">Did Someone refer you?</div><br>
                  <?php
                        if(count($errors) > 0){
                            ?>
                            <div class="alert alert-danger text-center">
                                <?php 
                                    foreach($errors as $error){
                                        echo $error;
                                    }
                                ?>
                            </div>
                            <?php
                        }
                    ?>
                  <div class="h4">Please type in the username of the person who sent you this link</div><br>
                  <div class="form-group">
                    <input type="text" name="uname" class="form-control" placeholder="USERNAME" style="outline: none; border-radius: 10px; font-size: 1rem; border: none; background-color:rgba(219, 218, 217, 0.26); color: black; height: 50px;">
                  </div><br>
                  <div class="form-group">
                    <button type="submit" name="chekuname" class="btn btn-login">CONTINUE</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Register --> 

<?php include "footer.php"; ?>