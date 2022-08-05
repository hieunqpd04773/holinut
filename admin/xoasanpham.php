<?php
if (isset($_GET['id'])){
    $id=$_GET['id'];

    require 'database.php';
    $sql = "delete from sanpham where sanpham_ID='".$id."'";
    $result=$db-> query($sql);

    header("location: danhsachsanpham.php");
    $result-> close();
}
?>