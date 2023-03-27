<?php
    $conn = mysqli_connect('localhost', 'root', '', 'btth01_cse485');
   // $id=$_GET['id'];
    if (!$conn) {
        die('Kết nối tới Server lỗi');
    }
    $password_input =$_POST["txtPass"] ;
    $username_input =$_POST["txtUser"] ;
   

<<<<<<< HEAD
    $username =$_POST["txtUser"] ;
    $password =$_POST["txtPass"] ;

    $pass = "SELECT username FROM user WHERE usename  = $username";
    if($pass !=$password)
        die("Thông tin đăng nhập hoặc mật khẩu không chính xác .");

?>

=======
    $sql = "SELECT password FROM user WHERE username  = '$username_input'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if($row['password'] !=$password_input)
    die("Thông tin đăng nhập hoặc mật khẩu chính xác .");
    else {
        header("Location:admin/");
    }
?>
>>>>>>> b10fb39e773e073bd5079811acefe4d5addaa2f1
