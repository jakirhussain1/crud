<?php
require_once 'dbcon.php';
if(isset($_SESSION['email'])){
    header('location: admin.php');
}
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $error = [];
    if(empty($email)){
        $error['email'] = "Email field is required";
    }
    if(empty($password)){
        $error['password'] = "Password field is required";
    }
        $email_check = mysqli_query($data,"SELECT `status`,`password`, `email` FROM `nabida` WHERE `email`='$email'");

    if(empty($error)){
       if(mysqli_num_rows($email_check)==1){
           $user_info = mysqli_fetch_assoc($email_check);
           if($user_info['password']==$password){
               if($user_info['status']==1){
                   $_SESSION['email'] = $email;
                   header('location: admin.php');
               }else{
                   $status_error = "Sorry! your account has been banned by admin";
               }
           }else{
               $login_error = "Email or password is invalid";
           }

       }else{
           $login_error = "Email or password is invalid";
       }
        
    }
}


?>