<!DOCTYPE html>
<?php
    if(isset($_POST['dangky'])){
        $maKH=$_POST['maKH'];
        $tenKH=$_POST['tenKH'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $email=$_POST['emailKH'];
        $soDT=$_POST['soDT'];
        $diachiKH=$_POST['diachiKH'];
        $admin=$_POST['admin'];

        require 'database.php';
        $sql= "INSERT INTO khachhang VALUE ('','".$tenKH."','".$username."','".$password."','".$email."','".$soDT."','".$diachiKH."','".$admin."')";
        $result=$db ->exec($sql);

        header("location: danhsachkhachhang.php");
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="iframe.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h3>Thêm khách hàng mới</h3>
    <form action="" class="form-themmoi" method="post" enctype="multipart/form-data">
          <label for="">Họ và Tên</label>
          <input type="text" name="tenKH"><br>
          <label for="">Username</label>
          <input type="text" name=username><br>
          <label for="">Mật khẩu</label>
          <input type="password" name="password"><br>
          <label for="">Email</label>
          <input type="email" name="emailKH"><br>
          <label for="">Số điện thoại</label>
          <input type="number" name="soDT"><br>
          <label for="">Địa chỉ</label>
          <input type="text" name="diachiKH"><br>
          <label for="">ADMIN?</label>
          <select name="admin" id="">
              <option selected value="0">Khách Hàng</option>
              <option value="1">Admin</option>
          </select><br>
          <button type="submit" name="dangky">Thêm</button><br>
      </form>
</body>
</html>