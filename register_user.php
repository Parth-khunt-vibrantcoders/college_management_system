<?php
include('config/constants.php');
include('config/db_conn.php');

$check_email_qurey = "SELECT COUNT(email) as count FROM users WHERE email='". $_POST['email']."' AND is_deleted='N'";
$result = $conn->query($check_email_qurey);
$num_rows = mysqli_fetch_assoc($result);

if($num_rows['count'] == 0){
    $email = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $password = $_POST['password'];

    $regsiter_user_qurey = "INSERT INTO users (first_name, last_name, email, password, user_image, is_deleted, created_at, updated_at)
                        VALUES ( '".$first_name."', '".$last_name."', '".$email."', '".MD5($password)."', '".NULL."', 'N', '".date('Y-m-d H:i:s')."', '".date('Y-m-d H:i:s')."')";
   if ($conn->query($regsiter_user_qurey) === TRUE) {
        $_SESSION["flash_type"] = "success";
        $_SESSION["flash_message"] = "Your account successfully registered";
   }else{
        $_SESSION["flash_type"] = "danger";
        $_SESSION["flash_message"] = "Something goes to wrong.Please try again.";
   }
   header('Location: index.php');
}else{
    $_SESSION["flash_type"] = "warning";
    $_SESSION["flash_message"] = "Email address already registered";
    $_SESSION["email"] =  $_POST['email'];
    $_SESSION["first_name"] =  $_POST['first_name'];
    $_SESSION["last_name"] =  $_POST['last_name'];
    header('Location: register.php');
}
?>