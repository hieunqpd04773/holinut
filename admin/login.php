<?php
 $mess="";
    if(isset($_POST['login'])){
    

    if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST)){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM khachhang WHERE username = '".$username."' AND password = '".$password."'";
        $result = $db -> query($sql);
        $rs = $result ->fetch(PDO::FETCH_ASSOC);

        if($rs && $rs['admin_KH'] == 1){
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $lifetime=60*60*24*365;
            session_set_cookie_params($lifetime,'/');
            session_start();
            require 'database.php';
            
            
            header('location: admin.php');
        }
        elseif($rs && $rs['admin_KH'] == 0){
            $mess="Bạn đã đăng nhập bằng tài khoản khách hàng!";
           
        }
        else{
            $mess="Sai tài khoản hoặc mật khẩu";
            
            
        }
    }
}