<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'btth01_cse485');
    if (!$conn) {
        die('Kết nối tới Server lỗi');
    }
if(isset($_POST['btt_update'])){
    $catId=$_POST['txtCatId'];
    $catName=$_POST['txtCatName'];
    
    $sql = "UPDATE baiviet SET tieude='$catName' WHERE ma_bviet=$catId ";
    $result = mysqli_query($conn, $sql);// thuc thi truy van
    if($result){
        header("Location:article.php");
    }
}
if(isset($_POST['btt_add'])){
     $catName=$_POST["txtCatName"];
     $cout="SELECT count(baiviet.ma_bviet) FROM tacgia";
    $result = mysqli_query($conn, $cout);
    $r=mysqli_fetch_assoc($result);
    $rr=$r['count(baiviet.ma_bviet)']+1;
    //echo $rr;
     $sql = "INSERT INTO baivet(tieude, tieude)VALUES($rr,'$catName')";
     if(mysqli_query($conn,$sql)){
        header("Location:article.php");
     }
     else echo("Loi");
}
?>