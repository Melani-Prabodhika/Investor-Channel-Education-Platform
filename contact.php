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
          <h1><span class="top-heading-inner">Contact Us</span></h1>
          <div class="list-o-i white">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--End Header--> 

<!-- Pagenation-->
<div class="pagenation-holder">
  <div class="container">
    <div class="row">
      <div class="col-md-6 text-left">
        <div class="pagenation_links"><a href="index.php">Home</a><i> / </i>Contact Us</div>
      </div>
      <div class="col-md-6"> </div>
    </div>
  </div>
</div>
<!--End Pagenation--> 

<!-- Contact -->
<div id="contact-inner" class="text-center">
  <div class="container">
    <div class="section-title center">
      <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting
        industry. <strong>Lorem Ipsum has been the industry's standard dummy </strong>text
        ever since the 1500s, when an unknown printer took a galley of type and
        scrambled it to make a type specimen book. </p>
    </div>
    <div class="col-md-12">
      <div class="col-md-4 contact-inner"> <i class="fa fa-instagram"></i>
        <p class="gray">investor_channel_</p>
      </div>
      <div class="col-md-4 contact-inner"> <i class="fa fa-envelope-o fa-2x"></i>
        <p class="gray">investorchannel123global</p>
      </div>
      <div class="col-md-4 contact-inner"> <i class="fa fa-phone fa-2x"></i>
        <p class="gray"> +1 (304) 415-5177 | +1 (646) 421-4156</p>
      </div>
      <hr>
      <div class="clearfix"></div>
    </div>
    <div class="col-md-10 col-md-offset-1  col-sm-offset-0  c-3">
      <div class="section-title center">
        <h2>Leave<strong> message</strong></h2>
      </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <input type="text" id="name" class="form-control" placeholder="Name" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <input type="email" id="email" class="form-control" placeholder="Email" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
          <p class="help-block text-danger"></p>
        </div>
        <div id="success"></div>
        <button onclick="send_message()" type="submit" class="btn-download-send"><span>Send</span></button>
    </div>
  </div>
</div>

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
<!-- END Contact --> 

<?php include "footer.php"; ?>