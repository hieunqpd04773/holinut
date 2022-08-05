<!DOCTYPE html>
<?php
    session_start();
    require 'database.php';
    require 'login.php';
    $sql="select * from khachhang";
    $result=$db->query($sql);
    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN - HoliNuts</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="icon" href="../img/holinuts.png" type="image\x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    </head>
<body>
    <?php
        if(!isset($_SESSION['username'])){
            
    ?>
    <div class="bg-login">
        <div class="login"> 
            <form action="" method="post" enctype="multipart/form-data">
            <h2>Đăng nhập</h2><br>
            <span class="war"><?php global $mess; echo  $mess; ?></span>
            <label for="">Tên tài khoản hoặc email</label><br>
            <input type="text" name="username" id="" required><br>
            <label for="">Mật khẩu</label><br>
            <input type="password" name="password" required><br>
            <p>Chưa có tài khoản? <a href="javascript:void(0);" onclick="mySignup()">Đăng kí</a><br></p>
            <button type="submit" name="login">Đăng Nhập</button><br>
        </form>
        </div>
    </div>
    <?php } else{
        
        ?>
    <div class="wrapper">
        <aside class="main-menu">
            <header>
                <div class="header-content">
                    <div class="img-logo">
                        <img src="../img/logo-holinut-400.png" alt="">
                    </div>
                </div>
            </header>
            <h2>ADMIN</h2>
            <ul>
                <li><a href="danhsachsanpham.php" target="page">Danh sách sản phẩm</a></li>
                <li><a href="themmoisanpham.php" target="page">Thêm mới sản phẩm</a></li>
                <li><a href="danhsachkhachhang.php" target="page">Tài khoản khách hàng</a></li>
                <li><a href="danhsachdonhang.php" target="page">Quản lý đơn hàng</a></li>
            </ul>
        </aside>
        <main>
            <header>
                <div class="action">
                        <a href="../index.php"target="_blank"><i class="fas fa-home"></i>Vào Website</a>
                        <a href="logout.php" name="logout"><i class="fas fa-sign-out-alt"></i>Đăng Xuất</a>
                </div>
            </header>
            <section class="content">
                <iframe src="danhsachsanpham.php" cellspacing="0"  scolling="none" style="overflow:hidden; width: 100%; height:900px; " name="page" frameborder="0" border=1px;></iframe>
            </section>
        </main>
    </div>
    <?php }?>
</body>
</html>