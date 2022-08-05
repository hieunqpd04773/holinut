<?php
    session_start();
    require 'database.php';
    $username1 = $_SESSION['username'];
    $sql = "SELECT * FROM khachhang WHERE username = '".$username1."'";
    $result = $db -> query($sql);
    $rs = $result->fetch();

    if(isset($_POST['update'])){
        $maKH=$_POST['maKH'];
        $tenKH=$_POST['tenKH'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $email=$_POST['emailKH'];
        $soDT=$_POST['soDT'];
        $diachiKH=$_POST['diachiKH'];
        $admin=$_POST['admin'];

        require 'database.php';
        $sql1= "UPDATE khachhang set tenKH='".$tenKH."',username='".$username."',password='".$password."',emailKH='".$email."',soDT='".$soDT."',diachiKH='".$diachiKH."', admin_KH='".$admin."' where maKH='".$maKH."'";
        $result1=$db ->exec($sql1);
        echo '<script language="javascript">';
        echo 'alert("Cập Nhật Thành Công")';
        echo '</script>';
        header('location: index.php');
    
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
      <div class="signup-show">
        <a class="login-exit" href="index.php" ><i class="fas fa-times"></i></a>
        <form action="" method="post" enctype="multipart/form-data">
          <h2>Cập nhật thông tin</h2>
          <input type="hidden" name="maKH" value="<?php echo $rs['maKH'];?>">
          <input type="hidden" name="admin" value="<?php echo $rs['admin_KH'];?>">
          <label for="">Họ và Tên</label><br>
          <input type="text" name="tenKH" value="<?php echo $rs['tenKH']?>"><br>
          <label for="">Username</label><br>
          <input type="text" name=username value="<?php echo $rs['username']?>"><br>
          <label for="">Mật khẩu</label><br>
          <input type="text" name="password" value="<?php echo $rs['password']?>"><br>
          <label for="">Email</label><br>
          <input type="email" name="emailKH" value="<?php echo $rs['emailKH']?>"/><br>
          <label for="">Số điện thoại</label><br>
          <input type="number" name="soDT" value="<?php echo $rs['soDT']?>"><br>
          <label for="">Địa chỉ</label><br>
          <input type="text" name="diachiKH"value="<?php echo $rs['diachiKH']?>" ><br>
          <button type="submit" name="update">Cập nhật</button><br>
      </form>
      </div>
</body>
</html>