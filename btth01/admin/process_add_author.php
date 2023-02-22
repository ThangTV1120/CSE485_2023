<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'btth01_cse485');
    if (!$conn) {
        die('Kết nối tới Server lỗi');
    }
if(isset($_POST['btt_update'])){
    $catId=$_POST['txtCatId'];
    $catName=$_POST['txtCatName'];
    
    $sql = "UPDATE tacgia SET ten_tgia='$catName' WHERE ma_ttgia=$catId ";
    $result = mysqli_query($conn, $sql);// thuc thi truy van
    if($result){
        header("Location:author.php");
    }
}
if(isset($_POST['btt_add'])){
     $catName=$_POST["txtCatName"];
     $cout="SELECT count(tacgia.ma_ttgia) FROM tacgia";
    $result = mysqli_query($conn, $cout);
    $r=mysqli_fetch_assoc($result);
    $rr=$r['count(tacgia.ma_tgia)']+1;
    //echo $rr;
     $sql = "INSERT INTO tacgia(ma_tgia,ten_tgia)VALUES($rr,'$catName')";
     if(mysqli_query($conn,$sql)){
        header("Location:author.php");
     }
     else echo("Loi");
}
?>