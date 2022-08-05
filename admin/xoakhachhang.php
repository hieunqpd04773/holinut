<?php
    if(isset($_GET['id'])){
        $id=$_GET['id'];

        require 'database.php';
        $sql= "delete from khachhang where maKH='".$id."'";
        $result=$db-> query($sql);

        header("location: danhsachkhachhang.php");
        $result->close();
    }
?>
