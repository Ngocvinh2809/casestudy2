<?php
include 'login/formLogin.php';

 session_start();
 if(isset($_SESSION['username'])){
    header('Location:index.php?controller=user&action=index');
 }
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username == 'admin' && $password == 'admin'){
        $_SESSION['username'] = $username;
        header('Location:index.php?controller=user&action=index');
    } else{
        echo"tên đăng nhập hoặc mật khẩu ko đúng";
    }

}


?>