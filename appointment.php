<?php 
require ('header.php');
date_default_timezone_set("Asia/Colombo");
if(isset($_POST['submit'])){
  $name = mysqli_real_escape_string($con,$_POST['name']);
  $phone = mysqli_real_escape_string($con,$_POST['phone']);
  $date = mysqli_real_escape_string($con,$_POST['date']);
  $email = mysqli_real_escape_string($con,$_POST['email']);
  $msg= mysqli_real_escape_string($con,$_POST['msg']);
  $added_on=date('Y-m-d');

  $insert=mysqli_query($con,"insert into appointment (name, tel_no, date, email, msg, msg_date) values('$name', '$phone', '$date','$email','$msg', '$added_on')");
  if($insert){
    ?> 
    <script>
      alert('Success!');
      window.location.href ='index.php';
    </script>
    <?php
  }

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

<!-- Header -->
<div id="home" class="bg-inner low-back-gradient-inner">
  <div class="text-con-inner low-back-up">
    <div class="container">
      <div class="row">
        <div class="lead col-lg-12 col-12 text-center">
          <h1><span class="top-heading-inner">Appointment</span></h1>
          <div class="list-o-i white"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END Header -->

<!-- Pagenation -->
<div class="pagenation-holder">
  <div class="container">
    <div class="row">
      <div class="col-md-6 text-left">
        <div class="pagenation_links"><a href="index.php">Home</a><i> / </i>Book an Appointment</div>
      </div>
    </div>
  </div>
</div>
<!-- END Pagenation -->

<!-- Make Appointment -->
<br><br>
<div class="section-title center"><br>
  <h4><B>Fill in this form we will get in touch with you an appointment time and date with on of our counselors.</B></h4><br>
</div>
<div class="container">
   <div class="row">
     <div id="contact-inner" class="text-center low-back-footer-w">
       <div class="low-back-up">
         <div class="col-12 c-2">
           <form method="post" id="contactForm" novalidate>
             <div class="row">
               <div class="col-md-12">
                 <div class="form-group">
                   <input type="text" name="name" id="name" class="form-control" placeholder="Name" required="required">
                   <p class="help-block text-danger"></p>
                 </div>
               </div>
               <div class="col-md-12">
                 <div class="form-group">
                   <input type="number" name="phone" id="tel_no" class="form-control" placeholder="Tel Number" required="required">
                   <p class="help-block text-danger"></p>
                 </div>
               </div>
               <div class="col-md-12">
                 <div class="form-group">
                   <input type="email" name="email" id="email" class="form-control" placeholder="Email" required="required">
                   <p class="help-block text-danger"></p>
                 </div>
               </div>
               <div class="col-md-12">
                 <div class="form-group">
                   <input type="text" name="date" id="date" class="form-control" placeholder="Preffered date for an appointment" onfocus="(this.type='date')" required="required">
                   <p class="help-block text-danger"></p>
                 </div>
               </div>
             </div>
             <div class="form-group">
               <textarea name="msg" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
               <p class="help-block text-danger"></p>
             </div>
             <button type="submit" name="submit" class="btn-download-send">SEND</button><br>
           </form>
         </div>
       </div>
     </div>
    </div>
   </div>
 </div>
</div>
</div>
<br>
<!-- End  -->

<?php include "footer.php"; ?>