<?php 
require ('header.php');
require_once ('controller.php');


if(isset($_SESSION['email'])== false){
  ?>
        <script>
        window.location.href='login.php';
        </script>
        <?php
}
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

<!-- Pagenation -->
<div class="pagenation-holder">
  <div class="container">
    <div class="row">
      <div class="col-md-6 text-left">
        <div class="pagenation_links"><a href="login.php">Back</a><i> / </i>Reset Password</div>
      </div>
      <div class="col-md-6"> </div>
    </div>
  </div>
</div>
<!-- END Pagenation -->

<!-- New Password  -->
<div class="login_register_area">
  <div class="container">
    <div class="row">
      <div class="log-in-r text-center">
        <div class="tab_one">
          <div class="tab-content">
            <div class="tab-pane fade active in" id="t-one-first">
              <div class="tab_login_register">
                <form action="new-password.php" method="POST">
                  <div class="h1">New Password</div><br>
                    <?php 
                        if(isset($_SESSION['info'])){
                            ?>
                            <div class="alert alert-success text-center">
                                <?php echo $_SESSION['info']; ?>
                            </div>
                            <?php
                        }
                        ?>
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
                  <div class="h4">Enter New Password</div><br>
                  <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                  </div><br>
                  <div class="h4">Confirm Password </div><br>
                  <div class="form-group">
                    <input type="password" name="cpassword" class="form-control" placeholder="Password">
                  </div><br>
                  <div class="form-group">
                    <button type="submit" name="change-password" class="btn btn-login">Submit</button>
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
<!-- End  --> 

<?php include "footer.php"; ?>