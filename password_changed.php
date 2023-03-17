<?php 
require ('header.php');
require_once ('controller.php');
if(isset($_SESSION['info']) == false){
        ?>
        <script>
        window.location.href='login.php';
        </script>
        <?php 
}
?>

<!-- END Nav Bar --> 
 
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
        <div class="pagenation_links"><a href="index.php">Home</a><i> / </i>Reset Password</div>
      </div>
      <div class="col-md-6"> </div>
    </div>
  </div>
</div>
<!-- END Pagenation -->

<!-- Changed Password Success -->
<div class="login_register_area">
  <div class="container">
    <div class="row">
      <div class="log-in-r text-center">
        <div class="tab_one">
          <div class="tab-content">
            <div class="tab-pane fade active in" id="t-one-first">
              <div class="tab_login_register">
                <form action="login.php" method="POST">
                  <div class="h1">Changed Success</div><br>
                  <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center">
                        <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
                  <div class="form-group">
                    <button type="submit" name="login-now" class="btn btn-login">Login Now</button>
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
<!-- End --> 

<?php include "footer.php"; ?>