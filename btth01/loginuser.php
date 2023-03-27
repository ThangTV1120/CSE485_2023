<?php
    $conn = mysqli_connect('localhost', 'root', '', 'btth01_cse485');
    $id=$_GET['id'];
    if (!$conn) {
        die('Kết nối tới Server lỗi');
    }

    $username =$_POST["txtUser"] ;
    $password =$_POST["txtPass"] ;

    $pass = "SELECT username FROM user WHERE usename  = $username";
    if($pass !=$password)
        die("Thông tin đăng nhập hoặc mật khẩu không chính xác .");

?>

