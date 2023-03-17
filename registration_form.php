<?php 
require ('header.php');
require_once ('controller.php');
if(isset($_SESSION['enrl_uname']) == false){
  ?>
  <script>
  window.location.href='getting_started.php';
  </script>
  <?php 
}
?>

<style>

  .c-text{
    display: block;
    width: 90%;
    box-sizing: border-box;
    margin: 5px 35px;
    padding: 5px;
    padding-left: 20px;
    border-radius: 3px;
    background-color: transparent;
    outline: none;
    color: rgb(10, 10, 10);
    transition: all 0.5s;
    }

    .c-text:focus{
    padding: 10px 10px;
    }

    textarea{
    resize: none;
    height: 120px;
    }

    .c-btn{
    width: 80%;
    margin: 10px 30px;
    padding: 0px 20px;
    height: 50px;
    font-size: 1rem;
    font-weight: 700;
    border-radius: 10px;
    background: rgb(173, 122, 28);
    outline: none;
    border: none;
    color: wheat;
    cursor: pointer;
    transition: all 0.5s;
    }

    .c-btn:hover{
    background-color: rgba(173, 122, 28, 0.712);
    color: rgb(10, 10, 10);
    font-size: 1.1rem;
    }

</style>

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
        <div class="pagenation_links"><a href="getting_started.php">Back</a><i> / </i>Register</div>
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
          
          <div class="frm-section" ><br>
            <h1 style="text-align: center; color: rgb(12, 6, 1); font-weight: 800; font-size:40px;">Registration Form</h1><br><br>
            <div class="border"></div>
            <form action="registration_form.php" method="POST" class="Reg-form">
            <?php
                    		if(count($errors) == 1){
							?>
							<div class="alert alert-danger text-center">
								<?php
								foreach($errors as $showerror){
									echo $showerror;
								}
								?>
							</div>
							<?php
						}elseif(count($errors) > 1){
							?>
							<div class="alert alert-danger">
								<?php
								foreach($errors as $showerror){
									?>
									<li><?php echo $showerror; ?></li>
									<?php
								}
								?>
							</div>
							<?php
						}
						?>
                <label for="f_name" class="col-form-label required" style="display: block; font-weight: 700; font-size: 1rem; color: rgb(26, 19, 2); width: 100%; padding-top:30px; padding-left:20px; text-align:left;">First Name</label>
                <input type="text" name="fname" class="c-text" required><br>
                <label for="l_name" class="col-form-label required" style="display: block; font-weight: 700; font-size: 1rem; color: rgb(26, 19, 2); width: 100%; padding: top 15px; padding-left:20px; text-align:left;">Last Name</label>
                <input type="text" name="lname" class="c-text" required><br>
                <label for="email" class="col-form-label required" style="display: block; font-weight: 700; font-size: 1rem; color: rgb(26, 19, 2); width: 100%; padding: top 15px; padding-left:20px; text-align:left;">Email</label>
                <input type="email" name="email" class="c-text" required><br>
                <label for="address" class="col-form-label required" style="display: block; font-weight: 700; font-size: 1rem; color: rgb(26, 19, 2); width: 100%; padding-top:15px; padding-left:20px; text-align:left;">Address</label>
                <input type="text" name="address" class="c-text" required><br>
                <label for="zip-no" class="col-form-label required" style="display: block; font-weight: 700; font-size: 1rem; color: rgb(26, 19, 2); width: 100%; padding-top:15px; padding-left:20px; text-align:left;">Zip No</label>
                <input type="number" name="zip" class="c-text" required><br>
                <label for="country" class="col-form-label required" style="display: block; font-weight: 700; font-size: 1rem; color: rgb(26, 19, 2); width: 100%; padding-top:15px; padding-left:20px; text-align:left;">Country</label>
                <select name="country" id="areaCode" class="c-text" required>
                    <option value="" data-code="">Select a Counrty</option>
                    <option value="italy" data-code="+91">Italy</option>
                    <option value="srilanka" data-code="+94">Sri Lanka</option>
                    <option value="us" data-code="+95">United States</option></select><br>
                <label for="tel_no" class="col-form-label required" style="display: block; font-weight: 700; font-size: 1rem; color: rgb(26, 19, 2); width: 100%; padding-top:15px; padding-left:20px; text-align:left;">Tel No</label>
                <input type="text" id="dialCode" name="mobile" class="c-text" required><br>
                <label for="question" class="col-form-label required" style="display: block; font-weight: 700; font-size: 1rem; color: rgb(26, 19, 2); width: 100%; padding-top:15px; padding-left:20px; text-align:left;">Select a Question</label>
                <select name="question" id="" class="c-text" required>
                    <option value="What is Your Mother's Name?">What is Your Mother's Name?</option>
                    <option value="What is Your Pet's Name?">What is Your Pet's Name?</option>
                    <option value="What is Your Favorit Colour?">What is Your Favorit Colour?</option>
                    <option value="What is Your Favorit Food?">What is Your Favorit Food?</option></select><br>
                <input type="text" name="answer" class="c-text" placeholder="Give your answer here" required><br>
                <label for="username" class="col-form-label required" style="display: block; font-weight: 700; font-size: 1rem; color: rgb(26, 19, 2); width: 100%; padding-top:15px; padding-left:20px; text-align:left;">Username</label>
                <input type="username" id="username" name="uname" class="c-text" required><br>
                <span id="availability"></span>
                <label for="password" class="col-form-label required" style="display: block; font-weight: 700; font-size: 1rem; color: rgb(26, 19, 2); width: 100%; padding-top:15px; padding-left:20px; text-align:left;">Password</label>
                <input type="password" name="password" class="c-text" required><br>
                <label for="c_password" class="col-form-label required" style="display: block; font-weight: 700; font-size: 1rem; color: rgb(26, 19, 2); width: 100%; padding-top:15px; padding-left:20px; text-align:left;">Confirm Password</label>
                <input type="password" name="cpassword" class="c-text" required><br><br>
                <button type="submit" name="signup" class="c-btn" id="register" disabled>CONTINUE</button>
            </form>
        </div>
      </div>
    </div>
  </div>
</div><br><br><br><br>
<!-- End Register --> 

<script>
  $("#areaCode").on("change", function() {
  var asd = $('option:selected', this).data('code');
  $('#dialCode').val(asd);
});

$(document).ready(function(){  
   $('#username').keyup(function(){

     var username = $(this).val();

     if (username.length < 6) {
      $('#availability').html('<span class="text-danger">Minimum 6 Charactors</span>');
      }
      else{
        $.ajax({
          url:'uname_check.php',
          method:"POST",
          data:{user_name:username},
          success:function(data)
          {
          if(data != '0')
          {
            $('#availability').html('<span class="text-danger">Username Available</span>');
            $('#register').attr("disabled", true);
          }
          else
          {
            $('#availability').html('<span class="text-success">You have selected Username successfully</span>');
            $('#register').attr("disabled", false);
          }
          }
        })
      }
  });
 }); 
 
</script>

<?php include "footer.php"; ?>