<?php

require_once '../Data/AccountDAOImpl.php';
require_once '../Model/Account.php';
require_once '../Model/Database.php';

$accountDAOImpl = new AccountDAOImpl();

$account = new Account("gv01", "gv01@123", "gv-01");
$account1 = new Account("sv01", "sv01@123", "sv-01");


$result = $accountDAOImpl->createAccount($account);

$result1 = $accountDAOImpl->createAccount($account1);
//$result = $accountDAOImpl->getAccountByUsernameAndPassword($account);


if ($result === true) {
    // Chuyển hướng đến trang PageManager
    header('Location: ../View/Manager/PageManager.php');
    exit;
} else {
    // Xử lý khi result trả về false
    // ...
}

 

/*
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy giá trị nhập liệu từ form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Kiểm tra thông tin đăng nhập
    if ($username === 'admin' && $password === 'password') {
        // Đăng nhập thành công, chuyển hướng đến trang chính
        header('Location: main.php');
        exit;
    } else {
        // Sai tên đăng nhập hoặc mật khẩu, hiển thị thông báo lỗi
        $error = "Tên đăng nhập hoặc mật khẩu không đúng.";
    }
}
*/






?>