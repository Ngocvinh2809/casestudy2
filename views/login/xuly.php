<?php

// Nếu không phải là sự kiện đăng ký thì không xử lý
if (!isset($_POST['name'])) {
    die('');
}

//Nhúng file kết nối với database
include "db.php";

//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');

//Lấy dữ liệu từ file dangky.php
$name   = addslashes($_POST['name']);
$email      = addslashes($_POST['email']);
$password   = addslashes($_POST['password']);
//Kiểm tra người dùng đã nhập liệu đầy đủ chưa
if (!$name  || !$email || !$password) {
    echo "Vui lòng nhập đầy đủ thông tin";
    exit;
}
// Mã khóa mật khẩu
$password = md5($password);

//Kiểm tra tên đăng nhập này đã có người dùng chưa
if (($sql = ("SELECT 'name' FROM user WHERE name='$name'")) > 0) {
    echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác";
    exit;
}


//Kiểm tra email đã có người dùng chưa
if (($sql("SELECT email FROM user WHERE email='$email'")) > 0) {
    echo "Email này đã có người dùng. Vui lòng chọn Email khác";
    exit;
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_REQUEST['name'];
    $email = $_REQUEST['e$email'];
    $password = $_REQUEST['$password'];
    //Lưu thông tin thành viên vào bảng
    $sql = "INSERT INTO `user` VALUES ('','$name', '$email', '$password');";
    $conn->exec($sql);
    $stmt = $conn->query($sql);
}
//Thông báo quá trình lưu
if ($sql)
    echo "Quá trình đăng ký thành công. <a href='login/formLogin.php'>Về trang chủ</a>";
else
    echo "Có lỗi xảy ra trong quá trình đăng ký. <a href=''>Thử lại</a>";
