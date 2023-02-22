<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'btth01_cse485');
    if (!$conn) {
        die('Kết nối tới Server lỗi');
    }
if(isset($_POST['btt_update'])){
    $catId=$_POST['txtCatId'];
    $catName=$_POST['txtCatName'];
    
    $sql = "UPDATE theloai SET ten_tloai='$catName' WHERE ma_tloai=$catId ";
    $result = mysqli_query($conn, $sql);// thuc thi truy van
    if($result){
        header("Location:category.php");
    }
}
if(isset($_POST['btt_add'])){
     $catName=$_POST["txtCatName"];
     $cout="SELECT count(theloai.ma_tloai) FROM theloai";
    $result = mysqli_query($conn, $cout);
    $r=mysqli_fetch_assoc($result);
    $rr=$r['count(theloai.ma_tloai)']+1;
    //echo $rr;
     $sql = "INSERT INTO theloai(ma_tloai,ten_tloai)VALUES($rr,'$catName')";
     if(mysqli_query($conn,$sql)){
        header("Location:category.php");
     }
     else echo("Loi");
}
?>