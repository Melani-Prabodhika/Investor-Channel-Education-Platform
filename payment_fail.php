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

<!-- Pagenation -->
<div class="pagenation-holder">
  <div class="container">
    <div class="row">
      <div class="col-md-6 text-left">
        <div class="pagenation_links"><a href="getting_started.php">Back</a><i> / </i>Payment</div>
      </div>
      <div class="col-md-6"> </div>
    </div>
  </div>
</div>
<!-- END Pagenation -->

<!-- Fail Payment -->
<div class="login_register_area">
  <div class="container">
    <div class="row">
      <div class="log-in-r text-center">
        <div class="tab_one">
          <div class="tab-content">
            <div class="tab-pane fade active in" id="t-one-first">
              <div class="tab_login_register">
                <form>
                  <div class="h1">Payment Fail</div><br>
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