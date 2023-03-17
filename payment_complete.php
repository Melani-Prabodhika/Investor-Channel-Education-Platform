<?php
require('db.php');
require('functions.php');
echo '<b>Transaction In Process, Please do not reload</b>';

$payment_mode=$_POST['mode'];
$pay_id=$_POST['mihpayid'];
$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];
$phone=$_POST["phone"];
$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$MERCHANT_KEY = "gtKFFx"; 
$SALT = "wia56q6O";
$udf5='';
$keyString 	= $MERCHANT_KEY .'|'.$txnid.'|'.$amount.'|'.$productinfo.'|'.$firstname.'|'.$email.'|||||'.$udf5.'|||||';
$keyArray 	= explode("|",$keyString);
$reverseKeyArray = array_reverse($keyArray);
$reverseKeyString =	implode("|",$reverseKeyArray);
$saltString     = $SALT.'|'.$status.'|'.$reverseKeyString;
$sentHashString = strtolower(hash('sha512', $saltString));
date_default_timezone_set("Asia/Colombo");
$added_on=date('Y-m-d');

if($sentHashString != $posted_hash){
	?>
	<script>
		window.location.href='payment_fail.php';
	</script>
	<?php	
}else{
	$insert = mysqli_query($con,"insert into `payment`(course_id,cus_id,payment_type,t_amount,payment_date,txnid,mihpayid,status) values('$phone','$productinfo','online','$amount','$added_on','$txnid','$pay_id','$status')");
	$insert_id = mysqli_insert_id($con);
    $update_otp = "UPDATE customer SET code = 0, verify = 'verified' WHERE cus_id='$productinfo'";
    $update_res = mysqli_query($con, $update_otp);
	mysqli_query($con,"update customer set payment_id='$insert_id' where cus_id='$productinfo'");
	$userArr=mysqli_fetch_assoc(mysqli_query($con,"select * from customer where cus_id='$productinfo'"));
	$cus_name=$userArr['f_name'];
	$cus_lname=$userArr['l_name'];
	$cus_uname=$userArr['username'];
    $tel_no = $userArr['tel_no'];

    $iboArr=mysqli_fetch_assoc(mysqli_query($con,"select * from customer where email='$firstname'"));
    $ibo_name=$iboArr['f_name'];
	$ibo_uname=$iboArr['username'];
    sentMailCustomer($con,$cus_name,$cus_lname,$cus_uname,$email,$tel_no,$ibo_name,$ibo_uname,$firstname);		
}

?>