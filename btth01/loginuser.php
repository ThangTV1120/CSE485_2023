<?php
    $conn = mysqli_connect('localhost', 'root', '', 'btth01_cse485');
   // $id=$_GET['id'];
    if (!$conn) {
        die('Kết nối tới Server lỗi');
    }
    $password_input =$_POST["txtPass"] ;
    $username_input =$_POST["txtUser"] ;
   

    $sql = "SELECT password FROM user WHERE username  = '$username_input'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if($row['password'] !=$password_input)
    die("Thông tin đăng nhập hoặc mật khẩu chính xác .");
    else {
        header("Location:admin/");
    }
?>