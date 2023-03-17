<?php 
$email = "";
$name = "";
$errors = array();

//username check button
if(isset($_POST['chekuname'])){
    $uname = mysqli_real_escape_string($con, $_POST['uname']);
    $uname_check = "SELECT * FROM customer WHERE username = '$uname' AND status = 1 AND ibo = 1";
    $res = mysqli_query($con, $uname_check);
    if(!mysqli_num_rows($res) > 0){
        $errors['email'] = "Invalid Username";
    }
    if(count($errors) === 0){
        $_SESSION['enrl_uname'] = $uname;
        ?>
        <script>
        window.location.href='registration_form.php';
        </script>
        <?php
    }
}

//user signup button
if(isset($_POST['signup'])){
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $zip= mysqli_real_escape_string($con, $_POST['zip']);
    $country= mysqli_real_escape_string($con, $_POST['country']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $question = mysqli_real_escape_string($con, $_POST['question']);
    $answer = mysqli_real_escape_string($con, $_POST['answer']);
    $uname = mysqli_real_escape_string($con, $_POST['uname']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    $enrl_uname = $_SESSION['enrl_uname'];
    if($password !== $cpassword){
        $errors['password'] = "Confirm password not matched!";
    }
    $email_check = "SELECT * FROM customer WHERE email = '$email'";
    $res = mysqli_query($con, $email_check);
    if(mysqli_num_rows($res) > 0){
        $errors['email'] = "Email that you have entered is already exist!";
    }

    $uname_check = "SELECT * FROM customer WHERE username = '$uname'";
    $ures = mysqli_query($con, $uname_check );
    if(mysqli_num_rows($ures) > 0){
        $errors['email'] = "Uername that you have entered is already exist!";
    }
    if(count($errors) === 0){
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $added_on=date('Y-m-d h:i:s');
        $code = rand(999999, 111111);
        $verify = "notverified";
        $insert_data = "INSERT INTO customer (f_name, l_name, email, address, zip_no, country, tel_no, question, answer, username, password, reg_date, status, enroller_username, ibo, code, verify)
                        values('$fname', '$lname ', '$email', '$address','$zip', '$country', '$mobile', '$question', '$answer', '$uname', '$encpass', '$added_on', 0, '$enrl_uname', 0, '$code', '$verify')";
        $data_check = mysqli_query($con, $insert_data);
        $id=mysqli_insert_id($con);
        if($data_check){
            $rand = rand(999999, 111111);
            $a_id= "IA_".$rand."_".$id;
            mysqli_query($con,"update customer set academy_id = '$a_id' where cus_id = '$id'");
            $message = "Your verification code is $code";
            include('smtp/PHPMailerAutoload.php');
                $mail=new PHPMailer(true);
                $mail->isSMTP();
                $mail->Host="smtp.gmail.com";
                $mail->Port=587;
                $mail->SMTPSecure="tls";
                $mail->SMTPAuth=true;
                $mail->Username="iinvestorchannel@gmail.com";
                $mail->Password="qverwjfamgpanuus";
                $mail->SetFrom("iinvestorchannel@gmail.com");
                $mail->addAddress($email);
                $mail->IsHTML(true);
                $mail->Subject="Email Verification Code";
                $mail->Body=$message;
                $mail->SMTPOptions=array('ssl'=>array(
                    'verify_peer'=>false,
                    'verify_peer_name'=>false,
                    'allow_self_signed'=>false
                ));
            if($mail->send()){
                $info = "We've sent a verification code to your email - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                ?>
                <script>
                window.location.href='user-otp.php';
                </script>
                <?php
                exit();
            }else{
                $errors['otp-error'] = "Failed while sending code!";
            }
        }else{
            $errors['db-error'] = "Failed while inserting data into database!";
        }
    }

}
    //if user click verification code submit button
    if(isset($_POST['check'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
        $check_code = "SELECT * FROM customer WHERE code = $otp_code";
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $fetch_code = $fetch_data['code'];
            $email = $fetch_data['email'];
            $uname = $fetch_data['username'];
            $cusId = $fetch_data['cus_id'];
            $enroller_username = $fetch_data['enroller_username'];
            $namesql = mysqli_query($con, "select * from customer where username = '$enroller_username'");
            $namerow = mysqli_fetch_assoc($namesql);
            
            $_SESSION['enrl_username'] = $namerow['email'];
            $_SESSION['cus_id']= $cusId;
            $status = 'notverified';
            $update_otp = "UPDATE customer SET verify = '$status' WHERE code = $fetch_code";
            $update_res = mysqli_query($con, $update_otp);
            if($update_res){
                // $message = "Congratulations! $uname suscessfully registerd!";
                // include('smtp/PHPMailerAutoload.php');
                //     $mail=new PHPMailer(true);
                //     $mail->isSMTP();
                //     $mail->Host="smtp.gmail.com";
                //     $mail->Port=587;
                //     $mail->SMTPSecure="tls";
                //     $mail->SMTPAuth=true;
                //     $mail->Username="iinvestorchannel@gmail.com";
                //     $mail->Password="qverwjfamgpanuus";
                //     $mail->SetFrom("iinvestorchannel@gmail.com");
                //     $mail->addAddress($email);
                //     $mail->IsHTML(true);
                //     $mail->Subject="Email Verification Code";
                //     $mail->Body=$message;
                //     $mail->SMTPOptions=array('ssl'=>array(
                //         'verify_peer'=>false,
                //         'verify_peer_name'=>false,
                //         'allow_self_signed'=>false
                //     ));
                // if($mail->send()){
                //     $namesql = mysqli_query($con, "select * from customer where username = '$enroller_username'");
                //     $namerow = mysqli_fetch_assoc($namesql);
                //     $email =$namerow['email'];
                //     $message = "$uname Registerd by your uname";
                //         $mail=new PHPMailer(true);
                //         $mail->isSMTP();
                //         $mail->Host="smtp.gmail.com";
                //         $mail->Port=587;
                //         $mail->SMTPSecure="tls";
                //         $mail->SMTPAuth=true;
                //         $mail->Username="iinvestorchannel@gmail.com";
                //         $mail->Password="InvestorC@123";
                //         $mail->SetFrom("iinvestorchannel@gmail.com");
                //         $mail->addAddress($email);
                //         $mail->IsHTML(true);
                //         $mail->Subject="Email Verification Code";
                //         $mail->Body=$message;
                //         $mail->SMTPOptions=array('ssl'=>array(
                //             'verify_peer'=>false,
                //             'verify_peer_name'=>false,
                //             'allow_self_signed'=>false
                //         ));
                //     if($mail->send()){
                        
                        ?>
                        <script>
                        window.location.href='price_list.php';
                        </script>
                        <?php
                        exit();
                //     }else{
                //         $errors['otp-error'] = "Failed while sending email!";
                //     }
                // }else{
                //     $errors['otp-error'] = "Failed while sending email!";
                // }
            }else{
                $errors['otp-error'] = "Failed while updating code!";
            }
        }else{
            $errors['otp-error'] = "You've entered incorrect code!";
        }
    }

    //if user click login button
    if(isset($_POST['login'])){
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $check_username= "SELECT * FROM customer WHERE username = '$username'";
        $res = mysqli_query($con, $check_username);
        if(mysqli_num_rows($res) > 0){
            $fetch = mysqli_fetch_assoc($res);
            $fetch_pass = $fetch['password'];
            if(password_verify($password, $fetch_pass)){
                $_SESSION['username'] = $username;
                $status = $fetch['verify'];
                $active = $fetch['status'];
                if($status == 'verified'){
                    if($active == 1 ){
                        $_SESSION['USER_LOGIN']='yes';
                        $_SESSION['USER_ID']=$fetch['cus_id'];
                        $_SESSION['USER_NAME']=$fetch['username'];
                        $ibo = $fetch['ibo'];
                        if($ibo==1){
                            $_SESSION['IBO_LOGIN']='yes';
                            ?>
                            <script>
                            window.location.href='ibo/ibo.php';
                            </script>
                            <?php
                        }else{
                            $_SESSION['CUS_LOGIN']='yes';
                        ?>
                            <script>
                            window.location.href='customer/customer.php';
                            </script>
                        <?php
                        }
                    }else{
                        $errors['email'] = "Your Account Is Disabled";
                    }
                    
                    
                }else{
                    $info = "It's look like you haven't still verify your username - $username";
                    $_SESSION['info'] = $info;
                    ?>
                    <script>
                    window.location.href='user-otp.php';
                    </script>
                    <?php
                }
            }else{
                $errors['email'] = "Incorrect username or password!";
            }
        }else{
            $errors['email'] = "It's look like you're not yet a member!";
        }

       
    }
    

    //if user click continue button in forgot password form
    if(isset($_POST['check-email'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $check_email = "SELECT * FROM customer WHERE email='$email'";
        $run_sql = mysqli_query($con, $check_email);
        if(mysqli_num_rows($run_sql) > 0){
            $code = rand(999999, 111111);
            $insert_code = "UPDATE customer SET code = $code WHERE email = '$email'";
            $run_query =  mysqli_query($con, $insert_code);
            if($run_query){
                $message = "Your password reset code is $code";
                
                include('smtp/PHPMailerAutoload.php');
                $mail=new PHPMailer(true);
                $mail->isSMTP();
                $mail->Host="smtp.gmail.com";
                $mail->Port=587;
                $mail->SMTPSecure="tls";
                $mail->SMTPAuth=true;
                $mail->Username="iinvestorchannel@gmail.com";
                $mail->Password="qverwjfamgpanuus";
                $mail->SetFrom("iinvestorchannel@gmail.com");
                $mail->addAddress($email);
                $mail->IsHTML(true);
                $mail->Subject="Password Reset Code";
                $mail->Body=$message;
                $mail->SMTPOptions=array('ssl'=>array(
                    'verify_peer'=>false,
                    'verify_peer_name'=>false,
                    'allow_self_signed'=>false
                ));
                if($mail->send()){
                    $info = "We've sent a passwrod reset otp to your email - $email";
                    $_SESSION['info'] = $info;
                    $_SESSION['email'] = $email;
                    ?>
                    <script>
                    window.location.href='reset-code.php';
                    </script>
                    <?php
                    exit();
                }else{
                    $errors['otp-error'] = "Failed while sending code!";
                }
            }else{
                $errors['db-error'] = "Something went wrong!";
            }
        }else{
            $errors['email'] = "This email address does not exist!";
        }
    }

    //if user click check reset otp button
    if(isset($_POST['check-reset-otp'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
        $check_code = "SELECT * FROM customer WHERE code = $otp_code";
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $email = $fetch_data['email'];
            $_SESSION['email'] = $email;
            $info = "Please create a new password that you don't use on any other site.";
            $_SESSION['info'] = $info;
            ?>
            <script>
            window.location.href='new-password.php';
            </script>
            <?php
            exit();
        }else{
            $errors['otp-error'] = "You've entered incorrect code!";
        }
    }

    //if user click change password button
    if(isset($_POST['change-password'])){
        $_SESSION['info'] = "";
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
        if($password !== $cpassword){
            $errors['password'] = "Confirm password not matched!";
        }else{
            $code = 0;
            $email = $_SESSION['email']; //getting this email using session
            $encpass = password_hash($password, PASSWORD_BCRYPT);
            $update_pass = "UPDATE customer SET code = $code, password = '$encpass' WHERE email = '$email'";
            $run_query = mysqli_query($con, $update_pass);
            if($run_query){
                $info = "Your password changed. Now you can login with your new password.";
                $_SESSION['info'] = $info;
                ?>
                <script>
                window.location.href='password_changed.php';
                </script>
                <?php
            }else{
                $errors['db-error'] = "Failed to change your password!";
            }
        }
    }
    
   //login now button
    if(isset($_POST['login-now'])){
        ?>
        <script>
        window.location.href='login.php';
        </script>
        <?php
    }
?>