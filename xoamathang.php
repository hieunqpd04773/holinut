<?php
        session_start();
        $maSP = $_GET['id'];
        unset($_SESSION['cart'][$maSP]);
        $_SESSION['slgiohang'] -=1;
        header('location:giohang.php');
    ?>