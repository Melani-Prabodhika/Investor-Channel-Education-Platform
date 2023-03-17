<?php
if (isset($_POST['uname']) && isset($_POST['password'])) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        header("Location: library_login.php?error=Username is required");
        exit();
    }else if(empty($pass)){
        header("Location: library_login.php?error=password is required");
        exit();
    }else{
        echo "Valid input";
    }

}else{
    header("Location: library_login.php");
    exit();
}