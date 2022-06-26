<?php
include('config/constants.php');
include('config/db_conn.php');
$check_email_qurey = "SELECT COUNT(email) as count FROM users WHERE email='". $_POST['email']."' AND is_deleted='N' AND password ='".MD5($_POST['password'])."'";
$result = $conn->query($check_email_qurey);
$num_rows = mysqli_fetch_assoc($result);

if($num_rows['count'] == 0){
    $_SESSION["flash_type"] = "danger";
    $_SESSION["flash_message"] = "Invalid Id/Password";
    $_SESSION["email"] =  $_POST['email'];

    header('Location: index.php');
}else{
    $get_users_details_qurey = "SELECT  first_name, last_name, email, user_image FROM users WHERE email='". $_POST['email']."' AND is_deleted='N' AND password ='".MD5($_POST['password'])."'";
    $result = $conn->query($get_users_details_qurey);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);
        $_SESSION["first_name"] =  $row['first_name'];
        $_SESSION["last_name"] =  $row['last_name'];
        $_SESSION["email"] =  $row['email'];
        $_SESSION["user_image"] =  $row['user_image'];
        header('Location: dashboard.php');
    }else{
        $_SESSION["flash_type"] = "danger";
        $_SESSION["flash_message"] = "Something goes to wrong.Please try again.";
        $_SESSION["email"] =  $_POST['email'];

        header('Location: index.php');
    }
}
?>