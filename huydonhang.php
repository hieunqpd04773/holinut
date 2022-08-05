<?php
    require 'database.php';
    if(isset($_GET['maHD'])){
        $maHD= $_GET['maHD'];
        $tinhTrang= "Đã hủy đơn";

        $sql= "UPDATE hoadon SET tinhTrang='".$tinhTrang."' WHERE maHD='$maHD'";
        $result= $db -> exec($sql);

        header("location: donhang.php");
    }
?>