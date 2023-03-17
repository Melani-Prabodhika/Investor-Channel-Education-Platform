<?php

function sentMailCustomer($con,$cus_name,$cus_lname,$cus_uname,$email,$tel_no,$ibo_name,$ibo_uname,$firstname){
    $html ='<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <title>Investor Channel</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/Simple-Line-Icons-Webfont/simple-line-icons.css" media="screen" />
    <link rel="stylesheet" href="css/et-line-font/et-line-font.css">
    
    <!-- Stylesheet -->
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    
    <!-- Admin Styling -->
    <link rel="stylesheet" type="text/css"  href="css/ibo.css">
    
    </head>
    
    <body>
        <span><strong>Welcome to INVESTOR Academy '.$cus_name.'!</strong></span>
    
        <div class="content">
            Congratulations '.$cus_name.'!<br><br>
            Customers are the forefront of our business at Investor Channel. <br>
            Our Passion is teaching others on how to capitalize on trading with our easy-to-use training systems, tools and products.<br><br>
            Your Account Details Are Below:<br>
            login page link: http://localhost/myproject/login.php<br>
            Username:'.$cus_uname.'<br>
            Password:Selected During Enrollment<br><br>
            We are very excited to welcome you aboard and we hope you enjoy the Investor Academy Products.<br><br>
            If you have any questions about the Investor Academy Products or how to maximize your efforts as a successful trade,email support@investorchannel@gmail.com<br><br>
            (Please Note:Your Account will be activated within few hours.)<br><br>
            <strong>WELCOME ABOARD!</strong><br>
            The Investor Channel Support Team<br><br>
        </div>
    
        <div class="footer">
            You are receiving this message because you have either signed up to recieve information fromus or a third-party.<br>
            To be cleared from our records, follow the link below or contact us at:<br><br>
            Investor Academy<br>
            +1( 304 ) 415-5177<br>
            investorchannel123global@gmail.com<br>
            id='.$cus_uname.' &email='.$email.'
        </div>
    </body>';

    include('smtp/PHPMailerAutoload.php');
                     $mail=new PHPMailer(true);
                  	 $mail->isSMTP();
                     $mail->Host="smtp.gmail.com";
                     $mail->Port=587;
                     $mail->SMTPSecure="tls";
                     $mail->SMTPAuth=true;
                     $mail->Username="iinvestorchannel@gmail.com";
                     $mail->Password="InvestorC@123";
                     $mail->SetFrom("iinvestorchannel@gmail.com");
                     $mail->addAddress($email);
                     $mail->IsHTML(true);
                     $mail->Subject="Register Success";
                     $mail->Body=$html;
                     $mail->SMTPOptions=array('ssl'=>array(
                         'verify_peer'=>false,
                         'verify_peer_name'=>false,
                         'allow_self_signed'=>false
                     ));
                 if($mail->send()){
                     
                     $html='<!DOCTYPE html>
                     <html lang="en">
                     <head>
                     <meta charset="utf-8">
                     <title>Investor Channel</title>
                     <meta name="description" content="">
                     <meta name="author" content="">
                     <meta name="viewport" content="width=device-width, initial-scale=1">
                     
                     <!-- Bootstrap -->
                     <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
                     
                     <!-- FONT AWESOME -->
                     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
                     
                     <!-- Fonts -->
                     <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
                     <link rel="stylesheet" type="text/css" href="css/Simple-Line-Icons-Webfont/simple-line-icons.css" media="screen" />
                     <link rel="stylesheet" href="css/et-line-font/et-line-font.css">
                     
                     <!-- Stylesheet -->
                     <link rel="stylesheet" type="text/css"  href="css/style.css">
                     
                     <!-- Admin Styling -->
                     <link rel="stylesheet" type="text/css"  href="css/ibo.css">
                     
                     </head>
                     
                     <body>
                         <span><strong>Congratulations '.$ibo_name.', '.$cus_name.' '.$cus_lname.' Just Become a New Customer in Your Business</strong></span>
                     
                         <div class="content">
                             Congratulations '.$ibo_name.'<br>
                             You have a new Customer Referral.<br>
                             '.$cus_name.' '.$cus_lname.' just joined as a Customer.<br><br>
                             Be SURE to contact '.$cus_name.' and help them get started<br>
                             '.$cus_name.' (customer f_name)<br>
                             '.$cus_lname.' (Customer l_name)<br>
                             '.$email.' (customer email)<br>
                             '.$tel_no.' (customer mobile)<br>
                             Congratulations again on your new customer, and keep up the GREAT work,<br>
                             -YOUR INVESTOR Channel Support Team-
                         </div>
                     
                         <div class="footer">
                             You are receiving this message because you have either signed up to recieve information fromus or a third-party.<br>
                             To be cleared from our records, follow the link below or contact us at:<br><br>
                             Investor Channel<br>
                             +1( 304 ) 415-5177<br>
                             investorchannel123global@gmail.com<br>
                             id='.$ibo_uname.'&email='.$firstname.'
                         </div>
                     </body>';
                         $mail=new PHPMailer(true);
                         $mail->isSMTP();
                         $mail->Host="smtp.gmail.com";
                         $mail->Port=587;
                         $mail->SMTPSecure="tls";
                         $mail->SMTPAuth=true;
                        $mail->Username="iinvestorchannel@gmail.com";
                         $mail->Password="InvestorC@123";
                         $mail->SetFrom("iinvestorchannel@gmail.com");
                         $mail->addAddress($firstname);
                         $mail->IsHTML(true);
                         $mail->Subject="New Customer Referral";
                         $mail->Body=$html;
                         $mail->SMTPOptions=array('ssl'=>array(
                             'verify_peer'=>false,
                            'verify_peer_name'=>false,
                             'allow_self_signed'=>false
                         ));
                     if($mail->send()){
					
						?>
						<script>
							window.location.href='reg_success.php';
						</script>
						<?php
					exit();
			     }else{
					?>
					<script>
						alert("Failed while sending email!");
					</script>
					<?php
			       
			    }
			 }else{
				?>
				<script>
					alert("Failed while sending email!");
				</script>
				<?php
			     
			 }
}
?>