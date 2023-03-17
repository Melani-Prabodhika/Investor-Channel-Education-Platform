<?php 
require ('header.php');

$sql="SELECT * FROM `course` ORDER BY `course`.`course_fee` DESC";
$res=mysqli_query($con,$sql);
$user_id=$_SESSION['cus_id'];
$enrl_uname=$_SESSION['enrl_username'];

if(isset($_POST['payment'])){
    $price = mysqli_real_escape_string($con,$_POST['price']);
    $course_id = mysqli_real_escape_string($con,$_POST['course_id']);
    $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
    $MERCHANT_KEY = "gtKFFx"; 
    $SALT = "wia56q6O";
    $hash_string = '';
    $PAYU_BASE_URL = "https://test.payu.in";
    $action = '';
    $posted = array();
    if(!empty($_POST)) {
        foreach($_POST as $key => $value) {    
        $posted[$key] = $value; 
        }
    }
    
    $userArr=mysqli_fetch_assoc(mysqli_query($con,"select * from customer where cus_id ='$user_id'"));
    $formError = 0;
    $posted['txnid']=$txnid;
    $posted['amount']=$price;
    $posted['firstname']=$enrl_uname;
    $posted['email']=$userArr['email'];
    $posted['phone']=$course_id;
    $posted['productinfo']=$user_id;
    $posted['key']=$MERCHANT_KEY ;
    $hash = '';
    $hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
    if(empty($posted['hash']) && sizeof($posted) > 0) {
        if(
                empty($posted['key'])
                || empty($posted['txnid'])
                || empty($posted['amount'])
                || empty($posted['firstname'])
                || empty($posted['email'])
                || empty($posted['phone'])
                || empty($posted['productinfo'])
                
        ) {
        $formError = 1;
        } else {    
        $hashVarsSeq = explode('|', $hashSequence);
        foreach($hashVarsSeq as $hash_var) {
            $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
            $hash_string .= '|';
        }
        $hash_string .= $SALT;
        $hash = strtolower(hash('sha512', $hash_string));
        $action = $PAYU_BASE_URL . '/_payment';
        }
    } elseif(!empty($posted['hash'])) {
        $hash = $posted['hash'];
        $action = $PAYU_BASE_URL . '/_payment';
    }


    $formHtml ='<form method="post" name="payuForm" id="payuForm" action="'.$action.'"><input type="hidden" name="key" value="'.$MERCHANT_KEY.'" /><input type="hidden" name="hash" value="'.$hash.'"/><input type="hidden" name="txnid" value="'.$posted['txnid'].'" /><input name="amount" type="hidden" value="'.$posted['amount'].'" /><input type="hidden" name="firstname" id="firstname" value="'.$posted['firstname'].'" /><input type="hidden" name="email" id="email" value="'.$posted['email'].'" /><input type="hidden" name="phone" value="'.$posted['phone'].'" /><textarea name="productinfo" style="display:none;">'.$posted['productinfo'].'</textarea><input type="hidden" name="surl" value="'.SITE_PATH.'payment_complete.php" /><input type="hidden" name="furl" value="'.SITE_PATH.'payment_fail.php"/><input type="submit" style="display:none;"/></form>';
    echo $formHtml;
    echo '<script>document.getElementById("payuForm").submit();</script>';
}
?>

<!-- END Nav Bar --> 

<style>
.pricing-table {
  max-width: 1600px; 
  margin: auto; 
  display: flex; 
  justify-content: center; 
  text-align: center; 
  flex-wrap: wrap;
}

.col {
  flex: 25%;
  padding: 15px;
  max-width: 320px;
  box-sizing: border-box;
}

.table {
  background: #d8c5856c;
  padding: 40px 20px;
  position: relative;
  overflow: hidden;
  box-shadow: 1px 1px 5px #000;
}

.table h4 {
  text-transform: uppercase;
  font-weight: 800;
  color: #000;
}

.table ul {
  margin: 0;
  padding: 0;
}

.table ul li {
  padding: 10px;
  list-style: none;
  font-size: 1rem;
  font-weight: 600;
  color: #00000090;
}

.price {
  font-size: 35px;
  margin-bottom: 20px;
  margin-top: 35px;
}

.price span {
  display: block;
  font-size: 16px;
  margin-top: 5px;
  color: #00000070;
  font-weight: 700;
}

.table button {
  text-decoration: none;
  color: #2c3e50;
  border: 2px solid rgba(184, 124, 11, 0.4);

  width: 150px;
  margin-top: 5px;
  margin-left: 5px;
  border-radius: 5px;
  text-transform: uppercase;
  font-size: 14px;
  transition: 0.5s linear;
  background: #d29052;
}

.table button:hover {
  background: #000000;
  color: #fff;
  border: 3px solid #fff;
}

.table:hover{
  background-color: #dfd5b4;
}

.pop {
  background: #d29052;
  color: #fff;
  transform: rotate(45deg);
  padding: 6px 60px;
  margin-left: 30px;
  position: absolute;
  top: 12px;
  right: -45px;
  font-weight: 600;
}
</style>

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
        <div class="pagenation_links"><a href="registration_form.html">Back</a><i> / </i>Select Course</div>
      </div>
      <div class="col-md-6"> </div>
    </div>
  </div>
</div>
<!-- END Pagenation -->

<!-- Start Price List  -->
<div class="pricing-table" style="margin-top: 70px; margin-bottom: 45px;">
  <?php 
   while($row=mysqli_fetch_assoc($res)){
    $populer = $row['populer'];
  ?>
  <form action="" method="post">
    <div class="col">
      <div class="table">
        <h4><?php echo $row['course_name']?></h4>
        <?php if($populer==1){ ?>
        <div class="pop">Popular</div>
        <?php } ?>
        <div class="price">
        <?php echo $row['course_fee']?>
        <span>Per Year</span>
        </div>
        <div>
        <input type="hidden" name="course_id" value="<?php echo $row['course_id']?>">
        <input type="hidden" name="price" value="<?php echo $row['course_fee']?>">
        </div>
        <ul>
          <li><?php echo $row['description']?></li>
        </ul>
        <button  name="payment" type="submit">Purchase Now</button>
      </div>
    </div>
  </form>
  <?php } ?>
</div>
<!-- End Price List --> 

<?php include "footer.php"; ?>