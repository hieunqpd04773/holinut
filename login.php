<?php
    if(isset($_POST['login'])){
    

    require 'database.php';

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

            header('location: admin/admin.php');
        }
        elseif($rs && $rs['admin_KH'] == 0){
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $lifetime=60*60*24*365;
            session_set_cookie_params($lifetime,'/');
            session_start();
            
            $_SESSION['maKH']= $rs['maKH'];
            header('location: index.php');
            
        }
        else{
            
            echo '<script language="javascript">';
            echo 'alert("Sai Username hoặc Mật Khẩu")';
            echo '</script>';

            
            
        }
    }
}
if(isset($_POST['dangky'])){
    $tenKH=$_POST['tenKH'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['emailKH'];
    $soDT=$_POST['soDT'];
    $diachiKH=$_POST['diachiKH'];

    require 'database.php';
    $sql= "INSERT INTO khachhang VALUE ('','".$tenKH."','".$username."','".$password."','".$email."','".$soDT."','".$diachiKH."','')";
    $result=$db ->exec($sql);
    echo '<script language="javascript">';
    echo 'alert("Đăng Ký Thành Công")';
    echo '</script>';

  }
if (isset($_POST['logout'])){
    session_start();
    session_destroy();
    header('location: index.php');
}

require 'database.php';
if(isset($_POST['id'])){
$id=$_GET['id'];
$sql1="SELECT * FROM khachhang where maKH='".$id."";
$result1=$db->query($sql1);
$rs=$result1->fetch();
if(isset($_POST['update'])){
    $tenKH=$_POST['tenKH'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['emailKH'];
    $soDT=$_POST['soDT'];
    $diachiKH=$_POST['diachiKH'];

    
    $sql= "UPDATE khachhang set tenKH='".$tenKH."',username='".$username."',password='".$password."',email='".$email."',soDT='".$soDT."',diachiKH='".$diachiKH."'where maKH='17'";
    $result=$db ->exec($sql);
    echo '<script language="javascript">';
    echo 'alert("Cập Nhật Thành Công")';
    echo '</script>';

}
}
?>
