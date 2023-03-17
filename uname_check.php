<?php   
require ('db.php');
if(isset($_POST["user_name"]))
{
 $username = mysqli_real_escape_string($con, $_POST["user_name"]);
 $query = "SELECT * FROM customer WHERE username = '".$username."'";
 $result = mysqli_query($con, $query);
 echo mysqli_num_rows($result);
}
?>